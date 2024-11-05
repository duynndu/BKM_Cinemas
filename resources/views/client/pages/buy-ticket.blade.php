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
                    <div class="seat selected"><span class="list-style"></span> Ghế đang chọn</div>
                    <div class="seat occupied"><span class="list-style"></span> Ghế đã có người đặt</div>
                    <template x-for="seatType in seatTypes" :key="seatType.id">
                        <div class="seat" :class="seatType.code"><span class="list-style"></span> <span class="tw-inline" x-text="seatType.text"></span></div>
                    </template>
                </div>
            </div>
            <div class="col-sm-9">
                <div id="manhinh">
                    Màn hình
                </div>
                <div>
                    <div id="seatingArea" class="tw-inline-flex tw-items-center tw-justify-center tw-mb-3 tw-text-white tw-w-full"></div>
                    <button class="btn btn-primary" @click="checkSeatMapping">Check</button>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- combo and login --}}
<div id="main-right">
    <div id="main-right-content">
        <div class="right-content ps ps--active-y">
            <div id="member">
                <div class="avatar">
                    <img src="https://touchcinema.com/images/avatar.png" alt="Duy Nguyễn Touchcinema">
                </div>
                <div class="info">
                    <p class="name">Duy Nguyễn</p>
                    <p style="font-weight: normal;font-size: 16px; color: #ea0a85;">Member</p>
                </div>
            </div>
            <div id="price-total">
                <span id="totalPrice">0</span> đ
            </div>
            <div id="showtimes-detail">
                <div class="movie-name">Ngày Xưa Có Một Chuyện Tình</div>
                <div>Thứ Ba, ngày 5/11 12:45 - RẠP 02 </div>
            </div>
            <div id="current-select">
                <div class="select seats">
                    Ghế: <span id="seat-code"></span>
                    <span class="price"><span id="totalPriceSeat">0</span> đ</span>
                </div>
                <div class="select combo">
                    <a href="javascript:;" class="show-combo">
                        <span class="glyphicon glyphicon-star tada animated infinite"></span>
                        Chọn Combo </a>
                    <span class="price"><span id="totalPriceCombo">0</span> đ</span>
                </div>
                <div class="login">
                    <h3><a>Thông tin đặt vé</a></h3>

                    <div class="select ">Họ tên: <b>Duy Nguyễn</b></div>
                    <div class="select ">Số điện thoại: <b>0968607305</b></div>
                    <div class="select ">Email: <b>duynnz2812@gmail.com</b></div>
                    <div><a href="javasctip:;" id="changeInfo">Đăng nhập tài khoản khác hoặc Đổi thông tin</a></div>

                </div>
            </div>

            <div class="payment-note">
                <div class="payment-note">
                    <p><b>Lưu ý:</b></p>
                    <p> - Vé đã mua không thể đổi hay trả lại.</p>
                    <p> - Khi được yêu cầu, vui lòng xuất trình giấy tờ tùy thân để chứng thực độ tuổi khi xem phim.</p>
                    <p> - Bản sao thông tin vé sẽ được lưu vào mục lịch sử giao dịch trong tài khoản nếu quý khách đã đăng nhập khi mua vé. 1 bản sao khác sẽ gửi đến Email của quý khách. Quý khách vui lòng kiểm tra kỹ cả trong mục spam email. </p>
                    <p> - Quý khách vui lòng lưu lại hoặc chụp ảnh lại để xuất trình khi qua cửa soát vé <strong>(KHÔNG CẦN IN VÉ TẠI QUẦY)</strong>.</p>
                    <p> - Nếu có kèm mua bắp nước online quý khách được ưu tiên khi xếp hàng để lên thẳng quầy vé in hóa đơn, sau đó xếp hàng ở quầy bắp nước để nhận.</p>

                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 605px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 385px;"></div>
            </div>
        </div>
        <a href="javascript:;" class="btn btn-checkout" id="datve">
            <span class="loading hidden">
                <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
                <span class="sr-only">Loading...</span>
            </span>
            ĐẶT VÉ
        </a>
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
    <table id="combo" class="table table-noborder combo">
        <tbody>
            <tr>
                <th colspan="2">
                    Combo
                </th>
            </tr>
            <tr>
                <td>
                    <div class="combo-info">
                        <div class="image-combo" style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-pepsibapngot-1696227008-poster.png)">
                        </div>
                        <div class="combo-group">
                            <p class="combo-name">Pepsi + Bắp Ngọt</p>
                            <small class="combo-description">
                                1 Bắp rang bơ, 1 Pepsi
                            </small>
                            <p class="price-combo"> <span class="price">67.000 đ</span></p>
                        </div>
                    </div>
                </td>
                <td class="text-center comb-qty" width="150">
                    <button class="giamItem" data-forcombo="1000000">-</button>
                    <input name="combo[1000000]" id="1000000" data-price="67000" class="tongItem" value="0" min="0" max="10" type="text" readonly="">
                    <button class="tangItem active" data-forcombo="1000000">+</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script src="{{ asset('client/js/movie-detail.js') }}"></script>
@endsection