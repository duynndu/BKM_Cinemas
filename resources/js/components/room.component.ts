import { RoomService } from "@/services/room.service";
import Alpine from "alpinejs";
import { domToBlob, redirect } from "@/utils/common";
import $ from "jquery";
import "../jquery-plugin/seatmanager.plugin";
import { IRoom } from "@/types/room.interface";
import * as yup from 'yup';
import { ISeatType } from "@/types/seat-type.interface";
import { ISeat } from "@/types/seat.interface";

const roomSchema = yup.object().shape({
  room_name: yup.string().required('Tên phòng là bắt buộc'),
  col_count: yup.number()
    .typeError('Số cột phải là một số và không được để trống')
    .min(1, 'Số cột phải lớn hơn hoặc bằng 1'),
  row_count: yup.number()
    .typeError('Số cột phải là một số và không được để trống')
    .min(1, 'Số hàng phải lớn hơn hoặc bằng 1'),
  base_price: yup.number().min(0, 'Giá cơ bản phải lớn hơn hoặc bằng 0').required('Giá cơ bản là bắt buộc'),
});

Alpine.data('RoomComponent', (roomId?: number) => ({
  errors: {} as Record<string, string>,
  formData: {
    id: null as any,
    room_name: '',
    col_count: 11,
    row_count: 10,
    base_price: 0,
    seats: null as ISeat[] | null,
  } as IRoom,
  seatTable: null as JQuery<HTMLElement> | null,
  showModal: false,
  seatLayouts: null as any[] | null,
  seatTypes: [] as ISeatType[],
  async init() {
    this.seatTypes = await RoomService.getSeatTypesKeyByCode();
    this.seatLayouts = await RoomService.getSeatLayouts();
    if (roomId) {
      await this.getRoomById(roomId);
    }
    this.renderSeatLayout();
  },
  async onSubmit() {
    try {
      await roomSchema.validate(this.formData, { abortEarly: false });
    } catch (error: any) {
      if (error instanceof yup.ValidationError) {
        const { inner } = error;
        inner.forEach((err: any) => {
          this.errors[err.path] = err.message;
        });
      }
      return;
    }
    const formData = new FormData();
    formData.set('room_name', this.formData.room_name);
    formData.set('col_count', this.formData.col_count.toString());
    formData.set('row_count', this.formData.row_count.toString());
    formData.set('base_price', this.formData.base_price.toString());
    formData.set('seats', JSON.stringify(this.formData.seats));
    if (this.seatTable) {
      formData.set('image', await domToBlob(this.seatTable[0]));
    }
    try {
      if (roomId) {
        await RoomService.putRoom(roomId, formData);
      } else {
        await RoomService.postRoom(formData);
      }
      toastr.success('Thao tác thành công');
      setTimeout(() => {
        redirect().route('admin.rooms.index');
      }, 500);
    } catch (error: any) {
      console.error(error);
      toastr.error(error.message);
    }
  },
  async getRoomById(roomId: number) {
    const room = await RoomService.getRoom(roomId);
    if (room) {
      this.formData = { ...room };
    }
  },
  toggleModal() {
    this.showModal = !this.showModal;
  },
  selectLayout(seatLayout: any) {
    this.formData.id = seatLayout.id;
    this.formData.col_count = seatLayout.col_count;
    this.formData.row_count = seatLayout.row_count;
    this.formData.seats = seatLayout.seats;
    this.renderSeatLayout();
    setTimeout(() => {
      this.showModal = false;
    }, 100);
  },
  renderSeatLayout() {
    $("#seatingArea").seatmanager({
      col_count: this.formData.col_count,
      row_count: this.formData.row_count,
      seats: this.formData.seats,
      seat_types: this.seatTypes,
      base_price: this.formData.base_price,
    }, (data: any) => {
      this.formData.seats = data.seats;
      this.seatTable = data.seatTable;
      if (!isNaN(data.col_count)) {
        this.formData.col_count = data.col_count;
      }
      if (!isNaN(data.row_count)) {
        this.formData.row_count = data.row_count;
      }
    });
  }
}));