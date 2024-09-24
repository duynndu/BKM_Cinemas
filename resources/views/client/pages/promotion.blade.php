@extends('client.layouts.main')

@section('title', 'Khuyễn mãi')

@section('css')
    <style>
        .page-cinema-list {
            color: #FFF;
        }

        .movie {
            width: 250px;
        }

        .movie .poster img {
            height: 360px;
        }

        .nav-tabs {
            border-bottom: 1px solid #630460;
            padding-bottom: 10px;
        }

        .nav-tabs>li {
            padding: 10px 2px;
            background: #630460;
            text-transform: uppercase;
            border-radius: 4px;
            font-size: 18px;
            width: 150px;
            display: inline-block;
            text-align: center;
            vertical-align: bottom;
            float: initial;
        }

        .nav-tabs>li a,
        .nav-tabs>li a:hover,
        .nav-tabs>li a:focus {
            background: transparent;
            border: none;
            color: #fff;
            padding: initial;
        }

        .nav-tabs>li.active {
            background-color: #eb1689;
            height: 60px;
            padding-top: 22px;
        }

        .nav-tabs>li.active a,
        .nav-tabs>li.active a:hover,
        .nav-tabs>li.active a:focus {
            background: transparent;
            border: none;
            color: #fff;
            padding: initial;
        }

        .nav-tabs>li a h3 {
            font-size: 20px;
            margin: 0;
        }

        .tab-content {
            margin: 10px 0;
        }

        img {
            max-width: 100% !important;
        }
    </style>
    <link rel="stylesheet" href="https://touchcinema.com/statics/frontend/plugins/owl-carousel/assets/owl.carousel.min.css"
        type="text/css" media="all" />
@endsection

@section('content')
    <div class="container post-page">
        <div class="row">
            <div class="col-md-8 col-sm-8 list-post">
                <h1>Ưu đãi - sự kiện</h1>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/touchxyoungfest.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/slide-web/1000x1000-1680826524-thumbnail.jpg"
                                alt="TOUCHxYOUNGFEST" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/touchxyoungfest.html">TOUCHxYOUNGFEST</a></h3>
                        <div class="description">
                            THỜI GIAN DIỄN RA CHƯƠNG TR&Igrave;NH: 07.4.2023-08.04.2023
                            &Aacute;P DỤNG TẠI: OLINE V&Agrave; TẠI QUẦY TOUCH CINEMA
                            NỘI DUNG CHƯƠNG TR&Igrave;NH:

                            Lễ hội &acirc;m nhạc YOUNGFEST sẽ được tổ chức...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/1010-touchxgrab-mua-1-tang-1-bap-rang-bo.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/slide-web/1000x1000-1665158482-thumbnail.png"
                                alt="10.10 TOUCHxGRAB MUA 1 TẶNG 1 BẮP RANG BƠ" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/1010-touchxgrab-mua-1-tang-1-bap-rang-bo.html">10.10 TOUCHxGRAB
                                MUA 1 TẶNG 1 BẮP RANG BƠ</a></h3>
                        <div class="description">
                            THỜI GIAN DIỄN RA CHƯƠNG TR&Igrave;NH: 10.10.2022
                            &Aacute;P DỤNG TẠI: Cửa h&agrave;ng Touch Cinema tr&ecirc;n ứng dụng Grab
                            NỘI DUNG CHƯƠNG TR&Igrave;NH:

                            Mỗi kh&aacute;ch h&agrave;ng khi mua 2 phần bắp rang bơ bất...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/slide-web/1000x1000-1-thumbnail.png"
                                alt="10.10 DEAL SIÊU HỜI BẮP RANG BƠ 10K" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k.html">10.10 DEAL SIÊU HỜI BẮP
                                RANG BƠ 10K</a></h3>
                        <div class="description">
                            THỜI GIAN DIỄN RA CHƯƠNG TR&Igrave;NH:&nbsp;10.10.2022
                            &Aacute;P DỤNG TẠI: Touch Cinema Gia Lai
                            NỘI DUNG CHƯƠNG TR&Igrave;NH:

                            Mỗi kh&aacute;ch h&agrave;ng th&agrave;nh vi&ecirc;n Touch Cinema khi mua từ 3
                            v&eacute; xem phim...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/giam-20-hoa-don-khi-xem-dr-strange.html">
                            <img class="img-responsive"
                                src="../m.touchcinema.com/https://touchcinema.com/uploads/phim-2021/d4bab0d4-b0b8-42e5-a0eb-35c98ec63dc9-thumbnail.jpg"
                                alt="GIẢM 20% HÓA ĐƠN KHI XEM DR. STRANGE" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/giam-20-hoa-don-khi-xem-dr-strange.html">GIẢM 20% HÓA ĐƠN KHI
                                XEM DR. STRANGE</a></h3>
                        <div class="description">Nhận ngay ưu đ&atilde;i giảm 20% h&oacute;a đơn bắp nước
                            KH&Ocirc;NG GIỚI HẠN SỐ LƯỢNG (&aacute;p dụng tất cả c&aacute;c mặt h&agrave;ng) khi
                            mua v&eacute; online phim Ph&ugrave; Thủy Tối Thượng tại Touch...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/vong-quay-may-man.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/slide-web/1000x1000-thumbnail.jpg"
                                alt="Vòng Quay May Mắn: 100% nhận quà tặng Voucher từ Touch Cinema!" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/vong-quay-may-man.html">Vòng Quay May Mắn: 100% nhận quà tặng
                                Voucher từ Touch Cinema!</a></h3>
                        <div class="description">Th&ocirc;ng tin ch&iacute;nh thức về chương tr&igrave;nh
                            V&Ograve;NG QUAY MAY MĂN tại Touch Cinema n&egrave; cả nh&agrave; ơi.
                            - Về thời gian diễn ra sự kiện: Diễn ra thường xuy&ecirc;n từ 12:00 đến 18:00
                            ng&agrave;y...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/xuan-nham-dan-2022-li-xi-tha-ga-phuc-loc-day-nha.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-2021/li-xi-tha-ga-2022-thumbnail.jpg"
                                alt="🌼XUÂN NHÂM DẦN 2022: LÌ XÌ THẢ GA - PHÚC LỘC ĐẦY NHÀ" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/xuan-nham-dan-2022-li-xi-tha-ga-phuc-loc-day-nha.html">🌼XUÂN
                                NHÂM DẦN 2022: LÌ XÌ THẢ GA - PHÚC LỘC ĐẦY NHÀ</a></h3>
                        <div class="description">🌼 Đến hẹn lại l&ecirc;n, nh&acirc;n dịp Tết đến Touch Cinema
                            c&ugrave;ng với chương tr&igrave;nh ph&uacute;c lộc đầy nh&agrave; - Touch Cinema
                            l&igrave; x&igrave; thả ga cho cả năm may mắn.
                            🎋Đầu xu&acirc;n...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/xuan-nhu-y.html">
                            <img class="img-responsive"
                                src="../m.touchcinema.com/https://touchcinema.com/uploads/phim-2021/32fa2219-8f2e-41b6-9033-7e4007c3c976-thumbnail.jpg"
                                alt="𝐗𝐮𝐚̂𝐧 𝐍𝐡𝐮̛ 𝐘́ - 𝐓𝐞̂́𝐭 𝐀𝐧 𝐊𝐡𝐚𝐧𝐠" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/xuan-nhu-y.html">𝐗𝐮𝐚̂𝐧 𝐍𝐡𝐮̛ 𝐘́ - 𝐓𝐞̂́𝐭 𝐀𝐧
                                𝐊𝐡𝐚𝐧𝐠</a></h3>
                        <div class="description">🎊𝐂𝐇𝐔́𝐂 𝐌𝐔̛̀𝐍𝐆 𝐍𝐀̆𝐌 𝐌𝐎̛́𝐈 𝐐𝐔𝐘́ 𝐌𝐀̃𝐎
                            𝟮𝟬𝟮𝟯😽
                            🎉Touch Cinema xin k&iacute;nh ch&uacute;c to&agrave;n thể qu&yacute; kh&aacute;ch
                            h&agrave;ng năm mới &Acirc;m...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/mung-83-ca-nha-vui-ve-tang-ve-khu-vui-choi.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/event2021/mung-83-2021-thumbnail.jpg"
                                alt="“MÙNG 8/3 – CẢ NHÀ VUI VẺ” – TẶNG VÉ KHU VUI CHƠI" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/mung-83-ca-nha-vui-ve-tang-ve-khu-vui-choi.html">“MÙNG 8/3 – CẢ
                                NHÀ VUI VẺ” – TẶNG VÉ KHU VUI CHƠI</a></h3>
                        <div class="description">
                            &nbsp;


                            🎊Mừng ng&agrave;y Quốc Tế Phụ Nữ 8/3, Touch Cinema xin d&agrave;nh những lời
                            ch&uacute;c tốt đẹp nhất tới to&agrave;n thể c&aacute;c b&agrave;, c&aacute;c mẹ,
                            c&aacute;c chị em g&aacute;i lu&ocirc;n...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/touch-da-tro-lai-khuyen-mai-10-ngay.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/slider-app/1000x1000-1-thumbnail.png"
                                alt="TOUCH ĐÃ TRỞ LẠI, KHUYẾN MÃI 10 NGÀY!" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/touch-da-tro-lai-khuyen-mai-10-ngay.html">TOUCH ĐÃ TRỞ LẠI,
                                KHUYẾN MÃI 10 NGÀY!</a></h3>
                        <div class="description">☀TH&Ocirc;NG B&Aacute;O: TOUCH CINEMA MỞ CỬA HOẠT ĐỘNG TRỞ LẠI
                            🔥Touch Cinema đ&atilde; ch&iacute;nh thức mở cửa v&agrave; hoạt động chiếu phim trở
                            lại từ 17:00 h&ocirc;m nay ng&agrave;y 25/02. Sau khoảng...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-item">
                    <div class="post-thumbnail">
                        <a href="khuyen-mai/giang-sinh-vui-ve-cung-touch-cinema.html">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/giang-sinh-2020/1000x1000-thumbnail.png"
                                alt="GIÁNG SINH VUI VẺ CÙNG TOUCH CINEMA" />
                        </a>
                    </div>
                    <div class="post-detail">
                        <h3><a href="khuyen-mai/giang-sinh-vui-ve-cung-touch-cinema.html">GIÁNG SINH VUI VẺ CÙNG
                                TOUCH CINEMA</a></h3>
                        <div class="description">
                            CHƯƠNG TR&Igrave;NH ƯU Đ&Atilde;I ĐẶC BIỆT: GI&Aacute;NG SINH VUI VẺ C&Ugrave;NG
                            TOUCH CINEMA TỪ 24 - 26.12.2020


                            &nbsp;


                            Theo đ&oacute;, đối với kh&aacute;ch h&agrave;ng th&agrave;nh vi&ecirc;n sẽ được
                            giảm ngay...</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="center">
                    <ul class="pagination">

                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="khuyen-mai4658.html?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-mai9ba9.html?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-maifdb0.html?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-maiaf4d.html?page=5">5</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-maic575.html?page=6">6</a></li>


                        <li class="page-item"><a class="page-link" href="khuyen-mai4658.html?page=2"
                                rel="next">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 sidebar">
                <div class="facebook-box hidden-xs">
                    <div class="fb-page fb_iframe_widget" data-width="390" data-adapt-container-width="true"
                        data-hide-cover="false" data-href="https://www.facebook.com/touchcinema/"
                        data-show-facepile="true" data-small-header="false" fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1700069773628064&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390">
                        <span style="vertical-align: bottom; width: 390px; height: 130px;"><iframe
                                name="f3e722c84f31cab22" width="390px" height="1000px"
                                data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://web.facebook.com/v12.0/plugins/page.php?adapt_container_width=true&amp;app_id=1700069773628064&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dffdb3cf7d97080a2a%26domain%3Dtouchcinema.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftouchcinema.com%252Ff2b32f582b5238d6a%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390"
                                style="border: none; visibility: visible; width: 390px; height: 130px;"
                                class=""></iframe></span></div>
                </div>
                <div class="widget-ticket ">
                    <h2>
                        <img src="{{ asset('') }}" alt="">
                        <img src="https://touchcinema.com/images/icons/icon-ticket.png" alt="Đặt vé" />
                        <span>Đặt vé</span>
                        <div class="border"></div>
                    </h2>
                    <form>
                        <div class="close-modal">Đóng</div>
                        <div class="select-group">
                            <span class="addon"><i class="fa fa-film"></i></span>
                            <select class="form-control" id="widget-movie">
                                <option>Chọn Phim</option>
                                <option value="973">Làm Giàu Với Ma</option>
                                <option value="1008">Đả Nữ Báo Thù</option>
                                <option value="993">Ma Da</option>
                                <option value="1012">Shin Cậu Bé Bút Chì: Nhật Ký Khủng Long Của Chúng Mình
                                    (Lồng Tiếng)</option>
                                <option value="963">Harold Và Cây Bút Phép Thuật (Lồng Tiếng)</option>
                                <option value="992">Quái Vật Không Gian</option>
                                <option value="1013">Hai Muối</option>
                                <option value="991">Chàng Nữ Phi Công</option>
                            </select>
                        </div>
                        <div class="select-group">
                            <span class="addon"><i class="fa fa-calendar-plus-o"></i></span>
                            <select class="form-control" id="widget-date">
                                <option>Chọn Ngày</option>
                            </select>
                        </div>
                        <div class="select-group">
                            <span class="addon"><i class="fa fa-calendar"></i></span>
                            <select class="form-control" id="widget-time">
                                <option>Chọn Suất</option>
                            </select>
                        </div>
                        <div class="center">
                            <button type="button" class="btn btn-success widget-buy">Mua vé</button>
                        </div>
                        <div class="loading hidden">
                            <img src="https://touchcinema.com/images/loader.gif" alt="Loading..." />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
