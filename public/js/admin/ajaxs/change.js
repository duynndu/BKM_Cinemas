$(document).ready(function () {
    function toggleStatus(button, statusType) {
        var itemId = button.data("id");
        var url = button.data("url");
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        var cityId = button.data("city_id");
        var districtId = button.data("district_id");

        $.ajax({
            url: url,
            type: "POST",
            data: {
                id: itemId,
                city_id: cityId,
                district_id: districtId,
                _token: csrfToken,
            },
            success: function (response) {
                var newStatus =
                    statusType === "active"
                        ? response.newStatus
                        : response.newHot;
                button.data("status", newStatus);
                var buttonText =
                    newStatus == 1
                        ? statusType === "active"
                            ? "Hiển thị"
                            : "Nổi bật"
                        : "Ẩn";
                button.text(buttonText);

                button.removeClass("btn-success btn-danger");
                var buttonClass = newStatus == 1 ? "btn-success" : "btn-danger";
                button.addClass(buttonClass);

                Swal.fire({
                    title: "Thành công!",
                    text: "Cập nhật trạng thái thành công!",
                    icon: "success",
                    confirmButtonText: "OK",
                });
            },
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
});
