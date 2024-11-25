@extends('client.layouts.main')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
<style>

</style>
@endsection
@vite(['resources/js/app.js', 'resources/css/app.css'])

@section('content')
<div x-data="MoviePageComponent('{{$slug}}')" class="container" id="page-movie">
    <div class="row">
        <div class="movie-slider"
            {{-- Khi đổ thì thêm này vào --}}
            {{-- style="background-image: url('https://touchcinema.com/uploads/slider-app/300wx450h-cam-1-poster.jpg')" --}}>
            <div class="overlay"></div>
            <div class="trailer">
                <a class="video-play-button" data-toggle="modal" href="#modal-trailer"><span></span></a>
            </div>
        </div>
        <div class="movie-detail">
            <div class="poster">
                <img :src="movie?.image" alt="Cám"
                    class="img-responsive">
            </div>
            <div class="movie-info">
                <div class="movie-name">
                    <a href="https://touchcinema.com/phim/con-cam">
                        <h1 x-text="movie?.title"></h1>
                    </a>
                    <h2></h2>
                </div>
                <p>
                    <strong>Thời lượng:</strong>
                    <span x-text="movie?.duration"></span> phút
                </p>
                <p>
                    <strong>Khởi chiếu từ:</strong>
                    Ngày <span x-text="moment(movie?.premiere_date).format('DD/MM/YYYY')"></span>
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
                    <span x-text="movie?.director"></span>
                </p>
                <p class="cap">
                    <strong>Diễn viên:</strong>
                    <span x-text="actors.map(actor=>actor.name).join(', ')"></span>
                </p>
                <p>
                    <strong>Độ tuổi:</strong>
                    <span class="age_restricted_wrap">
                        <span class="age age-"></span>
                        <span class="age_restricted_label" x-text="movie?.age"></span>
                    </span>
                </p>
                <div class="age_restricted"><span>T18</span></div>
                <div class="group-buton">
                    <a href="#showtime" id="dat-ve"><img src="https://touchcinema.com/images/icons/icon-dat-ve.png"
                            alt="Đặt vé"> Đặt vé</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="movie-content">
                <div class="showdow"></div>
                <div class="content">
                    <div class="text" x-html="movie?.content">
                    </div>
                </div>
                <button class="read-more">Xem thêm</button>
            </div>

            <div class="showtime-section" id="showtime">
                <h2>Rạp</h2>
                <template x-for="cinema in cinemas" :key="cinema.id">
                    <div>
                        <input type="radio" :id="cinema.id" name="showtime-cinema" />
                        <label :for="cinema.id" class="showtime-cinema" x-text="cinema?.name"></label>
                    </div>
                </template>
                <h2>Lịch chiếu</h2>

                {{-- Không có lịch chiếu thì lên --}}
                <div class="showtimes-message" x-show="!showtimes.length" x-cloak>
                    Hiện chưa có lịch chiếu cho phim này
                </div>

                {{-- Có lịch chiếu thì lên --}}
                <template x-for="(showtimes, index) in showtimesMatrix" :key="index">
                    <div>
                        <div class="showtime-date" x-text="moment(showtimes[0]?.start_time).isSame(moment(), 'day')
                        ? moment(showtimes[0]?.start_time).format('[Hôm nay], [ngày] DD/MM')
                        : moment(showtimes[0]?.start_time).format('dddd, [ngày] DD/MM')"></div>
                        <div class="showtimes">
                            <div>
                                <template x-for="showtime in showtimes">
                                    <a :class="{
                                            'active': moment().isBefore(moment(showtime.start_time).subtract(2, 'hours')),
                                            'disabled': moment().isAfter(moment(showtime.start_time).subtract(2, 'hours'))
                                        }"
                                        :href="moment().isBefore(moment(showtime.start_time).subtract(2, 'hours')) ? `{{ url('dat-ve') }}/${showtime.id}` : '#'"
                                        x-text="moment(showtime.start_time).format('HH:mm')"
                                        :disabled="moment().isAfter(moment(showtime.start_time).subtract(2, 'hours'))">
                                    </a>
                                </template>
                            </div>
                        </div>
                    </div>
                </template>

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
    <div class="modal fade in" id="modal-trailer" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" title="Đóng"
                        aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="video-container" x-html="movie?.trailer_url">
                    </div>
                </div x-text=movie?.trailer_url>
            </div>
        </div>
    </div>
</div>
</div>
</div>




@endsection

@section('js')
<script src="{{ asset('client/js/movie-detail.js') }}"></script>
@endsection