
$(document).ready(function () {
    function toggleStatus(button, statusType) {
        var itemId = button.data("id");
        var url = button.data("url");
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: url,
            type: "POST",
            data: {
                id: itemId,
                _token: csrfToken,
            },
            success: function (response) {
                // Kiểm tra giá trị trả về từ server
                // console.log(response);

                var newStatus = statusType === "active" ? response.newStatus : response.newHot;

                // Đảm bảo nút được cập nhật chính xác
                button.attr("data-status", newStatus);  // Cập nhật lại thuộc tính data-status

                var buttonText = "";
                if (statusType === "active") {
                    buttonText = newStatus == 1 ? "Hiển thị" : "Ẩn";
                } else if (statusType === "hot") {
                    buttonText = newStatus == 1 ? "Nổi bật" : "Không";
                }

                // Cập nhật text hiển thị của nút
                button.text(buttonText);

                // Cập nhật class của button (btn-success hoặc btn-danger)
                button.removeClass("btn-success btn-danger");
                var buttonClass = newStatus == 1 ? "btn-success" : "btn-danger";
                button.addClass(buttonClass);

                // Thông báo thành công
                Swal.fire({
                    title: "Thành công!",
                    text: "Cập nhật trạng thái thành công!",
                    icon: "success",
                    confirmButtonText: "OK",
                });
            },
            error: function (xhr, status, error) {
                console.log("Error:", error); // Xem có lỗi gì xảy ra không
            }
        });
    }

    function changeOrder(input) {
        var url = input.data("url");
        var itemId = input.data("id");
        var order = input.val();
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: url,
            type: "POST",
            data: {
                id: itemId,
                order: order,
                _token: csrfToken,
            },
            success: function (response) {
                Swal.fire({
                    title: "Số thứ tự đã được thay đổi",
                    icon: "success",
                    confirmButtonText: "OK",
                });
            }
        });
    }

    function changePosition(input) {
        var url = input.data("url");
        var itemId = input.data("id");
        var position = input.val();
        var positionOld = input.data('value');

        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: url,
            type: "POST",
            data: {
                id: itemId,
                position: position,
                _token: csrfToken,
            },
            success: function (response) {
                if(response.status) {
                    Swal.fire({
                        title: "Vị trí đã được thay đổi",
                        icon: "success",
                        confirmButtonText: "OK",
                    });
                } else {
                    Swal.fire({
                        title: `Vị trí số '${position}' này đã tồn tại!`,
                        text: "Vui lòng chọn vị trí khác để hiển thị",
                        icon: "error",
                        confirmButtonText: "OK",
                    });

                    input.val(positionOld);
                }
            },
            error: function(error) {
                Swal.fire({
                    title: "Đã xảy ra lỗi!",
                    text: "Vui lòng liên hệ với bộ phận kỹ thuật.",
                    icon: "error",
                    confirmButtonText: "OK",
                });
            }
        });
    }

    // Event handler for toggling active status
    $(".toggle-active-btn").click(function () {
        toggleStatus($(this), "active");
    });

    // Event handler for toggling hot status
    $(".toggle-hot-btn").click(function () {
        toggleStatus($(this), "hot");
    });

    $(".changeOrder").change(function () {
        changeOrder($(this));
    })
    $(".changePosition").change(function () {
        changePosition($(this));
    })
});
