import $ from "jquery";
import { SEAT_TYPE } from "@/define/seat-type";
import { ISeatLayout } from "@/types/seat-layout.interface";
import { price } from "@/utils/common";
import { RoomService } from "@/services/room.service";

$.fn.seatmanager = async function (seatLayout: ISeatLayout, onChange?: (data: any) => any) {
  let { seats, col_count, row_count } = seatLayout;
  if (!seats || seats.length === 0) {
    seats = [];
    for (let row = 0; row < row_count; row++) {
      for (let col = 0; col < col_count; col++) {
        seats.push({
          type: SEAT_TYPE.STANDARD_SEAT,
          slot: 1,
          visible: true,
          seat_number: `${String.fromCharCode(65 + row)}${(col + 1).toString().padStart(2, '0')}`,
          merged_seats: [],
          order: row * col_count + col,
          price: 0
        });
      }
    }
  }
  // const seatTypes = {
  //   [SEAT_TYPE.EMPTY_SEAT]: {
  //     text: "Xóa",
  //     color: "#000000",
  //     icon: "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle' viewBox='0 0 16 16'><path d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z'/><path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/></svg>"
  //   },
  //   [SEAT_TYPE.STANDARD_SEAT]: {
  //     text: "Ghế mặc định",
  //     color: "#FFFFFF",
  //     icon: "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'><path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM2 14s-1 0-1-1 1-4 7-4 7 3 7 4-1 1-1 1H2z'/></svg>"
  //   },
  //   [SEAT_TYPE.COUPLE_SEAT]: {
  //     text: "Ghế cặp",
  //     color: "#FFB6C1",
  //     icon: "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-heart' viewBox='0 0 16 16'><path d='M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.414-2.368 5.327-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01z'/></svg>"
  //   },
  //   [SEAT_TYPE.VIP_SEAT]: {
  //     text: "Ghế VIP",
  //     color: "#FFD700",
  //     icon: "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-star' viewBox='0 0 16 16'><path d='M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z'/></svg>"
  //   },
  //   [SEAT_TYPE.ACCESSIBLE_SEAT]: {
  //     text: "Ghế cho người khuyết tật",
  //     color: "#32CD32",
  //     icon: "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-wheelchair' viewBox='0 0 16 16'><path d='M12 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.663 2.146a1.5 1.5 0 0 0-.47-2.115l-2.5-1.508a1.5 1.5 0 0 0-1.676.086l-2.329 1.75a.866.866 0 0 0 1.051 1.375L7.361 3.37l.922.71-2.038 2.445A4.73 4.73 0 0 0 2.628 7.67l1.064 1.065a3.25 3.25 0 0 1 4.574 4.574l1.064 1.063a4.73 4.73 0 0 0 1.09-3.998l1.043-.292-.187 2.991a.872.872 0 1 0 1.741.098l.206-4.121A1 1 0 0 0 12.224 8h-2.79zM3.023 9.48a3.25 3.25 0 0 0 4.496 4.496l1.077 1.077a4.75 4.75 0 0 1-6.65-6.65z'/></svg>"
  //   }
  // }

  const seatTypes = await RoomService.getSeatTypesKeyByCode();
  // console.log(seatTypes);

  const contextMenu = $("<div>", {
    class: "context-menu",
  });
  const rowLabels = $("<div>", {
    class: "row-labels tw-py-4",
  });

  const seatTable = $("<div>", {
    class: "seat-table tw-grid tw-gap-2 tw-p-4 tw-rounded-xl",
  });
  this.empty();

  generateSeats(seats);
  this.append(contextMenu, rowLabels, seatTable, rowLabels.clone());

  seatTable.children().each(function () {
    addEventListeners($(this));
  });

  function generateSeats(seats: any[]) {
    seatTable.empty().addClass(`tw-grid-cols-${col_count}`);
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
        style: `background-color: ${seatTypes[seat.type].color}`,
        class: `draggable seat seat-lg tw-col-span-${seat.slot} tw-bg-${seat.type} ${!seat.visible ? 'tw-hidden' : 'tw-visible'}`,
        id: seat.seat_number,
        draggable: true,
        'data-slot': seat.slot,
        'data-type': seat.type,
        'data-seat-number': seat.seat_number,
        'data-visible': seat.visible,
        'data-price': seat.price ?? 0,
        'x-tooltip': `"${seat.seat_number} - ${price(seat.price ?? 0)}"`,
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


    seatTable.children().each(function () {
      addEventListeners($(this));
    });
    onChange?.({ seatTable, contextMenu, rowLabels, seats });
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
        merged_seats: $(this).data('merged-seats')
      };
      seats.push(seat);
    });
    return seats;
  }

  let draggedElement: any = null;
  let contextElement: any = null;

  function addEventListeners(draggable: any) {
    draggable.on('dragstart', (e: any) => {
      draggedElement = e.target;
      e.originalEvent.dataTransfer.effectAllowed = 'move';
      e.originalEvent.dataTransfer.setData('text/plain', $(e.target).html());
    });

    draggable.on('dragover', (e: any) => {
      e.preventDefault();
      seatTable.children().removeClass('drag-over');
      if (draggedElement !== e.target) {
        const draggedData = $(draggedElement).data();
        const targetIndex = $(e.target).index();
        const slot = draggedData.slot;
        const rowLength = col_count;

        if ((targetIndex % rowLength) + slot <= rowLength) {
          let validDrop = true;
          let sumSlot = 0;

          for (let i = 0; i < slot; i++) {
            const targetCell = $(e.target).parent().children().eq(targetIndex + i);
            sumSlot += targetCell.data('slot');
            if (sumSlot > slot) {
              validDrop = false;
              break;
            }
          }

          if (validDrop) {
            for (let i = 0; i < slot; i++) {
              const targetCell = $(e.target).parent().children().eq(targetIndex + i);
              targetCell.addClass('drag-over');
            }
            e.originalEvent.dataTransfer.dropEffect = 'move';
            $(e.target).css('cursor', 'copy');
          } else {
            e.originalEvent.dataTransfer.dropEffect = 'none';
            $(e.target).css('cursor', 'not-allowed');
          }
        } else {
          e.originalEvent.dataTransfer.dropEffect = 'none';
          $(e.target).css('cursor', 'not-allowed');
        }
      }
    });

    draggable.on('dragleave', (e: any) => {
      seatTable.children().removeClass('drag-over');
      $(e.target).css('cursor', '');
    });

    draggable.on('drop', (e: any) => {
      e.preventDefault();
      seatTable.children().removeClass('drag-over');
      $(e.target).css('cursor', '');
      if (draggedElement !== e.target) {
        const draggedData = {
          slot: $(draggedElement).data('slot'),
          type: $(draggedElement).data('type'),
          seatNumber: $(draggedElement).data('seat-number'),
          visible: $(draggedElement).data('visible'),
          price: $(draggedElement).data('price'),
          mergedSeats: $(draggedElement).data('merged-seats') || []
        };

        const targetIndex = $(e.target).index();
        const slot = draggedData.slot;
        const rowLength = col_count;


        if ((targetIndex % rowLength) + slot <= rowLength) {
          let validDrop = true;
          let sumSlot = 0;

          for (let i = 0; i < slot; i++) {
            const targetCell = $(e.target).parent().children().eq(targetIndex + i);
            sumSlot += targetCell.data('slot');
            if (sumSlot > slot) {
              validDrop = false;
              break;
            }
          }

          if (validDrop) {
            const targetData = {
              slot: $(e.target).data('slot'),
              type: $(e.target).data('type'),
              seatNumber: $(e.target).data('seat-number'),
              visible: $(e.target).data('visible'),
              price: $(e.target).data('price'),
              mergedSeats: $(e.target).data('merged-seats') || []
            };


            draggedData.mergedSeats.forEach((seatId: any) => {
              $(`#${seatId}`).data('visible', true);
            });


            $(draggedElement).data('merged-seats', []);
            const newMergedSeats = [];
            for (let i = 0; i < slot; i++) {
              const targetCell = $(e.target).parent().children().eq(targetIndex + i);
              targetCell.data('visible', false);
              if (i !== 0) {
                newMergedSeats.push(targetCell.data('seat-number'));
              }
            }
            $(e.target).data('merged-seats', newMergedSeats);


            $(draggedElement).data('slot', targetData.slot);
            $(draggedElement).data('type', targetData.type);
            $(draggedElement).data('seat-number', targetData.seatNumber);
            $(draggedElement).data('visible', targetData.visible);
            $(draggedElement).data('price', targetData.price);
            $(e.target).data('slot', draggedData.slot);
            $(e.target).data('type', draggedData.type);
            $(e.target).data('seat-number', draggedData.seatNumber);
            $(e.target).data('visible', draggedData.visible);
            $(e.target).data('price', draggedData.price);
            seats = getSeatsFromDOM();
            generateSeats(seats);
          }
        }
      }
    });

    draggable.on('contextmenu', (e: any) => {
      e.preventDefault();
      contextElement = e.target;
      showContextMenu(e.clientX, e.clientY);
    });
  }

  function showContextMenu(x: number, y: number) {
    const colIndex = $(contextElement).index() % col_count;
    const rowIndex = Math.floor($(contextElement).index() / col_count);
    let totalSlotUpToTarget = 0;
    $(seatTable).children().slice(rowIndex * col_count, rowIndex * col_count + colIndex).each(function () {
      if ($(this).data('visible')) {
        totalSlotUpToTarget += $(this).data('slot');
      }
    });
    totalSlotUpToTarget += $(contextElement).data('slot');
    console.log(totalSlotUpToTarget);

    const slot = $(contextElement).data('slot');
    const type = $(contextElement).data('type');
    const isFirstCol = totalSlotUpToTarget === 1 || colIndex === 0;
    const isLastCol = totalSlotUpToTarget === col_count || colIndex === col_count - 1;

    const leftSeat = $(contextElement).prevAll(':visible').first();
    const rightSeat = $(contextElement).nextAll(':visible').first();
    const isLeftCoupleSeat = leftSeat.data('type') === SEAT_TYPE.COUPLE_SEAT;
    const isRightCoupleSeat = rightSeat.data('type') === SEAT_TYPE.COUPLE_SEAT;

    const menuItems = [
      !isFirstCol && !isLeftCoupleSeat && {
        action: () => mergeSeats('merge-left'),
        text: 'Hợp nhất bên trái',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M5.854 4.146a.5.5 0 0 1 0 .708L2.707 8H14.5a.5.5 0 0 1 0 1H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z"/></svg>',
        color: '#FF0000'
      },
      !isLastCol && !isRightCoupleSeat && {
        action: () => mergeSeats('merge-right'),
        text: 'Hợp nhất bên phải',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M10.146 4.146a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 9H1.5a.5.5 0 0 1 0-1h11.793L10.146 4.854a.5.5 0 0 1 0-.708z"/></svg>',
        color: '#00FF00'
      },
      slot !== 1 && {
        action: () => splitSeat(),
        text: 'Tách ra',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrows-split" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 1.5a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 7.793V2a.5.5 0 0 1 .5-.5zm0 13a.5.5 0 0 1-.5-.5v-5.793l-2.146 2.147a.5.5 0 0 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 8.707V14a.5.5 0 0 1-.5.5z"/></svg>',
        color: '#FF0000'
      },
      type !== 'empty-seat' && {
        action: () => convertTo(SEAT_TYPE.EMPTY_SEAT),
        text: 'Xóa',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/></svg>',
        color: '#FFA500'
      },
      {
        text: 'Chọn loại ghế',
        icon: '',
        color: '#FFFFFF',
        dropdown: Object.keys(seatTypes)
          .filter(type => type !== 'empty-seat' && type !== 'couple-seat')
          .map(type => ({
            action: () => convertTo(type),
            text: seatTypes[type as keyof typeof seatTypes].text,
            icon: seatTypes[type as keyof typeof seatTypes].icon,
            color: seatTypes[type as keyof typeof seatTypes].color
          }))
      }
    ].filter(item => item);
    createContextMenu(menuItems);

    contextMenu.css({
      left: `${x}px`,
      top: `${y}px`,
      display: 'block'
    });
  }

  function hideContextMenu() {
    contextMenu.hide();
  }

  $(document).on('click', (e) => {
    if (!$(e.target).closest('.context-menu').length) {
      hideContextMenu();
    }
  });

  function mergeSeats(action: string) {
    let elMergeable = null;
    if (action === 'merge-left') {
      elMergeable = $(contextElement).prev();
      while (!elMergeable.data('visible')) {
        elMergeable = elMergeable.prev();
      }
    } else if (action === 'merge-right') {
      elMergeable = $(contextElement).next();
      while (!elMergeable.data('visible')) {
        elMergeable = elMergeable.next();
      }
    }
    if (elMergeable && elMergeable.data('type') !== SEAT_TYPE.COUPLE_SEAT) {
      const oldSlot = $(contextElement).data('slot');
      const newSlot = parseInt(oldSlot) + parseInt(elMergeable.data('slot'));
      $(contextElement).data('slot', newSlot).data('type', 'couple-seat');
      $(elMergeable).data('visible', false);
      $(contextElement).data('merged-seats').push($(elMergeable)[0].id)
    }
  }

  function convertToEmptySeat() {
    $(contextElement).data('slot', 1).data('type', 'empty-seat');
    $(contextElement).nextAll(':hidden').each(function () {
      $(this).data('visible', true).data('type', 'empty-seat').data('slot', 1);
    });
    $(contextElement).prevAll(':hidden').each(function () {
      $(this).data('visible', true).data('type', 'empty-seat').data('slot', 1);
    });
  }

  function splitSeat() {
    $(contextElement).data('slot', 1);
    if ($(contextElement).hasClass('couple-seat')) {
      $(contextElement).data('slot', 1).data('type', 'standard-seat');
    }

    const mergedSeats = $(contextElement).data('merged-seats') || [];
    mergedSeats.forEach((seatId: string) => {
      $(`#${seatId}`).data('visible', true).data('slot', 1);
    });

    $(contextElement).data('merged-seats', []);
  }

  function convertTo(type: string) {
    $(contextElement).data('type', type);
  }

  function createContextMenu(menuItems: any[]) {
    contextMenu.empty();
    menuItems.forEach((item: any) => {
      const menuItem = $('<div>', {
        class: 'context-menu__item',
        click: function () {
          if (item.action) {
            item.action();
            seats = getSeatsFromDOM();
            seats = generateSeats(seats);
            hideContextMenu();
          }
        }
      });
      const icon = $(item.icon).css('color', item.color);
      menuItem.append(icon).append(item.text);

      if (item.dropdown) {
        const dropdownMenu = $('<div>', {
          class: 'context-menu__dropdown'
        });
        item.dropdown.forEach((subItem: any) => {
          const dropdownItem = $('<div>', {
            class: 'context-menu__dropdown-item',
            click: function () {
              subItem.action();
              seats = getSeatsFromDOM();
              seats = generateSeats(seats);
              hideContextMenu();
            }
          });
          const subIcon = $(subItem.icon).css('color', subItem.color);
          dropdownItem.append(subIcon).append(subItem.text);
          dropdownMenu.append(dropdownItem);
        });
        menuItem.append(dropdownMenu);
      }

      contextMenu.append(menuItem);
    });
  }
};