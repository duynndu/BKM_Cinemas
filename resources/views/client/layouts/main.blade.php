<!DOCTYPE html>
<html lang="vi">


<!-- Mirrored from touchcinema.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 15:01:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XZVGYE20GD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-XZVGYE20GD');
    </script>
    <title>@yield('title')</title>
    <meta name="description"
          content="Rạp chiếu phim Touch Cinema với chất lượng âm thanh & hình ảnh đạt chuẩn quốc tế đầu tiên tại Pleiku, Gia Lai. Đặt vé ngay hôm nay để nhận được nhiều ưu đãi!">
    <meta property="og:title" content="Touch Cinema - Rạp chiếu phim công nghệ hiện đại đầu tiên tại Gia Lai" />
    <meta property="og:description"
          content="Rạp chiếu phim Touch Cinema với chất lượng âm thanh & hình ảnh đạt chuẩn quốc tế đầu tiên tại Pleiku, Gia Lai. Đặt vé ngay hôm nay để nhận được nhiều ưu đãi!" />
    <meta property="og:image" content="https://touchcinema.com//images/touchcinema.jpg" />
    <meta name="twitter:title" content="Touch Cinema - Rạp chiếu phim công nghệ hiện đại đầu tiên tại Gia Lai" />
    <meta name="twitter:description"
          content="Rạp chiếu phim Touch Cinema với chất lượng âm thanh & hình ảnh đạt chuẩn quốc tế đầu tiên tại Pleiku, Gia Lai. Đặt vé ngay hôm nay để nhận được nhiều ưu đãi!" />
    <link rel="canonical" href="index.html">
    <meta charset="utf-8">
    <meta property="fb:pages" content="1853915061599035" />
    <meta name="google-site-verification" content="SxvPRCl-fvBTkk86cD376h47_B7wRg2KKYywKfqE9ic" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="robots" content="all">
    <meta name="DC.title" content="Rạp Chiếu Phim Touch Cinema" />
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Pleiku" />
    <meta name="geo.position" content="13.975171;108.014852" />
    <meta name="ICBM" content="13.975171, 108.014852" />
    <meta name="theme-color" content="#ea3b92" />

    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=latin,latin-ext"
          rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style_movie.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf_token" content="BXV7TW2mEar4PBN8BArnTk122Kc6ghxfnEGHC0fk">

    @yield('css')
</head>

<body>

<div id="fb-root"></div>
<div id="app">
    <div id="header">
        <div class="container">
            <div class="logo">
                <h1>
                    <strong>Touch Cinema - Rạp chiếu phim công nghệ hiện đại đạt chuẩn quốc tế</strong>
                    <a href="index.html"><img style="max-width: 100%" src="images/touchcinema.png"
                                              alt="touchcinema" /></a>
                </h1>
            </div>
            <div class="primary-menu">
                <div class="top-button">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <a class="buy-ticket" href="#"><img class="img-responsive"
                                                                src="images/icons/dat-ve-ngay.png" alt="Mua vé" /></a>
                            <a class="flags" href="#"><img class="img-responsive" src="images/flags/vn.png"
                                                           alt="Ngôn ngữ" /></a>
                            <a class="hidden-lg btn-search" href="javascript:;"><i class="fa fa-search"></i></a>
                            <form action="https://touchcinema.com/tim-kiem" class="form-search visible-lg">
                                <div class="input-group">
                                    <input class="form-control" name="k" value="" type="search"
                                           placeholder="Tìm kiếm">
                                    <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-5 account">
                            <a href="login.html" class="login">
                                <img src="images/icons/so-da.png" alt="Đăng nhập" class="img-responsive">
                                <span>Đăng nhập</span>
                            </a>
                            <a href="register.html" class="register">
                                <img src="images/icons/bong-ngo.png" alt="Đăng kí" class="img-responsive">
                                <span>Đăng kí <b class="hh">thành viên</b></span>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-default" role="navigation" id="touchcinema-fixed-top">
                    <div id="primary-menu">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="active"><a href="index.html">Trang chủ</a></li>
                                <li class=""><a href="phim.html">Phim</a></li>
                                <li class=""><a href="lich-chieu.html">Lịch chiếu</a></li>
                                <li class=""><a href="gia-ve.html">giá vé</a></li>
                                <li class=""><a href="thanh-vien.html">Thành viên</a></li>
                                <li class=""><a href="khuyen-mai.html">Ưu đãi - Sự kiện</a></li>
                                <li class=""><a href="danh-gia-phim.html">Đánh giá phim</a></li>
                                <li class=""><a href="gioi-thieu.html">Giới thiệu</a></li>
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false">
                                        Dịch vụ</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="dich-vu/quang-cao-su-kien.html">
                                                Dịch vụ quảng cáo - sự kiện
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dich-vu/touch-voucher.html">
                                                Touch Voucher
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <div class="notification-box">
                                        <div id="noti_Button" class=" notifications">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                        </div>
                                        <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                                        <div id="notifications">
                                            <h3>Thông báo</h3>
                                            <div class="list-notifications">
                                                <ul>
                                                    <li>
                                                        <a href="index.html">
                                                            <b>NGÀY CUỐI ĐỔI ĐIỂM THÀNH VIÊN TOUCH CINEMA
                                                                2023⚡⚡⚡</b>
                                                            <p>Trân trọng kính mời quý khách hàng đổi điểm thưởng
                                                                thành viên Touch Cinema (Đổi online tại app/web
                                                                Touch Cinema cho các suất đã có lịch chiếu hoặc đổi
                                                                trực tiếp tại quầy). 00H 1/1/2024 Hệ thống sẽ tự
                                                                động reset điểm về 0.</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">
                                                            <b>Khuyến mãi mới từ Touch Cinema</b>
                                                            <p>Khuyến mãi từ Touch Cinema: TOUCHxYOUNGFEST</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="phim/nha-ba-nu.html">
                                                            <b>💵Nhà Bà Nữ: Cán mốc 50 tỷ</b>
                                                            <p>❤️Bộ phim về gia đình chân thật và ý nghĩa, hứa hẹn
                                                                sẽ chạm đến cảm xúc của người xem.</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="phim/nha-ba-nu.html">
                                                            <b>🦀 Nhà Bà Nữ - Bánh canh cua đủ vị</b>
                                                            <p>Đến Touch Cinema ”book” ngay món bánh canh cua Nhà Bà
                                                                Nữ. Đồng cảm với những hoài bão, khát vọng và cả sự
                                                                nông nổi của tuổi trẻ… 🥰</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">
                                                            <b>Touch Cinema Happy New Year!!!🎊</b>
                                                            <p>Nhân dịp tết Quý Mão 2023 kính chúc quý khách cùng
                                                                gia đình mạnh khỏe, an khang thịnh vượng, vạn sự như
                                                                ý, vạn sự thành công💕💕💕💕</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="phim/avatar-dong-chay-cua-nuoc.html">
                                                            <b>🎬Avatar 2 - tuyệt tác điện ảnh</b>
                                                            <p>💦Ra mắt sau hàng thập kỷ chờ đợi của khán giả. Bom
                                                                tấn khoa học viễn tưởng mang đến góc nhìn mới lạ về
                                                                Pandora và câu chuyện cảm động về tình cảm gia đình.
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="phim/black-adam.html">
                                                            <b>🏵️ Black Adam chiếu sớm từ 20/10</b>
                                                            <p>💣 Bom tấn cuối cùng của nhà DC trong năm nay đem đến
                                                                những phân cảnh hành động hoành tráng của The Rock,
                                                                khuấy đảo màn ảnh rộng</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="index.html">
                                                            <b>Khuyến mãi mới từ Touch Cinema</b>
                                                            <p>Khuyến mãi từ Touch Cinema: 10.10 TOUCHxGRAB MUA 1
                                                                TẶNG 1 BẮP RANG BƠ</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div id="wrap">
        @yield('content')
    </div>
    @include('client.partials.footer')
    <div class="modal fade" id="modal-login">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Đăng nhập</h4>
                </div>
                <div class="modal-body">
                    <div id="login">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="login-method">Đăng nhập bằng tài khoản</div>
                                <form name="sloginform" class="sgp-login-form"
                                      action="https://touchcinema.com/login" method="post">
                                    <input type="hidden" name="_token"
                                           value="BXV7TW2mEar4PBN8BArnTk122Kc6ghxfnEGHC0fk">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" value=""
                                               placeholder="Địa chỉ Email" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Mật khẩu" required />
                                    </div>
                                    <div class="form-group">
                                        <input name="remember" class="rememberme" type="checkbox" checked="checked"
                                               value="forever" /> Nhớ mật khẩu
                                        <span><a href="password/reset.html">Quên mật khẩu</a></span>
                                    </div>
                                    <input type="submit" name="swp-submit" class="btn btn-success"
                                           value="Đăng nhập" />
                                </form>
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs">
                                <div>Hoặc</div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="login-method">Đăng nhập bằng tài khoản mạng xã hội</div>
                                <a class="login-social"
                                   href="https://www.facebook.com/v3.0/dialog/oauth?client_id=1700069773628064&amp;redirect_uri=https%3A%2F%2Ftouchcinema.com%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code"
                                   title="Login with facebook"><img class="img-responsive" src="images/fb.png"
                                                                    alt="Facebook" /></a>
                                <a class="login-social"
                                   href="https://accounts.google.com/o/oauth2/auth?client_id=466904351297-msl2laa82gh9ugqhp3n0j6gor1c6kr9k.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Ftouchcinema.com%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code"
                                   title="Login with google"><img class="img-responsive" src="images/gp.png"
                                                                  alt="Google" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('movie/js/statics/js/jquery.js') }}"></script>
<script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
</script>
<script type="text/javascript">
    var url_get_showtime_data = 'lich-chieu.html';
    var url_dat_ve = 'dat-ve/index.html';

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });
    });
</script>
<script type="text/javascript" src="{{ asset('movie/js/statics/js/scripts.js') }}"></script>
<script src="{{ asset('movie/js/statics/js/showtime-widget.js') }}"></script>
<div class="main-popup">
    <div class="main-popup-content">
        <img src="storage/slider-app/hai-muoi-payoff-poster-khoi-chieu-30082024-1.jpg" />
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var mainpopup = sessionStorage.getItem('mainpopup');
        if (!mainpopup) {
            $("body").addClass("open-main-popup");
        }
        $(".main-popup").click(function () {
            sessionStorage.setItem('mainpopup', 'close');
            $("body").removeClass("open-main-popup");
        })
    })
</script>
<script type="text/javascript" src="{{ asset('movie/js/statics/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script>
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
</script>
<div id="notification">
    <div class="setting-content">
        <a href="javascript:;" class="setting-noti register" data-toggle="popover"
           data-content="Đăng ký để nhận thông báo mới nhất về lịch chiếu và các chương trình khuyến mãi"
           data-placement="left" data-trigger="hover">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <div class="animated infinite zoomIn circle"></div>
            <div class="animated infinite pulse fill"></div>
        </a>
    </div>
    <div class="bell-popup" id="setting-setup">
        <div class="bell-title">Cài đặt thông báo</div>
        <div class="divider"></div>
        <div class="bell-content">
            <div class="bell-group">
                <input id="bell-web_post" type="checkbox" name="topic[]" value="posts">
                <label for="bell-web_post">Đăng ký nhận tin tức, khuyến mãi</label>
            </div>
            <div class="bell-group">
                <input id="bell-web_movie" type="checkbox" name="topic[]" value="movies">
                <label for="bell-web_movie">Đăng ký nhận thông tin phim mới</label>
            </div>
            <div class="divider"></div>
            <div class="bell-group bell-gr-btn">
                <button type="button" id="update-notification">Cập nhật</button>
                <button type="button" id="cancel-notification">Hủy đăng ký</button>
            </div>
        </div>
    </div>
    <div class="bell-popup" id="setallow">
        <div class="bell-title">Mở khóa thông báo</div>
        <div class="divider"></div>
        <div class="bell-content">
            <p>Hãy làm theo hướng dẫn sau để cho phép thông báo</p>
            <a href="../onesignal.com/bell/chrome-unblock.html" target="_blank">
                <img src="../onesignal.com/bell/chrome-unblock.html" />
            </a>
        </div>
    </div>
    <div class="bell-popup" id="boxregister">
        <div class="bell-title">Quản lý thông báo</div>
        <div class="divider"></div>
        <div class="bell-content">
            <a href="../onesignal.com/bell/chrome-unblock.html" target="_blank">
                <img src="../onesignal.com/bell/chrome-unblock.html" />
            </a>
            <div class="bell-group bell-gr-btn">
                <button type="button" id="register">Đăng ký</button>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
		var FIREBASE_SERVER_KEY = 'AAAABqrWja0:APA91bHkMWpVJjUP6vCGHq7rYRqmlEbjMTOAETV8Zt_88e6ZfXkbgX9kiyz6MZbt2DuNHr9Cw0cMptDwuX20h-hgmsYz5-xU3A9PIHqvGyzABO2hR31LmjGpBjMNAfSpHGQm5vOe7b_t';
		var firebase_first_notification = 'firebase/first-notification.html';
	</script> -->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="{{ asset('movie/js/statics/js/firebase-app.js') }}"></script>
<script src="{{ asset('movie/js/statics/js/firebase-messaging.js') }}"></script>
<script src="{{ asset('movie/js/statics/js/firebase-notification6aa7.js?20200915') }}"></script>
<!-- <script>
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1700069773628064";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script> -->
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<!-- <script>
		var chatbox = document.getElementById('fb-customer-chat');
		chatbox.setAttribute("page_id", "1853915061599035");
		chatbox.setAttribute("attribution", "biz_inbox");
	</script> -->

<!-- Your SDK code -->
<!-- <script>
		window.fbAsyncInit = function () {
			FB.init({
				xfbml: true,
				version: 'v12.0'
			});
		};

		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script> -->

@yield('js')

</body>


<!-- Mirrored from touchcinema.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 15:02:47 GMT -->

</html>
