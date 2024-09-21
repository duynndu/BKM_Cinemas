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
    <div class="container page-post-detail">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="post-detail">
                    <h1>Dịch vụ quảng cáo - sự kiện</h1>
                    <div class="pull-left">
                        <div class="post-meta">
                            Đăng lúc
                            <a href="#">20/03/2018</a>
                            bởi
                            <a href="#">
                                bathiet
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="post-content">
                        <p style="text-align: justify;"><span style="color: #000000;"><strong>Ở <a style="color: #000000;"
                                        href="https://odt.vn/bat-dong-san-gia-lai" rel="dofollow">Gia Lai</a> hiện nay, rạp
                                    chiếu phim Touch Cinema đang là điểm đến cực kỳ tiện lợi và mới mẻ cho các khách hàng có
                                    nhu cầu quảng cáo sản phẩm, dịch vụ và tổ chức sự kiện.</strong></span></p>
                        <p style="text-align: justify;"><span style="color: #000000;">Vào các ngày lễ hoặc cuối tuần, chúng
                                tôi có một lượng khách hàng đến rạp rất đông đảo và thường xuyên. Với lợi thế này, việc
                                quảng cáo sản phẩm, dịch vụ qua các TVC trước giờ chiếu phim hay tại các màn hình LCD ở sảnh
                                chờ là một công cụ quảng cáo không thể thiếu của nhiều công ty, cửa hàng. Ngoài TVC, LCD thì
                                việc đặt các booth hay tủ trưng bày tại sảnh rạp cũng là một điều lý tưởng cho khách hàng
                                quan tâm, tìm hiểu trực tiếp và tương tác với sản phẩm, dịch vụ của bạn.</span></p>
                        <p style="text-align: justify;"><span style="color: #000000;">Các phòng chiếu của Touch Cinema được
                                thiết kế rộng rãi, màn hình lớn cùng với âm thanh ánh sáng chuẩn, các hàng ghế được sắp xếp
                                từ thấp đến cao một cách khoa học. Những điểm này hoàn toàn phù hợp cho việc tổ chức các
                                buổi hội nghị, hội thảo hay họp mặt đông người. Để thực hiện các buổi tổ chức này, khách
                                hàng có thể thuê phòng chiếu trực tiếp hoặc mua vé số lượng lớn. Hãy liên hệ ngay với chúng
                                tôi để được áp dụng mức chiết khấu cực kỳ hấp dẫn:</span></p>
                        <p style="text-align: justify;"><span style="color: #000000;">Địa chỉ: 212 Nguyễn Tất Thành, Phường
                                Phù Đổng, TP. Pleiku, Gia Lai</span></p>
                        <p style="text-align: justify;"><span style="color: #000000;">Hotline: 0269 3838 999</span></p>
                        <p style="text-align: justify;"><span style="color: #000000;">Email: Contact@touchcinema.com</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="box-comment">
                    <div class="fb-comments" colorscheme="light" width="100%"
                        data-href="https://touchcinema.com/danh-gia-phim/quang-cao-su-kien" data-numposts="20"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 sidebar">
                <div class="facebook-box hidden-xs">
                    <div class="fb-page" data-width="390" data-adapt-container-width="true" data-hide-cover="false"
                        data-href="https://www.facebook.com/touchcinema/" data-show-facepile="true"
                        data-small-header="false">
                        <blockquote cite="https://www.facebook.com/touchcinema" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/touchcinema">
                                Touch Cinema
                            </a>
                        </blockquote>
                    </div>
                </div>

                <div class="widget-ticket ">
                    <h2>
                        <img src="{{ asset('') }}images/icons/icon-ticket.png" alt="Đặt vé">
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
                                <option value="1012">Shin Cậu Bé Bút Chì: Nhật Ký Khủng Long Của Chúng Mình (Lồng Tiếng)
                                </option>
                                <option value="963">Harold Và Cây Bút Phép Thuật (Lồng Tiếng)</option>
                                <option value="992">Quái Vật Không Gian</option>
                                <option value="1013">Hai Muối</option>
                                <option value="991">Chàng Nữ Phi Công</option>
                            </select>
                        </div>
                        <div class="select-group">
                            <span class="addon">
                                <i class="fa-solid fa-calendar-plus"></i>
                            </span>
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
                            <img src="{{ asset('') }}/images/loader.gif" alt="Loading...">
                        </div>
                    </form>
                </div>
                <div class="related-movie">
                    <h2>Phim đang chiếu</h2>
                    <div class="list">
                        <a href="https://touchcinema.com/phim/con-cam">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slide-web/458921730-122133290114325031-6716915900288410321-n.png')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/transformers-one">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-11-1726654506.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/lt-transformers-mot">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-11-1726654506.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/lam-giau-voi-ma">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/lam-giau-voi-ma-1-1724686130347.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/anh-trai-vuot-moi-tam-tai">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-5-1726124535.jpg')">
                            </div>
                        </a>
                    </div>
                    <div class="view-more">
                        <a href="https://touchcinema.com/phim">
                            <div class="text">xem thêm</div>
                            <div class="arrow-down"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="related-post">
            <h2>Tin liên quan</h2>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/seobok-nguoi-nhan-ban">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-nguoi-nhan-ban/phim-nguoi-nhan-ban-thumbnail.jpg"
                                alt="Review phim Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước cái chết?">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/seobok-nguoi-nhan-ban">Review phim Seobok (Người
                            nhân bản) – Vì sao con người luôn sợ hãi trước cái chết?</a>
                    </h3>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/tham-tu-lung-danh-conan-vien-dan-do">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-tham-tu-lung-danh-conan-vien-dan-do/phim-tham-tu-lung-danh-conan-vien-dan-do-thumbnail.jpg"
                                alt="Review phim Thám tử lừng danh Conan: Viên đạn đỏ - Hấp dẫn miễn chê">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/tham-tu-lung-danh-conan-vien-dan-do">Review phim
                            Thám tử lừng danh Conan: Viên đạn đỏ - Hấp dẫn miễn chê</a>
                    </h3>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/lat-mat-48h">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-lat-mat-48h/phim-lat-mat-48h-thumbnail.png"
                                alt="Review phim Lật mặt: 48h  - Lý Hải &quot;đỉnh của chóp&quot; luôn">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/lat-mat-48h">Review phim Lật mặt: 48h - Lý Hải "đỉnh
                            của chóp" luôn</a>
                    </h3>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/nao-minh-cung-mo">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-nao-minh-cung-mo/phim-nao-minh-cung-mo-thumbnail.png"
                                alt="Review phim Nào mình cùng mơ – Vui vẻ, nhẹ nhàng">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/nao-minh-cung-mo">Review phim Nào mình cùng mơ – Vui
                            vẻ, nhẹ nhàng</a>
                    </h3>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/kieu">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-kieu/phim-kieu-thumbnail.png"
                                alt="Review phim Kiều – Có phải bị chê nhiều là không nên xem?">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/kieu">Review phim Kiều – Có phải bị chê nhiều là
                            không nên xem?</a>
                    </h3>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/ban-tay-diet-quy">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-ban-tay-diet-quy/phim-ban-tay-diet-quy-thumbnail.png"
                                alt="Review phim Bàn tay diệt quỷ - Gay cấn, ấn tượng và mê!">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/ban-tay-diet-quy">Review phim Bàn tay diệt quỷ - Gay
                            cấn, ấn tượng và mê!</a>
                    </h3>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/mortal-kombat-cuoc-chien-sinh-tu">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-mortal-kombat-cuoc-chien-sinh-tu/phim-mortal-kombat-cuoc-chien-sinh-tu-1-thumbnail.png"
                                alt="Review phim Mortal Kombat: Cuộc chiến sinh tử - Phù thủy James Wan chưa bao giờ khiến khán giả thất vọng">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/mortal-kombat-cuoc-chien-sinh-tu">Review phim Mortal
                            Kombat: Cuộc chiến sinh tử - Phù thủy James Wan chưa bao giờ khiến khán giả thất vọng</a>
                    </h3>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="poster">
                        <a href="https://touchcinema.com/danh-gia-phim/song-song">
                            <img class="img-responsive"
                                src="https://touchcinema.com/uploads/phim-song-song/phim-song-song-thumbnail.jpg"
                                alt="Review phim Song Song – Một cánh én nhỏ làm “chao đảo” cả vài mùa xuân">
                        </a>
                    </div>
                    <h3>
                        <a href="https://touchcinema.com/danh-gia-phim/song-song">Review phim Song Song – Một cánh én nhỏ
                            làm “chao đảo” cả vài mùa xuân</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
