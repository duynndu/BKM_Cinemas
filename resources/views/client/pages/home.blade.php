@extends('client.layouts.main')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
@endsection

@section('content')
    <section>
        <div id="main-slider" class="owl-carousel">
            <div class="item">
                <a href="phim/hai-muoi.html">
                    <img width="1600" src="https://touchcinema.com/storage/slider-app/rap-1920x1080-1.jpg" alt="HM" />
                </a>
            </div>
            <div class="item">
                <a href="phim/lam-giau-voi-ma.html">
                    <img width="1600" src="https://touchcinema.com/storage/slide-web/1920wx1080h-13-1729583438.jpg"
                        alt="LGVM" />
                </a>
            </div>
            <div class="item">
                <a href="phim/chang-nu-phi-cong.html">
                    <img width="1600" src="https://touchcinema.com/storage/slider-app/rap-1920x1080-1.jpg"
                        alt="PL" />
                </a>
            </div>
        </div>
    </section>

    <section id="home-movie">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nowshowing active">
                    <a data-toggle="tab" href="#nowshowing">
                        <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Phim đang chiếu" />
                        <span>Phim đang chiếu</span>
                    </a>
                    <span class="border"></span>
                </li>
                <li class="comingsoon">
                    <a data-toggle="tab" href="#comingsoon">
                        <span>Phim sắp chiếu</span>
                        <img src="{{ asset('client/images/icons/icon-sap-chieu.png') }}" alt="Phim đang chiếu" />
                    </a>
                    <span class="border"></span>
                </li>
            </ul>

            <div class="tab-content">
                <div id="nowshowing" class="tab-pane fade in active">
                    <div class="owl-carousel" id="nowshowing-slider">
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="{{ url('/phim') }}">
                                    <img class="img-responsive"
                                        src="https://touchcinema.com/uploads/slider-app/1200wx1800h-10-poster.jpg"
                                        alt="Làm Giàu Với Ma" />
                                </a>
                                <div class="hot" style="top: -27px;width: 80px;height: 78px;">
                                    <img src="{{ asset('client/images/icons/sneak.png') }}">
                                </div>
                                <div class="info">
                                    <a href="phim/lam-giau-voi-ma.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/lam-giau-voi-ma.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('client/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 113 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Gia Đình, Hài Hước</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/lam-giau-voi-ma.html">Làm Giàu Với Ma</a></h2>
                                <p class="release">Khởi chiếu 30/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="{{ url('/phim') }}">
                                    <img class="img-responsive"
                                        src="https://touchcinema.com/uploads/slider-app/1200wx1800h-10-poster.jpg"
                                        alt="Làm Giàu Với Ma" />
                                </a>
                                <div class="hot" style="top: -27px;width: 80px;height: 78px;">
                                    <img src="{{ asset('client/images/icons/sneak.png') }}">
                                </div>
                                <div class="info">
                                    <a href="phim/lam-giau-voi-ma.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/lam-giau-voi-ma.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('client/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 113 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Gia Đình, Hài Hước</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/lam-giau-voi-ma.html">Làm Giàu Với Ma</a></h2>
                                <p class="release">Khởi chiếu 30/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="{{ url('/phim') }}">
                                    <img class="img-responsive"
                                        src="https://touchcinema.com/uploads/slider-app/1200wx1800h-10-poster.jpg"
                                        alt="Làm Giàu Với Ma" />
                                </a>
                                <div class="hot" style="top: -27px;width: 80px;height: 78px;">
                                    <img src="{{ asset('client/images/icons/sneak.png') }}">
                                </div>
                                <div class="info">
                                    <a href="phim/lam-giau-voi-ma.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/lam-giau-voi-ma.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('client/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 113 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Gia Đình, Hài Hước</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/lam-giau-voi-ma.html">Làm Giàu Với Ma</a></h2>
                                <p class="release">Khởi chiếu 30/08/2024</p>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="comingsoon" class="tab-pane fade">
                    <div class="owl-carousel" id="comingsoon-slider">
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/ma-sieu-quay.html">
                                    <img class="img-responsive"
                                        src="https://touchcinema.com/medias/hinh-phim-2020/2x3-1-poster.jpg"
                                        alt="Ma Siêu Quậy" />
                                </a>
                                <div class="info">
                                    <a href="phim/ma-sieu-quay.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/ma-sieu-quay.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('client/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước, Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/ma-sieu-quay.html">Ma Siêu Quậy</a></h2>
                                <p class="release">Khởi chiếu 06/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/ma-sieu-quay.html">
                                    <img class="img-responsive"
                                        src="https://touchcinema.com/medias/hinh-phim-2020/2x3-1-poster.jpg"
                                        alt="Ma Siêu Quậy" />
                                </a>
                                <div class="info">
                                    <a href="phim/ma-sieu-quay.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/ma-sieu-quay.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('client/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước, Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/ma-sieu-quay.html">Ma Siêu Quậy</a></h2>
                                <p class="release">Khởi chiếu 06/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/ma-sieu-quay.html">
                                    <img class="img-responsive"
                                        src="https://touchcinema.com/medias/hinh-phim-2020/2x3-1-poster.jpg"
                                        alt="Ma Siêu Quậy" />
                                </a>
                                <div class="info">
                                    <a href="phim/ma-sieu-quay.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/ma-sieu-quay.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('client/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước, Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/ma-sieu-quay.html">Ma Siêu Quậy</a></h2>
                                <p class="release">Khởi chiếu 06/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/ma-sieu-quay.html">
                                    <img class="img-responsive"
                                        src="https://touchcinema.com/medias/hinh-phim-2020/2x3-1-poster.jpg"
                                        alt="Ma Siêu Quậy" />
                                </a>
                                <div class="info">
                                    <a href="phim/ma-sieu-quay.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/ma-sieu-quay.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('client/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước, Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/ma-sieu-quay.html">Ma Siêu Quậy</a></h2>
                                <p class="release">Khởi chiếu 06/09/2024</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div id="promotion">
                        <div class="title">
                            <h2>Ưu đãi - Sự kiện</h2>
                        </div>
                        <div class="owl-carousel" id="promotion-slider">
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="https://touchcinema.com/khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/slide-web/1000x1000-1-thumbnail.png"
                                            alt="10.10 DEAL SIÊU HỜI BẮP RANG BƠ 10K">
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/touchxyoungfest.html">TOUCHxYOUNGFEST</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="https://touchcinema.com/khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/slide-web/1000x1000-1-thumbnail.png"
                                            alt="10.10 DEAL SIÊU HỜI BẮP RANG BƠ 10K">
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/touchxyoungfest.html">TOUCHxYOUNGFEST</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="https://touchcinema.com/khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/slide-web/1000x1000-1-thumbnail.png"
                                            alt="10.10 DEAL SIÊU HỜI BẮP RANG BƠ 10K">
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/touchxyoungfest.html">TOUCHxYOUNGFEST</a></h3>
                            </div>
                        
                        </div>
                    </div>

                    <div id="carousel-post" class="carousel slide">
                        <div class="post-arrow"></div>
                        <div class="clearfix"></div>
                        <div class="title">
                            <h2>Đánh giá phim</h2>
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-post" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-post" data-slide-to="1"></li>
                                <li data-target="#carousel-post" data-slide-to="2"></li>
                                <li data-target="#carousel-post" data-slide-to="3"></li>
                            </ol>
                        </div>
                        <div class="list-post">
                            <div class="carousel-inner">
                                <div class="item active ">
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/con-lac-ta-thuat.html">
                                                <img class="img-responsive"
                                                    src="https://touchcinema.com/uploads/phim-con-lac-ta-thuat/phim-con-lac-ta-thuat-thumbnail.jpg"
                                                    alt="Review phim Con lắc tà thuật – The Hypnosis" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/con-lac-ta-thuat.html">Review phim Con
                                                    lắc tà thuật – The Hypnosis</a></h3>
                                            <div class="description">V&agrave;i năm trở lại đ&acirc;y điện ảnh
                                                H&agrave;n Quốc ng&agrave;y c&agrave;ng cho ra đời nhiều bộ phim
                                                kinh dị chất lượng, v&agrave; Con lắc t&agrave; thuật &ndash;
                                                The Hypnosis l&agrave; t&aacute;c phẩm mới...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/seobok-nguoi-nhan-ban.html">
                                                <img class="img-responsive"
                                                    src="https://touchcinema.com/uploads/phim-lat-mat-48h/phim-lat-mat-48h-thumbnail.png"
                                                    alt="Review phim Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước cái chết?" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/seobok-nguoi-nhan-ban.html">Review phim
                                                    Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước
                                                    cái chết?</a></h3>
                                            <div class="description">Nhiều tuần liền thống trị bảng xếp hạng
                                                ph&ograve;ng v&eacute; H&agrave;n Quốc, Seobok (Người nh&acirc;n
                                                bản) đang l&agrave; t&aacute;c phẩm ăn kh&aacute;ch nhất tại xứ
                                                sở kim chi thời điểm n&agrave;y. Đến...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/con-lac-ta-thuat.html">
                                                <img class="img-responsive"
                                                    src="https://touchcinema.com/uploads/phim-con-lac-ta-thuat/phim-con-lac-ta-thuat-thumbnail.jpg"
                                                    alt="Review phim Con lắc tà thuật – The Hypnosis" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/con-lac-ta-thuat.html">Review phim Con
                                                    lắc tà thuật – The Hypnosis</a></h3>
                                            <div class="description">V&agrave;i năm trở lại đ&acirc;y điện ảnh
                                                H&agrave;n Quốc ng&agrave;y c&agrave;ng cho ra đời nhiều bộ phim
                                                kinh dị chất lượng, v&agrave; Con lắc t&agrave; thuật &ndash;
                                                The Hypnosis l&agrave; t&aacute;c phẩm mới...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/seobok-nguoi-nhan-ban.html">
                                                <img class="img-responsive"
                                                    src="https://touchcinema.com/uploads/phim-lat-mat-48h/phim-lat-mat-48h-thumbnail.png"
                                                    alt="Review phim Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước cái chết?" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/seobok-nguoi-nhan-ban.html">Review phim
                                                    Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước
                                                    cái chết?</a></h3>
                                            <div class="description">Nhiều tuần liền thống trị bảng xếp hạng
                                                ph&ograve;ng v&eacute; H&agrave;n Quốc, Seobok (Người nh&acirc;n
                                                bản) đang l&agrave; t&aacute;c phẩm ăn kh&aacute;ch nhất tại xứ
                                                sở kim chi thời điểm n&agrave;y. Đến...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/con-lac-ta-thuat.html">
                                                <img class="img-responsive"
                                                    src="https://touchcinema.com/uploads/phim-con-lac-ta-thuat/phim-con-lac-ta-thuat-thumbnail.jpg"
                                                    alt="Review phim Con lắc tà thuật – The Hypnosis" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/con-lac-ta-thuat.html">Review phim Con
                                                    lắc tà thuật – The Hypnosis</a></h3>
                                            <div class="description">V&agrave;i năm trở lại đ&acirc;y điện ảnh
                                                H&agrave;n Quốc ng&agrave;y c&agrave;ng cho ra đời nhiều bộ phim
                                                kinh dị chất lượng, v&agrave; Con lắc t&agrave; thuật &ndash;
                                                The Hypnosis l&agrave; t&aacute;c phẩm mới...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/seobok-nguoi-nhan-ban.html">
                                                <img class="img-responsive"
                                                    src="https://touchcinema.com/uploads/phim-lat-mat-48h/phim-lat-mat-48h-thumbnail.png"
                                                    alt="Review phim Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước cái chết?" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/seobok-nguoi-nhan-ban.html">Review phim
                                                    Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước
                                                    cái chết?</a></h3>
                                            <div class="description">Nhiều tuần liền thống trị bảng xếp hạng
                                                ph&ograve;ng v&eacute; H&agrave;n Quốc, Seobok (Người nh&acirc;n
                                                bản) đang l&agrave; t&aacute;c phẩm ăn kh&aacute;ch nhất tại xứ
                                                sở kim chi thời điểm n&agrave;y. Đến...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sidebar">
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
                            <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
                            <span>Đặt vé</span>
                            <div class="border"></div>
                        </h2>
                        <form>
                            <div class="close-modal">Đóng</div>
                            <div class="select-group">
                                <span class="addon">
                                    <i class="fa fa-film"></i>
                                </span>
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
                                <img src="{{ asset('client/images/loader.gif') }}" alt="Loading..." />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
