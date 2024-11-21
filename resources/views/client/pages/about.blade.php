@extends('client.layouts.main')

@section('title', 'Gioi thieu')

@section('css')

@endsection

@section('content')
    <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>

    {{--  --}}
      <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>  <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#he-thong-rap">Hệ thống rạp</a></li>
                        <li><a data-toggle="tab" href="#phong-chieu">Phòng chiếu</a></li>
                        <li><a data-toggle="tab" href="#food-drink">Foods & Drink</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="item ">
                                <img src="https://touchcinema.com/storage/rap2020/154f335cbb0d4853111c3.jpg"
                                    alt="Hệ thống rạp Touchcinema 5">
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="he-thong-rap" class="tab-pane fade in active">
                            <div class="des">
                                <h1><strong><span style="font-size: 14pt; font-family: arial, helvetica, sans-serif;">Touch
                                            Cinema Gia Lai</span></strong></h1>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống rạp TouchCinema tọa lạc tại trung t&acirc;m TP. Pleiku, được trang
                                        bị với tổng số 600 ghế ngồi, 4 m&agrave;n h&igrave;nh cong k&iacute;ch
                                        thước lớn với chất lượng h&igrave;nh ảnh theo ti&ecirc;u chuẩn quốc tế,
                                        <strong>Touch Cinema&nbsp;</strong>đem lại cho người y&ecirc;u điện ảnh
                                        cảm gi&aacute;c thỏa m&atilde;n về thị gi&aacute;c khi thưởng thức những
                                        pha h&agrave;nh động gay cấn hay c&aacute;c khung h&igrave;nh đắt
                                        gi&aacute;, tuyệt đẹp trong phim.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Hệ
                                        thống &acirc;m thanh hiện đại DOLBY Digital &ndash; được c&aacute;c
                                        nh&agrave; sản xuất phim lớn tr&ecirc;n thế giới c&ocirc;ng nhận, tại
                                        TouchCinema, bạn được ch&uacute;ng t&ocirc;i truyền đạt cảm x&uacute;c
                                        &acirc;m thanh đ&iacute;ch thực từ t&aacute;c phẩm điện ảnh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">TouchCinema
                                        lu&ocirc;n hướng đến một m&ocirc;i trường giải tr&iacute; thanh lịch
                                        v&agrave; th&acirc;n thiện, tạo cho bạn cảm gi&aacute;c thoải m&aacute;i
                                        v&agrave; gần gũi khi thưởng thức c&agrave; ph&ecirc;, ăn nhẹ,
                                        c&ugrave;ng xem một bộ phim với người y&ecirc;u, bạn b&egrave; hay người
                                        th&acirc;n trong gia đ&igrave;nh.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">V&agrave;
                                        đặc biệt hơn hết, chi ph&iacute; th&acirc;n thiện tại
                                        TouchCinema&nbsp;tạo điều kiện cho bạn thưởng thức nhiều t&aacute;c phẩm
                                        điện ảnh lớn của Việt Nam v&agrave; thế giới tr&ecirc;n m&agrave;n ảnh
                                        rộng m&agrave; kh&ocirc;ng sợ tốn k&eacute;m.</span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/untitled-1558685148.png" alt="" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/9331c0a02842cd1c9453.jpg" alt="" width="1375"
                                            height="1031" /></span></p>
                                <p><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;"><img
                                            src="storage/01-2019/57070963-10156973997839435-3193637286445056000-o.jpg"
                                            alt="" width="1322" height="831" /></span></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div id="phong-chieu" class="tab-pane fade">
                            <div class="des">
                                <p>Ph&ograve;ng chiếu Touchcinema</p>
                                <p>L&agrave; một trong những Rạp chiếu phim lớn nhất Gia Lai với 4 ph&ograve;ng
                                    chiếu phim c&ocirc;ng nghệ hiện đại . Mỗi m&agrave;n chiếu từ 300- 700 inch.
                                </p>
                                <p>Kh&ocirc;ng gian rộng r&atilde;i, mang đến cho kh&aacute;n giản những trải
                                    nghiệm th&uacute; vị nhất.</p>
                                <p><img src="storage/01-2019/48381474-10156689420084435-6883229693693132800-o.jpg"
                                        alt="" /><img src="storage/01-2019/e19784671085f5dbac94.jpg"
                                        alt="" />
                                </p>
                                <p><img src="storage/01-2019/ebc35379c79b22c57b8a.jpg" alt="" /></p>
                            </div>
                        </div>
                        <div id="food-drink" class="tab-pane fade">
                            <div class="des">
                                <p>Food &amp; Drink Touchcinema</p>
                                <p><span style="font-size: 12pt;">Kh&ocirc;ng chỉ l&agrave; bắp rang bơ
                                        v&agrave; nước uống c&oacute; ga, Touch Cinema c&ograve;n phụ vụ nhiều
                                        m&oacute;n ăn kh&aacute;c, vừa độc đ&aacute;o, vừa hấp dẫn.</span></p>
                                <p><img src="storage/01-2019/d94b04c9952b7075293a-1.jpg" alt="" width="856"
                                        height="1142" /></p>
                                <p><img src="storage/01-2019/dcc9234fb2ad57f30ebc-1.jpg" alt="" width="1089"
                                        height="888" /></p>
                                <p><img src="storage/01-2019/37e289611883fddda492-1.jpg" alt="" width="886"
                                        height="1309" /></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="nowshowing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="title">
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Phim đang chiếu</span>
                            <div class="border"></div>
                        </h2>
                        <div class="center">
                            <img src="{{ asset('client/images/icons/cinema-movie.png') }}" alt="Phim đang chiếu" />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="nowshowing">
                            <div class="owl-carousel" id="nowshowing-slider">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                <img class="img-responsive"
                                                    src="http://127.0.0.1:8000/storage/movies/pI6xiFLm0VZCEWHNCMGzwk555nCGJ9Y1eD4rbaDb.jpg"
                                                    alt="Phế vật chuyển sinh thành súc sinh">
                                            </a>

                                            <div class="info">
                                                <a href="http://127.0.0.1:8000/phim/movie-slug" class="button detail">
                                                    Chi tiết<table></table>
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-1">
                                                    Trailer
                                                </a>
                                                <p class=" duration">
                                                    <b>Thời lượng:</b> 120 phút
                                                </p>
                                                <p class=" category">
                                                    <b>Thể loại:
                                                        Cổ Trang
                                                        , Hành Động
                                                    </b>
                                                </p>
                                                <p class=" format">
                                                    <b>Định dạng:</b> 2d
                                                </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2>
                                                <a href="http://127.0.0.1:8000/phim/movie-slug">
                                                    Phế vật chuyển sinh thành súc sinh
                                                </a>
                                            </h2>
                                            <p class="release">Khởi chiếu 2024-11-12</p>
                                        </div>
                                    </div>
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="widget-ticket  hidden ">
        <h2>
            <img src="images/icons/icon-ticket.png" alt="Đặt vé" />
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
                <img src="images/loader.gif" alt="Loading..." />
            </div>
        </form>
    </div>
@endsection

@section('js')
@endsection
