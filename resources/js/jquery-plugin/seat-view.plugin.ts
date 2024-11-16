import $ from "jquery";
import { SEAT_STATUS, SEAT_TYPE } from "@/define/seat.define";
import { ISeatLayout } from "@/types/seat-layout.interface";
import { price } from "@/utils/common";
import { ISeatType } from "@/types/seat-type.interface";
import { ISeat, SEAT_STATUS_VALUES } from "@/types/seat.interface";

$.fn.seatview = async function (seatLayout: ISeatLayout & { base_price: any, seat_types: ISeatType[] }, onChange?: (data: any) => any) {
  const user = JSON.parse(localStorage.getItem('currentUser') || '{}');
  let { seats, col_count, row_count, base_price = 0, seat_types = [] } = seatLayout;
  let seatErrors = {
    typeError: false,
    slotError: false,
    quantityError: false,
  }
  let seatsSelected: ISeat[] = [];
  const rowLabels = $("<div>", {
    class: "row-labels tw-py-4",
  });

  const seatTable = $("<div>", {
    class: "seat-table tw-grid tw-gap-2 tw-p-4 tw-rounded-xl",
  });
  this.empty();

  generateSeats(seats ?? []);
  addEventListeners();
  this.append(rowLabels, seatTable, rowLabels.clone());

  function generateSeats(seats: ISeat[]) {
    seatTable.removeClass();
    seatTable.empty().addClass(`seat-table tw-grid tw-gap-2 tw-p-4 tw-rounded-xl tw-grid-cols-${col_count}`);
    const labels = rowLabels.empty();

    const rows = seats.length / col_count;
    for (let i = 0; i < rows; i++) {
      labels.append($('<div>', {
        class: 'row-label row-label-lg',
        text: String.fromCharCode(65 + i)
      }));
    }

    seats.forEach((seat, index) => {
      const isUserSelectSeat = user.id == seat.user_id && seat.status == SEAT_STATUS.BOOKING;
      seatTable.append($('<div>', {
        style: `${isUserSelectSeat || seat.status == SEAT_STATUS.AVAILABLE ? 'cursor: pointer' : 'cursor: not-allowed'}`,
        class: `seat seat-lg tw-col-span-${seat.slot} tw-border-solid tw-text-white tw-border-2 tw-border-${seat.type} ${!seat.visible ? 'tw-hidden' : 'tw-visible'} ${isUserSelectSeat ? SEAT_STATUS.SELECTED : seat.status}`,
        id: seat.seat_number,
        'data-id': seat.id,
        'data-slot': seat.slot,
        'data-type': seat.type,
        'data-seat-number': seat.seat_number,
        'data-visible': seat.visible,
        'data-price': seat.price ?? 0,
        'data-status': seat.status ?? SEAT_STATUS.AVAILABLE,
        'data-order': seat.order,
        'data-user-id': seat.user_id,
        ...(seat.type !== SEAT_TYPE.EMPTY_SEAT && { 'x-tooltip': `"${seat.seat_number} - ${price(seat.price ?? 0)}"` }),
      }));
      $(seatTable.children()[index]).data('merged-seats', seat.merged_seats ?? []);
    });



    let seatIndex = 0;
    seatTable.children().each(function (i, cell) {
      const rowIndex = Math.floor(i / col_count);
      $(cell).html(`${String.fromCharCode(65 + rowIndex)}${(seatIndex + 1).toString().padStart(2, '0')}`);
      $(cell).data('seat-number', `${String.fromCharCode(65 + rowIndex)}${(seatIndex + 1).toString().padStart(2, '0')}`);
      seatIndex++;
      if (seatIndex >= col_count) {
        seatIndex = 0;
      }

    });
    return getSeatsFromDOM();
  }

  function getSeatsFromDOM() {
    const seats: any[] = [];
    seatTable.children().each(function () {
      const seat = {
        type: $(this).data('type'),
        slot: $(this).data('slot'),
        order: $(this).index(),
        visible: $(this).data('visible'),
        seat_number: $(this).data('seat-number'),
        price: $(this).data('price'),
        merged_seats: $(this).data('merged-seats'),
        status: $(this).data('status'),
        user_id: $(this).data('user-id')
      };
      seats.push(seat);
    });
    return seats;
  }

  function addEventListeners() {
    seatTable.on('click', function (e) {
      if ($(e.target).hasClass('seat')) {
        const seatElement = $(e.target);
        const isSelected = seatElement.data('status') !== SEAT_STATUS.BOOKING;
        const seat = {
          id: seatElement.data('id'),
          seat_number: seatElement.data('seat-number'),
          type: seatElement.data('type'),
          slot: seatElement.data('slot'),
          visible: seatElement.data('visible'),
          order: seatElement.index(),
          price: seatElement.data('price'),
          merged_seats: seatElement.data('merged-seats'),
          status: seatElement.data('status') as SEAT_STATUS_VALUES,
          user_id: seatElement.data('user-id')
        }
        const isUserSelectSeat = user.id == seat.user_id && seat.status == SEAT_STATUS.BOOKING;
        if (isUserSelectSeat || seat.status == SEAT_STATUS.AVAILABLE) {
          seatElement.removeClass(seatElement.data('status'));

          if (isSelected) {
            seatElement.data('status', SEAT_STATUS.BOOKING);
            // seatElement.addClass(SEAT_STATUS.BOOKING);
            seatsSelected.push(seat as unknown as ISeat);
          } else {
            seatElement.data('status', SEAT_STATUS.AVAILABLE);
            // seatElement.addClass(SEAT_STATUS.AVAILABLE);
            seatsSelected = seatsSelected.filter(seat => seat.seat_number !== seatElement.data('seat-number')) ?? [];
          }
          seats = getSeatsFromDOM();
          checkSeatMapping(seatElement)
          if (seatErrors.typeError || seatErrors.quantityError) {
            if (seatErrors.typeError) {
              alert('Không được chọn 2 loại ghế khác nhau');
            } else if (seatErrors.quantityError) {
              alert('Nếu bạn muốn đặt trên 9 ghế, vui lòng thực hiện giao dịch nhiều lần hoặc liên hệ tại quầy!');
            }
            seatElement.removeClass(seatElement.data('status'));
            seatElement.data('status', SEAT_STATUS.AVAILABLE);
            // seatElement.addClass(SEAT_STATUS.AVAILABLE);
            seatsSelected = seatsSelected.filter(seat => seat.seat_number !== seatElement.data('seat-number')) ?? [];

          }
          //@ts-ignore
          window.checkSeatMapping = () => {
            console.log(checkSeatMapping(seatElement));
          };
          onChange?.({ seatsSelected, seatErrors, seat });
        }
      }
    });
  }

  function getColIndex(seatElement: JQuery<HTMLElement>) {
    const colIndex = $(seatElement).index() % col_count;
    return colIndex;
  }

  function getRowIndex(seatElement: JQuery<HTMLElement>) {
    const rowIndex = Math.floor($(seatElement).index() / col_count);
    return rowIndex;
  }

  function getSeatPrev(seatElement: JQuery<HTMLElement>) {
    if (getColIndex(seatElement) > 0) {
      return seatElement.prev();
    }
    return null;
  }

  function getSeatNext(seatElement: JQuery<HTMLElement>) {
    if (getColIndex(seatElement) < col_count - 1) {
      return seatElement.next();
    }
    return null;
  }

  function checkSeatMapping(seatElementSelected: JQuery<HTMLElement>) {
    seatErrors.slotError = false;
    seatErrors.typeError = false;
    seatErrors.quantityError = false;

    const selectedPos = getPositionSeat(seatElementSelected);
    if (seats) {
      const seatMatrix: ISeat[][] = [];
      for (let row = 0; row < row_count; row++) {
        const rowSeats = seats.slice(row * col_count, (row + 1) * col_count);
        seatMatrix.push(rowSeats);
      }

      let firstSelectedIndex = seatMatrix[selectedPos.rowIndex].findIndex(seat => seat.status === SEAT_STATUS.BOOKING);
      let lastSelectedIndex = seatMatrix[selectedPos.rowIndex].findLastIndex(seat => seat.status === SEAT_STATUS.BOOKING);

      if (seatsSelected.some(seat => seatsSelected[0].type !== seat.type)) {
        seatErrors.typeError = true;
      }
      if (seatsSelected.length > 9) {
        seatErrors.quantityError = true;
      }
      if (seatMatrix[selectedPos.rowIndex].some(seat => seat.slot > 1)) {
        return;
      }
      for (let i = firstSelectedIndex; i <= lastSelectedIndex; i++) {
        if (seatMatrix[selectedPos.rowIndex][i]?.status && (seatMatrix[selectedPos.rowIndex][i]?.status !== SEAT_STATUS.SELECTED)) {
          seatErrors.slotError = true;
        }
      }
      if (
        firstSelectedIndex === 1 &&
        seatMatrix[selectedPos.rowIndex][0]?.status === SEAT_STATUS.AVAILABLE &&
        seatMatrix[selectedPos.rowIndex][lastSelectedIndex + 1]?.status === SEAT_STATUS.AVAILABLE
      ) {
        seatErrors.slotError = true;
      }
      if (
        lastSelectedIndex === (col_count - 1) - 1 &&
        seatMatrix[selectedPos.rowIndex][col_count - 1]?.status === SEAT_STATUS.AVAILABLE &&
        seatMatrix[selectedPos.rowIndex][firstSelectedIndex - 1]?.status === SEAT_STATUS.AVAILABLE
      ) {
        seatErrors.slotError = true;
      }
    }
  }

  function getPositionSeat(seat: JQuery<HTMLElement>) {
    const rowIndex = getRowIndex(seat);
    const colIndex = getColIndex(seat);
    return { rowIndex, colIndex };
  }

  function distributeByPct(items: { string: string, percent: number }[]): string {
    const totalPercentage = items.reduce((sum, item) => sum + item.percent, 0);

    // Adjust the last item's percentage if the total is not 100
    if (totalPercentage !== 100) {
      const difference = 100 - totalPercentage;
      items[items.length - 1].percent += difference;
    }

    const randomValue = Math.random() * 100;
    let cumulativePercentage = 0;

    for (let i = 0; i < items.length; i++) {
      cumulativePercentage += items[i].percent;
      if (randomValue < cumulativePercentage) {
        return items[i].string;
      }
    }

    return SEAT_STATUS.AVAILABLE;
  }

}
