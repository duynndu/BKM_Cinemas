import ApiBase from '@/React/shared/Api';
import Alpine from 'alpinejs';
import Swal from 'sweetalert2';
import { echo } from '@/echo/Echo';
import $ from 'jquery';

Alpine.data('OrderCancelledComponent', () => ({
    isSubmitting: false,

    async init() {

    },

    onChangeStatus(e: any) {
        if (this.isSubmitting) return;
        this.isSubmitting = true;

        const a = $(e.target);
        const url: string = a.data('url') as string;
        console.log(url);
        console.log(a);
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                _token: $('meta[name="csrf_token"]').attr('content'),
                status: 'waiting_for_cancellation'
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




