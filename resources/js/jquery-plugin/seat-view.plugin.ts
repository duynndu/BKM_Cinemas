import $ from "jquery";
import { SEAT_TYPE } from "@/define/seat-type";
import { ISeatLayout } from "@/types/seat-layout.interface";
import { price } from "@/utils/common";
import { ISeatType } from "@/types/seat-type.interface";

$.fn.seatview = async function (seatLayout: ISeatLayout & { base_price: any, seat_types: ISeatType[] }, onChange?: (data: any) => any) {
  let { seats, col_count, row_count, base_price = 0, seat_types = [] } = seatLayout;
  if (!seats || seats.length === 0) {
    seats = [];
    for (let row = 0; row < row_count; row++) {
      for (let col = 0; col < col_count; col++) {
        seats.push({
          id: (row + 1) * col,
          type: SEAT_TYPE.STANDARD_SEAT,
          slot: 1,
          visible: true,
          seat_number: `${String.fromCharCode(65 + row)}${(col + 1).toString().padStart(2, '0')}`,
          merged_seats: [],
          order: row * col_count + col,
          price: 0,
        });
      }
    }
  }
  let seatSelected: ISeat[] = [];

  const seatTypes = seat_types;
  const rowLabels = $("<div>", {
    class: "row-labels tw-py-4",
  });

  const seatTable = $("<div>", {
    class: "seat-table tw-grid tw-gap-2 tw-p-4 tw-rounded-xl",
  });
  this.empty();

  generateSeats(seats);
  addEventListeners();
  this.append(rowLabels, seatTable, rowLabels.clone());

  function generateSeats(seats: any[]) {
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
      let calculatorPrice = 0;
      if (base_price !== 0) {
        calculatorPrice = (parseFloat(base_price) + seatTypes[seat.type].bonus_price) * seat.slot
      } else if (seat?.price) {
        calculatorPrice = seat.price
      } else {
        calculatorPrice = seatTypes[seat.type].bonus_price * seat.slot
      }
      seatTable.append($('<div>', {
        style: `background-color: ${seatTypes[seat.type].color}`,
        class: `tw-cursor-pointer seat seat-lg tw-col-span-${seat.slot} tw-bg-${seat.type} ${!seat.visible ? 'tw-hidden' : 'tw-visible'}`,
        id: seat.seat_number,
        'data-id': seat.id,
        'data-slot': seat.slot,
        'data-type': seat.type,
        'data-seat-number': seat.seat_number,
        'data-visible': seat.visible,
        'data-price': seat.price ?? 0,
        'data-selected': false,
        'data-order': seat.order,
        ...(seat.type !== SEAT_TYPE.EMPTY_SEAT && { 'x-tooltip': `"${seat.seat_number} - ${price(calculatorPrice)}"` }),
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
        selected: $(this).data('selected')
      };
      seats.push(seat);
    });
    return seats;
  }

  function addEventListeners() {
    seatTable.on('click', function (e) {
      if ($(e.target).hasClass('seat')) {
        const seatElement = $(e.target);
        const isSelected = !seatElement.data('selected');
        seatElement.data('selected', isSelected);
        seatElement.toggleClass('selected', isSelected);
        if (isSelected) {
          seatSelected.push({
            id: seatElement.data('id'),
            seat_number: seatElement.data('seat-number'),
            type: seatElement.data('type'),
            slot: seatElement.data('slot'),
            visible: seatElement.data('visible'),
            order: seatElement.index(),
            price: seatElement.data('price'),
            merged_seats: seatElement.data('merged-seats'),
            selected: seatElement.data('selected')
          });
        } else {
          seatSelected = seatSelected.filter(seat => seat.seat_number !== seatElement.data('seat-number'));
        }
        seats = getSeatsFromDOM();
        if (isSelected) {
          if (!checkSeatMapping()) {
            seatSelected.pop();
            seatElement.data('selected', false);
            seatElement.toggleClass('selected', false);
            alert(`không thể bị bỏ lại một mình.`);
          }
        }
        
        onChange?.(seatSelected);
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

  function checkSeatMapping() {
    if (seats) {
      const seatMatrix: any[][] = [];
      for (let row = 0; row < row_count; row++) {
        const rowSeats = seats.slice(row * col_count, (row + 1) * col_count);
        seatMatrix.push(rowSeats);
      }
      let countSeatSelectedArray: number[][] = [];

      for (let row = 0; row < seatMatrix.length; row++) {
        countSeatSelectedArray.push([0]);
        for (let col = 0; col < seatMatrix[row].length; col++) {
          const seat = seatMatrix[row][col];
          if (!seat.selected) {
            countSeatSelectedArray[row][countSeatSelectedArray[row].length - 1]++;
          } else {
            countSeatSelectedArray[row].push(0);
          }
        }
      }
      if (countSeatSelectedArray.flat().some(count => count === 1)) {
        return false;
      }
      return true;
    }
  }

}
