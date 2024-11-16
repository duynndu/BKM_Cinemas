import Alpine from "alpinejs";
import $ from "jquery";
import "../jquery-plugin/seat-view.plugin";
import { ISeatType } from "@/types/seat-type.interface";
import { ISeat } from "@/types/seat.interface";
import { IShowtime } from "@/types/showtime.interface";
import { showtimeService } from "@/services/showtime.service";
import { IFoodType } from "@/types/food-type.interface";
import { foodService } from "@/services/food.service";
import { price } from "@/utils/common";
import { IMovie } from "@/types/movie.interface";
import moment from "moment";
import { ICinema } from "@/types/cinema.interface";
import { authService } from "@/services/auth.service";
import { IUser } from "@/types/user.interface";
import { IRoom } from "@/types/room.interface";
import { SEAT_STATUS } from "@/define/seat.define";

Alpine.data('SeatViewComponent', (showtimeId?: string) => ({
  errors: {} as Record<string, string>,
  seatTable: null as JQuery<HTMLElement> | null,
  showModal: false,
  seatLayouts: null as any[] | null,
  seatTypes: [] as ISeatType[],
  showtimeDetail: null as IShowtime | null,
  foodTypes: [] as IFoodType[],
  seatsSelected: [] as ISeat[],
  totalPriceSeats: 0,
  totalPriceFoods: 0,
  totalPrice: 0,
  price: price,
  movie: null as IMovie | null,
  cinema: null as ICinema | null,
  room: null as IRoom | null,
  moment: moment,
  seatErrors: {
    typeError: false,
    quantityError: false,
    slotError: false,
  },
  user: null as IUser | null,

  async init() {
    this.user = await authService.getCurrentUser();
    localStorage.setItem('currentUser', JSON.stringify(this.user));
    showtimeId = "1";
    await this.getShowtimeDetailById(showtimeId);
    this.renderSeatLayout();
    await this.getFoodTypes();
    this.addEventListeners();
  },
  async getShowtimeDetailById(showtimeId?: string) {
    if (showtimeId) {
      this.showtimeDetail = await showtimeService.getShowtimeDetailById(showtimeId);
      this.seatTypes = this.showtimeDetail?.room?.seat_types ?? [];
      this.movie = this.showtimeDetail.movie ?? null;
      this.cinema = this.showtimeDetail.cinema ?? null;
      this.room = this.showtimeDetail.room ?? null;
    }
  },
  toggleModal() {
    this.showModal = !this.showModal;
  },
  async getFoodTypes() {
    this.foodTypes = await foodService.getFoodTypes();
    this.foodTypes.map(foodType => {
      foodType.foods.map(food => {
        food.quantity = 0;
      });
    });
  },
  async submit() {
    if (this.seatErrors.slotError) {
      alert('Vui lòng không chừa 1 ghế trống bên trái hoặc bên phải của các ghế bạn đã chọn.');
    }
  },
  renderSeatLayout() {
    if (this.room) {
      $("#seatingArea").seatview({
        col_count: this.room.col_count,
        row_count: this.room.row_count,
        seats: this.room.seats,
        seat_types: this.seatTypes,
        base_price: this.room.base_price,
      }, ({ seatsSelected, seatErrors, seat }: { seatsSelected: ISeat[], seatErrors: any, seat: ISeat }) => {
        this.seatErrors = seatErrors;
        showtimeService.bookSeat('1', seat.seat_number);

        this.calculateTotalPrice();
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
    window.Echo.join(`showtime.1`)
      .here((users: any) => {
        console.log("Người dùng hiện tại:", users);
        this.setSeatsSelected();
      })
      .joining((user: any) => {
        console.log("Người dùng đã tham gia:", user);
      })
      .leaving((user: any) => {
        console.log("Người dùng đã rời:", user);
      }).listen('BookSeat', (e: { showtimeId: string, seat: ISeat }) => {
        console.log(e);
        //@ts-ignore
        this.room.seats = this.room?.seats.map(seat => {
          if (seat.seat_number === e.seat.seat_number) {
            return e.seat;
          }
          return seat;
        });
        this.setSeatsSelected();
        this.renderSeatLayout();
      });
  },
  setSeatsSelected() {
    const seatsSelected = this.room?.seats?.filter(seat => seat.user_id == this.user?.id && seat.status == SEAT_STATUS.BOOKING) ?? [];
    this.seatsSelected = seatsSelected;
  },
  calculateTotalPrice() {
    this.totalPriceSeats = this.seatsSelected.reduce((total, seat) => {
      return total + Number(seat.price);
    }, 0);
    this.totalPriceFoods = this.foodTypes.reduce((total, foodType) => {
      return total + foodType.foods.reduce((sum, food) => sum + (Number(food.price) * Number(food.quantity)), 0);
    }, 0);
  }
}));
