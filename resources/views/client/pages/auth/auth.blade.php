@extends('client.layouts.main')

@section('title', Auth::check() ? 'Thông tin tài khoản' : 'Đăng ký - Đăng nhập | BKM Cinemas')

@section('css')
    <style>
        .btn-cancelled-ticket {
            padding: 5px 10px;
            background-color: #eb1689;
            color: #fff;
            box-shadow: -2px 0 4px #000;
            border-radius: 0;
            font-size: 12px;
        }

        .transaction-reward th {
            padding: 7px;
            font-size: 13px;
        }

        .transaction-reward td {
            padding: 7px;
            font-size: 13px;
        }

        @media screen and (min-width: 850px) {
            .col:first-child .col-inner {
                margin-left: auto;
                margin-right: 0;
            }
        }

        .col-inner {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            flex: 1 0 auto;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            width: 100%;
        }

        .order-view-container .order-view-content, .order-view-container .order-view-content p, .order-view-container .order-view-content td, .order-view-container .order-view-content h1, .order-view-container .order-view-content h2, .order-view-container .order-view-content h3, .order-view-container .order-view-content h4, .order-view-container .order-view-content h5, .order-view-container .order-view-content h6, .order-view-container .order-view-content .heading-font {
            color: black;
        }

        .order-view-container .order-view-content {
            height: 100%;
        }

        .order-view-container .order-view-content > .row {
            height: 100%;
        }

        .row-collapse > .col, .row-collapse > .flickity-viewport > .flickity-slider > .col {
            padding: 0 !important;
        }

        @media screen and (min-width: 850px) {
            .gallery-columns-1 .gallery-item, .large-12, .large-columns-1 .flickity-slider > .col, .large-columns-1 > .col {
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        @media screen and (min-width: 550px) {
            .medium-12, .medium-columns-1 .flickity-slider > .col, .medium-columns-1 > .col {
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        .small-12, .small-columns-1 .flickity-slider > .col, .small-columns-1 > .col {
            flex-basis: 100%;
            max-width: 100%;
        }

        .col, .columns, .gallery-item {
            margin: 0;
            position: relative;
            width: 100%;
        }

        .col-inner {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            flex: 1 0 auto;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            width: 100%;
        }

        @media screen and (min-width: 850px) {
            .col:first-child .col-inner {
                margin-left: auto;
                margin-right: 0;
            }
        }

        .order-view-container .order-view-content > .row > .col.content-col > .col-inner {
            position: relative;
            background-color: #f4f5f6;
            border-radius: 20px;
        }

        .gallery, .row {
            display: flex;
            flex-flow: row wrap;
            width: 100%;
        }

        .row-collapse {
            padding: 0;
        }

        .row.row-collapse {
            max-width: 1300px;
        }

        @media screen and (min-width: 550px) {
            .medium-3 {
                flex-basis: 25%;
                max-width: 25%;
            }
        }

        @media screen and (min-width: 850px) {
            .large-3 {
                flex-basis: 25%;
                max-width: 25%;
            }
        }

        .row-collapse > .col, .row-collapse > .flickity-viewport > .flickity-slider > .col {
            padding: 0 !important;
        }

        .col-inner {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            flex: 1 0 auto;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            width: 100%;
        }

        @media screen and (min-width: 850px) {
            .col:first-child .col-inner {
                margin-left: auto;
                margin-right: 0;
            }
        }

        .order-details-row > .col > .col-inner {
            padding: 20px;
        }

        .text-center {
            text-align: center;
        }

        .order-details-row .qrcode-image {
            max-width: 160px;
            margin: auto;
        }

        .text-center .is-divider, .text-center .is-star-rating, .text-center .star-rating, .text-center > div, .text-center > div > div {
            margin-left: auto;
            margin-right: auto;
        }

        .order-details-row .qrcode-image > div {
            line-height: 1.2em;
            margin-bottom: 7px;
        }

        .order-details-row .qrcode-image > div:last-child {
            margin-bottom: 0px;
        }

        .order-details-row .code {
            color: #72be43;
            font-weight: bold;
        }

        @media screen and (min-width: 550px) {
            .medium-9 {
                flex-basis: 75%;
                max-width: 75%;
            }
        }

        @media screen and (min-width: 850px) {
            .large-9 {
                flex-basis: 75%;
                max-width: 75%;
            }
        }

        .row-collapse > .col, .row-collapse > .flickity-viewport > .flickity-slider > .col {
            padding: 0 !important;
        }

        @media screen and (min-width: 850px) {
            .row-divided > .col + .col:not(.large-12) {
                border-left: 1px solid #eb1689;
            }
        }

        .order-view-container .row-divided > .col + .col:not(.large-12) {
            border-left-style: dashed;
            border-left-color: rgb(0 0 0 / 30%);
        }

        .col-inner {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            flex: 1 0 auto;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            width: 100%;
        }

        @media screen and (min-width: 850px) {
            .col:first-child .col-inner {
                margin-left: auto;
                margin-right: 0;
            }
        }

        @media screen and (min-width: 850px) {
            .col + .col .col-inner {
                margin-left: 0;
                margin-right: auto;
            }
        }

        .order-details-row > .col > .col-inner {
            padding: 20px;
        }

        .align-middle {
            align-items: center !important;
            align-self: center !important;
            vertical-align: middle !important;
        }

        .icon-box-left, .icon-box-right {
            display: flex;
            flex-flow: row wrap;
            width: 100%;
        }

        .text-left {
            text-align: left;
        }

        .icon-box .icon-box-img {
            margin-bottom: 1em;
            max-width: 100%;
            position: relative;
        }

        .icon-box-left .icon-box-img, .icon-box-right .icon-box-img {
            flex: 0 0 auto;
            margin-bottom: 0;
            max-width: 200px;
        }

        .icon-box-left .icon-box-text, .icon-box-right .icon-box-text {
            flex: 1 1 0px;
        }

        .icon-box-left .icon-box-img + .icon-box-text {
            padding-left: 1em;
        }

        .order-film-box .title {
            font-size: 1.3em;
            line-height: 1.3em;
            margin-bottom: 15px;
            text-align: left;
            font-weight: 700;
        }

        .order-film-box .metas ul {
            margin: 0px 0px 15px;
            padding: 0px;
            list-style: none;
            font-size: 0.9em;
        }

        .col-inner ol li, .col-inner ul li, .entry-content ol li, .entry-content ul li, .entry-summary ol li, .entry-summary ul li {
            margin-left: 1.3em;
        }

        .order-film-box .metas ul li {
            margin: 0px 0px 10px;
        }

        .modal-tikets {
            width: 1300px;
        }

        img {
            border-style: none;
        }

        img {
            display: inline-block;
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        img {
            opacity: 1;
            transition: opacity 1s;
        }

        .order-film-box .metas ul li img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            float: left;
            margin-top: 3px;
        }

        .row.ticket-row {
            font-size: 0.9em;
            margin-bottom: 15px ! Important;
        }

        .row.row-small {
            max-width: 1322.5px;
        }

        .container .row:not(.row-collapse), .lightbox-content .row:not(.row-collapse), .row .gallery, .row .row:not(.row-collapse) {
            margin-left: -15px;
            margin-right: -15px;
            padding-left: 0;
            padding-right: 0;
            width: auto;
        }

        .container .row-small:not(.row-collapse), .row .row-small:not(.row-collapse) {
            margin-bottom: 0;
            margin-left: -10px;
            margin-right: -10px;
        }

        @media screen and (min-width: 550px) {
            .medium-12, .medium-columns-1 .flickity-slider > .col, .medium-columns-1 > .col {
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        @media screen and (min-width: 850px) {
            .large-3 {
                flex-basis: 25%;
                max-width: 25%;
            }
        }

        .row-small > .col, .row-small > .flickity-viewport > .flickity-slider > .col {
            margin-bottom: 0;
            padding: 0 9.8px 19.6px;
        }

        .ticket-row .col {
            padding-bottom: 0px;
        }

        @media screen and (min-width: 850px) {
            .col:first-child .col-inner {
                margin-left: auto;
                margin-right: 0;
            }
        }

        @media screen and (min-width: 850px) {
            .col + .col .col-inner {
                margin-left: 0;
                margin-right: auto;
            }
        }

        .ticket-row p {
            margin-bottom: 5px;
        }

        .order-film-box .total {
            font-size: 1.2em;
            font-weight: bold;
        }

        .order-film-box .total span {
            color: #72be43;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .fw-700 {
            font-weight: 700;
        }

        .d-flex {
            display: flex !important;
        }
        .justify-content-center {
            justify-content: center !important;
        }
        .align-items-center {
            align-items: center !important;
        }

        .p-5 {
            padding: 10rem !important;
        }

        .no-ticket {
            border: 1px solid #d9d9d9;
            margin-top: 25px;
            border-radius: 4px;
            background: #f5f5f5;
        }

        .flex-column {
            flex-direction: column !important;
        }
    </style>

@endsection

@section('content')

    <div class="container">
        <div class="row" style="margin-bottom: 20px">
            <div class="">
                <img width="100%" src="https://bhdstar.vn/wp-content/uploads/2024/10/banner-top.jpg" alt="">
            </div>
        </div>
        <div class="row  ticket-login">
            <div class="col-md-3 col-sm-3">
                @include('client.components.sidebar-auth')
            </div>
            <div class="col-md-9 col-sm-9 login-wrap">
                <div class="tab-content">
                    @guest
                        <div id="dang-nhap" class="mbox tab-pane fade active in">
                            <div class="title">
                                <h2>Đăng nhập</h2>
                            </div>
                            <div style="padding: 20px 20px;">
                                <div class="row flex">
                                    <div class="col-md-7 col-sm-6">
                                        <form data-image="{{ asset('client/images/success.png') }}" class="form-login"
                                              action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="emailOrPhone">Email hoặc Số điện thoại:</label>
                                                <input id="emailOrPhone" type="text" name="emailOrPhone"
                                                       class="form-control emailOrPhone">
                                                <div class="emailOrPhone_error"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Mật khẩu:</label>
                                                <div class="input-group">
                                                    <input id="passwordLogin" type="password" name="password"
                                                           class="form-control password passwordLogin">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text toggle-password" style="cursor: pointer;">
                                                            <i class="fas fa-eye toggle-password-login-icon"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="password_error"></div>
                                            </div>
                                            <div class="form-group">
                                                <input name="remember" id="remember" type="checkbox" value="true">
                                                <label for="remember" class="italic">Ghi nhớ đăng
                                                    nhập</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-login">
                                                Đăng nhập
                                            </button>
                                            <div class="attr-link">
                                                <a data-toggle="tab" aria-expanded="true" href="#quen-mat-khau">Quên mật
                                                    khẩu / <a data-toggle="tab" aria-expanded="true" href="#dang-ky">Đăng
                                                        ký</a>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <span class="center">Hoặc</span>
                                    </div>
                                    <div class="col-md-4 col-sm-5">
                                        <a class="login-social" href="{{ route('facebook.redirectToFacebook') }}"
                                           title="Đăng nhập bằng facebook">
                                            <img class="img-responsive" src="{{ asset('client/images/fb.png') }}"
                                                 alt="Facebook">
                                        </a>

                                        <a class="login-social" href="{{ route('google.redirectToGoogle') }}"
                                           title="Đăng nhập bằng google">
                                            <img class="img-responsive" src="{{ asset('client/images/gp.png') }}"
                                                 alt="Google">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dang-ky" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Đăng ký</h2>
                            </div>
                            <div class="box-body" style="padding: 20px 20px;">
                                <div class="row flex">
                                    <div class="col-md-8 col-sm-6">
                                        <div>
                                            <form data-image="{{ asset('client/images/register_success.png') }}" role="form"
                                                  method="POST" class="form-register" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="email">Tên đăng nhập <span
                                                            style="color: red;">*</span></label>
                                                    <input id="name" type="name" class="form-control name"
                                                           name="name" value="">
                                                    <div class="name_error"></div>
                                                </div>

                                                <div class="row flex form-group">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="name">Họ <span style="color: red;">*</span></label>
                                                        <input id="first_name" type="text" class="form-control first_name"
                                                               name="first_name" value="">
                                                        <div class="first_name_error"></div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="name">Tên đệm và tên <span
                                                                style="color: red;">*</span></label>
                                                        <input id="last_name" type="text" class="form-control last_name"
                                                               name="last_name" value="">
                                                        <div class="last_name_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email">Địa chỉ email <span
                                                            style="color: red;">*</span></label>
                                                    <input id="text" type="email" class="form-control email"
                                                           name="email" value="">
                                                    <div class="email_error"></div>
                                                </div>


                                                <div class="row flex form-group">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="gender">Giới tính <span
                                                                style="color: red;">*</span></label>
                                                        <div class="radio-group">
                                                            <label class="radio-label">
                                                                <input type="radio" name="gender" value="male"> Nam
                                                            </label>
                                                            <label class="radio-label">
                                                                <input type="radio" name="gender" value="female"> Nữ
                                                            </label>
                                                        </div>
                                                        <div class="gender_error"></div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="name">Số điện thoại <span
                                                                style="color: red;">*</span></label>
                                                        <input id="phone" type="text" class="form-control phone"
                                                               name="phone" value="">
                                                        <div class="phone_error"></div>
                                                    </div>
                                                </div>

                                                <div class="row flex form-group">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="password">Mật khẩu <span
                                                                style="color: red;">*</span></label>
                                                        <div class="input-group">
                                                            <input id="passwordRegister" type="password" class="form-control"
                                                                   name="password">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password"
                                                                      style="cursor: pointer;">
                                                                    <i class="fas fa-eye" id="toggle-password-icon"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="password_error"></div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="password-confirm">Nhập lại mật khẩu <span
                                                                style="color: red;">*</span></label>
                                                        <div class="input-group">
                                                            <input id="password-confirm" type="password" class="form-control"
                                                                   name="password_confirmation">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text toggle-password"
                                                                      style="cursor: pointer;">
                                                                    <i class="fas fa-eye"
                                                                       id="toggle-confirm-password-icon"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="password_confirmation_error"></div>
                                                    </div>
                                                </div>

                                                <div class="row flex form-group">
                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="birthday">Ngày sinh <span
                                                                style="color: red;">*</span></label>
                                                        <input id="date_birth" placeholder="-- Ngày Sinh --" type="text"
                                                               class="form-control datepicker" name="date_birth">
                                                        <div class="date_birth_error"></div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6">
                                                        <label for="birthday">Tỉnh/Thành phố <span
                                                                style="color: red;">*</span></label>
                                                        <select name="city_id" id="city" class="select2 w-100">
                                                            <option value="">Chọn thành phố</option>
                                                            @if (!empty($data['cities']))
                                                                @foreach ($data['cities'] as $city)
                                                                    <option value="{{ $city->id }}">{{ $city->name }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <div class="city_id_error"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group flex">
                                                    <input name="is_terms_accepted" id="is_terms_accepted" type="checkbox"
                                                           value="1"> <label for="is_terms_accepted" class="italic">Tôi
                                                        đã
                                                        đọc, hiểu và đồng ý với các <a target="_blank"
                                                                                       href="/quy-dinh-thanh-vien">điều
                                                            khoản</a></label>
                                                    <div style="margin-left: 10px">
                                                        <div style="position: absolute; width: 100%;transform: translateY(-50%);"
                                                             class="is_terms_accepted_error"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group flex position-relative">
                                                    <input name="is_subscribed_promotions" id="is_subscribed_promotions"
                                                           type="checkbox" value="1"> <label for="is_subscribed_promotions"
                                                                                             class="italic">Nhận thông tin chương trình khuyến mãi</label>
                                                    <div style="margin-left: 10px;">
                                                        <div class="is_subscribed_promotions_error"></div>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-login">
                                                    Đăng kí
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div>
                                            <img src="https://cdn.moveek.com/bundles/ornweb/img/mascot.png" width="100%"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="quen-mat-khau" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Quên mật khẩu</h2>
                            </div>
                            <div style="padding: 20px 20px;">
                                <div class="row flex">
                                    <div class="col-md-6 col-sm-6">
                                        <form id="forgotPass" action="{{ route('sendResetLinkEmail') }}" method="post">
                                            @csrf
                                            <p>Quên mật khẩu? <br> Vui lòng nhập địa chỉ email.</p>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input id="email" type="text" name="email"
                                                       class="form-control email">
                                                <div class="email_error"></div>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-login">
                                                Gửi
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div style="padding: 55px;">
                                            <img src="https://cdn.moveek.com/bundles/ornweb/img/mascot.png" width="100%"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div id="thanhvien" class="mbox tab-pane fade active in">
                            <div class="mbox mbox-2">
                                <div class="title">
                                    <h2>Thông tin tài khoản</h2>
                                </div>
                                <div class="box-body">
                                    <div class="account-group">
                                        @php
                                            $user = Auth::user();
                                            $avatarUrl = $user->image ?? '';
                                            $firstLetter = strtoupper(
                                                substr($user->last_name ?? $user->first_name, 0, 1),
                                            );
                                            $colors = [
                                                '#FF5733',
                                                '#3374ff',
                                                '#3357FF',
                                                '#FF33A6',
                                                '#4ec1bc',
                                                '#7c8484',
                                            ];
                                            $backgroundColor = $colors[$user->id % count($colors)];
                                        @endphp

                                        <div>
                                            <div class="avatar" id="current-avatar">
                                                @if (!empty($avatarUrl))
                                                    <!-- Hiển thị ảnh nếu có -->
                                                    <img src="{{ $avatarUrl }}" alt="{{ $user->name ?? 'avatar' }}"
                                                         class="img-responsive img-circle img-member">
                                                @else
                                                    <!-- Hiển thị chữ cái đầu với màu nền ngẫu nhiên nếu không có ảnh -->
                                                    <div class="avatar-placeholder"
                                                         style="background-color: {{ $backgroundColor }};">
                                                        {{ $firstLetter }}
                                                    </div>
                                                    <img src="{{ $avatarUrl }}" alt="{{ $user->name ?? 'avatar' }}"
                                                         class="img-responsive img-circle img-member img-block">
                                                @endif
                                                <a href="javascript:;" data-modal="#modalAvatarImage" class="open-modal">Đổi
                                                    ảnh đại diện</a>
                                            </div>
                                        </div>

                                        <div class="account-info">
                                            @if (Auth::user()->status == 0)
                                                <p style="color: #dc0000;font-weight: normal;">Tài khoản của bạn đang bị khóa
                                                    vui
                                                    lòng liên hệ tới bộ phận </p>
                                            @endif
                                            <p>Họ tên:
                                                {{ Auth::check() ? Auth::user()->first_name . ' ' . Auth::user()->last_name : '' }}
                                                <small class="level">
                                                    @if (Auth::user()->isAdmin())
                                                        Quản trị viên
                                                    @elseif(Auth::user()->isManage())
                                                        Quản lý rạp
                                                    @elseif(Auth::user()->isStaff())
                                                        Nhân viên rạp
                                                    @else
                                                        Thành viên
                                                    @endif
                                                </small>
                                            </p>
                                            <p>Email: {{ Auth::check() ? Auth::user()->email : '' }}</p>
                                            <p>SĐT:
                                                @if (!empty(Auth::user()->phone))
                                                    {{ Auth::check() ? Auth::user()->phone : '' }}
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                @else
                                                    Chưa có thông tin
                                                    <a href="javascript:;" title="Tài khoản chưa được xác thực"
                                                       class="no-verify" id="verify">
                                                        Xác thực SMS
                                                    </a>
                                                @endif

                                            </p>
                                            <p>Dịch vụ:
                                                <a href="javascript:;" data-modal="#topUpModal"
                                                   title="Nạp tiền vào tài khoản" class="no-verify open-modal">
                                                    Nạp tiền
                                                </a>
                                            </p>
                                            <p>Ví thành viên: <span
                                                    class="point">{{ !empty(Auth::user()->balance) ? number_format(Auth::user()->balance, 0, ',', '.') : 0 }}</span>
                                                đ</p>
                                            <p>Cấp bậc thành viên:
                                                <span class="point">
                                                    @switch(Auth::user()->membership_level)
                                                        @case('member')
                                                            <span class="sparkle-normal">🥈 BKM Member</span>
                                                            @break

                                                        @case('vip')
                                                            <span class="sparkle-vip">🌟 BKM VIP</span>
                                                            @break

                                                        @case('vvip')
                                                            <span class="sparkle-svip">👑 BKM VVIP</span>
                                                            @break

                                                        @default
                                                            Không xác định
                                                    @endswitch
                                                </span>
                                            </p>
                                            <p>Điểm tích lũy: <span
                                                    class="point">{{ !empty(Auth::user()->points) ? Auth::user()->points : 0 }}</span>
                                                điểm
                                                <a href="javascript:;" data-modal="#modalPoints" title="Xem quy tắc đổi điểm"
                                                   class="no-verify open-modal">
                                                    Quy tắc & Đổi thưởng
                                                </a>
                                            </p>

                                            <!-- EXP và Progress Bar -->
                                            <div class="exp-container mb-15 mt-25">
                                                <p class="mb-4">EXP: <span class="point expData"
                                                                           data-exp="{{ Auth::user()->exp ?? 0 }}">{{ !empty(Auth::user()->exp) ? number_format(Auth::user()->exp, 0, ',', '.') : 0 }}</span>
                                                    exp</p>
                                                <div class="rank-container">
                                                    <div class="progress-bar">
                                                        <div class="progress">
                                                            <span class="progress-text">0/4,000,000</span>
                                                        </div>
                                                    </div>
                                                    <div class="milestones">
                                                        <div class="upgrade-card">
                                                            <span class="milestone" style="left: -15px;">
                                                                <img class="rank_member"
                                                                     src="{{ asset('client/images/rank_member.png') }}"
                                                                     alt="">
                                                            </span>
                                                            <div class="rank-number-member">
                                                                <b>0</b>
                                                            </div>
                                                        </div>
                                                        <div class="upgrade-card">
                                                            <span class="milestone" style="left: 50%;">
                                                                <img class="rank_vip"
                                                                     src="{{ asset('client/images/rank_vip.png') }}"
                                                                     alt="">
                                                            </span>
                                                            <div class="line-center-grade"></div>
                                                            <div class="rank-number-vip">
                                                                <b>4.000.000</b>
                                                            </div>
                                                        </div>
                                                        <div class="upgrade-card">
                                                            <span class="milestone" style="right: -61px;">
                                                                <img class="rank_vvip"
                                                                     src="{{ asset('client/images/rank_vvip.png') }}"
                                                                     alt="">
                                                            </span>
                                                            <div class="rank-number-vvip">
                                                                <b>8.000.000</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="box-body body-account">
                                    <h3 class="h3-body-account">Thông tin chi tiết</h3>
                                    <div class="card-container">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="stats">
                                                    <p>Tổng chi tiêu <strong>{{ date('Y') }}</strong>: <span
                                                            class="point">0</span> đ</p>
                                                </div>
                                                <div
                                                    class="level-card @if (Auth::user()->membership_level == 'member') rank-member @elseif(Auth::user()->membership_level == 'vip') rank-vip @else rank-vvip @endif">
                                                    @if (Auth::user()->membership_level == 'member')
                                                        <img class="rank_member"
                                                             src="{{ asset('client/images/level-member.png') }}"
                                                             alt="">
                                                        <span>BKM Member</span>
                                                    @elseif(Auth::user()->membership_level == 'vip')
                                                        <img class="rank_vip"
                                                             src="{{ asset('client/images/level-vip.png') }}" alt="">
                                                        <span>BKM VIP</span>
                                                    @else
                                                        <img class="rank_vvip"
                                                             src="{{ asset('client/images/level-vvip.png') }}" alt="">
                                                        <span>BKM VVIP</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="info">
                                                    <div class="info-content">
                                                        <p>Thẻ quà tặng</p>
                                                        <p>0 đ</p>
                                                        <div class="info-bkm-card">
                                                            <a class="btn-login">Xem</a>
                                                        </div>
                                                    </div>
                                                    <div class="info-content">
                                                        <p>Voucher</p>
                                                        <p>0</p>
                                                        <div class="info-bkm-card">
                                                            <a class="btn-login">Xem</a>
                                                        </div>
                                                    </div>
                                                    <div class="info-content">
                                                        <p>Quà tặng</p>
                                                        <p>0</p>
                                                        <div class="info-bkm-card">
                                                            <a class="btn-login">Xem</a>
                                                        </div>
                                                    </div>
                                                    <div class="info-content">
                                                        <p>Thẻ Thành Viên</p>
                                                        <p>1</p>
                                                        <div class="info-bkm-card">
                                                            <a class="btn-login">Xem</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="doithongtin" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Thông tin thành viên</h2>
                            </div>
                            <div style="padding: 20px 20px;">
                                <div class="row flex">
                                    <div class="col-md-7 col-sm-7">
                                        <form id="form-updateProfile" data-image="{{ asset('client/images/success.png') }}"
                                              action="{{ route('updateProfile') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Nickname</label>
                                                <input id="name" type="name" class="form-control name"
                                                       name="name" value="{{ old('name', Auth::user()->name) }}">
                                                <div class="name_error"></div>
                                            </div>

                                            <div class="row flex form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label for="first_name">Họ</label>
                                                    <input id="first_name" type="text" class="form-control first_name"
                                                           name="first_name"
                                                           value="{{ old('first_name', Auth::user()->first_name) }}">
                                                    <div class="first_name_error"></div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <label for="last_name">Tên đệm và tên</label>
                                                    <input id="last_name" type="text" class="form-control last_name"
                                                           name="last_name"
                                                           value="{{ old('last_name', Auth::user()->last_name) }}">
                                                    <div class="last_name_error"></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Địa chỉ email</label>
                                                <input id="email" type="email" disabled class="form-control email"
                                                       name="email" value="{{ old('email', Auth::user()->email) }}">
                                                <div class="email_error"></div>
                                            </div>

                                            <div class="row flex form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label for="gender">Giới tính</label>
                                                    <div class="radio-group">
                                                        <label class="radio-label">
                                                            <input type="radio" name="gender" value="male"
                                                                {{ old('gender', Auth::user()->gender) == 'male' ? 'checked' : '' }}>
                                                            Nam
                                                        </label>
                                                        <label class="radio-label">
                                                            <input type="radio" name="gender" value="female"
                                                                {{ old('gender', Auth::user()->gender) == 'female' ? 'checked' : '' }}>
                                                            Nữ
                                                        </label>
                                                    </div>
                                                    <div class="gender_error"></div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <label for="name">Số điện thoại</label>
                                                    <input id="phone" type="text" disabled class="form-control phone"
                                                           name="phone" value="{{ old('phone', Auth::user()->phone) }}">
                                                    <div class="phone_error"></div>
                                                </div>
                                            </div>

                                            <div class="row flex form-group">
                                                <div class="col-md-6 col-sm-6">
                                                    <label for="birthday">Ngày sinh</label>
                                                    <input id="date_birth"
                                                           value="{{ old('date_birth', date('d/m/Y', strtotime(Auth::user()->date_birth))) }}"
                                                           placeholder="-- Ngày Sinh --" type="text"
                                                           class="form-control datepicker" name="date_birth">
                                                    <div class="date_birth_error"></div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <label for="birthday">Tỉnh/Thành phố</label>
                                                    <select name="city_id" id="city" class="select2 w-100">
                                                        <option value="">Chọn thành phố</option>
                                                        @if (!empty($data['cities']))
                                                            @foreach ($data['cities'] as $city)
                                                                <option @selected(old('city_id', Auth::user()->city_id) == $city->id)
                                                                        value="{{ $city->id }}">{{ $city->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="city_id_error"></div>
                                                </div>
                                            </div>

                                            <div class="center">
                                                <input type="submit" name="submit" value="Lưu"
                                                       class="btn btn-success btn-login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <div style="padding: 55px;">
                                            <img src="https://cdn.moveek.com/bundles/ornweb/img/mascot.png" width="100%"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="doimatkhau" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Đổi mật khẩu</h2>
                            </div>
                            <div style="padding: 20px 20px;">
                                <div class="row flex">
                                    <div class="col-md-6 col-sm-6">
                                        <form id="form-changepassword" data-url-logout="{{ route('logout') }}"
                                              data-url-redirect="{{ route('account') }}"
                                              data-image="{{ asset('client/images/success.png') }}"
                                              action="{{ route('changePassword') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="old-password">Mật khẩu hiện tại</label>
                                                <div class="input-group">
                                                    <input type="password" name="old_password" value=""
                                                           autocomplete="false" class="form-control old_password"
                                                           id="old_password">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text toggle-password"
                                                              style="cursor: pointer;">
                                                            <i class="fas fa-eye toggle-old-password-icon"
                                                               id="toggle-old-password-icon"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="old_password_error"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Mật khẩu mới</label>
                                                <div class="input-group">
                                                    <input type="password" name="password" value=""
                                                           autocomplete="false" class="form-control password" id="password">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text toggle-password"
                                                              style="cursor: pointer;">
                                                            <i class="fas fa-eye toggle-password-change-icon"
                                                               id="toggle-password-change-icon"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="password_error"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="re-password">Nhập lại mật khẩu mới</label>
                                                <div class="input-group">
                                                    <input type="password" name="confirm_password" value=""
                                                           autocomplete="false" class="form-control confirm_password"
                                                           id="confirm_password">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text toggle-password"
                                                              style="cursor: pointer;">
                                                            <i class="fas fa-eye toggle-confirm-password-icon"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="confirm_password_error"></div>
                                            </div>

                                            <div class="center">
                                                <input type="submit" name="submit" value="Lưu"
                                                       class="btn btn-success btn-login">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div style="padding: 55px;">
                                            <img src="https://cdn.moveek.com/bundles/ornweb/img/mascot.png" width="100%"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tichluydiem" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Tích lũy điểm</h2>
                            </div>
                            <div style="padding: 20px 20px;">
                                <div class="row flex">
                                    <!-- Phần thông tin và đổi thưởng -->
                                    <div class="col-md-7 col-sm-7">
                                        <div class="user-points">
                                            <h3>Chào mừng bạn, {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                            </h3>
                                            <p>Bạn hiện đang có:
                                                <span class="highlight-points">{{ number_format(Auth::user()->exp, 0, ',', '.') }} điểm</span>
                                            </p>
                                            <p>Cấp bậc hiện tại:
                                                <span class="point">
                                                    @switch(Auth::user()->membership_level)
                                                        @case('member')
                                                            <span class="sparkle-normal">🥈 BKM Member</span>
                                                            @break

                                                        @case('vip')
                                                            <span class="sparkle-vip">🌟 BKM VIP</span>
                                                            @break

                                                        @case('vvip')
                                                            <span class="sparkle-svip">👑 BKM VVIP</span>
                                                            @break

                                                        @default
                                                            Không xác định
                                                    @endswitch
                                                </span>
                                            </p>
                                            <p>Quy tắc & Đổi thưởng:
                                                <a href="javascript:;" data-modal="#modalPoints" title="Xem quy tắc đổi điểm"
                                                   class="no-verify open-modal">
                                                    Xem
                                                </a>
                                            </p>
                                            <hr>
                                            <h4>Quy đổi điểm:</h4>
                                            <ul class="list-points">
                                                <li>🎁 <strong>BKM Member:</strong> 1 điểm = 1.000 đ</li>
                                                <li>🎁 <strong>BKM VIP:</strong> 2 điểm = 2.000 đ</li>
                                                <li>🎁 <strong>BKM VVIP:</strong> 3 điểm = 3.000 đ</li>
                                                <li>🎁 Các phần quà hấp dẫn khác 👇</li>
                                            </ul>
                                            <button class="btn btn-primary btn-redeem btn-login open-modal"
                                                    data-modal="#modalExchangeExp">Đổi thưởng</button>
                                        </div>
                                    </div>

                                    <!-- Phần hình ảnh minh họa -->
                                    <div class="col-md-5 col-sm-5">
                                        <div style="padding: 55px;">
                                            <img src="https://cdn.moveek.com/bundles/ornweb/img/mascot.png" width="100%"
                                                 alt="Mascot">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="uudaichung" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Ưu đãi chung</h2>
                            </div>
                            <div class="box-body">
                                <div class="row flex">
                                    <div class="col-md-12 col-sm-12">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dkdoithuong" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Điều kiện đổi thưởng</h2>
                            </div>
                            <div class="box-body">
                                <div class="row flex">
                                    <div class="col-md-12 col-sm-12">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="vedadat" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Lịch sử mua vé</h2>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="date-content">
                                            <div class="date-box">
                                                <div class="date-box-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                         fill="currentColor" aria-hidden="true"
                                                         class="dp__icon dp__input_icon dp__input_icons">
                                                        <path
                                                            d="M29.333 8c0-2.208-1.792-4-4-4h-18.667c-2.208 0-4 1.792-4 4v18.667c0 2.208 1.792 4 4 4h18.667c2.208 0 4-1.792 4-4v-18.667zM26.667 8v18.667c0 0.736-0.597 1.333-1.333 1.333 0 0-18.667 0-18.667 0-0.736 0-1.333-0.597-1.333-1.333 0 0 0-18.667 0-18.667 0-0.736 0.597-1.333 1.333-1.333 0 0 18.667 0 18.667 0 0.736 0 1.333 0.597 1.333 1.333z">
                                                        </path>
                                                        <path
                                                            d="M20 2.667v5.333c0 0.736 0.597 1.333 1.333 1.333s1.333-0.597 1.333-1.333v-5.333c0-0.736-0.597-1.333-1.333-1.333s-1.333 0.597-1.333 1.333z">
                                                        </path>
                                                        <path
                                                            d="M9.333 2.667v5.333c0 0.736 0.597 1.333 1.333 1.333s1.333-0.597 1.333-1.333v-5.333c0-0.736-0.597-1.333-1.333-1.333s-1.333 0.597-1.333 1.333z">
                                                        </path>
                                                        <path
                                                            d="M4 14.667h24c0.736 0 1.333-0.597 1.333-1.333s-0.597-1.333-1.333-1.333h-24c-0.736 0-1.333 0.597-1.333 1.333s0.597 1.333 1.333 1.333z">
                                                        </path>
                                                    </svg>
                                                    <input type="text"
                                                           value="{{ \Carbon\Carbon::now()->format('m/Y') }}"
                                                           class="form-control date-filter date-input"
                                                           data-url="{{ route('account') }}"
                                                           placeholder="Chọn tháng">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row flex">
                                    <div class="col" id="ticket-main">
                                        @include('client.ajax.tickets.ticket', ['tickets' => $data['tickets']])
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="lichsugiaodich" class="mbox tab-pane fade">
                            <div class="title">
                                <h2>Lịch sử giao dịch</h2>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                                <div class="row flex">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="transaction-deposit">
                                            <div class="transaction-main">
                                                @php
                                                    $lastDate = null;
                                                @endphp
                                                @foreach ($data['transactions'] as $key => $transaction)
                                                    @php
                                                        $transactionDate = date(
                                                            'd/m/Y',
                                                            strtotime($transaction->created_at),
                                                        );
                                                    @endphp
                                                    <div class="border-box">
                                                        @if ($transactionDate != $lastDate)
                                                            <div class="transaction-date">
                                                                {{ $transactionDate }}
                                                            </div>
                                                            @php
                                                                $lastDate = $transactionDate;
                                                            @endphp
                                                        @endif
                                                        <div class="transaction-list"
                                                             style="border-bottom: {{ $loop->last ? '1px solid #91b5d7' : 'none' }}">
                                                            <div class="transaction-content">
                                                                <h4>Thông báo giao dịch</h4>
                                                                <ul>
                                                                    <li>{{ !empty($transaction->description) ? $transaction->description : '' }}
                                                                    </li>
                                                                    <li>
                                                                        Giao dịch:
                                                                        @if ($transaction->status == 'completed')
                                                                            +
                                                                        @endif
                                                                        {{ number_format($transaction->amount, 0, '.', ',') }}
                                                                        đ |
                                                                        {{ date('d/m/Y H:i:s', strtotime($transaction->created_at)) }}
                                                                        |
                                                                        Số
                                                                        dư:
                                                                        {{ number_format($transaction->balance_after, 0, '.', ',') }}
                                                                        đ
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <div id="topUpModal" style="height: 100%;" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <div class="d-flex flex-column justify-content-center">
                <h3 class="title-payment">Nạp tiền vào ví thành viên</h3>
                <div class="content-p">
                    <p>Quý khách vui lòng chọn phương thức thanh toán và nhập số tiền cần nạp.</p>
                    <p>
                        Thành viên mới nạp tiền vào ví thành viên từ 50.000đ được tặng ngay 150 EXP.
                    </p>
                </div>
            </div>
            <form data-error="{{ asset('client/images/error.png') }}" action="{{ route('processDeposit') }}"
                  id="depositForm" method="post">
                @csrf
                <div class="main-modal">
                    <div class="body_modal">
                        <div class="list-method-item list-mb8">
                            <div class="list-method-button" data-tab="1">
                                <div class="row row-16 main-payment">
                                    <div class="col" style="padding-top: 20px;">
                                        <input type="radio" name="payment_method" style="display: none;"
                                               class="payment_method" value="vnpay">
                                        <div class="title h3 color-default">
                                            Ví điện tử
                                            <span class="vnpay-logo b">
                                                <span class="vnpay-red">VN</span><span class="vnpay-blue">PAY</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-auto" style="padding-top: 20px;">
                                        <div class="icon">
                                            <img width="100%"
                                                 src="https://sandbox.vnpayment.vn/paymentv2/images/icons/mics/64x64-vi-vnpay.svg"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-method-item-content" data-content="1" style="display: none;">
                                <div>
                                    <div class="list-bank list-bank-grid-4">
                                        <div class="list-mb24 list-last-mb">
                                            <div class="list-bank-search">
                                                <div class="form-group">
                                                    <div
                                                        class="input-group-wrap input-default input-size-default input-group-vertical">
                                                        <label class="input-inner-wrap">
                                                            <input type="number"
                                                                   class="input input-label-change input-has-clear"
                                                                   placeholder="Nhập số tiền cần nạp..." name="amount[vnpay]">
                                                            <div class="input-frame"></div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-method-item list-mb8">
                            <div class="list-method-button" data-tab="2">
                                <div class="row row-16 main-payment">
                                    <div class="col" style="padding-top: 20px;">
                                        <input type="radio" name="payment_method" style="display: none;"
                                               class="payment_method" value="momo">
                                        <div class="title h3 color-default">
                                            Ví điện tử
                                            <span class="vnpay-logo b">
                                                <span class="momo-ping">Momo</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-auto" style="padding-top: 20px;">
                                        <div class="icon">
                                            <img width="100%"
                                                 src="https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-method-item-content" data-content="2" style="display: none;">
                                <div>
                                    <div class="list-bank list-bank-grid-4">
                                        <div class="list-mb24 list-last-mb">
                                            <div class="list-bank-search">
                                                <div class="form-group">
                                                    <div
                                                        class="input-group-wrap input-default input-size-default input-group-vertical">
                                                        <label class="input-inner-wrap">
                                                            <input type="number"
                                                                   class="input input-label-change input-has-clear"
                                                                   placeholder="Nhập số tiền cần nạp..." name="amount[momo]">
                                                            <div class="input-frame"></div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-method-item list-mb8">
                            <div class="list-method-button" data-tab="3">
                                <div class="row row-16 main-payment">
                                    <div class="col" style="padding-top: 20px;">
                                        <input type="radio" name="payment_method" style="display: none;"
                                               class="payment_method" value="zalopay">
                                        <div class="title h3 color-default">
                                            Ví điện tử
                                            <span class="vnpay-logo b">
                                                <span class="zalopay-blue">ZALO</span><span
                                                    class="zalopay-green">PAY</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-auto" style="padding-top: 20px;">
                                        <div class="icon">
                                            <img width="100%"
                                                 src="https://qcgateway.zalopay.vn/pay/v2/images/icon-zpapp-2.svg"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-method-item-content" data-content="3" style="display: none;">
                                <div>
                                    <div class="list-bank list-bank-grid-4">
                                        <div class="list-mb24 list-last-mb">
                                            <div class="list-bank-search">
                                                <div class="form-group">
                                                    <div
                                                        class="input-group-wrap input-default input-size-default input-group-vertical">
                                                        <label class="input-inner-wrap">
                                                            <input type="number"
                                                                   class="input input-label-change input-has-clear"
                                                                   placeholder="Nhập số tiền cần nạp..."
                                                                   name="amount[zalopay]">
                                                            <div class="input-frame"></div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="close-modal" type="button">Đóng</button>
                        <button class="submit-modal">Nạp tiền</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="modalPoints" class="custom-modal" style="height: 100%;">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <div class="d-flex flex-column justify-content-center">
                <h3 class="title-payment">Quy tắc & đổi thưởng bằng điểm</h3>
            </div>
            <div class="main-modal" style="margin-top: 20px;">
                <div class="body_modal_image">
                    <div>
                        <div>
                            <table class="reward-table">
                                <thead>
                                <tr>
                                    <th>Điểm thưởng</th>
                                    <th>Member</th>
                                    <th>VIP</th>
                                    <th>VVIP</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tại Quầy Vé</td>
                                    <td>5%</td>
                                    <td>7%</td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td class="highlight">VD: 100.000 đ</td>
                                    <td>5 Điểm</td>
                                    <td>7 Điểm</td>
                                    <td>10 Điểm</td>
                                </tr>
                                <tr>
                                    <td>Quầy Bắp Nước</td>
                                    <td>3%</td>
                                    <td>4%</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td class="highlight">VD: 100.000 đ</td>
                                    <td>3 Điểm</td>
                                    <td>4 Điểm</td>
                                    <td>5 Điểm</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4>1. Điều kiện để đổi thưởng</h4>
                        <ul>
                            <li>Thành viên phải đăng ký tài khoản và tài khoản <strong>Đang hoạt động</strong> không bị
                                khóa.</li>
                            <li>Tài khoản cần có đủ số điểm thưởng tối thiểu để đổi thưởng.</li>
                            <li>Điểm thưởng tối thiểu được sử dụng cho mỗi giao dịch là 20 điểm trở lên.</li>
                            <li>Không vi phạm bất kỳ quy định hoặc điều khoản nào của hệ thống CGV.</li>
                        </ul>

                        <h4>2. Cách làm tròn điểm thưởng</h4>
                        <ul>
                            <li>1 Điểm BKM = <strong>1.000 đ</strong> giá trị quy đổi.</li>
                            <li>Từ <strong>0.1</strong> đến <strong>0.4</strong>: làm tròn xuống (Ví dụ: <strong>3.2
                                    điểm</strong> sẽ được tích vào tài khoản <strong>3 điểm</strong>).
                                Lưu ý: giao dịch có điểm tích lũy từ <strong>0.1</strong> đến <strong>0.4</strong> sẽ không
                                được tích lũy điểm do làm tròn xuống <strong>0</strong>, và đồng nghĩa với không được tích
                                lũy chi tiêu.</li>
                            <li>Từ <strong>0.5</strong> đến <strong>0.9</strong>: làm tròn lên (Ví dụ: <strong>3.6
                                    điểm</strong> sẽ được tích vào tài khoản <strong>4 điểm</strong>)</li>
                        </ul>

                        <h4>3. Hạng thành viên và tỷ lệ ưu đãi</h4>
                        <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
                            <thead>
                            <tr>
                                <th style="border: 1px solid #ddd; padding: 8px;">Hạng thành viên</th>
                                <th style="border: 1px solid #ddd; padding: 8px;">Tỷ lệ quy đổi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">BKM Member 🥈</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">1 Điểm = 1.000 đ</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">BKM VIP 🌟</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">2 Điểm = 2.000 đ</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">BKM VVIP 👑</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">3 Điểm = 3.000 đ</td>
                            </tr>
                            </tbody>
                        </table>

                        <h4>4. Thời gian xử lý yêu cầu</h4>
                        <ul>
                            <li>Thời gian xử lý: <strong>24-48 giờ</strong> kể từ khi gửi yêu cầu.</li>
                            <li>Trường hợp bảo trì, hệ thống sẽ thông báo thời gian xử lý qua email hoặc tin nhắn.</li>
                        </ul>

                        <h4>5. Quy định bổ sung</h4>
                        <ul>
                            <li>Mỗi tài khoản được đổi tối đa <strong>10 giao dịch/ngày</strong>.</li>
                            <li>Điểm thưởng tối thiểu cho mỗi giao dịch: <strong>20 điểm</strong>.</li>
                            <li>Hệ thống có quyền thu hồi thưởng khi phát hiện gian lận.</li>
                            <li>BKM Việt Nam sẽ không hoàn và/hoặc giải quyết đối với điểm thưởng đã được sử dụng nếu Khách
                                Hàng không chứng minh được Khách Hàng không phải là người sử dụng điểm thưởng và quyết định
                                của BKM Việt Nam là quyết định cuối cùng.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="close-modal" type="button">Đóng</button>
            </div>
        </div>
    </div>

    <div id="modalExchangeExp" style="height: 100%;" class="custom-modal">
        <div class="custom-modal-content">
            <!-- Nút đóng -->
            <span class="custom-close">&times;</span>

            <!-- Tiêu đề -->
            <div class="modal-header d-flex justify-content-center">
                <h3 class="title-payment">🎁 Quy tắc & Đổi thưởng 🎉</h3>
            </div>

            <!-- Nội dung chính -->
            <div class="main-modal">
                <div class="modal-body">
                    <p><strong>Quy tắc đổi thưởng:</strong></p>
                    <ul class="list-points">
                        <li>🎁 1. Điểm tích lũy được dùng để đổi quà tặng hấp dẫn.</li>
                        <li>🎁 2. Số điểm của bạn sẽ được đổi tương ứng với phần quà.</li>
                        <li>🎁 3. Không hoàn lại điểm sau khi đổi.</li>
                    </ul>

                    <hr>

                    <div class="text-center">
                        <h3><b>CHỌN QUÀ</b></h3>
                    </div>
                    <div class="reward-options">
                        <div class="reward-item">
                            <div class="reward-image">
                                <img src="https://via.placeholder.com/100" alt="Quà 1">
                                <p>Quà Tặng A</p>
                            </div>
                            <div class="reward-button">
                                <button class="btn btn-success btn-redeem btn-login">Đổi ngay</button>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-image">
                                <img src="https://via.placeholder.com/100" alt="Quà 1">
                                <p>Quà Tặng B</p>
                            </div>
                            <div class="reward-button">
                                <button class="btn btn-success btn-redeem btn-login">Đổi ngay</button>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-image">
                                <img src="https://via.placeholder.com/100" alt="Quà 1">
                                <p>Quà Tặng B</p>
                            </div>
                            <div class="reward-button">
                                <button class="btn btn-success btn-redeem btn-login">Đổi ngay</button>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-image">
                                <img src="https://via.placeholder.com/100" alt="Quà 1">
                                <p>Quà Tặng B</p>
                            </div>
                            <div class="reward-button">
                                <button class="btn btn-success btn-redeem btn-login">Đổi ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <button class="close-modal" type="button">Đóng</button>
            </div>
        </div>
    </div>

    <div id="modalAvatarImage" style="height: 100%;" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <div class="d-flex flex-column justify-content-center">
                <h3 class="title-payment">Chọn ảnh đại diện</h3>
            </div>
            <form data-error="{{ asset('client/images/error.png') }}" data-image="{{ asset('client/images/1.jpg') }}"
                  data-success="{{ asset('client/images/success.png') }}" action="{{ route('updateAvatar') }}"
                  id="updateAvatarForm" method="post" enctype="multipart/form-data">
                @csrf
                <div class="main-modal" style="margin-top: 33px;">
                    <div class="body_modal_image">
                        <div class="">
                            <input type="hidden" name="image" id="avatar" value="">
                            <label class="input-inner-wrap-image">
                                <input type="file" class="" name="user[image]"
                                       accept=".jpg, .jpeg, .png, .webp" id="avatarInput">
                                <div class="input-extend input-extend-right">
                                    <div class="input-box-image input-ic-clear"></div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="submit-modal">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="module" src="{{ asset('client/js/auth/auth.js') }}"></script>
@endsection
