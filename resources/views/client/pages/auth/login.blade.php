@extends('client.layouts.main')
@section('title', 'Khuyễn mãi')

@section('css')
    <style type="text/css">
   
    </style>
@endsection

@section('content')
    <div class="container ticket-login">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <ul class="nav nav-tabs menu">
                    <li class="active"><a data-toggle="tab" href="#dang-nhap" aria-expanded="true">Đăng nhập</a></li>
                    <li class=""><a data-toggle="tab" href="#tichluydiem" aria-expanded="false">Tích lũy điểm</a></li>
                    <li class=""><a data-toggle="tab" href="#uudaichung" aria-expanded="false">Ưu đãi chung</a></li>
                    <li class=""><a data-toggle="tab" href="#dkdoithuong" aria-expanded="false">Điều kiện đổi
                            thưởng</a></li>
                </ul>
                <div class="member-card">
                    <img src="{{ asset('') }}images/member-card.png" alt="member-card">
                </div>
            </div>
            <div class="col-md-9 col-sm-9 login-wrap">
                <div class="tab-content">
                    <div id="dang-nhap" class="mbox tab-pane fade active in">
                        <div class="title">
                            <h2>Đăng nhập</h2>
                        </div>
                        <div class="box-body">
                            <div class="row flex">
                                <div class="col-md-6 col-sm-6">
                                    <form action="https://touchcinema.com/login" method="post">
                                        <input type="hidden" name="_token"
                                            value="BXV7TW2mEar4PBN8BArnTk122Kc6ghxfnEGHC0fk">
                                        <input type="hidden" name="redirect" value="index.html">
                                        <div class="form-group">
                                            <label for="username">Tên đăng nhập:</label>
                                            <input id="username" type="text" name="name" class="form-control"
                                                value="" placeholder="Username" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mật khẩu:</label>
                                            <input id="password" type="password" name="password" class="form-control"
                                                placeholder="Password" required="">
                                        </div>
                                        <div class="form-group">
                                            <input name="remember" id="remember" type="checkbox" checked="checked"
                                                value="forever"> <label for="remember" class="italic">Ghi nhớ đăng
                                                nhập</label>
                                        </div>
                                        <input type="submit" class="btn btn-login" value="Đăng nhập">
                                        <div class="attr-link">
                                            <a href="password/reset.html">Quên mật khẩu</a> / <a href="register.html">Đăng
                                                kí</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <span class="center">Hoặc</span>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <a class="login-social"
                                        href="https://www.facebook.com/v3.0/dialog/oauth?client_id=1700069773628064&amp;redirect_uri=https%3A%2F%2Ftouchcinema.com%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code"
                                        title="Login with facebook">
                                        <img class="img-responsive" src="{{ asset('') }}images/fb.png" alt="Facebook">
                                    </a>
                                    
                                    <a class="login-social"
                                        href="https://accounts.google.com/o/oauth2/auth?client_id=466904351297-msl2laa82gh9ugqhp3n0j6gor1c6kr9k.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Ftouchcinema.com%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code"
                                        title="Login with google">
                                        <img class="img-responsive" src="{{ asset('') }}images/gp.png" alt="Google">
                                    </a>
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
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
