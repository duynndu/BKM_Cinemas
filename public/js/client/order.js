let isSubmitting = false;

function changeOrder(e) {
    if (isSubmitting) return;
    isSubmitting = true;
    const elment = $(e.target);
    const url = elment.attr('data-url');

    if (!url) {
        isSubmitting = false;
        return;
    }

    $.ajax({
        url: url,
        type: 'POST',
        data: {
            _token: $('meta[name="csrf_token"]').attr('content'),
            status: 'waiting_for_cancellation'
        },
        success: (response) => {
            Swal.fire({
                icon: 'success',
                title: 'Yêu cầu hủy thành công chờ xác nhận!',
                timer: 2000,
                showConfirmButton: false
            }).then(()=> {
                $(`#cancelled_ticket_${response.id}`).replaceWith(`<span class="text-danger" id="order_text_${response.id}">Chờ xác nhận hủy!</span>`);
                isSubmitting = false
            });;
        },
        error: (xhr) => {
            Swal.fire({
                icon: 'error',
                timer: 1000,
                title: xhr.responseJSON.failed,
                showConfirmButton: false
            }).then(() => (isSubmitting = false));
        }
    });
}

 $(document).on('click', '.btn-cancelled-ticket', changeOrder);

echo.channel('change_status_order')
    .listen('OrderStatusUpdated', (data) => {
        if (data.order.status === 'cancelled') {
            Swal.fire({
                icon: 'success',
                title: `Đơn hàng ${data.order.code} hủy thành công chờ hoàn tiền!`,
                timer: 2000,
                showConfirmButton: false
            }).then(()=> {
                $(`#order_text_${data.order.id}`).replaceWith(`<span class="text-danger" id="order_text_${data.order.id}">Chờ hoàn tiền!</span>`);
                isSubmitting = false
            });
        }
        if (data.order.status === 'rejected') {
            Swal.fire({
                icon: 'success',
                title: `Đơn hàng ${data.order.code} bị từ chối hủy!`,
                timer: 2000,
                showConfirmButton: false
            }).then(()=> {
                $(`#order_text_${data.order.id}`).replaceWith(`<span class="text-danger" id="order_text_${data.order.id}">Từ chối hủy!</span>`);
                isSubmitting = false
            });
        }
    });
echo.channel('change_refund_status_order')
    .listen('OrderRefundStatusUpdated', (data) => {
        Swal.fire({
            icon: 'success',
            title: `Đơn hàng ${data.order.code} hoàn tiền thành công!`,
            timer: 2000,
            showConfirmButton: false
        }).then(()=> {
            $(`#order_text_${data.order.id}`).text('Hoàn tiền thành công!');
            isSubmitting = false
        });
    });
