@extends('client.layouts.main')

@section('title', 'Đăng ký - Đăng nhập | BKM Cinemas')

@section('css')
    <style>
        .swal2-popup {
            background-color: #f0f8ff;
            border-radius: 10px;
        }

        .swal2-title {
            color: #333;
            font-size: 20px;
        }

        .swal2-image {
            border-radius: 10px;
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
                                                        <span class="input-group-text toggle-password"
                                                            style="cursor: pointer;">
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
                            <div class="title">
                                <h2>Thành viên</h2>
                            </div>
                            <div class="box-body">
                                <div class="row flex">
                                    <div class="col-md-12 col-sm-12">

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
                                        <form id="form-changepassword"
                                            data-url-logout="{{ route('logout') }}"
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
@endsection

@section('js')
    <script src="{{ asset('js/client/auth/auth.js') }}"></script>
@endsection
