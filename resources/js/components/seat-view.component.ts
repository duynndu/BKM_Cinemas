import Alpine from "alpinejs";
import $ from "jquery";
import "../jquery-plugin/seat-view.plugin";
import { ISeatType } from "@/types/seat-type.interface";
import { ISeat } from "@/types/seat.interface";
import { IShowtime } from "@/types/showtime.interface";
import { showtimeService } from "@/services/showtime.service";


Alpine.data('SeatViewComponent', (showtimeId?: string) => ({
  errors: {} as Record<string, string>,
  seatTable: null as JQuery<HTMLElement> | null,
  showModal: false,
  seatLayouts: null as any[] | null,
  seatTypes: [] as ISeatType[],
  showtimeDetail: null as IShowtime | null,

  async init() {
    showtimeId = "63";
    await this.getShowtimeDetailById(showtimeId);
    this.renderSeatLayout();
    this.addEventListeners();
  },
  async getShowtimeDetailById(showtimeId?: string) {
    if (showtimeId) {
      this.showtimeDetail = await showtimeService.getShowtimeDetailById(showtimeId);
      this.seatTypes = this.showtimeDetail?.room?.seat_types ?? [];
    }
  },
  toggleModal() {
    this.showModal = !this.showModal;
  },

  renderSeatLayout() {
    const room = this.showtimeDetail?.room;
    if (room) {
      $("#seatingArea").seatview({
        col_count: room.col_count,
        row_count: room.row_count,
        seats: room.seats,
        seat_types: this.seatTypes,
        base_price: room.base_price,
      }, (seats: ISeat[]) => {
        console.log(seats);
      });
    }
  },
  addEventListeners() {
    const isLogin = true;
    if (!isLogin) {
      $("#seatingArea").addClass("event-none");
      $("#login").removeClass("tw-hidden");
      $("#combo").addClass("tw-hidden");
    } else {
      $("#seatingArea").removeClass("event-none");
      $("#login").addClass("tw-hidden");
      $("#combo").removeClass("tw-hidden");
    }
    $("#seatingArea").on("click", (e) => {
      if (!isLogin) {
        e.stopPropagation();
        e.preventDefault();
        $("#tab-combo").toggleClass("slide");
        return false;
      }
    });
  }
}));