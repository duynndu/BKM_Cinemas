import $ from "jquery";
import { SEAT_STATUS, SEAT_TYPE } from "@/define/seat.define";
import { ISeatLayout } from "@/types/seat-layout.interface";
import { price } from "@/utils/common";
import { ISeatType } from "@/types/seat-type.interface";
import { ISeat, SEAT_STATUS_VALUES } from "@/types/seat.interface";

$.fn.seatview = async function (seatLayout: ISeatLayout & { base_price: any, seat_types: ISeatType[] }, onChange?: (data: any) => any) {
  let { seats, col_count, row_count, base_price = 0, seat_types = [] } = seatLayout;
  // if (!seats || seats.length === 0) {
  //   seats = [];
  //   for (let row = 0; row < row_count; row++) {
  //     for (let col = 0; col < col_count; col++) {
  //       seats.push({
  //         id: (row + 1) * col,
  //         type: distributeByPct([
  //           { string: SEAT_TYPE.STANDARD_SEAT, percent: 80 },
  //           { string: SEAT_TYPE.VIP_SEAT, percent: 10 },
  //         ]),
  //         slot: 1,
  //         visible: true,
  //         seat_number: `${String.fromCharCode(65 + row)}${(col + 1).toString().padStart(2, '0')}`,
  //         merged_seats: [],
  //         order: row * col_count + col,
  //         price: 0,
  //         status: distributeByPct([
  //           { string: SEAT_STATUS.AVAILABLE, percent: 90 },
  //           { string: SEAT_STATUS.OCCUPIED, percent: 5 },
  //         ]) as SEAT_STATUS_VALUES,
  //       });
  //     }
  //   }
  // }
  let seatSelected: ISeat[] = [];

  const seatTypes = seat_types;
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
      seatTable.append($('<div>', {
        style: `${seat.status !== SEAT_STATUS.AVAILABLE ? 'cursor: not-allowed' : ''}`,
        class: `tw-cursor-pointer seat seat-lg tw-col-span-${seat.slot} tw-border-solid tw-text-white tw-border-2 tw-border-${seat.type} ${!seat.visible ? 'tw-hidden' : 'tw-visible'} ${seat.status}`,
        id: seat.seat_number,
        'data-id': seat.id,
        'data-slot': seat.slot,
        'data-type': seat.type,
        'data-seat-number': seat.seat_number,
        'data-visible': seat.visible,
        'data-price': seat.price ?? 0,
        'data-status': seat.status ?? SEAT_STATUS.AVAILABLE,
        'data-order': seat.order,
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
      };
      seats.push(seat);
    });
    return seats;
  }

  function addEventListeners() {
    seatTable.on('click', function (e) {
      if ($(e.target).hasClass('seat')) {

        const seatElement = $(e.target);
        const isSelected = seatElement.data('status') !== SEAT_STATUS.SELECTED;
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
        }
        if (seatElement.data('status') === SEAT_STATUS.AVAILABLE || seatElement.data('status') === SEAT_STATUS.SELECTED) {
          seatElement.removeClass(seatElement.data('status'));

          if (isSelected) {
            seatElement.data('status', SEAT_STATUS.SELECTED);
            seatElement.addClass(SEAT_STATUS.SELECTED);
            seatSelected.push(seat);
          } else {
            seatElement.data('status', SEAT_STATUS.AVAILABLE);
            seatElement.addClass(SEAT_STATUS.AVAILABLE);
            seatSelected = seatSelected.filter(seat => seat.seat_number !== seatElement.data('seat-number'));
          }
          seats = getSeatsFromDOM();
          //@ts-ignore
          window.checkSeatMapping = () => {
            console.log(checkSeatMapping(seatElement));
          };


          onChange?.(seatSelected);
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
    // nếu click vào ghế ở vùng mà có 2 ghế loại AVAILABLE trở xuống thì được chọn và bỏ qua điều kiện check ở dưới
    const selectedPos = getPositionSeat(seatElementSelected);
    if (seats) {
      const seatMatrix: ISeat[][] = [];
      for (let row = 0; row < row_count; row++) {
        const rowSeats = seats.slice(row * col_count, (row + 1) * col_count);
        seatMatrix.push(rowSeats);
      }

      let firstSelectedIndex = seatMatrix[selectedPos.rowIndex].findIndex(seat => seat.status === SEAT_STATUS.SELECTED);
      let lastSelectedIndex = seatMatrix[selectedPos.rowIndex].findLastIndex(seat => seat.status === SEAT_STATUS.SELECTED);

      if (seatSelected.length === 0) {
        alert('Vui lòng chọn ghế trước khi đặt')
        return false;
      }

      if (seatMatrix[selectedPos.rowIndex].some(seat => seat.slot > 1)) {
        return true; // nếu hàng có ghế slot > 1 thì không cần check
      }

      for (let i = firstSelectedIndex; i <= lastSelectedIndex; i++) {
        if (seatMatrix[selectedPos.rowIndex][i].status !== SEAT_STATUS.SELECTED) {
          alert('Vui lòng không chừa 1 ghế trống bên trái hoặc bên phải của các ghế bạn đã chọn.');
          return false
        }
      }

      if (
        firstSelectedIndex === 1 &&
        seatMatrix[selectedPos.rowIndex][0].status === SEAT_STATUS.AVAILABLE &&
        seatMatrix[selectedPos.rowIndex][lastSelectedIndex + 1].status === SEAT_STATUS.AVAILABLE
      ) {
        alert('Vui lòng không chừa 1 ghế trống bên trái hoặc bên phải của các ghế bạn đã chọn.');
        return false;
      }

      if (
        lastSelectedIndex === (col_count - 1) - 1 &&
        seatMatrix[selectedPos.rowIndex][col_count - 1].status === SEAT_STATUS.AVAILABLE &&
        seatMatrix[selectedPos.rowIndex][firstSelectedIndex - 1].status === SEAT_STATUS.AVAILABLE
      ) {
        alert('Vui lòng không chừa 1 ghế trống bên trái hoặc bên phải của các ghế bạn đã chọn.');
        return false
      }

      seatSelected.forEach(seat => {
        if (seatSelected[0].type !== seat.type) {
          alert('Không được chọn 2 loại ghế khác nhau');
          return false;
        }
      })



      return true
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
