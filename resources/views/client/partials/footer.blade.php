<div id="footer">
    <div id="footer">
        <div class="footer-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 footer-item">
                                <h4 class="footer-title">Chăm sóc khách hàng</h4>
                                <div class="footer-content">
                                    <p><b>Hotline:</b> 0269 3838 999</p>
                                    <p><b>Giờ làm việc:</b> 8h00-22h00 tất cả các ngày trong tuần</p>
                                    <p><b>Email:</b> contact@bkmcinema.com</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6 connect-us ">
                                <h4 class="footer-title">Kết nối với chúng tôi</h4>
                                <a href="https://www.facebook.com/touchcinema/" target="_blank">
                                    <img src="{{ asset('client/images/icons/icon-fb.png') }}" alt="Facebook" />
                                </a>
                                <a href="#">
                                    <img src="{{ asset('client/images/icons/icon-ytb.png') }}" alt="Youtube" />
                                </a>
                                <h4 class="footer-title m-t20">Ứng dụng</h4>
                                <a href="https://itunes.apple.com/vn/app/touch-cinema/id1329661214?l=vi"
                                    target="_blank">
                                    <img src="{{ asset('client/images/icons/app-ios.png') }}" alt="Appstore" />
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.touchcinema.cinema"
                                    target="_blank">
                                    <img src="{{ asset('client/images/icons/app-android.png') }}" alt="Google Play" />
                                </a>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12 text-right" style="margin-top:10px">

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 co-sm-12">
                        <div class="clearfix"></div>
                        <div class="row text-detail">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="dieu-khoan-chung.html">Điều khoản chung</a>
                                <a href="dieu-khoan-giao-dich.html">Điều khoản giao dịch</a>
                                <a href="chinh-sach-thanh-toan.html">Chính sách thanh toán</a>
                                <a href="chinh-sach-bao-mat-thong-tin-ca-nhan-khach-hang.html">Chính sách bảo
                                    mật thông tin</a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <a href="lien-he.html#hoi-dap">Câu hỏi thường gặp</a>
                                <a href="khuyen-mai/huong-dan-dat-ve-online-tai-rap-touch-cinema.html">Hướng dẫn
                                    đặt vé online</a>
                                <a href="lien-he.html">Liên hệ</a>
                                <a href="lien-he.html#tuyen-dung">Tuyển dụng</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-6 text-center">
                                <div class="newsletter" data-toggle="modal" href='#modal-subscribe'>
                                    <img src="{{ asset('client/images/icons/icon-email.png') }}" alt="Email" />
                                    Đăng kí nhận tin
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-6 text-center">
                                <a rel="nofollow" target="_blank"
                                    href="">
                                    <img class="img-responsive" src="{{ asset('client/images/icons/dathongbao.png') }}"
                                        alt="Touchcinema - Đã thông báo bộ công thương" />
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="bg-left"></div>
                <div class="bg-right"></div>
            </div>
        </div>
        <div class="partner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <span class="item">
                            <img src="{{ asset('client/images/partner-2.png') }}" alt="partner" />
                        </span>
                        <span class="item">
                            <img src="{{ asset('client/images/partner-3.png') }}" alt="partner" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="copyright">&copy{{ date('Y') }} BKM Cinema - All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-subscribe">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Đăng kí nhận tin</h4>
                </div>
                <div class="modal-body">
                    <div id="subscribe-msg" class="alert alert-danger hidden">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p></p>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="email-subscribe" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="center">
                        <button type="button" class="btn btn-primary btn-subscribe">Đăng kí</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
