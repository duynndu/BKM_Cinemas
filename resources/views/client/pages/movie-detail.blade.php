@extends('client.layouts.main')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
@endsection

@section('content')
    <div class="container" id="page-movie">
        <div class="row">
            <div class="movie-slider"
                style="background-image: url('https://touchcinema.com/uploads/slider-app/300wx450h-cam-1-poster.jpg')">
                <div class="overlay"></div>
                <div class="trailer">
                    <a class="video-play-button" data-toggle="modal" href="#modal-trailer"><span></span></a>
                </div>
            </div>
            <div class="movie-detail">
                <div class="poster">
                    <img src="https://touchcinema.com/uploads/slider-app/300wx450h-cam-1-poster.jpg" alt="Cám"
                        class="img-responsive">
                </div>
                <div class="movie-info">
                    <div class="movie-name">
                        <a href="https://touchcinema.com/phim/con-cam">
                            <h1>Cám</h1>
                        </a>
                        <h2></h2>
                    </div>
                    <p>
                        <strong>Thời lượng:</strong>

                    </p>
                    <p>
                        <strong>Khởi chiếu từ:</strong>
                        Ngày 20/09/2024
                    </p>
                    <p>
                        <strong>Thể loại:</strong>
                        Kinh Dị
                    </p>
                    <p>
                        <strong>Định dạng:</strong>
                        2D
                    </p>
                    <p class="cap">
                        <strong>Đạo diễn:</strong>
                        Trần Hữu Tấn
                    </p>
                    <p class="cap">
                        <strong>Diễn viên:</strong>
                        Quốc Cường, Thúy Diễm, Rima Thanh Vy, Lâm Thanh Mỹ, Hải Nam,...
                    </p>
                    <p>
                        <strong>Độ tuổi:</strong>
                        <span class="age_restricted_wrap">
                            <span class="age age-"></span>
                            <span class="age_restricted_label">- </span>
                        </span>
                    </p>
                    <div class="age_restricted"><span></span></div>
                    <div class="group-buton">
                        <a href="javascript:;" id="dat-ve"><img
                                src="https://touchcinema.com/images/icons/icon-dat-ve.png" alt="Đặt vé"> Đặt vé</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="movie-content">
                    <div class="showdow"></div>
                    <div class="content">
                        <div class="text">
                            <p style="text-align: justify;">Phim CÁM gắn nhãn T18, mang đến phiên bản kinh dị của câu chuyện
                                cổ tích <em>Tấm Cám</em> từng quen thuộc với khán giả Việt.</p>
                            <p class="" style="text-align: justify;">Phim CÁM cho thấy điểm khác biệt lớn nhất trong
                                dị bản kinh dị này là tình cảm chị em giữa Tấm (Rima Thanh Vy) và Cám (Lâm Thanh Mỹ). Từ
                                nhỏ, dù bị người đời ghét bỏ, Tấm luôn đứng ra bảo vệ và che chở cho em gái. Tuy nhiên, sự
                                bình yên ngắn ngủi ấy nhanh chóng bị phá vỡ. Cám dường như bị nhóm người lạ trói và mang đi
                                làm lễ tế trinh nữ, một tục hiến sinh được ghi chép từ thời xưa. Bước ngoặt này cùng tiếng
                                gọi ma mị “vì sao con khóc?” của quỷ đỏ ba mắt đã đánh thức phần tà ác bên trong Cám, khiến
                                cô trỗi dậy báo thù bằng đòn róc da mặt, biến cô thành sinh vật đáng sợ.</p>
                        </div>
                    </div>
                    <a href="javascript:;" class="read-more">Xem thêm</a>
                </div>
                <div class="showtime-section" id="showtime">
                    <h2>Lịch chiếu</h2>
                    <div class="showtimes-message">
                        Hiện chưa có lịch chiếu cho phim này
                    </div>
                </div>

                <div class=" page-post-detail" style="margin-top: 60px;">
                    <div class="clearfix"></div>
                    <div class="related-post">
                        <h2>Bài viết mới</h2>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/con-lac-ta-thuat">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-con-lac-ta-thuat/phim-con-lac-ta-thuat-thumbnail.jpg"
                                            alt="Review phim Con lắc tà thuật – The Hypnosis">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/con-lac-ta-thuat">Review phim Con lắc tà
                                        thuật – The Hypnosis</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/seobok-nguoi-nhan-ban">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-nguoi-nhan-ban/phim-nguoi-nhan-ban-thumbnail.jpg"
                                            alt="Review phim Seobok (Người nhân bản) – Vì sao con người luôn sợ hãi trước cái chết?">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/seobok-nguoi-nhan-ban">Review phim Seobok
                                        (Người nhân bản) – Vì sao con người luôn sợ hãi trước cái chết?</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/tham-tu-lung-danh-conan-vien-dan-do">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-tham-tu-lung-danh-conan-vien-dan-do/phim-tham-tu-lung-danh-conan-vien-dan-do-thumbnail.jpg"
                                            alt="Review phim Thám tử lừng danh Conan: Viên đạn đỏ - Hấp dẫn miễn chê">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/tham-tu-lung-danh-conan-vien-dan-do">Review
                                        phim Thám tử lừng danh Conan: Viên đạn đỏ - Hấp dẫn miễn chê</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/lat-mat-48h">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-lat-mat-48h/phim-lat-mat-48h-thumbnail.png"
                                            alt="Review phim Lật mặt: 48h  - Lý Hải &quot;đỉnh của chóp&quot; luôn">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/lat-mat-48h">Review phim Lật mặt: 48h -
                                        Lý Hải "đỉnh của chóp" luôn</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/nao-minh-cung-mo">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-nao-minh-cung-mo/phim-nao-minh-cung-mo-thumbnail.png"
                                            alt="Review phim Nào mình cùng mơ – Vui vẻ, nhẹ nhàng">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/nao-minh-cung-mo">Review phim Nào mình
                                        cùng mơ – Vui vẻ, nhẹ nhàng</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/kieu">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-kieu/phim-kieu-thumbnail.png"
                                            alt="Review phim Kiều – Có phải bị chê nhiều là không nên xem?">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/kieu">Review phim Kiều – Có phải bị chê
                                        nhiều là không nên xem?</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/ban-tay-diet-quy">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-ban-tay-diet-quy/phim-ban-tay-diet-quy-thumbnail.png"
                                            alt="Review phim Bàn tay diệt quỷ - Gay cấn, ấn tượng và mê!">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/ban-tay-diet-quy">Review phim Bàn tay
                                        diệt quỷ - Gay cấn, ấn tượng và mê!</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/mortal-kombat-cuoc-chien-sinh-tu">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-mortal-kombat-cuoc-chien-sinh-tu/phim-mortal-kombat-cuoc-chien-sinh-tu-1-thumbnail.png"
                                            alt="Review phim Mortal Kombat: Cuộc chiến sinh tử - Phù thủy James Wan chưa bao giờ khiến khán giả thất vọng">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/mortal-kombat-cuoc-chien-sinh-tu">Review
                                        phim Mortal Kombat: Cuộc chiến sinh tử - Phù thủy James Wan chưa bao giờ khiến khán
                                        giả thất vọng</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/song-song">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-song-song/phim-song-song-thumbnail.jpg"
                                            alt="Review phim Song Song – Một cánh én nhỏ làm “chao đảo” cả vài mùa xuân">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/song-song">Review phim Song Song – Một
                                        cánh én nhỏ làm “chao đảo” cả vài mùa xuân</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/an-quy">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-an-quy/phim-an-quy-thumbnail.jpg"
                                            alt="Review phim Ấn quỷ - Đức tin rất cần tỉnh táo và lý trí">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/an-quy">Review phim Ấn quỷ - Đức tin rất
                                        cần tỉnh táo và lý trí</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/oi-troi-oi-chuyen-phieu-luu-day-thu-vi">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/oi-troi-oi-chuyen-phieu-luu-thu-vi/oi-troi-oi-chuyen-phieu-luu-thu-vi-thumbnail.jpg"
                                            alt="Review phim Ối trời ơi! Chuyến phiêu lưu đầy “thú” vị - Vui nhộn, hài hước">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/oi-troi-oi-chuyen-phieu-luu-day-thu-vi">Review
                                        phim Ối trời ơi! Chuyến phiêu lưu đầy “thú” vị - Vui nhộn, hài hước</a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/danh-gia-phim/godzilla-vs-kong">
                                        <img class="img-responsive"
                                            src="https://touchcinema.com/uploads/phim-godzilla-vs-kong/phim-godzilla-vs-kong-thumbnail.jpg"
                                            alt="Review phim Godzilla Vs. Kong – Đại chiến của hai quái vật thời cổ đại có biến Trái đất về thời đồ đá?">
                                    </a>
                                </div>
                                <h3>
                                    <a href="https://touchcinema.com/danh-gia-phim/godzilla-vs-kong">Review phim Godzilla
                                        Vs. Kong – Đại chiến của hai quái vật thời cổ đại có biến Trái đất về thời đồ
                                        đá?</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="sidebar">
                    <div class="facebook-box hidden-xs">
                        <div class="fb-page fb_iframe_widget" data-width="390" data-adapt-container-width="true"
                            data-hide-cover="false" data-href="https://www.facebook.com/touchcinema/"
                            data-show-facepile="true" data-small-header="false" fb-xfbml-state="rendered"
                            fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1700069773628064&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390">
                            <span style="vertical-align: bottom; width: 390px; height: 130px;"><iframe
                                    name="f98abdbebf1527ade" width="390px" height="1000px"
                                    data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                    frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                    allow="encrypted-media"
                                    src="https://www.facebook.com/v12.0/plugins/page.php?adapt_container_width=true&amp;app_id=1700069773628064&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfc178ab9ae80f1456%26domain%3Dtouchcinema.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftouchcinema.com%252Ff83aa433b838a0f00%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390"
                                    style="border: none; visibility: visible; width: 390px; height: 130px;"
                                    class=""></iframe></span></div>
                    </div>
                    <div class="widget-ticket ">
                        <h2>
                            <img src="https://touchcinema.com/images/icons/icon-ticket.png" alt="Đặt vé">
                            <span>Đặt vé</span>
                            <div class="border"></div>
                        </h2>
                        <form>
                            <div class="close-modal">Đóng</div>
                            <div class="select-group">
                                <span class="addon"><i class="fa fa-film"></i></span>
                                <select class="form-control" id="widget-movie">
                                    <option>Chọn Phim</option>
                                    <option value="994">Không Nói Điều Dữ</option>
                                    <option value="1027">Anh Trai Vượt Mọi Tam Tai</option>
                                    <option value="1015">Báo Thủ Đi Tìm Chủ (Lồng Tiếng)</option>
                                    <option value="973">Làm Giàu Với Ma</option>
                                    <option value="1014">The Crow: Báo Thù</option>
                                    <option value="1020">Thảm Kịch Dị Giáo</option>
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
                                <img src="https://touchcinema.com/images/loader.gif" alt="Loading...">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="related-movie">
                    <h2>Phim đang chiếu</h2>
                    <div class="list">
                        <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-3-1726123907.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/anh-trai-vuot-moi-tam-tai">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-5-1726124535.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/bao-thu-di-tim-chu">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-4-1726124158.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/lam-giau-voi-ma">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/lam-giau-voi-ma-1-1724686130347.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/the-crow-bao-thu">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-2-1726123709.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/tham-kich-di-giao">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/1920x1080-2-1725542410.jpg')">
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
    </div>

@endsection

@section('js')
    <script src="{{ asset('client/js/movie-detail.js') }}"></script>
@endsection
