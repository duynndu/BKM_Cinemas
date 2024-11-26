import ApiBase from '@/React/shared/Api';
import Alpine from 'alpinejs';
import Swal from 'sweetalert2';
import { echo } from '@/echo/Echo';
import $ from 'jquery';

Alpine.data('OrderComponent', () => ({
    isSubmitting: false,

    async init() {
        echo.channel('change_status_order')
            .listen('OrderStatusUpdated', (data: any) => {
                console.log(data);

                const selectElement = $(`#status-${data.order.id}`);

                    selectElement.val(data.order.status);

                    selectElement.trigger('change')
                    console.log($(`#status-${data.order.id}`).val());


            });
    },

    onChangeStatus(e: any) {
        if (this.isSubmitting) return;
        this.isSubmitting = true;

        const select = $(e.target);
        const status: string = select.val() as string;
        const url: string = select.data('url') as string;

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                status: status
            },
            success: (response: { message: string }) => {
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công!',
                    text: response.message,
                    timer: 2000,
                    showConfirmButton: false
                }).then(()=> this.isSubmitting = false);
            },
            error: (xhr: JQuery.jqXHR) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: xhr.responseJSON?.message || 'Đã xảy ra lỗi. Vui lòng thử lại.',
                }).then(()=> this.isSubmitting = false);
            }
        });
    }


}));




