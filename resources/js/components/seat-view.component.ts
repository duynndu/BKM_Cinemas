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
import { IFood } from "@/types/food.interface";

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
    typeError: true,
    quantityError: true,
    slotError: true,
  },
  user: null as IUser | null,
  step: 1,
  foodsSelected: [] as IFood[],
  seconds: 30,

  async init() {
    this.countdownTimer();
    this.user = await authService.getCurrentUser();
    if (this.user) {
      window.user = this.user;
    }
    localStorage.setItem('currentUser', JSON.stringify(this.user));
    showtimeId = "1";
    await this.getShowtimeDetailById(showtimeId);
    this.renderSeatLayout();
    await this.getFoodTypes();
    this.addEventListeners();
    this.setSeatsSelected();
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
    if (this.seatErrors.quantityError) return;
    if (this.seatErrors.slotError) {
      alert('Vui lòng không chừa 1 ghế trống bên trái hoặc bên phải của các ghế bạn đã chọn.');
      return;
    }
    if (this.seatErrors.quantityError || this.seatErrors.typeError) {
      return;
    }
    this.foodsSelected = [];
    this.foodTypes.forEach(foodType => {
      foodType.foods.forEach(food => {
        if (food.quantity > 0) {
          this.foodsSelected.push(food);
        }
      })
    })

    this.step = 2;

  },
  renderSeatLayout() {
    if (this.room) {
      $("#seatingArea").seatview({
        col_count: this.room.col_count,
        row_count: this.room.row_count,
        seats: this.room.seats,
        seat_types: this.seatTypes,
        base_price: this.room.base_price,
      }, ({ seatErrors, seat }: { seatsSelected: ISeat[], seatErrors: any, seat: ISeat }) => {
        this.seatErrors = seatErrors;
        console.log(this.seatErrors);

        if (this.seatErrors.quantityError || this.seatErrors.typeError) {
          return;
        };
        showtimeService.bookSeat('1', seat?.seat_number);
        this.calculateTotalPrice();
      });
    }
  },
  addEventListeners() {
    if (this.user == null) {
      $("#seatingArea").addClass("event-none");
      $("#login").removeClass("tw-hidden");
      $("#combo").addClass("tw-hidden");
    } else {
      $("#seatingArea").removeClass("event-none");
      $("#login").addClass("tw-hidden");
      $("#combo").removeClass("tw-hidden");
    }
    $("#seatingArea").on("click", (e) => {
      if (this.user == null) {
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
  },
  setStep(i: number) {
    this.step = i;
    if (this.step == 1) {
      setTimeout(() => {
        this.renderSeatLayout();
        this.addEventListeners();
      });
    }
  },
  toggleCombo() {
    $("#tab-combo").toggleClass("slide");
  },
  countdownTimer() {
    const interval = setInterval(() => {
      this.seconds--;
      if (this.seconds == 0) {
        clearInterval(interval);
        alert("Hết thời gian đặt ghế");
      }
    }, 1000)
  },
  formatMinuteSecond() {
    const minute = Math.floor(this.seconds / 60);
    const second = this.seconds % 60;
    return `${minute.toString().padStart(2, '0')}:${second.toString().padStart(2, '0')}`
  }

}));
