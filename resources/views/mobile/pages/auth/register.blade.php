@extends('mobile.layout.main')

@section('title', 'Đăng kí')
@section('keywork', 'Đăng kí')
@section('description', 'Đăng kí')

@section('css')
    <link rel="stylesheet" href="{{ asset('mobile/css/forgot_pass_work.css') }}">
@endsection

@section('content')
    <div id="ticket-login">
        <div class="login-box" id='dangnhap'>
            <div class="login-title">
                <h2>Đăng ký thành viên</h2>
            </div>
            <div class="login-content">
                <form role="form" method="POST" action="https://m.touchcinema.com/register">
                    <input type="hidden" name="_token" value="5mAnkYw5B3rVDp1vgRqu21Jp9ZAv4wOgAICLS9Va">
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-username.png') }}" /></span>
                        <input id="fullname" type="text" class="username" name="fullname" value=""
                            placeholder="Họ và tên" required autofocus>
                    </div>
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-username.png') }}" /></span>
                        <input id="name" type="text" class="username" name="name" value=""
                            placeholder="Tên đăng nhập" required autofocus>
                    </div>
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-email.png') }}" /></span>
                        <input id="email" type="email" class="email-input" name="email" value=""
                            placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-phone.png') }}" /></span>
                        <input id="phone" type="phone" class="phone-input" name="phone" value=""
                            placeholder="Số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-lock.png') }}" /></span>
                        <input id="password" type="password" class="password" name="password" placeholder="Mật khẩu"
                            required>
                    </div>
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-lock.png') }}" /></span>
                        <input id="password-confirm" type="password" class="password" name="password_confirmation"
                            placeholder="Xác nhận mật khẩu" required>
                    </div>

                    <input type="hidden" id="ggToken" name="g-recaptcha-response" value="">
                    <input type="submit" class="btn btn-login" value="Đăng ký" />
                </form>
               
            </div>
        </div>
    </div>
@endsection
