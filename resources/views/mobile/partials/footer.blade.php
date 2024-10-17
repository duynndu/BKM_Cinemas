<div id="menu-footer">
    <div id="modal-datve">
        <div id='box-datve'>
            <h3>Đặt vé</h3>
            <form>
                <select class="chonphim" id="widget-movie">
                    <option>Chọn phim</option>
                    <option value="1036">Tee Yod: Quỷ Ăn Tạng 2</option>
                    <option value="976">Robot Hoang Dã (Lồng Tiếng)</option>
                    <option value="1034">Fubao: Bảo Bối Của Ông (Phụ Đề)</option>
                    <option value="978">Cám</option>
                    <option value="977">Joker: Điên Có Đôi</option>
                    <option value="1033">Kumanthong: Chiêu Hồn Vong Nhi</option>
                </select>
                <select class="chonngaychieu" id="widget-date">
                    <option>Chọn ngày chiếu</option>
                </select>
                <select class="chonsuatchieu" id="widget-time">
                    <option>Chọn suất chiếu</option>
                </select>
                <div id="chonsuatchieu">

                </div>
                <div class="loading hidden">
                    <img src="{{ asset('mobile/images/loader.gif') }}" alt="Loading..." />
                </div>
                <button type="button" class="widget-buy" id="muave">Mua vé</button>
            </form>
        </div>
        <script type="text/javascript">
            var get_showtime_data = 'lich-chieu.html';
            var url_dat_ve = 'dat-ve/index.html';
        </script>
    </div>
    <div class="quickmenu">
        <div class="item">
            <div class="boxitem danhmuc">
                <a href="#danhmuc">
                    <div class="ftit"
                        style="background-image: url({{ asset('mobile/statics/mobile/images/icon-danhmuc.png') }})">
                    </div>
                    <div class="fttext">Danh mục</div>
                    <div class="ftactive"></div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="boxitem dangchieu  active ">
                <a href="indexbed6.html?tab=dangchieu" class="tabmenu">
                    <div class="ftit"
                        style="background-image: url({{ asset('mobile/statics/mobile/images/icon-dangchieu.png') }})">
                    </div>
                    <div class="fttext">Đang chiếu</div>
                    <div class="ftactive"></div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="boxitem datve ">
                <a href="javascript:;" id="btn-datve">
                    <div class="ftit">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>
                    <div class="fttext">Đặt vé</div>
                    <div class="ftactive"></div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="boxitem sapchieu ">
                <a href="indexe342.html?tab=sapchieu" class="tabmenu">
                    <div class="ftit"
                        style="background-image: url({{ asset('mobile/statics/mobile/images/icon-sapchieu.png') }})">
                    </div>
                    <div class="fttext">Sắp chiếu</div>
                    <div class="ftactive"></div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="boxitem khuyenmai  ">
                <a href="index1f2c.html?tab=khuyenmai" class="tabmenu">
                    <div class="ftit"
                        style="background-image: url({{ asset('mobile/statics/mobile/images/icon-khuyenmai.png') }})">
                    </div>
                    <div class="fttext">Khuyến mãi</div>
                    <div class="ftactive"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="menu-item">
    <div class="menucontent">
        <ul>
            <li class="active"><a href="gia-ve.html" >Bảng giá vé</a></li>
            <li class="" style="background-image: url({{ asset('mobile/statics/mobile/images/menu-item.png') }})">
                <a href="lich-chieu.html">Lịch chiếu</a></li>
            <li class=""><a href="thanh-vien.html">Thành viên</a></li>
            <li class=""><a href="khuyen-mai.html">Ưu đãi - Sự kiện</a></li>
            <li class=""><a href="gioi-thieu.html">Giới thiệu</a></li>
            <li class=""><a href="danh-gia-phim.html">Đánh giá phim</a></li>

            <li class="">
                <a href="dich-vu/quang-cao-su-kien.html">
                    quảng cáo - sự kiện
                </a>
            </li>
            <li class="">
                <a href="dich-vu/touch-voucher.html">
                    Touch Voucher
                </a>
            </li>
        </ul>
        <div class="newletter">
            <input name="email" id="email_subscribe" placeholder="Đăng ký để nhận thông tin sớm nhất" />
            <button id="subscribe">Đăng ký nhận tin</button>
            <div id="mesg-letter">
            </div>
        </div>
    </div>
    {{-- <div id="dowloadapp">
        <a href="https://itunes.apple.com/vn/app/touch-cinema/id1329661214?l=vi" target="_blank">
            <img src="statics/mobile/images/appstore.png" alt="Download Touch Cinema iOs" />
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.touchcinema.cinema" target="_blank">
            <img src="statics/mobile/images/chplay.png" alt="Download Touch Cinema Androind" />
        </a>
    </div> --}}
    <a class="view-desktop" href="https://touchcinema.com/?noredirect=true">
        Phiên bản Desktop
    </a>
    <ul class="pages">
        <li>
            <a href="dieu-khoan-chung.html">
                Điều khoản chung
            </a>
        </li>
        <li>
            <a href="dieu-khoan-giao-dich.html">
                Điều khoản giao dịch
            </a>
        </li>
        <li>
            <a href="chinh-sach-thanh-toan.html">
                Chính sách thanh toán
            </a>
        </li>
        <li><a href="chinh-sach-bao-mat-thong-tin-ca-nhan-khach-hang.html">
                Chính sách bảo mật thông tin
            </a>
        </li>

        <li>
            <a href="lien-he.html#hoi-dap">
                Câu hỏi thường gặp
            </a>
        </li>
        <li>
            <a href="https://touchcinema.com/khuyen-mai/huong-dan-dat-ve-online-tai-rap-touch-cinema">
                Hướng dẫn đặt vé online
            </a>
        </li>
        <li>
            <a href="lien-he.html">
                Liên hệ
            </a>
        </li>
        <li>
            <a href="lien-he.html#tuyen-dung">
                Tuyển dụng
            </a>
        </li>
    </ul>
</div>
