let isSubmitting = false;

function changeOrder(e) {
    if (isSubmitting) return;
    isSubmitting = true;
    const select = $(e.target);
    const status = select.val();
    const url = select.attr('data-url');

    if (!url) {
        isSubmitting = false;
        return;
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            status: status
        },
        success: (response) => {
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: response.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => (isSubmitting = false));
        },
        error: (xhr) => {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: xhr.responseJSON?.message || 'Đã xảy ra lỗi. Vui lòng thử lại.',
            }).then(() => (isSubmitting = false));
        }
    });
}

function changeGetTickets(e) {
    if (isSubmitting) return;
    isSubmitting = true;
    const element = $(e.target);
    const url = element.attr('data-url');
    if (!url) {
        isSubmitting = false;
        return;
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
        },
        success: (response) => {
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: response.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                $(`#get_tickets-${response.id}`).replaceWith(`
                    <b id="get_tickets-${response.id}">
                        Đã nhận
                    </b>
                `);
                isSubmitting = false;
            });
        },
        error: (xhr) => {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: xhr.responseJSON?.message || 'Đã xảy ra lỗi. Vui lòng thử lại.',
            }).then(() => (isSubmitting = false));
        }
    });
}

$(document).on('change', '.order_status', changeOrder);
$(document).on('change', '.refund_status', changeOrder);
$(document).on('click', '.get_tickets', changeGetTickets);

echo.channel('change_status_order')
    .listen('OrderStatusUpdated', (data) => {
        if (data.order.status === 'waiting_for_cancellation') {
            $(`#status-${data.order.id}`).replaceWith(`
                <select name="status" id="status-${data.order.id}" class="form-control order_status" data-url="${data.order.urlChangeStatus}">
                    <option value="cancelled">
                        Hủy
                    </option>
                    <option value="waiting_for_cancellation">
                        Chờ hủy
                    </option>
                    <option value="rejected">
                        Từ chối hủy
                    </option>
                </select>
            `);
            $(`#status-${data.order.id}`).val('waiting_for_cancellation').selectpicker('refresh');
            $(`#get_tickets-${data.order.id}`).replaceWith(`
                <b id="get_tickets-${data.order.id}">
                     ${data.order.get_tickets == 1 ? 'Đã lấy' : 'Chưa lấy'}
                </b>
            `);
        }else if(data.order.status === 'cancelled'){
            $(`#refund_status-${data.order.id}`).replaceWith(`
                <select name="refund_status" data-url="${data.order.urlChangeRefundStatus}" class="refund_status form-control"
                    id="refund_status-${data.order.id}">
                    <option value="pending">
                        Chờ hoàn tiền
                    </option>
                    <option value="completed">
                        Hoàn tiền
                    </option>
                </select>
            `);
            $(`#refund_status-${data.order.id}`).val('pending').selectpicker('refresh');
            $(`#get_tickets-${data.order.id}`).replaceWith(`
                <b id="get_tickets-${data.order.id}">
                     ${data.order.get_tickets == 1 ? 'Đã lấy' : 'Chưa lấy'}
                </b>
            `);
            const statusMap = {
                'rejected': 'Từ chối hủy',
                'cancelled': 'Hủy',
            };

            const statusText = statusMap[data.order.status];
            $(`div.bootstrap-select.form-control.order_status > select#status-${data.order.id}`)
                .closest('.bootstrap-select')
                .replaceWith(`
                    <b id="status-${data.order.id}">
                        ${statusText}
                    </b>
                `);
            $('.T_notification').removeClass('nav-item');
            $('.list_notification').empty();
        }else{
            $(`#get_tickets-${data.order.id}`).replaceWith(`
                 <button id="get_tickets-${data.order.id}"
                    class="get_tickets btn btn-xs btn-success text-white"
                    data-id="${data.order.id}"
                    data-url="${data.order.urlGetTicket}">
                    Nhận vé
                </button>
            `);
            const statusMap = {
                'rejected': 'Từ chối hủy',
                'cancelled': 'Hủy',
            };

            const statusText = statusMap[data.order.status];
            $(`div.bootstrap-select.form-control.order_status > select#status-${data.order.id}`)
                .closest('.bootstrap-select')
                .replaceWith(`
                    <b id="status-${data.order.id}">
                        ${statusText}
                    </b>
                `);
            $('.T_notification').removeClass('nav-item');
            $('.list_notification').empty();
        }

    });

echo.channel('change_refund_status_order')
    .listen('OrderRefundStatusUpdated', (data) => {
        $(`div.bootstrap-select.form-control.refund_status > select#refund_status-${data.order.id}`)
            .closest('.bootstrap-select')
            .replaceWith(`
                <b id="refund_status-${data.order.id}">
                    Hoàn tiền thành công
                </b>
        `);

        $(`#payment_status-${data.order.id}`).text('Chờ xác nhận');
    });
