<div id="header">
    <div class="container">
        <div class="logo">
            <h1>
                <strong>BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.</strong>
                <a href="{{ route('home') }}"><img style="max-width: 100%" src="{{ asset('client/images/logo.png') }}"
                        alt="touchcinema" /></a>
            </h1>
        </div>
        <div class="primary-menu">
            <div class="top-button">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <a class="buy-ticket" href="#"><img class="img-responsive"
                                src="{{ asset('client/images/icons/dat-ve-ngay.png') }}" alt="Mua vé" /></a>
                        <a class="flags" href="#"><img class="img-responsive"
                                src="{{ asset('client/images/vn.png') }}" alt="Ngôn ngữ" /></a>
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
                        @guest
                            <a href="{{ route('account') }}" class="login"
                                style="background-image: url({{ asset('client/images/login-bg.png') }});">
                                <img src="{{ asset('client/images/icons/so-da.png') }}" alt="Đăng nhập"
                                    class="img-responsive">
                                <span>Đăng nhập</span>
                            </a>
                            <a href="{{ route('account') }}" class="register"
                                style="background-image: url({{ asset('client/images/reg-bg.png') }});">
                                <img src="{{ asset('client/images/icons/bong-ngo.png') }}" alt="Đăng kí"
                                    class="img-responsive">
                                <span>Đăng kí <b class="hh">thành viên</b></span>
                            </a>
                        @else
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    @php
                                        $user = Auth::user();
                                        $avatarUrl = $user->image ?? '';
                                        $firstLetter = strtoupper(substr($user->last_name ?? $user->first_name, 0, 1));
                                        $colors = ['#FF5733', '#3374ff', '#3357FF', '#FF33A6', '#4ec1bc', '#7c8484'];
                                        $backgroundColor = $colors[$user->id % count($colors)];
                                    @endphp

                                    <a class="account" href="{{ route('account') }}">
                                        @if ($avatarUrl)
                                            <img class="avatar" src="{{ $avatarUrl }}"
                                                alt="{{ $user->first_name . ' ' . $user->last_name }}">
                                        @else
                                            <div class="avatar-placeholder"
                                                style="background-color: {{ $backgroundColor }};">
                                                {{ !empty($firstLetter) ? $firstLetter : strtoupper(substr($user->name, 0, 1)) }}
                                            </div>
                                        @endif
                                        <span class="name">
                                            @auth
                                                @if (!empty($user->first_name) && !empty($user->last_name))
                                                    {{ $user->first_name . ' ' . $user->last_name }}
                                                @else
                                                    {{ $user->name }}
                                                @endif
                                            @endauth
                                            <small style="margin-top: 5px">
                                                @if ($user->isAdmin())
                                                    Quản trị viên
                                                @elseif($user->isManage())
                                                    Quản lý rạp
                                                @elseif($user->isStaff())
                                                    Nhân viên rạp
                                                @else
                                                    Thành viên
                                                @endif
                                            </small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" type="button" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('account') }}">Thông tin tài khoản</a>
                                            </li>
                                            @if (Auth::check() && Auth::user()->type !== 'member')
                                                <li>
                                                    <a href="{{ route('admin.dashboard') }}">Vào trang quản trị</a>
                                                </li>
                                            @endif
                                            <li>
                                                <a href="https://touchcinema.com/account/transaction">Lịch sử mua vé</a>
                                            </li>
                                            <li>
                                                <a href="https://touchcinema.com/account/profile">Đổi thông tin</a>
                                            </li>
                                            <li>
                                                <a href="https://touchcinema.com/account/password">Đổi mật khẩu</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">Đổi thưởng</a>
                                            </li>
                                            <li role="presentation" class="divider"></li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit">Đăng xuất</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        @endguest
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default" role="navigation" id="touchcinema-fixed-top">
                <div id="primary-menu">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('movie') ? 'active' : '' }}">
                                <a
                                    href="{{ route('movie') }}">
                                    Phim
                                </a>
                            </li>
                            <li class="">
                                <a href="lich-chieu">
                                    Lịch chiếu
                                </a>
                            </li>
                            <li class="">
                                <a href="gia-ve">
                                    giá vé
                                </a>
                            </li>
                            <li class="">
                                <a href="thanh-vien">
                                    Thành viên
                                </a>
                            </li>
                            <li class="">
                                <a href="khuyen-mai">
                                    Ưu đãi - Sự kiện
                                </a>
                            </li>
                            <li class="">
                                <a href="danh-gia-phim">
                                    Đánh giá phim
                                </a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <a
                                    href="{{ route('about') }}">
                                    Giới thiệu
                                </a>
                            </li>
                            <li class="dropdown ">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    Dịch vụ
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('post.detail', ['cate_slug' => 'dich-vu', 'slug' => 'quang-cao-su-kien']) }}">
                                            Dịch vụ quảng cáo - sự kiện
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.detail', ['cate_slug' => 'dich-vu', 'slug' => 'bkm-voucher']) }}">
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
                    </div>
                </div>
            </nav>
        </div>

        {{-- menu mobile --}}
        <div class="menu-mobile">
            <div class="menu-icon">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>

            {{-- <div class="menu-mobile-background "></div> --}}
            <div class="menu-mobile-content ">
                <div class="menu-mobile-search">
                    <form action="" method="post">
                        <input type="text" placeholder="Tìm kiếm..." class=" menu-search--mobile">
                    </form>
                </div>
                <button class="btn-close-menu">
                    <i class="fa fa-close " aria-hidden="true"></i>
                </button>

                <ul>
                    <li class="menu-item ">
                        <a href="phim.html">Phim <i class="fa-solid fa-angle-down menu-icon-right"></i></a>
                        <ul class="submenu">
                            <li>
                                <a href="phim/nha-ba-nu.html">Nhà Bà Nú</a>
                            </li>
                            <li>
                                <a href="phim/avatar-dong-chay-cua-nuoc.html">Avatar 2</a>
                            </li>
                            <li>
                                <a href="phim/black-adam.html">Black Adam</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="lich-chieu.html">Lịch chiếu</a>

                    </li>
                    <li class="menu-item">
                        <a href="phim.html">Phim 123 <i class="fa-solid fa-angle-down menu-icon-right"></i></a>

                        <ul class="submenu">
                            <li>
                                <a href="phim/nha-ba-nu.html">Nhà Bà Nú</a>
                            </li>
                            <li>
                                <a href="phim/avatar-dong-chay-cua-nuoc.html">Avatar 2</a>
                            </li>
                            <li>
                                <a href="phim/black-adam.html">Black Adam</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="gia-ve.html">giá vé</a>
                    </li>
                    <li>
                        <a href="thanh-vien.html">Thành viên</a>
                    </li>
                    <li>
                        <a href="khuyen-mai.html">Ưu khôngi - Sự kiện</a>
                    </li>
                    <li>
                        <a href="danh-gia-phim.html">Đánh giá phim</a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('about') ? 'active' : '' }}">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="lien-he.html">Lien hệ</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
