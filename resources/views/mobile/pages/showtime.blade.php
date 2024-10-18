@extends('mobile.layout.main')

@section('title', 'Lịch chiếu')
@section('keywork', 'Lịch chiếu')
@section('description', 'Lịch chiếu')

@section('css')
    <link rel="stylesheet" href="{{ asset('mobile/css/show_time.css') }}">
@endsection

@section('content')
    <div class="page-showtime">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tab-content" id="movies">
                        <h1>Lịch chiếu phim</h1>
                        <a class="showdate" href="javascript:;" data-toggle="collapse" data-target="#collapse-2024-10-15">
                            Hôm nay, ngày 15/10
                        </a>
                        <div id="collapse-2024-10-15" class="collapse in">
                            <div class="movie-item showtime-movie">
                                <div class="movie-thumbnail">
                                    <div class="age">T18</div>
                                    <a href="https://m.touchcinema.com/phim/tee-yod-quy-an-tang-2">
                                        <img src="https://touchcinema.com/medias/hinh-phim-2020/1200wx1800h-9-poster.jpg"
                                            alt="Tee Yod: Quỷ Ăn Tạng 2" class="img-responsive">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/tee-yod-quy-an-tang-2">
                                            Tee Yod: Quỷ Ăn Tạng 2
                                        </a>
                                    </h3>
                                    <div class="showtimes" style="margin-top: 5px;">
                                        <div>

                                            <a class="disabled">08:45</a>
                                            <a class="disabled">09:45</a>
                                            <a class="disabled">10:50</a>
                                            <a class="disabled">11:50</a>
                                            <a class="disabled">12:55</a>
                                            <a class="disabled">13:55</a>
                                            <a class="disabled">15:00</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81187">16:00</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81188">17:05</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81189">18:05</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81190">19:10</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81191">19:50</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81192">20:30</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81193">21:15</a>
                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81194">21:55</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="movie-item showtime-movie">
                                <div class="movie-thumbnail">
                                    <div class="age">P</div>
                                    <a href="https://m.touchcinema.com/phim/the-wild-robot">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-8-1728372724-poster.jpg"
                                            alt="Robot Hoang Dã (Lồng Tiếng)" class="img-responsive">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/the-wild-robot">
                                            Robot Hoang Dã (Lồng Tiếng)
                                        </a>
                                    </h3>
                                    <div class="showtimes" style="margin-top: 5px;">
                                        <div>

                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81199">17:55</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="movie-item showtime-movie">
                                <div class="movie-thumbnail">
                                    <div class="age">P</div>
                                    <a href="https://m.touchcinema.com/phim/fubao-bao-boi-cua-ong">
                                        <img src="https://touchcinema.com/medias/hinh-phim-2020/470x700-6-poster.jpg"
                                            alt="Fubao: Bảo Bối Của Ông (Phụ Đề)" class="img-responsive">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/fubao-bao-boi-cua-ong">
                                            Fubao: Bảo Bối Của Ông (Phụ Đề)
                                        </a>
                                    </h3>
                                    <div class="showtimes" style="margin-top: 5px;">
                                        <div>

                                            <a class="active" href="https://m.touchcinema.com/dat-ve/81210">16:05</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="movie-item showtime-movie">
                                <div class="movie-thumbnail">
                                    <div class="age">T18</div>
                                    <a href="https://m.touchcinema.com/phim/con-cam">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-6-1726818229-poster.jpg"
                                            alt="Cám" class="img-responsive">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/con-cam">
                                            Cám
                                        </a>
                                    </h3>
                                    <div class="showtimes" style="margin-top: 5px;">
                                        <div>

                                            <a class="disabled">13:50</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="movie-item showtime-movie">
                                <div class="movie-thumbnail">
                                    <div class="age">T18</div>
                                    <a href="https://m.touchcinema.com/phim/joker-dien-co-doi">
                                        <img src="https://touchcinema.com/uploads/slider-app/poster-payoff-joker-folie-a-deux-5-1-poster.jpg"
                                            alt="Joker: Điên Có Đôi" class="img-responsive">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/joker-dien-co-doi">
                                            Joker: Điên Có Đôi
                                        </a>
                                    </h3>
                                    <div class="showtimes" style="margin-top: 5px;">
                                        <div>

                                            <a class="disabled">09:25</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="movie-item showtime-movie">
                                <div class="movie-thumbnail">
                                    <div class="age">T18</div>
                                    <a href="https://m.touchcinema.com/phim/kumanthong-chieu-hon-vong-nhi">
                                        <img src="https://touchcinema.com/medias/hinh-phim-2020/470x700-5-poster.jpg"
                                            alt="Kumanthong: Chiêu Hồn Vong Nhi" class="img-responsive">
                                    </a>
                                </div>
                                <div class="movie-detail">
                                    <h3>
                                        <a href="https://m.touchcinema.com/phim/kumanthong-chieu-hon-vong-nhi">
                                            Kumanthong: Chiêu Hồn Vong Nhi
                                        </a>
                                    </h3>
                                    <div class="showtimes" style="margin-top: 5px;">
                                        <div>

                                            <a class="disabled">11:55</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
