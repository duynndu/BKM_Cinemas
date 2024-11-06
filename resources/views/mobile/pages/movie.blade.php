@extends('mobile.layout.main')

@section('title', 'Các bộ phim đang chiếu và sắp chiếu')
@section('keywork', 'Các bộ phim đang chiếu và sắp chiếu')
@section('description', 'Các bộ phim đang chiếu và sắp chiếu')

@section('css')
    <link rel="stylesheet" href="{{ asset('mobile/css/movie.css') }}">

@endsection

@section('content')
    <div class="movies">
        <div class="tab-container">
            <ul class="tab-header">
                <li class="active" data-tab="dangchieu">Phim đang chiếu</li>
                <li data-tab="sapchieu">Phim sắp chiếu</li>
            </ul>

            <div class="tab-content">
                <div id="dangchieu" class="tab-pane active">
                    <!-- Nội dung Phim đang chiếu -->
                    <div class="movie-item" style="padding-top: 13px;">
                        <div class="movie-thumbnail">
                            <a href="https://m.touchcinema.com/phim/co-dau-hao-mon">
                                <img src="https://touchcinema.com/uploads/slider-app/rap-470x700-poster.png"
                                    alt="Cô Dâu Hào Môn">
                            </a>
                        </div>
                        <div class="movie-detail">
                            <h3><a href="https://m.touchcinema.com/phim/co-dau-hao-mon">Cô Dâu Hào Môn</a></h3>
                            <p>Khởi chiếu: <b>18/10/2024</b><br> Diễn viên: <b>Uyển Ân, Samuel An, Thu Trang, Lê Giang, Kiều
                                    Minh Tuấn, NSND Hồng Vân,...</b></p>
                            <a href="https://www.youtube.com/embed/QJ8E9R70csY?si=NiCXyr4Rxeh17J1a" class="view-trailer"
                                data-toggle="trailer">TRAILER</a>
                        </div>
                    </div>
                    <div class="movie-item" style="padding-top: 13px;">
                        <div class="movie-thumbnail">
                            <a href="https://m.touchcinema.com/phim/co-dau-hao-mon">
                                <img src="https://touchcinema.com/uploads/slider-app/rap-470x700-poster.png"
                                    alt="Cô Dâu Hào Môn">
                            </a>
                        </div>
                        <div class="movie-detail">
                            <h3><a href="https://m.touchcinema.com/phim/co-dau-hao-mon">Cô Dâu Hào Môn</a></h3>
                            <p>Khởi chiếu: <b>18/10/2024</b><br> Diễn viên: <b>Uyển Ân, Samuel An, Thu Trang, Lê Giang, Kiều
                                    Minh Tuấn, NSND Hồng Vân,...</b></p>
                            <a href="https://www.youtube.com/embed/QJ8E9R70csY?si=NiCXyr4Rxeh17J1a" class="view-trailer"
                                data-toggle="trailer">TRAILER</a>
                        </div>
                    </div>
                    <div class="movie-item" style="padding-top: 13px;">
                        <div class="movie-thumbnail">
                            <a href="https://m.touchcinema.com/phim/co-dau-hao-mon">
                                <img src="https://touchcinema.com/uploads/slider-app/rap-470x700-poster.png"
                                    alt="Cô Dâu Hào Môn">
                            </a>
                        </div>
                        <div class="movie-detail">
                            <h3><a href="https://m.touchcinema.com/phim/co-dau-hao-mon">Cô Dâu Hào Môn</a></h3>
                            <p>Khởi chiếu: <b>18/10/2024</b><br> Diễn viên: <b>Uyển Ân, Samuel An, Thu Trang, Lê Giang, Kiều
                                    Minh Tuấn, NSND Hồng Vân,...</b></p>
                            <a href="https://www.youtube.com/embed/QJ8E9R70csY?si=NiCXyr4Rxeh17J1a" class="view-trailer"
                                data-toggle="trailer">TRAILER</a>
                        </div>
                    </div>
                    <div class="movie-item" style="padding-top: 13px;">
                        <div class="movie-thumbnail">
                            <a href="https://m.touchcinema.com/phim/co-dau-hao-mon">
                                <img src="https://touchcinema.com/uploads/slider-app/rap-470x700-poster.png"
                                    alt="Cô Dâu Hào Môn">
                            </a>
                        </div>
                        <div class="movie-detail">
                            <h3><a href="https://m.touchcinema.com/phim/co-dau-hao-mon">Cô Dâu Hào Môn</a></h3>
                            <p>Khởi chiếu: <b>18/10/2024</b><br> Diễn viên: <b>Uyển Ân, Samuel An, Thu Trang, Lê Giang, Kiều
                                    Minh Tuấn, NSND Hồng Vân,...</b></p>
                            <a href="https://www.youtube.com/embed/QJ8E9R70csY?si=NiCXyr4Rxeh17J1a" class="view-trailer"
                                data-toggle="trailer">TRAILER</a>
                        </div>
                    </div>
                    
                </div>

                <div id="sapchieu" class="tab-pane">
                    <!-- Nội dung Phim sắp chiếu -->
                    <div class="movie-item" style="padding-top: 13px;">
                        <div class="movie-thumbnail">
                            <a href="https://m.touchcinema.com/phim/venom-keo-cuoi">
                                <img src="https://touchcinema.com/uploads/slider-app/470x700-7-poster.jpg"
                                    alt="Venom: Kèo Cuối">
                            </a>
                        </div>
                        <div class="movie-detail">
                            <h3><a href="https://m.touchcinema.com/phim/venom-keo-cuoi">Venom: Kèo Cuối</a></h3>
                            <p>Khởi chiếu: <b>25/10/2024</b><br> Diễn viên: <b>Tom Hardy, Juno Temple, Chiwetel Ejiofor,
                                    Clark
                                    Backo, Stephen Graham,...</b></p>
                            <a href="https://www.youtube.com/embed/id1rfr_KZWg?si=wzJNemi0vyUVlYK5" class="view-trailer"
                                data-toggle="trailer">TRAILER</a>
                        </div>
                    </div>
                    <div class="movie-item" style="padding-top: 13px;">
                        <div class="movie-thumbnail">
                            <a href="https://m.touchcinema.com/phim/venom-keo-cuoi">
                                <img src="https://touchcinema.com/uploads/slider-app/470x700-7-poster.jpg"
                                    alt="Venom: Kèo Cuối">
                            </a>
                        </div>
                        <div class="movie-detail">
                            <h3><a href="https://m.touchcinema.com/phim/venom-keo-cuoi">Venom: Kèo Cuối</a></h3>
                            <p>Khởi chiếu: <b>25/10/2024</b><br> Diễn viên: <b>Tom Hardy, Juno Temple, Chiwetel Ejiofor,
                                    Clark
                                    Backo, Stephen Graham,...</b></p>
                            <a href="https://www.youtube.com/embed/id1rfr_KZWg?si=wzJNemi0vyUVlYK5" class="view-trailer"
                                data-toggle="trailer">TRAILER</a>
                        </div>
                    </div>
                    <div class="movie-item" style="padding-top: 13px;">
                        <div class="movie-thumbnail">
                            <a href="https://m.touchcinema.com/phim/venom-keo-cuoi">
                                <img src="https://touchcinema.com/uploads/slider-app/470x700-7-poster.jpg"
                                    alt="Venom: Kèo Cuối">
                            </a>
                        </div>
                        <div class="movie-detail">
                            <h3><a href="https://m.touchcinema.com/phim/venom-keo-cuoi">Venom: Kèo Cuối</a></h3>
                            <p>Khởi chiếu: <b>25/10/2024</b><br> Diễn viên: <b>Tom Hardy, Juno Temple, Chiwetel Ejiofor,
                                    Clark
                                    Backo, Stephen Graham,...</b></p>
                            <a href="https://www.youtube.com/embed/id1rfr_KZWg?si=wzJNemi0vyUVlYK5" class="view-trailer"
                                data-toggle="trailer">TRAILER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $('.tab-header li').click(function() {
                var tab_id = $(this).data('tab');

                $('.tab-header li').removeClass('active');
                $('.tab-pane').removeClass('active');

                $(this).addClass('active');
                $('#' + tab_id).addClass('active');
            });
        });
    </script>
@endsection
