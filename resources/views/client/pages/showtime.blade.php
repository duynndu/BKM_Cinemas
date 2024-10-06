@extends('client.layouts.main')

@section('title', 'Lịch chiếu')

@section('css')
    <style type="text/css">
        .showtime-movie {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .showtime-movie>.col-lg-9.col-md-9.col-sm-8 {
            background-color: #FFF;
        }

        .page-showtime .container .showtime-movie .info a h3 {
            margin-top: 20px;
        }

        .page-showtime .container .showtime-movie .info h3,
        .page-showtime .container .showtime-movie .showtimes .showtime-type {
            color: #000;
        }

        .page-showtime .container .showtime-movie .info .detail {
            overflow: hidden;
            margin-top: 10px;
        }

        .page-showtime .container .showtime-movie .showtimes a {
            display: inline-block;
            width: 65px;
            text-align: center;
            padding: 3px;
            margin: 0 8px 8px 0;
        }

        .page-showtime .container .showtime-movie .info .release .date {
            margin-bottom: -5px
        }

        .showtimes {
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="page-showtime">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <h2>Xem lịch chiếu theo ngày</h2>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#date-2024-09-16" aria-expanded="true">
                            <span class="day">Hôm nay</span>
                            <span class="date">16</span>
                            <span class="month">Tháng 9</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#date-2024-09-17">
                            <span class="day">Thứ Ba</span>
                            <span class="date">17</span>
                            <span class="month">Tháng 9</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#date-2024-09-18">
                            <span class="day">Thứ Tư</span>
                            <span class="date">18</span>
                            <span class="month">Tháng 9</span>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#date-2024-09-19">
                            <span class="day">Thứ Năm</span>
                            <span class="date">19</span>
                            <span class="month">Tháng 9</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container title-page">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Lịch chiếu phim</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tab-content">

                <div id="date-2024-09-16" class="tab-pane active">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="row showtime-movie">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-1-1726123853-poster.jpg"
                                            alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8">
                                <div class="info">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <h3>Không Nói Điều Dữ</h3>
                                    </a>
                                    <h3>SPEAK NO EVIL</h3>
                                    <div class="age">T18</div>
                                    <div class="release">
                                        <span class="date">13</span>
                                        <span>09</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                    </div>
                                    <div class="detail">
                                        <span>
                                            <strong>
                                                <i class="fa-regular fa-clock"></i>
                                                Thời lượng:
                                            </strong>
                                            110 phút
                                        </span>
                                        <span>
                                            <strong>
                                                <i class="fa-solid fa-align-left"></i>
                                                Thể loại:
                                            </strong>
                                            Kinh Dị, Hồi Hộp, Tâm Lý
                                        </span>
                                        <span>
                                            <strong><i class="fa-solid fa-user"></i>
                                                Đạo diễn:</strong>James Watkins
                                        </span>
                                    </div>
                                </div>
                                <div class="showtimes">
                                    <div>
                                        <a class="disabled">09:55</a>
                                        <a class="disabled">12:00</a>
                                        <a class="disabled">14:05</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
                <div id="date-2024-09-17" class="tab-pane fade">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="row showtime-movie">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-1-1726123853-poster.jpg"
                                            alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8">
                                <div class="info">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <h3>Không Nói Điều Dữ</h3>
                                    </a>
                                    <h3>SPEAK NO EVIL</h3>
                                    <div class="age">T18</div>
                                    <div class="release">
                                        <span class="date">13</span>
                                        <span>09</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                    </div>
                                    <div class="detail">
                                        <span>
                                            <strong>
                                                <i class="fa-regular fa-clock"></i>
                                                Thời lượng:
                                            </strong>
                                            110 phút
                                        </span>
                                        <span>
                                            <strong>
                                                <i class="fa-solid fa-align-left"></i>
                                                Thể loại:
                                            </strong>
                                            Kinh Dị, Hồi Hộp, Tâm Lý
                                        </span>
                                        <span>
                                            <strong><i class="fa-solid fa-user"></i>
                                                Đạo diễn:</strong>James Watkins
                                        </span>
                                    </div>
                                </div>
                                <div class="showtimes">
                                    <div>
                                        <a class="disabled">09:55</a>
                                        <a class="disabled">12:00</a>
                                        <a class="disabled">14:05</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div id="date-2024-09-18" class="tab-pane fade">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="row showtime-movie">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-1-1726123853-poster.jpg"
                                            alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8">
                                <div class="info">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <h3>Không Nói Điều Dữ</h3>
                                    </a>
                                    <h3>SPEAK NO EVIL</h3>
                                    <div class="age">T18</div>
                                    <div class="release">
                                        <span class="date">13</span>
                                        <span>09</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                    </div>
                                    <div class="detail">
                                        <span>
                                            <strong>
                                                <i class="fa-regular fa-clock"></i>
                                                Thời lượng:
                                            </strong>
                                            110 phút
                                        </span>
                                        <span>
                                            <strong>
                                                <i class="fa-solid fa-align-left"></i>
                                                Thể loại:
                                            </strong>
                                            Kinh Dị, Hồi Hộp, Tâm Lý
                                        </span>
                                        <span>
                                            <strong><i class="fa-solid fa-user"></i>
                                                Đạo diễn:</strong>James Watkins
                                        </span>
                                    </div>
                                </div>
                                <div class="showtimes">
                                    <div>
                                        <a class="disabled">09:55</a>
                                        <a class="disabled">12:00</a>
                                        <a class="disabled">14:05</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div id="date-2024-09-19" class="tab-pane fade">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="row showtime-movie">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="poster">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <img src="https://touchcinema.com/uploads/slider-app/1200wx1800h-1-1726123853-poster.jpg"
                                            alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8">
                                <div class="info">
                                    <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                        <h3>Không Nói Điều Dữ</h3>
                                    </a>
                                    <h3>SPEAK NO EVIL</h3>
                                    <div class="age">T18</div>
                                    <div class="release">
                                        <span class="date">13</span>
                                        <span>09</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                        <i class="fa fa-star  active "></i>
                                    </div>
                                    <div class="detail">
                                        <span>
                                            <strong>
                                                <i class="fa-regular fa-clock"></i>
                                                Thời lượng:
                                            </strong>
                                            110 phút
                                        </span>
                                        <span>
                                            <strong>
                                                <i class="fa-solid fa-align-left"></i>
                                                Thể loại:
                                            </strong>
                                            Kinh Dị, Hồi Hộp, Tâm Lý
                                        </span>
                                        <span>
                                            <strong><i class="fa-solid fa-user"></i>
                                                Đạo diễn:</strong>James Watkins
                                        </span>
                                    </div>
                                </div>
                                <div class="showtimes">
                                    <div>
                                        <a class="disabled">09:55</a>
                                        <a class="disabled">12:00</a>
                                        <a class="disabled">14:05</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection