@extends('client.layouts.main')

@section('title', Auth::check() ? 'Thông tin tài khoản' : 'Đăng ký - Đăng nhập | BKM Cinemas')

@section('css')
    <!-- CSS -->
    <style>
        /* Modal Background */
        .custom-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Modal Content */
        .custom-modal-content {
            background-color: #f5f7f9;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            width: 900px;
            position: relative;
        }

        /* Close Button */
        .custom-close {
            position: absolute;
            top: -2px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            font-size: 35px;
        }

        /* Footer */
        .modal-footer {
            display: flex;
            justify-content: end;
            margin-top: 20px;
            padding: 15px 0 15px 15px;
            text-align: right;
            border-top: 1px solid #e5e5e5;
        }

        .custom-modal {
            display: none;
        }

        .close-modal,
        .submit-modal {
            color: #fff;
        }

        .close-modal {
            background: #aaa;
            margin-right: 15px;
            border: none;
            border-radius: 3px;
            width: 90px;
            height: 40px;
        }

        .submit-modal {
            position: relative;
            border: none;
            border-radius: 3px;
            width: 90px;
            height: 40px;
            color: white;
            background: linear-gradient(45deg, #ff0089a8, #ff7a35f0);
            overflow: hidden;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-modal:hover {
            background: linear-gradient(45deg, #ff0069, #ff5a15);
        }

        .submit-modal::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            transition: left 0.3s ease;
        }

        .submit-modal:hover::before {
            left: 100%;
            transition: left 0.2s ease
        }

        .main-modal {
            display: flex;
            flex-direction: column;
            padding-top: 24px;
        }

        .body_modal {
            position: relative;
            padding: 15px;
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
                                                    <input id="password" type="password" name="password"
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
                                                <input name="remember" id="remember" type="checkbox" value="true"> <label
                                                    for="remember" class="italic">Ghi nhớ đăng
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
                                            <form data-image="{{ asset('client/images/register_success.jpg') }}" role="form"
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
                                                            <input id="password" type="password" class="form-control"
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
                                                            @if (!empty($cities))
                                                                @foreach ($cities as $city)
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
                                                        value="1"> <label for="is_terms_accepted" class="italic">Tôi đã
                                                        đọc, hiểu và đồng ý với các <a target="_blank"
                                                            href="/quy-dinh-thanh-vien">điều khoản</a></label>
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
                                        <div class="avatar" id="current-avatar">
                                            <img src="https://lh3.googleusercontent.com/a/ACg8ocJAvH10FCuGdV1qa00xLUfc1gRaHRZTWYXe7SuoAb4ihOfbAdg=s96-c"
                                                alt="tranvietanhph39998" class="img-responsive img-circle">
                                            <a href="javascript:;" id="change-avatar">Đổi ảnh đại diện</a>
                                        </div>
                                        <div class="account-info">
                                            <p style="color: #dc0000;font-weight: normal;">Bạn cần xác thực số điện thoại để
                                                xem chính xác thông tin </p>
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
                                                {{ Auth::check() ? Auth::user()->phone : '' }}
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                <a href="javascript:;" title="Tài khoản chưa được xác thực" class="no-verify"
                                                    id="verify">
                                                    Xác thực SMS
                                                </a>
                                            </p>
                                            <p>Dịch vụ:
                                                <a href="javascript:;" data-modal="#topUpModal"
                                                    title="Nạp tiền vào tài khoản" class="no-verify open-modal">
                                                    Nạp tiền
                                                </a>
                                                <a href="javascript:;" data-modal="#otherModal" title="Liên kết thẻ khác"
                                                    class="no-verify open-modal">
                                                    Liên kết thẻ khác
                                                </a>
                                            </p>
                                            <p>Số dư tài khoản: <span class="point">0</span> VND</p>
                                            <p>EXP: <span class="point">0</span> </p>
                                            <p>Tổng chi tiêu: <span class="point">0</span> VND</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="box-body" style="border-top: none">
                                    <h3>Giao dịch gần nhất</h3>
                                    <div class="clearfix"></div>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">×</button>
                                        Chưa có giao dịch nào
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
                            <div class="box-body">
                                <div class="row flex">
                                    <div class="col-md-12 col-sm-12">

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
                    @endguest
                </div>
            </div>
        </div>
    </div>

    <style>
        .list-last-mb>:last-child {
            margin-bottom: 0;
        }

        .list-method-item {
            background-color: #fff;
            border-radius: 3px;
            -webkit-box-shadow: 0 0 2px rgba(33, 38, 44, .16);
            box-shadow: 0 0 2px rgba(33, 38, 44, .16);
            -webkit-transition: .15s all linear;
            -o-transition: .15s all linear;
            transition: .15s all linear;
            border: 0;
        }

        .list-method-item:hover {
            box-shadow: 0 4px 8px rgba(33, 38, 44, .16);
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
        }

        .list-method-button {
            padding: 20px 16px;
            display: block;
            cursor: pointer;
            width: 100%;
            text-align: left;
            border: 0;
            outline: 0;
            background-color: #fff;
        }

        .list-mb8>* {
            margin-bottom: 8px;
        }

        @media (min-width: 768px) {
            .list-method-button .title {
                padding-left: 8px;
            }
        }

        .title {
            word-break: break-word;
        }

        .b {
            font-weight: 700;
        }

        .h3 {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
            font-weight: 500;
            text-align: start;
        }

        .color-default {
            color: #21262c;
        }

        @media (min-width: 1200px) {
            .h3 {
                font-size: 1.75rem;
            }
        }

        .vnpay-logo {
            display: inline-flex;
            -webkit-box-align: end;
            align-items: flex-end;
        }

        .vnpay-red {
            color: #e50019;
        }

        .vnpay-blue {
            color: #004a9c;
        }

        .list-method-button .icon {
            width: 56px;
            height: 56px;
        }

        img {
            vertical-align: middle;
            max-width: 100%;
            height: auto;
        }

        button::after,
        button::before {
            content: "";
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-16>* {
            vertical-align: top;
            padding-left: 8px;
            padding-right: 8px;
        }

        .main-payment {
            display: flex;
            align-items: center;
        }

        .title-payment {
            text-transform: uppercase;
            text-align: center;
            font-size: 20px;
            font-weight: 700;
        }

        .col {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .zalopay-blue {
            color: rgb(0, 51, 201);
        }

        .zalopay-green {
            color: rgb(0, 207, 106);
        }

        .momo-ping {
            color: #d82d8b;
        }
    </style>

    <div id="topUpModal" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <h3 class="title-payment">Nạp tiền vào tài khoản</h3>
            <div class="main-modal">
                <div class="body_modal">
                    <form>
                        <div class="list-method-item list-mb8">
                            <button type="submit" value="VNMART" id="VNMART" name="paymethod"
                                class="list-method-button">
                                <div class="row row-16 main-payment">
                                    <div class="col">
                                        <div class="title h3 color-default">
                                            Ví điện tử
                                            <span class="vnpay-logo b">
                                                <span class="vnpay-red">VN</span><span class="vnpay-blue">PAY</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon">
                                            <img width="100%" src="https://sandbox.vnpayment.vn/paymentv2/images/icons/mics/64x64-vi-vnpay.svg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="list-method-item list-mb8">
                            <button type="submit" value="VNMART" id="VNMART" name="paymethod"
                                class="list-method-button">
                                <div class="row row-16 main-payment">
                                    <div class="col">
                                        <div class="title h3 color-default">
                                            Ví điện tử
                                            <span class="vnpay-logo b">
                                                <span class="momo-ping">Momo</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon">
                                            <img width="100%" src="https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="list-method-item">
                            <button type="submit" value="VNMART" id="VNMART" name="paymethod"
                                class="list-method-button">
                                <div class="row row-16 main-payment">
                                    <div class="col">
                                        <div class="title h3 color-default">
                                            Ví điện tử
                                            <span class="vnpay-logo b">
                                                <span class="zalopay-blue">ZALO</span><span class="zalopay-green">PAY</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon">
                                            <img width="100%" src="https://qcgateway.zalopay.vn/pay/v2/images/icon-zpapp-2.svg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="close-modal">Đóng</button>
                    <button class="submit-modal">Nạp tiền</button>
                </div>
            </div>
        </div>
    </div>

    <div id="otherModal" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <h3>Nạp tiền khác</h3>
            <form>
                <label for="amount2">Số tiền cần nạp</label>
                <input type="number" id="amount2" placeholder="Nhập số tiền" required>
            </form>
            <div class="modal-footer">
                <button class="close-modal">Đóng</button>
                <button class="submit-modal">Nạp tiền</button>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/client/auth/auth.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.open-modal').click(function() {
                const modalId = $(this).data('modal');
                $(modalId).show();
            });

            $('.custom-close, .close-modal, .custom-modal').click(function(e) {
                if ($(e.target).is('.custom-close, .close-modal, .custom-modal')) {
                    $(this).closest('.custom-modal').hide();
                }
            });

            $('.submit-top-up').click(function() {
                const modal = $(this).closest('.custom-modal');
                const amount = modal.find('input[type="number"]').val();
                if (amount) {
                    alert(`Nạp tiền thành công với số tiền: ${amount}`);
                    modal.hide();
                } else {
                    alert('Vui lòng nhập số tiền!');
                }
            });
        });
    </script>
@endsection
