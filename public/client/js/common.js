$(function() {

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-XZVGYE20GD');

    var width = $(document).width()
    if (width > 1600) width = 1600
    var height = width / 2.7
    $("#home-slider .item").css('height', height + 'px')
    $('.bg-video').on('ended', function () {
        $("#carousel-id").carousel("next")
    })

    $('#carousel-id').on('slid.bs.carousel', function () {
        if ($('#carousel-id .item.active').children().hasClass('bg-video')) {
            $(".bg-video").trigger('play')
        }
        else {
            $(".bg-video").trigger('pause')
            setTimeout(function () {
                $("#carousel-id").carousel('next')
            }, 5000)
        }
    })

    if ($('#carousel-id .item.active').children().hasClass('bg-video')) {
        $('#carousel-id').carousel({
            interval: false
        })
    }
    $("#main-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        smartSpeed: 800,
        video: true,
        loop: true,
        items: 1,
        nav: true,
        dots: true
    });
    $("#promotion-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        responsive: { 0: { items: 2, } },
        nav: true,
        dots: false
    });

    $("#nowshowing-slider, #comingsoon-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        responsive: {
            0: { items: 3, }, 420: { items: 2, }, 620: { items: 3, },
            768: { items: 3, }, 980: { items: 3 }, 1010: { items: 3 }, 1100: { items: 4 }
        },
        nav: true,
        dots: false
    });

    var mainpopup = sessionStorage.getItem('mainpopup');
    if (!mainpopup) {
        $("body").addClass("open-main-popup");
    }
    $(".main-popup").click(function () {
        sessionStorage.setItem('mainpopup', 'close');
        $("body").removeClass("open-main-popup");
    });

    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "1853915061599035");
    chatbox.setAttribute("attribution", "biz_inbox");


    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v12.0'
        });
    };
})


// header menu mobile
document.addEventListener('DOMContentLoaded', () => {
    const menuMobile = document.querySelector('.menu-icon');
    const btnCloseMenuMobile = document.querySelector('.btn-close-menu');
    const menuContent = document.querySelector('.menu-mobile-content');

    menuMobile.addEventListener('click', () => {
        menuMobile.style.opacity = '0';
        menuContent.classList.toggle('active');
    });
    btnCloseMenuMobile.addEventListener('click', () => {
        menuMobile.style.opacity = '1';
        menuContent.classList.toggle('active');
    });

    document.querySelectorAll('.menu-item > a').forEach(menu => {
        menu.addEventListener('click', function (e) {
            e.preventDefault();
            // Đóng hoặc mở menu hiện tại
            this.parentElement.classList.toggle('active');
        });
    });
});