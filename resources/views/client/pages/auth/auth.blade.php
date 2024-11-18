@extends('client.layouts.main')

@section('title', Auth::check() ? 'Thông tin tài khoản' : 'Đăng ký - Đăng nhập | BKM Cinemas')

@section('css')
    <style>
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
                                            <img src="{{ !empty(Auth::user()->image) ? Auth::user()->image : asset('client/images/1.jpg') }}"
                                                alt="tranvietanhph39998" class="img-responsive img-circle img-member">
                                            <a href="javascript:;" data-modal="#modalAvatarImage" class="open-modal">Đổi ảnh đại diện</a>
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
                                            <p>Ví thành viên: <span class="point">{{ !empty(Auth::user()->balance) ? number_format(Auth::user()->balance, 0, '.', ',') : 0 }}</span> VND</p>
                                            <p>Cấp bậc thành viên:
                                                <span class="point">
                                                    @switch(Auth::user()->membership_level)
                                                        @case('normal')
                                                            <span class="sparkle-normal">🥈 Hạng Thường</span>
                                                            @break
                                                        @case('vip')
                                                            <span class="sparkle-vip">🌟 Hạng VIP</span>
                                                            @break
                                                        @case('svip')
                                                            <span class="sparkle-svip">👑 Hạng Siêu VIP</span>
                                                            @break
                                                        @default
                                                            Không xác định
                                                    @endswitch
                                                </span>
                                            </p>
                                            <p>EXP: <span class="point">{{ !empty(Auth::user()->exp) ? Auth::user()->exp : 0 }}</span> điểm</p>
                                            <p>Tổng chi tiêu: <span class="point">0</span> VND</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="box-body" style="border-top: none">
                                    <h3>Giao dịch gần nhất</h3>
                                    @if ($data['transactions']->isNotEmpty())
                                        <div class="transaction-main">
                                            @php
                                                $lastDate = null;
                                            @endphp
                                            @foreach($data['transactions'] as $key => $transaction)
                                                @php
                                                    $transactionDate = date('d/m/Y', strtotime($transaction->created_at));
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
                                                    <div class="transaction-list" style="border-bottom: {{ $loop->last ? '1px solid #91b5d7' : 'none' }}">
                                                        <div class="transaction-content">
                                                            <h4>Thông báo giao dịch</h4>
                                                            <ul>
                                                                <li>{{ !empty($transaction->description) ? $transaction->description : '' }}</li>
                                                                <li>
                                                                    Giao dịch:
                                                                    @if($transaction->status == 'completed')
                                                                        +
                                                                    @endif
                                                                    {{ number_format($transaction->amount, 0, '.', ',') }} VND |
                                                                    {{ date('d/m/Y H:i:s', strtotime($transaction->created_at)) }} |
                                                                    Số dư: {{ number_format($transaction->balance_after, 0, '.', ',') }} VND
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="alert alert-info">
                                            Chưa có giao dịch nào
                                        </div>
                                    @endif
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
                                        <form id="form-updateProfile"
                                            data-image="{{ asset('client/images/success.png') }}"
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
                                                        name="first_name" value="{{ old('first_name', Auth::user()->first_name) }}">
                                                    <div class="first_name_error"></div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <label for="last_name">Tên đệm và tên</label>
                                                    <input id="last_name" type="text" class="form-control last_name"
                                                        name="last_name" value="{{ old('last_name', Auth::user()->last_name) }}">
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
                                                            <input type="radio" name="gender" value="male" {{ old('gender', Auth::user()->gender) == 'male' ? 'checked' : '' }}> Nam
                                                        </label>
                                                        <label class="radio-label">
                                                            <input type="radio" name="gender" value="female" {{ old('gender', Auth::user()->gender) == 'female' ? 'checked' : '' }}> Nữ
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
                                                    <input id="date_birth" value="{{ old('date_birth', date('d/m/Y', strtotime(Auth::user()->date_birth))) }}" placeholder="-- Ngày Sinh --" type="text"
                                                        class="form-control datepicker" name="date_birth">
                                                    <div class="date_birth_error"></div>
                                                </div>

                                                <div class="col-md-6 col-sm-6">
                                                    <label for="birthday">Tỉnh/Thành phố</label>
                                                    <select name="city_id" id="city" class="select2 w-100">
                                                        <option value="">Chọn thành phố</option>
                                                        @if (!empty($data['cities']))
                                                            @foreach ($data['cities'] as $city)
                                                                <option @selected(old('city_id', Auth::user()->city_id) == $city->id) value="{{ $city->id }}">{{ $city->name }}
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

    <div id="topUpModal" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <div class="d-flex flex-column justify-content-center">
                <h3 class="title-payment">Nạp tiền vào ví thành viên</h3>
                <div class="content-p">
                    <p>Quý khách vui lòng chọn phương thức thanh toán và nhập số tiền cần nạp.</p>
                    <p>
                        Thành viên mới nạp tiền vào ví thành viên từ 50.000đ được tặng ngay 50 EXP vào tài khoản thành viên.
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
                                            class="payment_method" id="payment_method" value="vnpay">
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
                                                                placeholder="Nhập số tiền cần nạp..." name="amount[vnpay]"
                                                                autocorrect="off" id="searchPayMethod2">
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
                                            class="payment_method" id="payment_method" value="momo">
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
                                                                placeholder="Nhập số tiền cần nạp..." name="amount[momo]"
                                                                autocorrect="off" id="searchPayMethod2">
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
                                            class="payment_method" id="payment_method" value="zalopay">
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
                                                                name="amount[zalopay]" autocorrect="off"
                                                                id="searchPayMethod2">
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

    <div id="modalAvatarImage" style="height: 100%;" class="custom-modal">
        <div class="custom-modal-content">
            <span class="custom-close">&times;</span>
            <div class="d-flex flex-column justify-content-center">
                <h3 class="title-payment">Chọn ảnh đại diện</h3>
            </div>
            <form
                data-error="{{ asset('client/images/error.png') }}"
                data-image="{{ asset('client/images/1.jpg') }}"
                data-success="{{ asset('client/images/success.png') }}"
                action="{{ route('updateAvatar') }}"
                id="updateAvatarForm" method="post" enctype="multipart/form-data">
                @csrf
                <div class="main-modal" style="margin-top: 33px;">
                    <div class="body_modal_image">
                        <div class="">
                            <input type="hidden" name="image" id="avatar" value="">
                            <label class="input-inner-wrap-image">
                                <input type="file" class="" name="user[image]" accept=".jpg, .jpeg, .png, .webp" id="avatarInput">
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
    <script src="{{ asset('js/client/auth/auth.js') }}"></script>
@endsection
