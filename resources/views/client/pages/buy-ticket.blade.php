@extends('client.layouts.main2')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
    <style>
    </style>
@endsection
@vite(['resources/js/app.js', 'resources/css/app.css'])

@section('content')
    <div x-data="SeatViewComponent" id="content">
        <div id="wrap-datve">
            <div id="note-time">
                <div id="note">
                    * Không được bỏ trống 01 ghế bên cạnh hoặc ghế đầu tiên của dãy
                </div>
                <div id="time">
                    Thời gian đặt vé
                    <span id="count-time">05:00</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="note">
                        <div class="seat active"><span></span> Ghế có thể đặt</div>
                        <div class="seat selected"><span></span> Ghế đang chọn</div>
                        <div class="seat booking"><span></span> Ghế đã có người chọn</div>
                        <div class="seat booked"><span></span> Ghế đã có người đặt</div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div id="manhinh">
                        Màn hình
                    </div>
                    <div id="map" class="map-wrap">
                        <div id="seatingArea" class="tw-inline-flex tw-items-center tw-mb-3 tw-text-white"></div>
                        <button class="btn btn-primary" @click="checkSeatMapping">Check</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- combo and login --}}
    <div id="main-right">
        <div id="main-right-content">
            <div class="right-content">
                <div id="price-total">
                    <span id="totalPrice">0</span> đ
                </div>
                <div id="showtimes-detail">
                    <div class="movie-name">Chàng Nữ Phi Công</div>
                    <div>Thứ Hai, ngày 2/9 16:05 - RẠP 02 </div>
                </div>

                <div id="current-select">
                    <div class="select seats">
                        Ghế: <span id="seat-code"></span>
                        <span class="price"><span id="totalPriceSeat">0</span> đ</span>
                    </div>
                    <div class="select combo">
                        <a href="javascript:void(0);" class="show-combo">
                            {{-- <span class="glyphicon glyphicon-star tada animated infinite"></span> --}}
                            <i class="fa-regular fa-star fa-beat"></i>
                            Chọn Combo </a>
                        <span class="price"><span id="totalPriceCombo">0</span> đ</span>
                    </div>
                    <div class="login">
                        <h3><a href="javasctip:;" class="show-login">Đăng nhập</a></h3>
                        <div class="text-center">
                            Hoặc
                            <p class="note-nologin">Mua vé không cần đăng nhập</p>
                        </div>
                        <div class="info-form">
                            <div class="info-group">
                                <input id="guestname" type="text" name="username" value=""
                                    placeholder="* Họ và tên" />
                            </div>
                            <div class="info-group">
                                <input id="guestphone" type="text" name="userphone" value=""
                                    placeholder="* Số điện thoại" />
                                <p id="phoneFormatError" class="error">Định dạng Số điện thoại không chính xác!
                                </p>
                            </div>
                            <div class="info-group">
                                <input id="guestemail" type="email" name="useremail" value=""
                                    placeholder="* Email" />
                                <p id="emailFormatError" class="error">Email không chính xác</p>
                            </div>
                            <p id="enterGuestError">Vui lòng nhập đầy đủ thông tin của bạn</p>

                            <div class="info-group action-group">
                                <p>
                                    <strong>Để hưởng ưu đãi và tích điểm</strong> hãy <a
                                        href="https://touchcinema.com/login"><strong class="note-nologin">ĐĂNG
                                            NHẬP</strong></a> nếu bạn đã có tài khoản và thẻ thành viên tại quầy.
                                </p>
                                <button id="enterGuest" class="btn btn-info">Nhập thông tin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tab-combo">
        <div id="login">

            <div class="title">
                <p>Vui lòng đăng nhập hoặc nhập thông tin để đặt vé</p>
                <h2>Đăng nhập</h2>
            </div>
            <div class="box-body">
                <form action="https://touchcinema.com/login" method="post">
                    <input type="hidden" name="_token" value="BXV7TW2mEar4PBN8BArnTk122Kc6ghxfnEGHC0fk">

                    <input type="hidden" name="redirect" value="https://touchcinema.com/dat-ve/79240" />
                    <div class="login-group">
                        <input id="username" type="text" name="name" value="" placeholder="Username"
                            required />
                    </div>
                    <div class="login-group">
                        <input id="password" type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" class="btn btn-login" value="Đăng nhập" />
                    <div class="attr-link">
                        <a href="https://touchcinema.com/password/reset">Quên mật khẩu</a>
                        <a class="register" href="https://touchcinema.com/register">Đăng kí tài khoản</a>
                    </div>
                </form>
                Hoặc
                <a class="login-social facebook" href="https://touchcinema.com/auth/facebook"
                    title="Đăng nhập bằng Facebook">
                    Đăng nhập bằng Facebook
                </a>
                <a class="login-social google" href="https://touchcinema.com/auth/google" title="Đăng nhập bằng Google">
                    Đăng nhập bằng Google
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('client/js/movie-detail.js') }}"></script>
@endsection
