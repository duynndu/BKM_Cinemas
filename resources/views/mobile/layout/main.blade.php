<!DOCTYPE html>
<html lang="vi">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="keywork"content="@yield('keywork')">
    <meta name="description"content="@yield('description')">

    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="robots" content="all">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('mobile/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mobile/css/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')
</head>

<body class="touch">
    <div id="page">
        @include('mobile.partials.header')


        @yield('content')

        @include('mobile.partials.footer')


        <div class="modalmenu">
        </div>
    </div>

    <style type="text/css">
        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .animated.infinite {
            animation-iteration-count: infinite;
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale3d(.3, .3, .3);
            }

            50% {
                opacity: 1;
            }
        }

        .zoomIn {
            animation-name: zoomIn;
        }

        @keyframes pulse {
            from {
                transform: scale3d(1, 1, 1);
            }

            50% {
                transform: scale3d(1.05, 1.05, 1.05);
            }

            to {
                transform: scale3d(1, 1, 1);
            }
        }

        .pulse {
            animation-name: pulse;
        }

        #notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            display: none;
        }

        #notification .setting-content .setting-noti {
            display: block;
            position: relative;
            text-align: left;
            width: 60px;
            height: 60px;
            cursor: pointer;
        }

        .setting-noti i {
            width: 40px;
            height: 40px;
            margin: 10px;
            background: #f29438;
            color: #fff;
            border-radius: 100%;
            font-size: 20px;
            text-align: center;
            line-height: 1.9;
            position: relative;
            z-index: 999;
        }

        .setting-noti .circle {
            width: 50px;
            height: 50px;
            top: 5px;
            left: 5px;
            position: absolute;
            background-color: transparent;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid rgba(30, 30, 30, 0.4);
            opacity: .1;
            border-color: #f29438;
            opacity: .5;
        }

        .setting-noti .fill {
            width: 60px;
            height: 60px;
            top: 0;
            left: 0;
            position: absolute;
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            background-color: rgba(242, 148, 56, 0.5);
            opacity: .75;
            right: -10px;
        }

        .setting-noti span.message {
            border-radius: 2px;
            text-align: center;
            background: #ea3b92;
            padding: 9px;
            display: none;
            width: max-content;
            width: -moz-max-content;
            margin-left: 10px;
            position: absolute;
            color: #ffffff;
            z-index: 999;
            top: 12px;
            right: 70px;
            transition: all 0.2s ease-in-out 0s;
        }

        .setting-noti span.message:before {
            content: "";
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px;
            border-right-width: 0;
            border-color: transparent transparent transparent #ea3b92;
            position: absolute;
            right: -10px;
            top: 10px;
        }

        .bell-popup {
            position: absolute;
            bottom: 70px;
            right: 0;
            width: 280px;
            background: #FFF;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            display: none;
        }

        .bell-popup:after {
            content: " ";
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px;
            border-bottom-width: 0;
            border-color: #FFF transparent transparent transparent;
            position: absolute;
            right: 20px;
            bottom: -10px;
        }

        .bell-popup .divider {
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            margin: 5px -10px;
        }

        .bell-popup .bell-title {
            text-align: center;
            font-size: 18px;
            color: #ea3b92;
        }

        .bell-popup img {
            max-width: 100%;
        }

        .bell-group {
            padding: 5px 0;
        }

        .bell-gr-btn {
            text-align: center;
        }

        .bell-group button {
            background: #ea3b92;
            color: #FFF;
            border: none;
            padding: 3px 15px;
            border-radius: 3px;
        }

        #notification .popover {
            width: max-content !important;
        }

        .notification-popover {
            width: auto;
            background-color: #ea3b92;
            color: #FFF;
            position: fixed;
        }

        .notification-popover.popover.left>.arrow:after {
            border-left-color: #ea3b92;
        }

        #setallow {
            display: none;
        }

        @media only screen and (min-width: 786px) {}
    </style>
    <!-- Scripts -->
    <script src="{{ asset('mobile/statics/mobile/js/jquery.min.js') }}"></script>
    <script src="{{ asset('mobile/statics/mobile/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('mobile/statics/mobile/js/custom.js') }}"></script>



    @yield('js')



</body>

</html>
