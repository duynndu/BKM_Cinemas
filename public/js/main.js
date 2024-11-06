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
        dlabSettingsOptions.version = 'light';
        new dlabSettings(dlabSettingsOptions);
    }, 1000)
    jQuery(window).on('resize', function () {
        dlabSettingsOptions.version = 'light';
        new dlabSettings(dlabSettingsOptions);
        // jQuery('.dz-theme-mode').addClass('active');
    });
});


const mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 300,
    mousewheel: true,
    slidesPerView: 6, // Hiển thị 5 ảnh cùng lúc
    spaceBetween: 15, // Khoảng cách giữa các ảnh

    coverflowEffect: {
        rotate: 30,
        slideShadows: true
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

