import { RoomService } from "@/services/room.service";
import Alpine from "alpinejs";
import { domToBlob, redirect } from "@/utils/common";

Alpine.data('SeatLayout', (seatLayoutId?: number) => ({
  formData: {
    id: null as any,
    name: 'Test',
    col_count: 11,
    row_count: 10,
    seats: [] as {
      seat_number: any,
      seat_type: any,
      seat_status: any,
      slot: any,
      visible: any,
      order: any,
    }[],
  },
  seatTable: null as JQuery<HTMLElement> | null,
  showModal: false,
  seatLayouts: null as any[] | null,
  async init() {
    this.seatLayouts = await RoomService.getSeatLayouts();
    this.getSeatLayoutById();
    this.renderSeatLayout();
    if (seatLayoutId) {
      this.formData.id = seatLayoutId;
    }
  },
  async getSeatLayoutById() {
    const seatLayout = this.seatLayouts?.find((seatLayout: any) => seatLayout.id === seatLayoutId);
    if (seatLayout) {
      this.formData = { ...seatLayout } as any;
    }
  },
  async onSubmit() {
    const formData = new FormData();
    formData.set('name', this.formData.name);
    formData.set('col_count', this.formData.col_count.toString());
    formData.set('row_count', this.formData.row_count.toString());
    formData.set('seats', JSON.stringify(this.formData.seats));
    if (this.seatTable) {
      formData.set('image', await domToBlob(this.seatTable[0]));
    }
    try {
      if (seatLayoutId) {
        RoomService.putSeatLayout(seatLayoutId, formData).then((response) => {
          console.log('update success');
        });
      } else {
        RoomService.postSeatLayout(formData).then((response) => {
          console.log('add success');
        });
      }
      redirect().route('seat-layouts.index');
    } catch (error) {
      console.log(error);
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
    }, (data: any) => {
      this.formData.seats = data.seats;
      this.seatTable = data.seatTable;
    });
  },
}));