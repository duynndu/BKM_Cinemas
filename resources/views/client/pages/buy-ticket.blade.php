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
                    <div class="seat selected"><span class="list-style"></span> Ghế bạn đang chọn</div>
                    <div class="seat booking"><span class="list-style"></span> Ghế nguời khác chọn</div>
                    <div class="seat booked"><span class="list-style"></span> Ghế đã có người đặt</div>
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
                    <span id="totalPrice" x-text="price(totalPriceSeats + totalPriceFoods)"></span>
                </div>
                <div id="showtimes-detail">
                    <div class="movie-name" x-text="movie?.title"></div>
                    <div x-text="moment(movie?.release_date).format('dddd, [ngày] DD/MM HH:mm').replace('thứ', 'Thứ') + ' - ' + cinema?.name"></div>
                </div>
                <div id="current-select">
                    <div class="select seats">
                        Ghế: <span id="seat-code" x-text="seatsSelected.map(seat => seat.seat_number).join(',')"></span>
                        <span class="price"><span id="totalPriceSeat" x-text="price(totalPriceSeats)"></span></span>
                    </div>
                    <div class="select combo">
                        <a href="javascript:;" class="show-combo">
                            <span class="glyphicon glyphicon-star tada animated infinite"></span>
                            Chọn Combo </a>
                        <span class="price"><span id="totalPriceCombo" x-text="price(totalPriceFoods)"></span></span>
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
            <a href="javascript:;" class="btn btn-checkout" :class="{'pay': seatsSelected.length > 0}" id="datve" @click="submit">
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
        <div class="tw-mt-16">
            <template x-for="foodType in foodTypes" :key="foodType.id">
                <div class="tw-w-full tw-border-b tw-gap-2">
                    <div class="tw-text-left tw-font-bold tw-mb-2 tw-pt-2 tw-border tw-border-solid tw-border-gray-200 tw-border-x-0 tw-p-4" x-text="foodType.name"></div>
                    <template x-for="food in foodType.foods" :key="food.id">
                        <div class="tw-grid tw-grid-cols-12 tw-gap-4 tw-items-center tw-p-4">
                            <div class="tw-bg-cover tw-bg-center tw-col-span-2">
                                <img class="tw-block tw-w-[60px] tw-aspect-square tw-object-cover tw-rounded-full tw-border-2 tw-border-solid tw-border-pink-500 tw-overflow-hidden" src="https://touchcinema.com/medias/hinh-san-pham/cb-pepsibapngot-1696227008-poster.png" alt="Pepsi + Bắp Ngọt">
                            </div>
                            <div class="tw-flex-1 tw-col-span-7">
                                <div class="tw-font-semibold" x-text="food.name"></div>
                                <small class="tw-text-gray-500" x-html="food.description ?? '&nbsp;'"></small>
                                <div class="tw-text-[#44c020] tw-font-normal" x-text="food.price"></div>
                            </div>
                            <div class="text-center comb-qty tw-flex tw-gap-2">
                                <button class="giamItem" data-forcombo="1000000" @click="food.quantity > 0 && food.quantity--;calculateTotalPrice()">-</button>
                                <input class="tongItem" type="number" x-model="food.quantity" readonly>
                                <button class="tangItem active" data-forcombo="1000000" @click="food.quantity < 10 && food.quantity++;calculateTotalPrice()">+</button>
                            </div>
                        </div>
                    </template>
                </div>
            </template>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('client/js/movie-detail.js') }}"></script>
@endsection