@extends('mobile.layout.main')

@section('title', 'Quên mật khẩu')
@section('keywork', 'Quên mật khẩu')
@section('description', 'Quên mật khẩu')

@section('css')
    <link rel="stylesheet" href="{{ asset('mobile/css/forgot_pass_work.css') }}">
@endsection

@section('content')
    <div id="ticket-login">
        <div class="login-box">
            <div class="login-title" id='dangnhap'>
                <h2>Khôi phục mật khẩu đăng nhập</h2>
            </div>
            <div class="login-content">
                <form role="form" method="POST" action="https://m.touchcinema.com/password/email">
                    <input type="hidden" name="_token" value="5mAnkYw5B3rVDp1vgRqu21Jp9ZAv4wOgAICLS9Va">
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-email.png ') }}" /></span>
                        <input id="email" type="email" class="form-control" name="email" value="" required
                            autofocus placeholder="Nhập email của bạn">
                    </div>
                    <input type="submit" class="btn btn-login" value="Gửi" />
                </form>
            </div>
        </div>
    </div>
@endsection
