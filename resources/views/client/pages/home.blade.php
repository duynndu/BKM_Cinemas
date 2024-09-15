@extends('client.layouts.main')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
@endsection

@section('content')
    <section>
        <div id="main-slider" class="owl-carousel">
            <div class="item">
                <a href="phim/hai-muoi.html">
                    <img width="1600" src="{{ asset('movie/images/slide-web/1920wx1080h-1724753436.jpg') }}"
                        alt="HM" />
                </a>
            </div>
            <div class="item">
                <a href="phim/lam-giau-voi-ma.html">
                    <img width="1600" src="{{ asset('movie/images/slide-web/1920x1080-1724753497.jpg') }}"
                        alt="LGVM" />
                </a>
            </div>
            <div class="item">
                <a href="phim/chang-nu-phi-cong.html">
                    <img width="1600" src="{{ asset('movie/images/slide-web/pilot-t13-1920x1080.jpg') }}"
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
                        <img src="{{ asset('movie/images/icons/icon-ticket.png') }}" alt="Phim đang chiếu" />
                        <span>Phim đang chiếu</span>
                    </a>
                    <span class="border"></span>
                </li>
                <li class="comingsoon">
                    <a data-toggle="tab" href="#comingsoon">
                        <span>Phim sắp chiếu</span>
                        <img src="{{ asset('movie/images/icons/icon-sap-chieu.png') }}" alt="Phim đang chiếu" />
                    </a>
                    <span class="border"></span>
                </li>
            </ul>

            <div class="tab-content">
                <div id="nowshowing" class="tab-pane fade in active">
                    <div class="owl-carousel" id="nowshowing-slider">
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/lam-giau-voi-ma.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/phim-2021/470x700-1724744783-poster.jpg') }}"
                                        alt="Làm Giàu Với Ma" />
                                </a>
                                <div class="hot" style="top: -27px;width: 80px;height: 78px;">
                                    <img src="{{ asset('movie/images/icons/sneak.png') }}">
                                </div>
                                <div class="info">
                                    <a href="phim/lam-giau-voi-ma.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/lam-giau-voi-ma.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
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
                                <a href="phim/da-nu-bao-thu.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/phim-2021/470wx700h-revolver-poster.jpg') }}"
                                        alt="Đả Nữ Báo Thù" />
                                </a>
                                <div class="info">
                                    <a href="phim/da-nu-bao-thu.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/da-nu-bao-thu.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 115 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động, Hồi Hộp, Tội Phạm</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/da-nu-bao-thu.html">Đả Nữ Báo Thù</a></h2>
                                <p class="release">Khởi chiếu 23/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/ma-da.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/phim-2021/449707108-869141951908574-2288391577922390780-n-poster.jpg') }}"
                                        alt="Ma Da" />
                                </a>
                                <div class="info">
                                    <a href="phim/ma-da.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/ma-da.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 95 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/ma-da.html">Ma Da</a></h2>
                                <p class="release">Khởi chiếu 16/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/shin-cau-be-but-chi-nhat-ky-khung-long-cua-chung-minh.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/shin2024-poster-payoff-poster.jpg') }}"
                                        alt="Shin Cậu Bé Bút Chì: Nhật Ký Khủng Long Của Chúng Mình (Lồng Tiếng)" />
                                </a>
                                <div class="info">
                                    <a href="phim/shin-cau-be-but-chi-nhat-ky-khung-long-cua-chung-minh.html"
                                        class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/shin-cau-be-but-chi-nhat-ky-khung-long-cua-chung-minh.html#showtime"
                                        class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 105 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình, Gia Đình, Hài Hước,
                                        Phiêu Lưu</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/shin-cau-be-but-chi-nhat-ky-khung-long-cua-chung-minh.html">Shin
                                        Cậu Bé Bút Chì: Nhật Ký Khủng Long Của Chúng Mình (Lồng Tiếng)</a></h2>
                                <p class="release">Khởi chiếu 23/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/harold-va-cay-but-phep-thuat.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/phim-2021/poster-harold-poster.jpg') }}"
                                        alt="Harold Và Cây Bút Phép Thuật (Lồng Tiếng)" />
                                </a>
                                <div class="info">
                                    <a href="phim/harold-va-cay-but-phep-thuat.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/harold-va-cay-but-phep-thuat.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 90 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước, Phiêu Lưu</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/harold-va-cay-but-phep-thuat.html">Harold Và Cây Bút Phép
                                        Thuật (Lồng Tiếng)</a></h2>
                                <p class="release">Khởi chiếu 23/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/quai-vat-khong-gian.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/rsz-romulus-instagram-payoff-poster-vietnam-poster.jpg') }}"
                                        alt="Quái Vật Không Gian" />
                                </a>
                                <div class="info">
                                    <a href="phim/quai-vat-khong-gian.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/quai-vat-khong-gian.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 118 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Khoa Học Viễn Tưởng, Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/quai-vat-khong-gian.html">Quái Vật Không Gian</a></h2>
                                <p class="release">Khởi chiếu 16/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/hai-muoi.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/slider-app/hai-muoi-payoff-poster-khoi-chieu-30082024-poster.jpg') }}"
                                        alt="Hai Muối" />
                                </a>
                                <div class="info">
                                    <a href="phim/hai-muoi.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/hai-muoi.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 118 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Gia Đình, Tâm Lý</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/hai-muoi.html">Hai Muối</a></h2>
                                <p class="release">Khởi chiếu 30/08/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/chang-nu-phi-cong.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/slider-app/pilot-t13-1080x1920-poster.jpg') }}"
                                        alt="Chàng Nữ Phi Công" />
                                </a>
                                <div class="info">
                                    <a href="phim/chang-nu-phi-cong.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/chang-nu-phi-cong.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 110 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/chang-nu-phi-cong.html">Chàng Nữ Phi Công</a></h2>
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
                                        src="{{ asset('movie/images/slider-app/beetlejuice-beetlejuice-914461307-large-poster.jpg') }}"
                                        alt="Ma Siêu Quậy" />
                                </a>
                                <div class="info">
                                    <a href="phim/ma-sieu-quay.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/ma-sieu-quay.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
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
                                <a href="phim/tham-kich-di-giao.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/media-images-2024-08-21-screenshot-2024-08-21-024927-134956-210824-53-poster.png') }}"
                                        alt="Thảm Kịch Dị Giáo" />
                                </a>
                                <div class="info">
                                    <a href="phim/tham-kich-di-giao.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/tham-kich-di-giao.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/tham-kich-di-giao.html">Thảm Kịch Dị Giáo</a></h2>
                                <p class="release">Khởi chiếu 06/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/the-crow-bao-thu.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/poster-the-crow-vn-poster.jpg') }}"
                                        alt="The Crow: Báo Thù" />
                                </a>
                                <div class="info">
                                    <a href="phim/the-crow-bao-thu.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/the-crow-bao-thu.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/the-crow-bao-thu.html">The Crow: Báo Thù</a></h2>
                                <p class="release">Khởi chiếu 13/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/khong-noi-dieu-du.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/sne-poster-470x700-poster.jpg') }}"
                                        alt="Không Nói Điều Dữ" />
                                </a>
                                <div class="info">
                                    <a href="phim/khong-noi-dieu-du.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/khong-noi-dieu-du.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/khong-noi-dieu-du.html">Không Nói Điều Dữ</a></h2>
                                <p class="release">Khởi chiếu 13/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/chien-dia-tu-thi.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/ou-main-poster-poster.jpg') }}"
                                        alt="Chiến Địa Tử Thi" />
                                </a>
                                <div class="info">
                                    <a href="phim/chien-dia-tu-thi.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/chien-dia-tu-thi.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/chien-dia-tu-thi.html">Chiến Địa Tử Thi</a></h2>
                                <p class="release">Khởi chiếu 13/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/bao-thu-di-tim-chu.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/gracieandpedro-poster-d-c-vie-470x700-poster.jpg') }}"
                                        alt="Báo Thủ Đi Tìm Chủ" />
                                </a>
                                <div class="info">
                                    <a href="phim/bao-thu-di-tim-chu.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/bao-thu-di-tim-chu.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> ATMOS </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/bao-thu-di-tim-chu.html">Báo Thủ Đi Tìm Chủ</a></h2>
                                <p class="release">Khởi chiếu 13/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/transformers-one.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/avatars/tf1-poster-1080x1920-poster.jpg') }}"
                                        alt="Transformers Một" />
                                </a>
                                <div class="info">
                                    <a href="phim/transformers-one.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/transformers-one.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động, Phiêu Lưu</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/transformers-one.html">Transformers Một</a></h2>
                                <p class="release">Khởi chiếu 20/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/soi-thu-doi-dau.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/wolfs-146396800-large-poster.jpg') }}"
                                        alt="&quot;Sói” Thủ Đối Đầu" />
                                </a>
                                <div class="info">
                                    <a href="phim/soi-thu-doi-dau.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/soi-thu-doi-dau.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/soi-thu-doi-dau.html">&quot;Sói” Thủ Đối Đầu</a></h2>
                                <p class="release">Khởi chiếu 20/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/con-cam.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/slider-app/300wx450h-cam-1-poster.jpg') }}"
                                        alt="Cám" />
                                </a>
                                <div class="info">
                                    <a href="phim/con-cam.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/con-cam.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/con-cam.html">Cám</a></h2>
                                <p class="release">Khởi chiếu 27/09/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/joker-dien-co-doi.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/mv5bnti0mjiwmdatywy1zc00mduylwi0mzmtzgnjodrln2y3zme2xkeyxkfqcgdeqxvymtm1njm2odg1-v1-fmjpg-ux1000-poster.jpg') }}"
                                        alt="Joker: Điên Có Đôi" />
                                </a>
                                <div class="info">
                                    <a href="phim/joker-dien-co-doi.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/joker-dien-co-doi.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Tâm Lý</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/joker-dien-co-doi.html">Joker: Điên Có Đôi</a></h2>
                                <p class="release">Khởi chiếu 04/10/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/the-wild-robot.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/slider-app/wrb-poster-470x700-poster.jpg') }}"
                                        alt="Robot Hoang Dã" />
                                </a>
                                <div class="info">
                                    <a href="phim/the-wild-robot.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/the-wild-robot.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/the-wild-robot.html">Robot Hoang Dã</a></h2>
                                <p class="release">Khởi chiếu 11/10/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/co-dau-hao-mon.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/c-d-u-h-o-m-n-teaser-photo-final-poster.jpg') }}"
                                        alt="Cô Dâu Hào Môn" />
                                </a>
                                <div class="info">
                                    <a href="phim/co-dau-hao-mon.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/co-dau-hao-mon.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Tâm Lý</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/co-dau-hao-mon.html">Cô Dâu Hào Môn</a></h2>
                                <p class="release">Khởi chiếu 18/10/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/cuoi-2.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/sm2-intl-dgtl-online-tsr-1sht-torn-ov-400x633-poster.jpg') }}"
                                        alt="Cười 2" />
                                </a>
                                <div class="info">
                                    <a href="phim/cuoi-2.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/cuoi-2.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/cuoi-2.html">Cười 2</a></h2>
                                <p class="release">Khởi chiếu 18/10/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/venom-keo-cuoi.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/rsz-vnm3-intl-online-1080x1350-tsr-01-poster.jpg') }}"
                                        alt="Venom: Kèo Cuối" />
                                </a>
                                <div class="info">
                                    <a href="phim/venom-keo-cuoi.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/venom-keo-cuoi.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/venom-keo-cuoi.html">Venom: Kèo Cuối</a></h2>
                                <p class="release">Khởi chiếu 25/10/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/ngay-xua-co-mot-chuyen-tinh.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/slider-app/nxcmct-500-1713252327863-poster.jpg') }}"
                                        alt="Ngày Xưa Có Một Chuyện Tình" />
                                </a>
                                <div class="info">
                                    <a href="phim/ngay-xua-co-mot-chuyen-tinh.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/ngay-xua-co-mot-chuyen-tinh.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Tình Cảm</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/ngay-xua-co-mot-chuyen-tinh.html">Ngày Xưa Có Một Chuyện
                                        Tình</a></h2>
                                <p class="release">Khởi chiếu 01/11/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/red-one.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/mv5bmde3zje3ntetyzi0ny00ndq5lwewzdetnju5yzyxogewmjzhxkeyxkfqcgdeqxvymjgxmjgzmzq-at-v1-poster.jpg') }}"
                                        alt="Red One" />
                                </a>
                                <div class="info">
                                    <a href="phim/red-one.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/red-one.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/red-one.html">Red One</a></h2>
                                <p class="release">Khởi chiếu 15/11/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/linh-mieu.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/448664664-859197489565492-7700733573323176781-n-poster.jpg') }}"
                                        alt="Linh Miêu" />
                                </a>
                                <div class="info">
                                    <a href="phim/linh-mieu.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/linh-mieu.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/linh-mieu.html">Linh Miêu</a></h2>
                                <p class="release">Khởi chiếu 22/11/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/wicked.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/wicked-cgv-poster.jpg') }}"
                                        alt="Wicked" />
                                </a>
                                <div class="info">
                                    <a href="phim/wicked.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/wicked.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Tình Cảm</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/wicked.html">Wicked</a></h2>
                                <p class="release">Khởi chiếu 29/11/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/hanh-trinh-cua-moana-2.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/h-nh-tr-nh-c-a-moana-2-poster.jpg') }}"
                                        alt="Hành Trình Của Moana 2" />
                                </a>
                                <div class="info">
                                    <a href="phim/hanh-trinh-cua-moana-2.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/hanh-trinh-cua-moana-2.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/hanh-trinh-cua-moana-2.html">Hành Trình Của Moana 2</a></h2>
                                <p class="release">Khởi chiếu 29/11/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/chua-te-cua-nhung-chiec-nhan-cuoc-chien-cua-rohirrim.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/mv5byji1ntmznjgtyjfmos00yzfjltg3mtetmdgxztcwzte2ndm2xkeyxkfqcgdeqxvymtuynjc3ndq4-v1-poster.jpg') }}"
                                        alt="Chúa Tể Của Những Chiếc Nhẫn: Cuộc Chiến Của Rohirrim" />
                                </a>
                                <div class="info">
                                    <a href="phim/chua-te-cua-nhung-chiec-nhan-cuoc-chien-cua-rohirrim.html"
                                        class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/chua-te-cua-nhung-chiec-nhan-cuoc-chien-cua-rohirrim.html#showtime"
                                        class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Phiêu Lưu</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/chua-te-cua-nhung-chiec-nhan-cuoc-chien-cua-rohirrim.html">Chúa
                                        Tể Của Những Chiếc Nhẫn: Cuộc Chiến Của Rohirrim</a></h2>
                                <p class="release">Khởi chiếu 13/12/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/kraven-tho-san-thu-linh.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/kraventhehunterpostervn-poster.jpg') }}"
                                        alt="Kraven Thợ Săn Thủ Lĩnh" />
                                </a>
                                <div class="info">
                                    <a href="phim/kraven-tho-san-thu-linh.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/kraven-tho-san-thu-linh.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 100 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động, Phiêu Lưu</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/kraven-tho-san-thu-linh.html">Kraven Thợ Săn Thủ Lĩnh</a></h2>
                                <p class="release">Khởi chiếu 13/12/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/vua-su-tu-mufasa.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/images/slider-app/mufasa-poster.jpg') }}"
                                        alt="Vua Sư Tử: Mufasa" />
                                </a>
                                <div class="info">
                                    <a href="phim/vua-su-tu-mufasa.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/vua-su-tu-mufasa.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/vua-su-tu-mufasa.html">Vua Sư Tử: Mufasa</a></h2>
                                <p class="release">Khởi chiếu 20/12/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/nhim-sonic-3.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/rdoxrn0g21-poster.png') }}"
                                        alt="Nhím Sonic 3" />
                                </a>
                                <div class="info">
                                    <a href="phim/nhim-sonic-3.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/nhim-sonic-3.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/nhim-sonic-3.html">Nhím Sonic 3</a></h2>
                                <p class="release">Khởi chiếu 20/12/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/kinh-van-hoa.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/d-n-k-nh-v-n-hoa-1-poster.jpg') }}"
                                        alt="Kính Vạn Hoa" />
                                </a>
                                <div class="info">
                                    <a href="phim/kinh-van-hoa.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/kinh-van-hoa.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/kinh-van-hoa.html">Kính Vạn Hoa</a></h2>
                                <p class="release">Khởi chiếu 27/12/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/nha-gia-tien.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/435259758-855491943284244-5448498450053626536-n-poster.jpg') }}"
                                        alt="Nhà Gia Tiên" />
                                </a>
                                <div class="info">
                                    <a href="phim/nha-gia-tien.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/nha-gia-tien.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hài Hước</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/nha-gia-tien.html">Nhà Gia Tiên</a></h2>
                                <p class="release">Khởi chiếu 27/12/2024</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/mikey-17.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/y5rrebdzsggpkb2u52rxmqtybn0-poster.jpg') }}"
                                        alt="Mickey 17" />
                                </a>
                                <div class="info">
                                    <a href="phim/mikey-17.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/mikey-17.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> 100 phút</p>
                                    <p class="button category"><b>Thể loại:</b> Khoa Học Viễn Tưởng, Phiêu Lưu,
                                        Tâm Lý</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/mikey-17.html">Mickey 17</a></h2>
                                <p class="release">Khởi chiếu 31/01/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/captain-america-the-gioi-moi.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/captain-america-teaserdebut-1sht-vie-poster.jpg') }}"
                                        alt="Captain America: Thế Giới Mới" />
                                </a>
                                <div class="info">
                                    <a href="phim/captain-america-the-gioi-moi.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/captain-america-the-gioi-moi.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động, Khoa Học Viễn Tưởng
                                    </p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/captain-america-the-gioi-moi.html">Captain America: Thế Giới
                                        Mới</a></h2>
                                <p class="release">Khởi chiếu 14/02/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/nang-bach-tuyet.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/snow-white-teaser-vietnam-4x5-ig-2-poster.jpg') }}"
                                        alt="Nàng Bạch Tuyết" />
                                </a>
                                <div class="info">
                                    <a href="phim/nang-bach-tuyet.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/nang-bach-tuyet.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Phiêu Lưu</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/nang-bach-tuyet.html">Nàng Bạch Tuyết</a></h2>
                                <p class="release">Khởi chiếu 21/03/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/dia-dao-mat-troi-trong-bong-toi.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/dia-dao-fhsp-poster.jpg') }}"
                                        alt="Địa Đạo: Mặt Trời Trong Bóng Tối" />
                                </a>
                                <div class="info">
                                    <a href="phim/dia-dao-mat-troi-trong-bong-toi.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/dia-dao-mat-troi-trong-bong-toi.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Tâm Lý</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/dia-dao-mat-troi-trong-bong-toi.html">Địa Đạo: Mặt Trời Trong
                                        Bóng Tối</a></h2>
                                <p class="release">Khởi chiếu 30/04/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/thunderbolts.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/mv5bmzdknzfhmdatnwvhnc00mdm5ltllyzktmwfkn2q0zwflywzkxkeyxkfqcgdeqxvyodk4otc3mty-at-v1-fmjpg-ux1000-poster.jpg') }}"
                                        alt="Thunderbolts" />
                                </a>
                                <div class="info">
                                    <a href="phim/thunderbolts.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/thunderbolts.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/thunderbolts.html">Thunderbolts</a></h2>
                                <p class="release">Khởi chiếu 02/05/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/nhiem-vu-bat-kha-thi-nghiep-bao-phan-hai.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/mv5bzmrkmgfjywitnwzhzc00zdy5ltk0ztgtmdq0mde2n2mxndvlxkeyxkfqcgdeqxvymte1ndm4odk4-v1-fmjpg-ux1000-poster.jpg') }}"
                                        alt="Nhiệm Vụ Bất Khả Thi: Nghiệp Báo - Phần Hai" />
                                </a>
                                <div class="info">
                                    <a href="phim/nhiem-vu-bat-kha-thi-nghiep-bao-phan-hai.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/nhiem-vu-bat-kha-thi-nghiep-bao-phan-hai.html#showtime"
                                        class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hành Động</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/nhiem-vu-bat-kha-thi-nghiep-bao-phan-hai.html">Nhiệm Vụ Bất
                                        Khả Thi: Nghiệp Báo - Phần Hai</a></h2>
                                <p class="release">Khởi chiếu 23/05/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/lilo-stitch.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/mv5bmza5ndjiy2etywqxos00ztm3ltk4zdmtm2i3zdfjywu0nmyxxkeyxkfqcgc-at-v1-poster.jpg') }}"
                                        alt="Lilo &amp; Stitch" />
                                </a>
                                <div class="info">
                                    <a href="phim/lilo-stitch.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/lilo-stitch.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/lilo-stitch.html">Lilo &amp; Stitch</a></h2>
                                <p class="release">Khởi chiếu 13/06/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/zootopia-2.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/zootopia-2-poster.jpg') }}"
                                        alt="Zootopia 2" />
                                </a>
                                <div class="info">
                                    <a href="phim/zootopia-2.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/zootopia-2.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/zootopia-2.html">Zootopia 2</a></h2>
                                <p class="release">Khởi chiếu 28/11/2025</p>
                            </div>
                        </div>
                        <div class="movie" style="padding-top: 30px;">
                            <div class="poster">
                                <a href="phim/toy-story-5.html">
                                    <img class="img-responsive"
                                        src="{{ asset('movie/medias/hinh-phim-2021/mv5bm2mxmtnhntqtzgjkos00zwrklwizztctotaynwu3zwnhmtrkxkeyxkfqcgc-at-v1-fmjpg-ux1000-poster.jpg') }}"
                                        alt="Toy Story 5" />
                                </a>
                                <div class="info">
                                    <a href="phim/toy-story-5.html" class="button detail">
                                        > Chi tiết
                                    </a>
                                    <a href="phim/toy-story-5.html#showtime" class="button ticket">
                                        Mua vé <img src="{{ asset('movie/images/icons/icon-dat-ve.png') }}"
                                            alt="Mua vé" />
                                    </a>
                                    <p class="button duration"><b>Thời lượng:</b> </p>
                                    <p class="button category"><b>Thể loại:</b> Hoạt Hình</p>
                                    <p class="button format"><b>Định dạng</b> 2D </p>
                                </div>
                            </div>
                            <div class="detail">
                                <h2><a href="phim/toy-story-5.html">Toy Story 5</a></h2>
                                <p class="release">Khởi chiếu 19/06/2026</p>
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
                                    <a href="khuyen-mai/touchxyoungfest.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/slide-web/1000x1000-1680826524-thumbnail.jpg') }}"
                                            alt="TOUCHxYOUNGFEST" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/touchxyoungfest.html">TOUCHxYOUNGFEST</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="khuyen-mai/xuan-nhu-y.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/phim-2021/32fa2219-8f2e-41b6-9033-7e4007c3c976-thumbnail.jpg') }}"
                                            alt="𝐗𝐮𝐚̂𝐧 𝐍𝐡𝐮̛ 𝐘́ - 𝐓𝐞̂́𝐭 𝐀𝐧 𝐊𝐡𝐚𝐧𝐠" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/xuan-nhu-y.html">𝐗𝐮𝐚̂𝐧 𝐍𝐡𝐮̛ 𝐘́ - 𝐓𝐞̂́𝐭 𝐀𝐧
                                        𝐊𝐡𝐚𝐧𝐠</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/slide-web/1000x1000-1-thumbnail.png') }}"
                                            alt="10.10 DEAL SIÊU HỜI BẮP RANG BƠ 10K" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/1010-deal-sieu-hoi-bap-rang-bo-10k.html">10.10 DEAL SIÊU
                                        HỜI BẮP RANG BƠ 10K</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="khuyen-mai/1010-touchxgrab-mua-1-tang-1-bap-rang-bo.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/slide-web/1000x1000-1665158482-thumbnail.png') }}"
                                            alt="10.10 TOUCHxGRAB MUA 1 TẶNG 1 BẮP RANG BƠ" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/1010-touchxgrab-mua-1-tang-1-bap-rang-bo.html">10.10
                                        TOUCHxGRAB MUA 1 TẶNG 1 BẮP RANG BƠ</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="khuyen-mai/giam-20-hoa-don-khi-xem-dr-strange.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/phim-2021/d4bab0d4-b0b8-42e5-a0eb-35c98ec63dc9-thumbnail.jpg') }}"
                                            alt="GIẢM 20% HÓA ĐƠN KHI XEM DR. STRANGE" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/giam-20-hoa-don-khi-xem-dr-strange.html">GIẢM 20% HÓA
                                        ĐƠN KHI XEM DR. STRANGE</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="khuyen-mai/vong-quay-may-man.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/slide-web/1000x1000-thumbnail.jpg') }}"
                                            alt="Vòng Quay May Mắn: 100% nhận quà tặng Voucher từ Touch Cinema!" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/vong-quay-may-man.html">Vòng Quay May Mắn: 100% nhận quà
                                        tặng Voucher từ Touch Cinema!</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="khuyen-mai/xuan-nham-dan-2022-li-xi-tha-ga-phuc-loc-day-nha.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/phim-2021/li-xi-tha-ga-2022-thumbnail.jpg') }}"
                                            alt="🌼XUÂN NHÂM DẦN 2022: LÌ XÌ THẢ GA - PHÚC LỘC ĐẦY NHÀ" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/xuan-nham-dan-2022-li-xi-tha-ga-phuc-loc-day-nha.html">🌼XUÂN
                                        NHÂM DẦN 2022: LÌ XÌ THẢ GA - PHÚC LỘC ĐẦY NHÀ</a></h3>
                            </div>
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="khuyen-mai/mung-83-ca-nha-vui-ve-tang-ve-khu-vui-choi.html">
                                        <img class="img-responsive"
                                            src="{{ asset('movie/images/event2021/mung-83-2021-thumbnail.jpg') }}"
                                            alt="“MÙNG 8/3 – CẢ NHÀ VUI VẺ” – TẶNG VÉ KHU VUI CHƠI" />
                                    </a>
                                </div>
                                <h3><a href="khuyen-mai/mung-83-ca-nha-vui-ve-tang-ve-khu-vui-choi.html">“MÙNG
                                        8/3 – CẢ NHÀ VUI VẺ” – TẶNG VÉ KHU VUI CHƠI</a></h3>
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
                                <div class="item  active ">
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/con-lac-ta-thuat.html">
                                                <img class="img-responsive"
                                                    src="{{ asset('movie/images/phim-con-lac-ta-thuat/phim-con-lac-ta-thuat-thumbnail.jpg') }}"
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
                                                    src="{{ asset('movie/images/phim-nguoi-nhan-ban/phim-nguoi-nhan-ban-thumbnail.jpg') }}"
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
                                            <a href="danh-gia-phim/tham-tu-lung-danh-conan-vien-dan-do.html">
                                                <img class="img-responsive"
                                                    src="{{ asset('movie/images/phim-tham-tu-lung-danh-conan-vien-dan-do/phim-tham-tu-lung-danh-conan-vien-dan-do-thumbnail.jpg') }}"
                                                    alt="Review phim Thám tử lừng danh Conan: Viên đạn đỏ - Hấp dẫn miễn chê" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/tham-tu-lung-danh-conan-vien-dan-do.html">Review
                                                    phim Thám tử lừng danh Conan: Viên đạn đỏ - Hấp dẫn miễn
                                                    chê</a></h3>
                                            <div class="description">Sự trở lại của anh ch&agrave;ng th&aacute;m
                                                tử nh&iacute; Conan khiến c&aacute;c t&iacute;n đồ của bộ manga
                                                n&agrave;y v&ocirc; c&ugrave;ng phấn kh&iacute;ch. Đặc biệt hơn
                                                trong Th&aacute;m tử lừng danh Conan:...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/lat-mat-48h.html">
                                                <img class="img-responsive"
                                                    src="{{ asset('movie/images/phim-lat-mat-48h/phim-lat-mat-48h-thumbnail.png') }}"
                                                    alt="Review phim Lật mặt: 48h  - Lý Hải &quot;đỉnh của chóp&quot; luôn" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/lat-mat-48h.html">Review phim Lật mặt:
                                                    48h - Lý Hải &quot;đỉnh của chóp&quot; luôn</a></h3>
                                            <div class="description">Ng&agrave;y ra mắt đầu ti&ecirc;n của Lật
                                                mặt: 48h đ&atilde; ch&iacute;nh thức c&oacute; mặt tại Touch
                                                Cinema v&agrave;o ng&agrave;y 14/4. Chỉ sau những suất chiếu đầu
                                                ti&ecirc;n, kh&aacute;n giả đ&atilde; d&agrave;nh...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/nao-minh-cung-mo.html">
                                                <img class="img-responsive"
                                                    src="{{ asset('movie/images/phim-nao-minh-cung-mo/phim-nao-minh-cung-mo-thumbnail.png') }}"
                                                    alt="Review phim Nào mình cùng mơ – Vui vẻ, nhẹ nhàng" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/nao-minh-cung-mo.html">Review phim Nào
                                                    mình cùng mơ – Vui vẻ, nhẹ nhàng</a></h3>
                                            <div class="description">Trong số những bộ phim đang c&oacute; mặt
                                                tại Touch Cinema thời điểm n&agrave;y, chỉ c&oacute; duy nhất
                                                N&agrave;o m&igrave;nh c&ugrave;ng mơ (Dreambuilders) l&agrave;
                                                d&agrave;nh cho c&aacute;c bạn nhỏ tuổi. Vậy...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/kieu.html">
                                                <img class="img-responsive"
                                                    src="{{ asset('movie/images/phim-kieu/phim-kieu-thumbnail.png') }}"
                                                    alt="Review phim Kiều – Có phải bị chê nhiều là không nên xem?" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/kieu.html">Review phim Kiều – Có phải bị
                                                    chê nhiều là không nên xem?</a></h3>
                                            <div class="description">Kiều &ndash; bộ phim của đạo diễn Mai Thu
                                                Huyền đ&atilde; c&oacute; mặt tại khắp c&aacute;c rạp chiếu phim
                                                tr&ecirc;n to&agrave;n quốc tuần vừa qua. Sau những ng&agrave;y
                                                đầu c&ocirc;ng chiếu, t&aacute;c phẩm...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/ban-tay-diet-quy.html">
                                                <img class="img-responsive"
                                                    src="{{ asset('movie/images/phim-ban-tay-diet-quy/phim-ban-tay-diet-quy-thumbnail.png') }}"
                                                    alt="Review phim Bàn tay diệt quỷ - Gay cấn, ấn tượng và mê!" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/ban-tay-diet-quy.html">Review phim Bàn
                                                    tay diệt quỷ - Gay cấn, ấn tượng và mê!</a></h3>
                                            <div class="description">Sau Ấn quỷ - bộ phim mượn h&igrave;nh ảnh
                                                t&ocirc;n gi&aacute;o để n&oacute;i về ma quỷ nhưng chưa đủ sức
                                                thuyết phục kh&aacute;n giả, th&igrave; tuần n&agrave;y
                                                c&aacute;c t&iacute;n đồ điện ảnh sẽ...</div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="danh-gia-phim/mortal-kombat-cuoc-chien-sinh-tu.html">
                                                <img class="img-responsive"
                                                    src="{{ asset('movie/images/phim-mortal-kombat-cuoc-chien-sinh-tu/phim-mortal-kombat-cuoc-chien-sinh-tu-1-thumbnail.png') }}"
                                                    alt="Review phim Mortal Kombat: Cuộc chiến sinh tử - Phù thủy James Wan chưa bao giờ khiến khán giả thất vọng" />
                                            </a>
                                        </div>
                                        <div class="post-detail">
                                            <h3><a href="danh-gia-phim/mortal-kombat-cuoc-chien-sinh-tu.html">Review
                                                    phim Mortal Kombat: Cuộc chiến sinh tử - Phù thủy James Wan
                                                    chưa bao giờ khiến khán giả thất vọng</a></h3>
                                            <div class="description">Với 116 triệu lượt xem chỉ trong
                                                v&ograve;ng 1 tuần sau khi trailer phim ra mắt, Mortal Kombat:
                                                Cuộc chiến sinh tử xứng đ&aacute;ng l&agrave; si&ecirc;u phẩm
                                                giải tr&iacute; được chờ đợi nhất trong th&aacute;ng...</div>
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
                        <div class="fb-page" data-width="390" data-adapt-container-width="true"
                            data-hide-cover="false" data-href="https://www.facebook.com/touchcinema/"
                            data-show-facepile="true" data-small-header="false">
                            <blockquote cite="https://www.facebook.com/touchcinema" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/touchcinema">
                                    Touch Cinema
                                </a>
                            </blockquote>
                        </div>
                    </div>
                    <div class="widget-ticket ">
                        <h2>
                            <img src="{{ asset('movie/images/icons/icon-ticket.png') }}" alt="Đặt vé" />
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
                                <img src="{{ asset('movie/images/loader.gif') }}" alt="Loading..." />
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
