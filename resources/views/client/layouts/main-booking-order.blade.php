<!DOCTYPE html>
<!--
Template Name: Movie Pro
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from www.webstrot.com/html/moviepro/html/booking_type.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Aug 2024 15:06:33 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Movie Pro"/>
    <meta name="keywords" content="Movie Pro"/>
    <meta name="author" content=""/>
    <meta name="MobileOptimized" content="320"/>
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/font-awesome.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/fonts.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/flaticon.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/owl.theme.default.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/dl-menu.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/nice-select.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/venobox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/js/plugin/rs_slider/layers.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/js/plugin/rs_slider/navigation.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/js/plugin/rs_slider/settings.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/seat.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/responsive.css') }}"/>
    <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('movie/images/header/favicon.ico') }}"/>
</head>

<body class="booking_type_back">
<!-- preloader Start -->
<div id="preloader">
    <div id="status">
        <img src="{{ asset('movie/images/header/horoscope.gif') }}" id="preloader_image" alt="loader">
    </div>
</div>
@yield('content')
<!--main js file start-->
<script src="{{ asset('movie/js/jquery_min.js') }}"></script>
<script src="{{ asset('movie/js/modernizr.js') }}"></script>
<script src="{{ asset('movie/js/bootstrap.ts') }}"></script>
<script src="{{ asset('movie/js/owl.carousel.js') }}"></script>
<script src="{{ asset('movie/js/jquery.dlmenu.js') }}"></script>
<script src="{{ asset('movie/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('movie/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('movie/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('movie/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('movie/js/venobox.min.js') }}"></script>
<script src="{{ asset('movie/js/smothscroll_part1.js') }}"></script>
<script src="{{ asset('movie/js/smothscroll_part2.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.addon.snow.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('movie/js/plugin/rs_slider/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('movie/js/custom.js') }}"></script>
<!--main js file end-->
<script>
    //* Isotope js
    function protfolioIsotope() {
        if ($('.st_fb_filter_left_box_wrapper').length) {
            // Activate isotope in container
            $(".protfoli_inner, .portfoli_inner").imagesLoaded(function () {
                $(".protfoli_inner, .portfoli_inner").isotope({
                    layoutMode: 'masonry',
                });
            });

            // Add isotope click function
            $(".protfoli_filter li").on('click', function () {
                $(".protfoli_filter li").removeClass("active");
                $(this).addClass("active");
                var selector = $(this).attr("data-filter");
                $(".protfoli_inner, .portfoli_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
        ;
    };
    protfolioIsotope();

    function changeQty(increase) {
        var qty = parseInt($('.select_number').find("input").val());
        if (!isNaN(qty)) {
            qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
            $('.select_number').find("input").val(qty);
        } else {
            $('.select_number').find("input").val(1);
        }
    }
</script>
</body>

</html>
