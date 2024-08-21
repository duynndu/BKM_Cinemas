<!DOCTYPE html>

<html lang="en" class="ie8 no-js">
<html lang="en" class="ie9 no-js">
<html lang="zxx">

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
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/slick.cs') }}s"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/style2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('movie/css/responsive2.css') }}"/>
    <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('movie/images/header/favicon.ico') }}"/>
</head>

<body>
<!-- preloader Start -->
<div id="preloader">
    <div id="status">
        <img src="{{ asset('movie/images/header/horoscope.gif') }}" id="preloader_image" alt="loader">
    </div>
</div>

<!-- Header -->
@include('client.partials.header')
<!-- End Header -->

@yield('content')

<!-- Footer -->
@include('client.partials.footer')
<!-- End Footer -->

<!-- st login wrapper Start -->
<div class="modal fade st_pop_form_wrapper" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="st_pop_form_heading_wrapper float_left">
                <h3>Log in</h3>
            </div>
            <div class="st_profile_input float_left">
                <label>Email / Mobile Number</label>
                <input type="text">
            </div>
            <div class="st_profile__pass_input st_profile__pass_input_pop float_left">
                <input type="password" placeholder="Password">
            </div>
            <div class="st_form_pop_fp float_left">
                <h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Forgot Password?</a></h3>
            </div>
            <div class="st_form_pop_login_btn float_left"><a
                    href="https://webstrot.com/html/moviepro/html/page-1-7_profile_settings.html">LOGIN</a>
            </div>
            <div class="st_form_pop_or_btn float_left">
                <h4>or</h4>
            </div>
            <div class="st_form_pop_facebook_btn float_left"><a href="#"> Connect with Facebook</a>
            </div>
            <div class="st_form_pop_gmail_btn float_left"><a href="#"> Connect with Google</a>
            </div>
            <div class="st_form_pop_signin_btn float_left">
                <h4>Don’t have an account? <a href="#" data-toggle="modal" data-target="#myModa3" target="_blank">Sign
                        Up</a></h4>
                <h5>I agree to the <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></h5>
            </div>
        </div>
    </div>
</div>
<div class="modal fade st_pop_form_wrapper" id="myModa2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="st_pop_form_heading_wrapper st_pop_form_heading_wrapper_fpass float_left">
                <h3>Forgot Password</h3>
                <p>We can help! All you need to do is enter your email ID and follow the instructions!</p>
            </div>
            <div class="st_profile_input float_left">
                <label>Email Address</label>
                <input type="text">
            </div>
            <div class="st_form_pop_fpass_btn float_left"><a href="#">Verify</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade st_pop_form_wrapper" id="myModa3" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="st_pop_form_heading_wrapper float_left">
                <h3>Sign Up</h3>
            </div>
            <div class="st_profile_input float_left">
                <label>Email / Mobile Number</label>
                <input type="text">
            </div>
            <div class="st_profile__pass_input st_profile__pass_input_pop float_left">
                <input type="password" placeholder="Password">
            </div>
            <div class="st_form_pop_fp float_left">
                <h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Forgot Password?</a></h3>
            </div>
            <div class="st_form_pop_login_btn float_left"><a
                    href="https://webstrot.com/html/moviepro/html/page-1-7_profile_settings.html">LOGIN</a>
            </div>
            <div class="st_form_pop_or_btn float_left">
                <h4>or</h4>
            </div>
            <div class="st_form_pop_facebook_btn float_left"><a href="#"><i class="fab fa-facebook-f"></i> Connect with
                    Facebook</a>
            </div>
            <div class="st_form_pop_gmail_btn float_left"><a href="#"><i class="fab fa-google-plus-g"></i> Connect with
                    Google</a>
            </div>
            <div class="st_form_pop_signin_btn st_form_pop_signin_btn_signup float_left">
                <h5>I agree to the <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></h5>
            </div>
        </div>
    </div>
</div>
<!-- st login wrapper End -->

<!--main js file start-->
<script src="{{ asset('movie/js/jquery_min.js') }}"></script>
<script src="{{ asset('movie/js/modernizr.js') }}"></script>
<script src="{{ asset('movie/js/bootstrap.js') }}"></script>
<script src="{{ asset('movie/js/owl.carousel.js') }}"></script>
<script src="{{ asset('movie/js/jquery.dlmenu.js') }}"></script>
<script src="{{ asset('movie/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('movie/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('movie/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('movie/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('movie/js/venobox.min.js') }}"></script>
<script src="{{ asset('movie/js/smothscroll_part1.js') }}"></script>
<script src="{{ asset('movie/js/smothscroll_part2.js') }}"></script>
<script src="{{ asset('movie/js/slick.js') }}"></script>
<script src="{{ asset('movie/js/custom2.js') }}"></script>
<!--main js file end-->
</body>


</html>
