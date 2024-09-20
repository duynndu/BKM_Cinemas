@extends('client.layouts.main')
@section('title', 'Khuyễn mãi')

@section('css')
    <style type="text/css">
        .ticket-login .menu li a:focus,
        .ticket-login .menu li a:hover,
        .ticket-login .menu li a {
            background: none;
            border: none;
            padding: 0;
            color: #000;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 17px;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <div class="container ticket-login">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <ul class="menu">
                    <li class="active"><a href="javascript:;">Đăng nhập</a></li>
                    <li><a href="javascript:;">Tích lũy điểm</a></li>
                    <li><a href="javascript:;">Ưu đãi chung</a></li>
                    <li><a href="javascript:;">Điều kiện đổi thưởng</a></li>
                </ul>
                <div class="member-card">
                    <img src="images/member-card.png" alt="member-card">
                </div>
            </div>
            <div class="col-md-9 col-sm-9 login-wrap">
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <div class="mbox">
                            <div class="title">
                                <h2>Đăng kí</h2>
                            </div>
                            <div class="box-body">
                                <form role="form" method="POST" action="https://touchcinema.com/register">
                                    <input type="hidden" name="_token" value="BXV7TW2mEar4PBN8BArnTk122Kc6ghxfnEGHC0fk">
                                    <div class="form-group">
                                        <label for="name">Tên đăng nhập</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="" required="" autofocus="">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-Mail</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Họ và tên</label>
                                        <input id="name" type="text" class="form-control" name="fullname"
                                            value="" required="" autofocus="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="name">SĐT</label>
                                        <input id="name" type="phone" class="form-control" name="phone"
                                            value="" required="" autofocus="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Mật khẩu</label>
                                        <input id="password" type="password" class="form-control" name="password"
                                            required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm">Nhập lại mật khẩu</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required="">
                                    </div>
                                    <input type="hidden" id="ggToken" name="g-recaptcha-response"
                                        value="HFcjFpYUhNBXcWdwFcXBtNXVUVBEwKV0RnGE0oImsoEXBuLkcpIiV6Km5oXWtJMVEvGmB_FkIaWwRcTFACYnIfDUwRTWQyNUUqbGQFJnYNBW4xLVt6DBFPaQlpTxNBXRVFUlFORQ0qBE5DXS9kaDVWcy9kRDlnADUxOmxwYU89dxMJfDFjfERQXCdsT1B1IC8qeAJeZAhGDXBrMkZI">
                                    <button type="submit" class="btn btn-primary">
                                        Đăng kí
                                    </button>
                                </form>
                                <script src="../www.google.com/recaptcha/api0041.js?render=6LfRtMcUAAAAAANDXQfD9XJydipZs0eBebW6jmoZ"></script>
                                <script>
                                    grecaptcha.ready(function() {
                                        grecaptcha.execute(`6LfRtMcUAAAAAANDXQfD9XJydipZs0eBebW6jmoZ`, {
                                            action: 'register'
                                        }).then(function(token) {
                                            document.getElementById("ggToken").value = token
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div id="login">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="mbox mbox-2">
                                        <div class="title">
                                            <h2>Đăng nhập</h2>
                                        </div>
                                        <div class="box-body">
                                            <form action="https://touchcinema.com/login" method="post">
                                                <input type="hidden" name="_token"
                                                    value="BXV7TW2mEar4PBN8BArnTk122Kc6ghxfnEGHC0fk">
                                                <input type="hidden" name="redirect" value="http://touchcinema.com/">
                                                <div class="form-group">
                                                    <label for="username">Tên đăng nhập:</label>
                                                    <input id="username" type="text" name="name"
                                                        class="form-control" value="" placeholder="Tên đăng nhập"
                                                        required="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Mật khẩu:</label>
                                                    <input id="password" type="password" name="password"
                                                        class="form-control" placeholder="Mật khẩu" required="">
                                                </div>
                                                <div class="form-group">
                                                    <input name="remember" id="remember" type="checkbox"
                                                        checked="checked" value="forever"> <label for="remember"
                                                        class="italic">Ghi nhớ đăng nhập</label>
                                                </div>
                                                <input type="submit" class="btn btn-login" value="Đăng nhập">
                                                <div class="attr-link">
                                                    <a href="password/reset.html">Quên mật khẩu</a> / <a
                                                        href="register.html">Đăng kí</a>
                                                </div>
                                            </form>
                                            <a class="login-social"
                                                href="https://www.facebook.com/v3.0/dialog/oauth?client_id=1700069773628064&amp;redirect_uri=https%3A%2F%2Ftouchcinema.com%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code"
                                                title="Login with facebook">
                                                <img class="img-responsive" src="images/fb.png" alt="Facebook">
                                            </a>
                                            <a class="login-social"
                                                href="https://accounts.google.com/o/oauth2/auth?client_id=466904351297-msl2laa82gh9ugqhp3n0j6gor1c6kr9k.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Ftouchcinema.com%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code"
                                                title="Login with google">
                                                <img class="img-responsive" src="images/gp.png" alt="Google">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
