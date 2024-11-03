@extends('mobile.layout.main')

@section('title', 'Đặt vé')
@section('keywork', 'Đặt vé')
@section('description', 'Đặt vé')

@section('css')
    <link rel="stylesheet" href="{{ asset('mobile/css/ticket.css') }}">
@endsection

@section('content')
    <div class="page-book">
        <p class="time text-right">18:05, Hôm nay, ngày 14/10 </p>
        <h1><span>Tee Yod: Quỷ Ăn Tạng 2</span></h1>
        <div class="screen">
            <span class="bgscreen">
                màn hình
            </span>
            <h2>Màn hình</h2>

        </div>
        <div class="seat-wrap" id="map">

            <div class="box-count">
                Thời gian chọn vé <b><span id="count-time">05:00</span></b>
            </div>
            <div class="maps">
                <div class="seat seat-20 active" data-seat="11295335" data-name="A01">
                    <span class="label">A01</span>
                </div>
                <div class="seat seat-20 active" data-seat="11295335" data-name="A01">
                    <span class="label">A01</span>
                </div>
                <div class="seat seat-20 active" data-seat="11295335" data-name="A01">
                    <span class="label">A01</span>
                </div>
                <div class="seat seat-20 active" data-seat="11295335" data-name="A01">
                    <span class="label">A01</span>
                </div>
                <div class="seat seat-20 active" data-seat="11295335" data-name="A01">
                    <span class="label">A01</span>
                </div>
                <div class="seat seat-20 active" data-seat="11295335" data-name="A01">
                    <span class="label">A01</span>
                </div>
            </div>
            <div class="seatnote">
                <div class="seat active"><span></span> Có thể đặt</div>
                <div class="seat selected"><span></span> Đang chọn</div>
                <div class="seat booking"><span></span> Đã có người chọn</div>
                <div class="seat booked"><span></span> Đã đặt</div>
                <div class="seat disable"><span></span> Ghế không thể đặt</div>
            </div>
        </div>
        <div class="payment-note">
            <p><b>Lưu ý:</b></p>
            <p>- Vé đã mua không thể đổi hay trả lại.</p>
            <p>- Khi được yêu cầu, vui lòng xuất trình giấy tờ tùy thân để chứng thực độ tuổi khi xem phim.</p>
            <p>- Thông tin mã đặt vé được gởi qua số điện thoại & email được cung cấp, Quý khách vui lòng cung cấp
                mã đặt vé khi lấy vé tại quầy.</p>
        </div>
    </div>
    <a href="javascript:;" class="btn-action btn-bottom" id="datve">
        Đặt vé
    </a>

    <div class="combobox">
        <span class="glyphicon glyphicon-star tada animated infinite"></span> Chọn đồ ăn - thức uống
    </div>

    <div id="combo">
        <a href="javascript:;" class="group-head" data-collapse="#group-118">
            <span>Combo</span>
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        </a>
        <div class="group-combo-content" id="group-118">
            <table class="table table-noborder combo">
                <tbody>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-pepsibapngot-1696227008-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi + Bắp Ngọt</p>
                                <small class="combo-description">
                                    1 Bắp rang bơ, 1 Pepsi
                                </small>
                                <span style="display: block;" class="price">67.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000000">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000000]" id="1000000" data-price="67000" class="tongItem" value="0"
                                min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000000">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-pepsibapphomai-1696227008-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi + Bắp phô mai</p>
                                <small class="combo-description">
                                    1 Bắp phô mai, 1 Pepsi
                                </small>
                                <span style="display: block;" class="price">72.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000004">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000004]" id="1000004" data-price="72000" class="tongItem" value="0"
                                min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000004">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-pepsi0bapngot-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi Không Calo + Bắp Ngọt</p>
                                <small class="combo-description">
                                    1 Pepsi Không Calo, 1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">67.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000146">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000146]" id="1000146" data-price="67000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000146">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-pepsi0bapphomai-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi Không Calo + Bắp phô mai</p>
                                <small class="combo-description">
                                    1 Pepsi Không Calo, 1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">72.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000147">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000147]" id="1000147" data-price="72000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000147">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-7upbapngot-1696227006-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">7up + Bắp Ngọt</p>
                                <small class="combo-description">
                                    1 Bắp rang bơ, 1 7UP
                                </small>
                                <span style="display: block;" class="price">67.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000001">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000001]" id="1000001" data-price="67000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000001">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-7upbapphomai-1696227007-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">7up + Bắp phô mai</p>
                                <small class="combo-description">
                                    1 Bắp phô mai, 1 7UP
                                </small>
                                <span style="display: block;" class="price">72.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000005">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000005]" id="1000005" data-price="72000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000005">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-mirindabapngot-1696227007-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mirinda + Bắp Ngọt</p>
                                <small class="combo-description">
                                    1 Bắp rang bơ, 1 Mirinda
                                </small>
                                <span style="display: block;" class="price">67.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000003">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000003]" id="1000003" data-price="67000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000003">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-mirindabapphomai-1696227007-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mirinda + Bắp phô mai</p>
                                <small class="combo-description">
                                    1 Bắp phô mai, 1 Mirinda
                                </small>
                                <span style="display: block;" class="price">72.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000007">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000007]" id="1000007" data-price="72000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000007">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/chanhngotlll-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Lipton + Bắp Ngọt</p>
                                <small class="combo-description">
                                    1 Trà Lipton Chanh, 1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">67.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000127">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000127]" id="1000127" data-price="67000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000127">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/lipton-pho-mailll-1-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Lipton + Bắp Phô Mai</p>
                                <small class="combo-description">
                                    1 Trà Lipton Chanh, 1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">72.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000128">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000128]" id="1000128" data-price="72000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000128">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-2pepsibapngot-1696227006-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Pepsi + 1 Bắp Ngọt</p>
                                <small class="combo-description">
                                    2 Pepsi, 1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">89.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000030">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000030]" id="1000030" data-price="89000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000030">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-2pepsibapphomai-1696227006-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Pepsi + 1 Bắp Phô Mai</p>
                                <small class="combo-description">
                                    2 Pepsi, 1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">94.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000033">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000033]" id="1000033" data-price="94000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000033">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-2pepsi0bapngot-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Pepsi Không Calo + 1 Bắp Ngọt</p>
                                <small class="combo-description">
                                    2 Pepsi Không Calo, 1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">89.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000148">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000148]" id="1000148" data-price="89000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000148">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-pepsi0bapphomai-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Pepsi Không Calo + 1 Bắp Phô Mai</p>
                                <small class="combo-description">
                                    2 Pepsi Không Calo, 1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">94.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000149">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000149]" id="1000149" data-price="94000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000149">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-27upbapngot-1696227007-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 7Up + 1 Bắp Ngọt</p>
                                <small class="combo-description">
                                    2 7UP, 1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">89.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000031">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000031]" id="1000031" data-price="89000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000031">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-2upbapphomai-1696227006-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 7Up + 1 Bắp Phô Mai</p>
                                <small class="combo-description">
                                    2 7UP, 1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">94.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000034">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000034]" id="1000034" data-price="94000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000034">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-2mirindabapngot-1696227005-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Mirinda + 1 Bắp Ngọt</p>
                                <small class="combo-description">
                                    2 Mirinda, 1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">89.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000032">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000032]" id="1000032" data-price="89000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000032">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/cb-2mirindabapphomai-1696227005-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Mirinda + 1 Bắp Phô Mai</p>
                                <small class="combo-description">
                                    2 Mirinda, 1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">94.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000035">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000035]" id="1000035" data-price="94000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000035">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/lipton-kk-1-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Trà Lipton + 1 Bắp Ngọt</p>
                                <small class="combo-description">
                                    2 Trà Lipton Chanh, 1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">89.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000130">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000130]" id="1000130" data-price="89000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000130">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/lipton-pho-mai-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">2 Trà Lipton + 1 Bắp Phô Mai</p>
                                <small class="combo-description">
                                    2 Trà Lipton Chanh, 1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">94.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000129">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000129]" id="1000129" data-price="94000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000129">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/combofamily-1-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Combo Family</p>
                                <small class="combo-description">
                                    3 Pepsi, 2 Bắp rang bơ, 1 Swing Vị Bít Tết, 1 Rong biển Roll truyền thống
                                </small>
                                <span style="display: block;" class="price">185.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000058">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000058]" id="1000058" data-price="185000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000058">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="javascript:;" class="group-head" data-collapse="#group-115">
            <span>Drink</span>
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        </a>
        <div class="group-combo-content" id="group-115">
            <table class="table table-noborder combo">
                <tbody>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/pepsi-nho-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi</p>
                                <small class="combo-description">
                                    1 Pepsi
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000009">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000009]" id="1000009" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000009">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/pepsi-lon-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi Lớn</p>
                                <small class="combo-description">
                                    1 Pepsi Lớn
                                </small>
                                <span style="display: block;" class="price">30.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000012">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000012]" id="1000012" data-price="30000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000012">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/lypepsi-big-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi Không Calo</p>
                                <small class="combo-description">
                                    1 Pepsi Không Calo
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000145">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000145]" id="1000145" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000145">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/lypepsi-03-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi Không Calo Lớn</p>
                                <small class="combo-description">
                                    1 Pepsi Không Calo Lớn
                                </small>
                                <span style="display: block;" class="price">30.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000144">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000144]" id="1000144" data-price="30000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000144">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/7up-nho-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">7UP</p>
                                <small class="combo-description">
                                    1 7UP
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000011">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000011]" id="1000011" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000011">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/7up-lon-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">7UP Lớn</p>
                                <small class="combo-description">
                                    1 7UP Lớn
                                </small>
                                <span style="display: block;" class="price">30.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000014">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000014]" id="1000014" data-price="30000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000014">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/mirinda-nho-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mirinda</p>
                                <small class="combo-description">
                                    1 Mirinda
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000010">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000010]" id="1000010" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000010">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/mirinda-lon-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mirinda Lớn</p>
                                <small class="combo-description">
                                    1 Mirinda Lớn
                                </small>
                                <span style="display: block;" class="price">30.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000013">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000013]" id="1000013" data-price="30000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000013">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/avt12-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Lipton Chanh</p>
                                <small class="combo-description">
                                    1 Trà Lipton Chanh
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000123">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000123]" id="1000123" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000123">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/avt12-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Lipton Chanh Lớn</p>
                                <small class="combo-description">
                                    1 Trà Lipton Chanh Lớn
                                </small>
                                <span style="display: block;" class="price">30.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000124">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000124]" id="1000124" data-price="30000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000124">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/1000048-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Aquafina</p>
                                <small class="combo-description">
                                    1 Nước suối Aquafina
                                </small>
                                <span style="display: block;" class="price">22.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000008">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000008]" id="1000008" data-price="22000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000008">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/trasua2-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Sữa Trân Châu Trắng</p>
                                <small class="combo-description">
                                    1 Trà Sữa Trân Châu Trắng
                                </small>
                                <span style="display: block;" class="price">39.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000131">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000131]" id="1000131" data-price="39000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000131">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/juice-milk-cam-300ml-chai-800x800-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">TH True Juice Milk Cam</p>
                                <small class="combo-description">
                                    1 TH True Juice Milk Cam
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000160">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000160]" id="1000160" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000160">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/juice-milk-dau-chai-300-800x800-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">TH True Juice Milk Dâu</p>
                                <small class="combo-description">
                                    1 TH True Juice Milk Dâu
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000157">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000157]" id="1000157" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000157">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/juicemilkt7-2022-800x800-chuoi-1-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">TH True Juice Milk Chuối</p>
                                <small class="combo-description">
                                    1 TH True Juice Milk Chuối
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000158">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000158]" id="1000158" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000158">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/juicemilkt7-2022-800x800-vietquat-1-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">TH True Juice Milk Việt Quất</p>
                                <small class="combo-description">
                                    1 TH True Juice Milk Việt Quất
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000159">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000159]" id="1000159" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000159">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/tra-tac-mat-ong-cozy-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Tắc Mật Ong Cozy</p>
                                <small class="combo-description">
                                    1 Trà Tắc Mật Ong Cozy
                                </small>
                                <span style="display: block;" class="price">25.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000103">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000103]" id="1000103" data-price="25000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000103">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/tra-vai-cozy-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Vải Cozy</p>
                                <small class="combo-description">
                                    1 Trà Vải Cozy
                                </small>
                                <span style="display: block;" class="price">25.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000104">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000104]" id="1000104" data-price="25000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000104">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/1da5c93dc2d4f075edfb9a1c723297f4-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Bí Đao Cozy</p>
                                <small class="combo-description">
                                    1 Trà Bí Đao Cozy
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000151">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000151]" id="1000151" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000151">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/tra-dao-hat-chia-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Trà Đào Hạt Chia FuzeTea</p>
                                <small class="combo-description">
                                    1 Trà Đào Hạt Chia
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000039">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000039]" id="1000039" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000039">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/googledrive-gumi-cam-pijp9sb0cktb0jwu6gfsagaf8var11iixu87sgrjmw-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Nước thạch Jelly Gumi Cam</p>
                                <small class="combo-description">
                                    1 Nước thạch Jelly Gumi Cam
                                </small>
                                <span style="display: block;" class="price">25.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000134">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000134]" id="1000134" data-price="25000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000134">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/googledrive-gumi-nho-pijp9t8ujeulc5vh0yueuy1vu9648qm99yvp9qq5go-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Nước Thạch Jelly Gumi Nho</p>
                                <small class="combo-description">
                                    1 Nước thạch Jelly Gumi Nho
                                </small>
                                <span style="display: block;" class="price">25.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000135">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000135]" id="1000135" data-price="25000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000135">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/googledrive-gumi-vai-pijp9yvvof2b9tna41a69wmnekebix8naqsm5ehsfc-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Nước Thạch Jelly Gumi Vải</p>
                                <small class="combo-description">
                                    1 Nước thạch Jelly Gumi Vải
                                </small>
                                <span style="display: block;" class="price">25.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000136">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000136]" id="1000136" data-price="25000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000136">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/ca-phe-birdy-1591101071-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Cà Phê Sữa Lon</p>
                                <small class="combo-description">
                                    1 Cà Phê Sữa Birdy
                                </small>
                                <span style="display: block;" class="price">25.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000069">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000069]" id="1000069" data-price="25000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000069">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/ca-phe-den-birdy-632-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Cà Phê Đen Lon</p>
                                <small class="combo-description">
                                    1 Cà Phê Đen Birdy
                                </small>
                                <span style="display: block;" class="price">25.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000113">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000113]" id="1000113" data-price="25000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000113">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/milo-lon-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Milo</p>
                                <small class="combo-description">
                                    1 Milo
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000015">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000015]" id="1000015" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000015">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/pepsikhongcalo-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Pepsi Vị Chanh Không Calo</p>
                                <small class="combo-description">
                                    1 Pepsi Vị Chanh Không Calo
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000121">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000121]" id="1000121" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000121">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/nuoc-ngot-sting-dau-lon-cao-330ml-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Sting Dâu</p>
                                <small class="combo-description">
                                    1 Sting Dâu
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000116">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000116]" id="1000116" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000116">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/bo-huc-redbull-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bò Húc RedBull</p>
                                <small class="combo-description">
                                    1 Bò húc RedBull
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000073">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000073]" id="1000073" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000073">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="javascript:;" class="group-head" data-collapse="#group-116">
            <span>Popcorn</span>
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        </a>
        <div class="group-combo-content" id="group-116">
            <table class="table table-noborder combo">
                <tbody>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/573611-1-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bắp Ngọt</p>
                                <small class="combo-description">
                                    1 Bắp rang bơ
                                </small>
                                <span style="display: block;" class="price">45.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000016">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000016]" id="1000016" data-price="45000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000016">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/bap-pho-mai-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bắp Phô Mai</p>
                                <small class="combo-description">
                                    1 Bắp phô mai
                                </small>
                                <span style="display: block;" class="price">50.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000017">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000017]" id="1000017" data-price="50000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000017">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/bap-caramel-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bắp Caramel</p>
                                <small class="combo-description">
                                    1 Bắp Caramel
                                </small>
                                <span style="display: block;" class="price">50.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000064">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000064]" id="1000064" data-price="50000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000064">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="javascript:;" class="group-head" data-collapse="#group-117">
            <span>Snack</span>
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        </a>
        <div class="group-combo-content" id="group-117">
            <table class="table table-noborder combo">
                <tbody>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/vn-11134207-7r98o-lshx6lieywuc29-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bánh Tráng Nướng Phủ Khô Bò Cay</p>
                                <small class="combo-description">
                                    1 Bánh Tráng Nướng Phủ Khô Bò Cay
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000168">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000168]" id="1000168" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000168">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/vn-11134207-7r98o-lshx6lif34jodb-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bánh Tráng Nướng Phủ Mực Nướng</p>
                                <small class="combo-description">
                                    1 Bánh Tráng Nướng Phủ Mực Nướng
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000169">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000169]" id="1000169" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000169">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/vn-11134207-7r98o-ls9l744984as01-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bánh Tráng Nướng Phủ Tôm Nướng</p>
                                <small class="combo-description">
                                    1 Bánh Tráng Nướng Phủ Tôm Nướng Cay
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000172">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000172]" id="1000172" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000172">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/vn-11134207-7r98o-lshx6lieup5024-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bánh Tráng Nướng Phủ Chà Bông Gà</p>
                                <small class="combo-description">
                                    1 Bánh Tráng Nướng Phủ Chà Bông Gà
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000170">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000170]" id="1000170" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000170">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/vn-11134207-7r98o-ls9l7449cc040d-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bánh Tráng Nướng Phủ Phô Mai</p>
                                <small class="combo-description">
                                    1 Bánh Tráng Nướng Phủ Phô Mai
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000171">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000171]" id="1000171" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000171">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/or-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Bánh Oreo Mini</p>
                                <small class="combo-description">
                                    1 Bánh Oreo Mini
                                </small>
                                <span style="display: block;" class="price">29.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000176">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000176]" id="1000176" data-price="29000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000176">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/xx-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Xúc Xích Lắc Phô Mai</p>
                                <small class="combo-description">
                                    1 Xúc Xích Lắc Phô Mai
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000174">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000174]" id="1000174" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000174">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/xx-tr-n-u-bbq-4-c-y-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Xúc Xích Xốt BBQ</p>
                                <small class="combo-description">
                                    1 Xúc Xích Xốt BBQ
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000175">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000175]" id="1000175" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000175">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/snack-que-dorkbua-do-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Snack Que Thái Lan Đỏ</p>
                                <small class="combo-description">
                                    1 Snack Que Thái Lan Đỏ
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000105">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000105]" id="1000105" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000105">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/snack-que-dorkbua-cam-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Snack Que Thái Lan Cam</p>
                                <small class="combo-description">
                                    1 Snack Que Thái Lan Cam
                                </small>
                                <span style="display: block;" class="price">27.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000106">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000106]" id="1000106" data-price="27000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000106">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-phim-2021/snack-muc-tam-gia-vi-hai-san-sieu-cay-bento-goi-20g-202007200811199981-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mực Bento Xanh Lá (Chua Cay)</p>
                                <small class="combo-description">
                                    1 Mực Bento Xanh Lá (Chua Cay)
                                </small>
                                <span style="display: block;" class="price">35.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000173">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000173]" id="1000173" data-price="35000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000173">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/snack-bento-muc-tam-gia-vi-thai-20g-mau-xanh-duong-imnuts-2-09247e73e710423381209b31fd482a3c-master-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mực Bento Xanh (Ít Cay)</p>
                                <small class="combo-description">
                                    1 Mực Bento Xanh (Ít Cay)
                                </small>
                                <span style="display: block;" class="price">35.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000153">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000153]" id="1000153" data-price="35000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000153">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/snack-bento-muc-tam-gia-vi-thai-20g-mau-do-imnuts-2-406bf9a98d2a4c89a644a6bb3ada05e7-master-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mực Bento Đỏ (Cay Ngọt)</p>
                                <small class="combo-description">
                                    1 Mực Bento Đỏ (Cay Ngọt)
                                </small>
                                <span style="display: block;" class="price">35.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000154">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000154]" id="1000154" data-price="35000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000154">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/hinh-san-pham/snack-bento-muc-tam-gia-vi-thai-20g-mau-cam-imnuts-2-af703de77e104b52995ef00175463273-master-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Mực Bento Cam (Cay Giòn)</p>
                                <small class="combo-description">
                                    1 Mực Bento Cam (Cay Giòn)
                                </small>
                                <span style="display: block;" class="price">35.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000155">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000155]" id="1000155" data-price="35000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000155">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/swing-vi-bit-tet-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Swing Vị Bít Tết</p>
                                <small class="combo-description">
                                    1 Swing Vị Bít Tết
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000051">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000051]" id="1000051" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000051">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/ostar-vi-kim-chi-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">O'star Vị Kim Chi</p>
                                <small class="combo-description">
                                    1 O'star Vị Kim Chi
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000050">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000050]" id="1000050" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000050">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/ostar-vi-tao-bien-poster.jpg)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">O'star Vị Tảo Biển</p>
                                <small class="combo-description">
                                    1 O'star Vị Tảo Biển
                                </small>
                                <span style="display: block;" class="price">19.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000049">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000049]" id="1000049" data-price="19000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000049">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/untitled-1591103989-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Rong Biển Truyền Thống</p>
                                <small class="combo-description">
                                    1 Rong biển Roll truyền thống
                                </small>
                                <span style="display: block;" class="price">15.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000094">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000094]" id="1000094" data-price="15000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000094">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                    <tr>
                        <td class="combo-info">
                            <div class="image-combo"
                                style="background-image: url(https://touchcinema.com/medias/untitled-1591104148-poster.png)">
                            </div>
                            <div class="combo-group">
                                <p class="combo-name">Rong Biển Cay</p>
                                <small class="combo-description">
                                    1 Rong biển Roll cay
                                </small>
                                <span style="display: block;" class="price">15.000 đ</span>
                            </div>
                        </td>
                        <td class="text-right comb-qty">
                            <button class="giamItem" data-forcombo="1000093">
                                <span class="glyphicon glyphicon-minus"></span>
                            </button>
                            <input name="combo[1000093]" id="1000093" data-price="15000" class="tongItem"
                                value="0" min="0" max="10" type="text" readonly="">
                            <button class="tangItem active" data-forcombo="1000093">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="ticket-info">
        <h3>Vé và combo đã chọn</h3>
        <table>
            <tbody>
                <tr>
                    <th>Ghế đang chọn:</th>
                    <td id="seat-code"></td>
                </tr>
                <tr>
                    <th>Tiền vé:</th>
                    <td><span id="total">0</span></td>
                </tr>
                <tr>
                    <th>Tiền combo:</th>
                    <td><span id="totalPriceCombo">0</span></td>
                </tr>
                <tr>
                    <th>Tổng cộng:</th>
                    <td><span id="totalPrice">0</span></td>
                </tr>
            </tbody>
        </table>
        <h3>Thông tin đặt vé</h3>
        <p>Họ tên: <b>Trần Dần</b></p>
        <p>Số điện thoại: <b>0971131429</b></p>
        <p>Email: <b>nhatcaca2004@gmail.com</b></p>
        <div><a href="javascrit:void(0);" id="changeInfo">Đăng nhập tài khoản khác hoặc Đổi thông tin</a></div>
    </div>

    <div class="payment-note">
        <p><b>Lưu ý:</b></p>
        <p> - Vé đã mua không thể đổi hay trả lại.</p>
        <p> - Khi được yêu cầu, vui lòng xuất trình giấy tờ tùy thân để chứng thực độ tuổi khi xem phim.</p>
        <p> - Bản sao thông tin vé sẽ được lưu vào mục lịch sử giao dịch trong tài khoản nếu quý khách đã đăng nhập khi mua
            vé. 1 bản sao khác sẽ gửi đến Email của quý khách. Quý khách vui lòng kiểm tra kỹ cả trong mục spam email. </p>
        <p> - Quý khách vui lòng lưu lại hoặc chụp ảnh lại để xuất trình khi qua cửa soát vé <strong>(KHÔNG CẦN IN VÉ TẠI
                QUẦY)</strong>.</p>
        <p> - Nếu có kèm mua bắp nước online quý khách được ưu tiên khi xếp hàng để lên thẳng quầy vé in hóa đơn, sau đó xếp
            hàng ở quầy bắp nước để nhận.</p>
    </div>
@endsection


@section('js')
    <script></script>
@endsection
