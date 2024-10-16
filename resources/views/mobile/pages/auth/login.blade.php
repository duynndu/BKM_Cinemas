@extends('mobile.layout.main')

@section('title', 'Đăng nhập')
@section('keywork', 'Đăng nhập')
@section('description', 'Đăng nhập')

@section('css')
    <link rel="stylesheet" href="{{ asset('mobile/css/login.css') }}">
@endsection

@section('content')
    <div id="ticket-login">
        <div class="login-box" id='dangnhap'>
            <div class="login-title active">
                <h2>Đăng nhập</h2>
            </div>
            <div class="login-content">
                <img src="{{ asset('mobile/statics/mobile/images/login-avatar.png') }}" alt="Đăng nhập" />
                <form action="https://m.touchcinema.com/login" method="post">
                    <input type="hidden" name="_token" value="5mAnkYw5B3rVDp1vgRqu21Jp9ZAv4wOgAICLS9Va">
                    <input type="hidden" name="redirect" value="index.html" />
                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-username.png') }} " /></span>
                        <input id="name" type="text" class="username" name="name" value=""
                            placeholder="Tên đăng nhập" required autofocus>
                    </div>

                    <div class="form-group">
                        <span class="form-icon"><img src="{{ asset('mobile/statics/mobile/images/icon-lock.png') }}" /></span>
                        <input id="password" type="password" class="password" name="password" placeholder="Mật khẩu"
                            required>
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-login" value="Đăng nhập" />
                        <a class="btn btn-link" href="password/reset.html">
                            Quên mật khẩu?
                        </a>
                    </div>
                    <a class="login-social"
                        href="https://www.facebook.com/v3.0/dialog/oauth?client_id=1700069773628064&amp;redirect_uri=https%3A%2F%2Fm.touchcinema.com%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code"
                        title="Login with facebook">
                        <img class="img-responsive" src="images/fb.png" alt="Facebook" />
                    </a>
                    <a class="login-social"
                        href="https://accounts.google.com/o/oauth2/auth?client_id=466904351297-msl2laa82gh9ugqhp3n0j6gor1c6kr9k.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fm.touchcinema.com%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code"
                        title="Login with google">
                        <img class="img-responsive" src="images/gp.png" alt="Google" />
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
