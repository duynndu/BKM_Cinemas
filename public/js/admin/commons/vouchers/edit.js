$(document).ready(function() {
    var fullConditionType = $("#full-conditionType");
    var fullLevelType = $("#full-levelType");

    function initializeForm() {
        var condition = $("#discountCondition").val();
        var conditionType = $("#conditionType").val();
        var levelType = $("#levelType").val();

        if (condition === "all") {
            fullConditionType.addClass("d-none");
            fullLevelType.addClass("d-none");
            $("#conditionType").val('');
            $("#levelType").val('');
        } else if (condition === "condition") {
            fullConditionType.removeClass("d-none");
            $("#conditionType").val(conditionType || '');

            if (conditionType === "level_up") {
                fullLevelType.removeClass("d-none");
                $("#levelType").val(levelType || '');
            } else {
                fullLevelType.addClass("d-none");
                $("#levelType").val('');
            }
        }
    }

    initializeForm();

    $("#discountCondition").change(function() {
        var condition = $(this).val();

        if (condition === "condition") {
            fullConditionType.removeClass("d-none");
            $("#conditionType").val('');
        } else if (condition === "all") {
            fullConditionType.addClass("d-none");
            fullLevelType.addClass("d-none");

        }
    });

    $("#conditionType").change(function() {
        var conditionType = $(this).val();

        if (conditionType === "level_up") {
            fullLevelType.removeClass("d-none");
            $("#levelType").val('');
        } else if (conditionType === "new_member" || conditionType === "birthday") {
            fullLevelType.addClass("d-none");

        }
    });
});
function validateVoucherConditions() {
    var discountCondition = $("#discountCondition").val();  // Get the value of discountCondition
    var conditionType = $("#conditionType").val();          // Get the value of conditionType
    var levelType = $("#levelType").val();                  // Get the value of levelType
    var errorMessage = "";  // Variable to store the error message

    // Remove all old error messages
    $(".validation-error").remove();

    // If discountCondition is 'condition' and conditionType is not selected, show error
    if (discountCondition === "condition" && !conditionType) {
        $("<p class='text-danger validation-error'>Bạn phải chọn loại điều kiện.</p>").appendTo("#full-conditionType");
    }

    // If conditionType is 'level_up' and levelType is not selected, show error
    if (conditionType === "level_up" && !levelType) {
        $("<p class='text-danger validation-error'>Bạn phải chọn loại hạng.</p>").appendTo("#full-levelType");
    }

    // If discountCondition is 'condition' and conditionType is not selected, or conditionType is 'level_up' and levelType is not selected, prevent form submission
    if ((discountCondition === "condition" && !conditionType) || (conditionType === "level_up" && !levelType)) {
        return false;  // If there's an error, don't submit the form
    }

    return true;  // If no error, allow the form to be submitted
}

$(document).ready(function() {
    // Listen for changes to #discountCondition
    $("#discountCondition").change(function() {
        // If "Tất cả" (All) is selected, reset the form and allow submission
        if ($(this).val() === "all") {
            // Reset conditionType and levelType to empty values
            $("#conditionType").val('');
            $("#levelType").val('');
            // Hide error messages and prevent form submission
            $(".validation-error").remove();
        } else {
            // Validate the conditions whenever discountCondition changes
            validateVoucherConditions();
        }
    });

    // Listen for changes to #conditionType
    $("#conditionType").change(function() {
        // Validate the conditions whenever conditionType changes
        validateVoucherConditions();
    });

    // Listen for form submission
    $("form").submit(function(event) {
        // Check the conditions before submitting the form
        if (!validateVoucherConditions()) {
            event.preventDefault();  // If validation fails, prevent form submission
        }
    });
});
