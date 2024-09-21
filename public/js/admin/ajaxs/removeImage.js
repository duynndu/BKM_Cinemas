$(document).ready(function() {
    var imagePreview = $('.imagePreview');

    var removeImage = $('.removeImage');

    if(removeImage.length) {
        removeImage.on('click', function() {

            let id = $(this).data('id');
            let url = $(this).data('url');
            let image = $(this).data('image');

            imagePreview.css('background-image', `url(${image})`);

            $.ajax({
                type: "POST",
                url: url,
                data: {
                    id: id,
                    _token: $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(data) {
                    removeImage.hide();
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    }

    $(".btnRemoveEditAjax").click(function() {
        var url = $(this).data('url');
        var method = $(this).data('method');
        var button = $(this);
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        Swal.fire({
            title: 'Bạn có chắc chắn muốn xóa ảnh này?',
            text: "Hành động này không thể hoàn tác!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa',
            cancelButtonText: 'Hủy'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: method,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data) {
                        Swal.fire(
                            data.message
                        );
                        var fileInputWrapper = button.closest('.variantColor');
                        fileInputWrapper.remove();
                    }.bind(this),
                    error: function(xhr, status, error) {
                        Swal.fire(
                            'Lỗi!',
                            'Có lỗi xảy ra trong quá trình xóa ảnh.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});
