@extends('mobile.layout.main')

@section('title', 'Phim abc')
@section('keywork', 'Phim abc')
@section('description', 'Phim abc')

@section('css')
    <link rel="stylesheet" href="{{ asset('mobile/css/movie.css') }}">

@endsection

@section('content')
    <div id="touch-content">
        <div id="hammer">
            <div class="moviel-poster">
                <a href="https://m.touchcinema.com/phim/the-wild-robot" class="prev">
                    <img src="https://m.touchcinema.com/statics/mobile/images/prev.png" alt="touch">
                </a>
                <img src="https://touchcinema.com/uploads/slider-app/rap-470x700-poster.png" alt="Cô Dâu Hào Môn">
                <a href="https://m.touchcinema.com/phim/lt-fubao-bao-boi-cua-ong" class="next">
                    <img src="https://m.touchcinema.com/statics/mobile/images/next.png" alt="touch">
                </a>
            </div>
        </div>
        <div class="movie-info">
            <div class="info">
                Thể loại:<br>
                Tâm Lý
            </div>
            <div class="info">
                Thời lượng:<br>
                114 phút
            </div>
            <div class="info">
                Khởi chiếu:<br>
                18/10/2024
            </div>
            <div class="info">
                <p class="detailbtn">
                    <a href="https://www.youtube.com/embed/QJ8E9R70csY?si=NiCXyr4Rxeh17J1a" class="view-trailer"
                        data-toggle="trailer">TRAILER</a>
                </p>
            </div>
        </div>
        <h1 class="movie-title">
            Cô Dâu Hào Môn
        </h1>
        <div class="age_restricted_wrap">
            <span class="age_restricted" style="display: inline-block; position: relative; top: auto; right: auto">
                <span>T18</span>
            </span>
            <span class="age_restricted_label">KHÔNG DÀNH CHO NGƯỜI DƯỚI 18 TUỔI</span>
        </div>
        <div id="movie-content">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#lichchieu">Lịch chiếu</a></li>
                <li class=""><a data-toggle="tab" href="#noidung">Nội dung</a></li>
            </ul>
            <div class="tab-content">
                <div id="lichchieu" class="tab-pane fade active in">
                    <a class="showdate" href="javascript:;" data-toggle="collapse" data-target="#collapse-2024-10-19">
                        Thứ Bảy
                        19/10
                    </a>
                    <div id="collapse-2024-10-19" class="collapse in" style="height: auto;">
                        <div class="showtimes">
                            <div>
                                <div class="times">
                                    <a class="disabled">09:05</a>
                                    <a class="disabled">09:45</a>
                                    <a class="disabled">10:30</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81492">11:10</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81493">11:50</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81494">12:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81495">13:15</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81496">13:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81497">14:40</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81498">15:20</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81499">16:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81500">18:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81501">19:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81451">19:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81502">20:10</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81503">21:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81504">21:40</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81505">22:15</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <a class="showdate collapsed" href="javascript:;" data-toggle="collapse"
                        data-target="#collapse-2024-10-20">
                        Chủ Nhật
                        20/10
                    </a>
                    <div id="collapse-2024-10-20" class="collapse" style="height: 0px;">
                        <div class="showtimes">
                            <div>
                                <div class="times">
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81514">09:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81516">10:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81517">11:15</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81518">12:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81519">12:40</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81520">13:20</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81521">14:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81522">15:25</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81523">16:40</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81524">17:30</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81525">18:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81526">19:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81527">19:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81528">20:10</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81529">21:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81530">21:40</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81531">22:15</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <a class="showdate collapsed" href="javascript:;" data-toggle="collapse"
                        data-target="#collapse-2024-10-21">
                        Thứ Hai
                        21/10
                    </a>
                    <div id="collapse-2024-10-21" class="collapse" style="height: 0px;">
                        <div class="showtimes">
                            <div>
                                <div class="times">
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81542">08:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81543">09:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81544">10:20</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81545">11:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81546">11:40</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81547">12:25</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81548">13:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81549">13:45</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81550">14:30</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81551">15:10</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81552">15:50</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81553">16:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81554">17:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81555">19:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81556">19:30</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81557">20:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81558">21:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81559">21:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81560">22:05</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <a class="showdate collapsed" href="javascript:;" data-toggle="collapse"
                        data-target="#collapse-2024-10-22">
                        Thứ Ba
                        22/10
                    </a>
                    <div id="collapse-2024-10-22" class="collapse" style="height: 0px;">
                        <div class="showtimes">
                            <div>
                                <div class="times">
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81561">08:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81562">09:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81563">10:20</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81564">11:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81565">11:40</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81566">12:25</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81567">13:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81568">13:45</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81569">14:30</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81570">15:10</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81571">15:50</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81572">16:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81573">17:55</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81574">19:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81575">19:30</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81576">20:00</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81577">21:05</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81578">21:35</a>
                                    <a class="active" href="https://m.touchcinema.com/dat-ve/81579">22:05</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
                <div id="noidung" class="tab-pane fade">
                    <p style="text-align: justify;">Cô Dâu Hào Môn là bộ phim của đạo diễn Vũ Ngọc Đãng, nằm trong "vũ trụ
                        Chị Chị Em Em". Phim lấy đề tài làm dâu hào môn và khai thác câu chuyện môn đăng hộ đối, lối sống và
                        quy tắc của giới thượng lưu dưới góc nhìn hài hước và châm biếm.</p>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

@endsection
