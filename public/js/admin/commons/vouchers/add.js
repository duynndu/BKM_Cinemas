$(document).ready(function() {
    var fullConditionType = $("#full-conditionType");
    var fullLevelType = $("#full-levelType");

    // Xử lý logic ban đầu (khi vừa load trang)
    function initializeForm() {
        var condition = $("#discountCondition").val();
        var conditionType = $("#conditionType").val();

        // Kiểm tra nếu có giá trị cũ từ old() hoặc giá trị mặc định
        if (condition === "all") {
            fullConditionType.addClass("d-none");
            fullLevelType.addClass("d-none");
            $("#conditionType").removeAttr("name");
            $("#levelType").removeAttr("name");
        } else if (condition === "condition") {
            fullConditionType.removeClass("d-none");
            $("#conditionType").attr("name", "voucher[condition_type]"); // Gán lại name

            // Kiểm tra giá trị của #conditionType
            if (conditionType === "level_up" || $("#conditionType").val() === "level_up") {
                fullLevelType.removeClass("d-none");
                $("#levelType").attr("name", "voucher[level_type]"); // Gán lại name
            } else {
                fullLevelType.addClass("d-none");
                $("#levelType").removeAttr("name"); // Xóa name
            }
        }
    }

    // Gọi hàm khởi tạo khi vừa load trang
    initializeForm();

    // Xử lý khi thay đổi #discountCondition
    $("#discountCondition").change(function() {
        var condition = $(this).val();

        if (condition === "condition") {
            fullConditionType.removeClass("d-none");
            $("#conditionType").attr("name", "voucher[condition_type]"); // Gán lại name
        } else if (condition === "all") {
            fullConditionType.addClass("d-none");
            fullLevelType.addClass("d-none");
            $("#conditionType").removeAttr("name"); // Xóa name
            $("#levelType").removeAttr("name"); // Xóa name
        }
    });

    // Xử lý khi thay đổi #conditionType
    $("#conditionType").change(function() {
        var conditionType = $(this).val();

        if (conditionType === "level_up") {
            fullLevelType.removeClass("d-none");
            $("#levelType").attr("name", "voucher[level_type]"); // Gán lại name
        } else if (conditionType === "new_member") {
            fullLevelType.addClass("d-none");
            $("#levelType").removeAttr("name"); // Xóa name
        }
    });
});