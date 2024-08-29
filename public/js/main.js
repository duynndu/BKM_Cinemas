$(function () {
    $("#datepicker").datepicker({
        autoclose: true,
        todayHighlight: true
    }).datepicker('update', new Date());

});

$(document).ready(function () {
    $(".booking-calender .fa.fa-clock-o").removeClass(this);
    $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
});
$('.my-select').selectpicker();

jQuery(document).ready(function () {
    setTimeout(function () {
        dlabSettingsOptions.version = 'dark';
        new dlabSettings(dlabSettingsOptions);
    }, 1000)
    jQuery(window).on('resize', function () {
        dlabSettingsOptions.version = 'dark';
        new dlabSettings(dlabSettingsOptions);
        jQuery('.dz-theme-mode').addClass('active');
    });
});
