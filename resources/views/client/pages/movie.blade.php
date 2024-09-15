@extends('client.layouts.main')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
@endsection

@section('content')
    <section id="home-movie" class="page-list-movie">
        <div class="container">
            <h1 style="display: block;margin-top: -46px;text-align: left;color: #FFF;">Danh sách phim</h1>
            <ul class="nav nav-tabs" style="margin-top: 0;">
                <li class="nowshowing">
                    <a data-toggle="tab" href="#phimdangchieu" aria-expanded="false">
                        <img src="https://touchcinema.com/images/icons/icon-ticket.png" alt="Phim đang chiếu">
                        <span>Phim đang chiếu</span>
                    </a>
                    <span class="border"></span>
                </li>
                <li class="comingsoon active">
                    <a data-toggle="tab" href="#phimsapchieu" aria-expanded="true">
                        <span>Phim sắp chiếu</span>
                        <img src="https://touchcinema.com/images/icons/icon-sap-chieu.png" alt="Phim đang chiếu">
                    </a>
                    <span class="border"></span>
                </li>
            </ul>

            <div class="tab-content">
                <div id="phimdangchieu" class="tab-pane fade">
                    <div class="row row-eq-height">
                        @for ($i = 0; $i <= 10; $i++)
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="movie" style="padding-top: 30px;">
                                    <div class="poster">
                                        <a href="https://touchcinema.com/phim/khong-noi-dieu-du">
                                            <img class="img-responsive"
                                                src="https://touchcinema.com/uploads/slider-app/1200wx1800h-1-1726123853-poster.jpg"
                                                alt="Không Nói Điều Dữ">
                                        </a>
                                        <div class="info">
                                            <a href="https://touchcinema.com/phim/khong-noi-dieu-du" class="button detail">
                                                &gt; Chi tiết
                                            </a>
                                            <a href="https://touchcinema.com/phim/khong-noi-dieu-du#showtime"
                                                class="button ticket">
                                                Mua vé <img src="https://touchcinema.com/images/icons/icon-dat-ve.png"
                                                    alt="Mua vé">
                                            </a>
                                            <p class="button duration"><b>Thời lượng:</b> 110 phút</p>
                                            <p class="button category"><b>Thể loại:</b> Kinh Dị, Hồi Hộp, Tâm Lý</p>
                                            <p class="button format"><b>Định dạng</b> 2D </p>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h2><a href="https://touchcinema.com/phim/khong-noi-dieu-du">Không Nói Điều Dữ</a>
                                        </h2>
                                        <p class="release">Khởi chiếu 13/09/2024</p>
                                    </div>
                                </div>
                            </div>
                        @endfor

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="phimsapchieu" class="tab-pane fade active in">
                    <div class="row row-eq-height">
                        @for ($i = 0; $i < 15; $i++)
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <div class="movie" style="padding-top: 30px;">
                                    <div class="poster">
                                        <a href="https://touchcinema.com/phim/con-cam">
                                            <img class="img-responsive"
                                                src="https://touchcinema.com/uploads/slider-app/300wx450h-cam-1-poster.jpg"
                                                alt="Cám">
                                        </a>
                                        <div class="info">
                                            <a href="https://touchcinema.com/phim/con-cam" class="button detail">
                                                &gt; Chi tiết
                                            </a>
                                            <a href="https://touchcinema.com/phim/con-cam#showtime" class="button ticket">
                                                Mua vé <img src="https://touchcinema.com/images/icons/icon-dat-ve.png"
                                                    alt="Mua vé">
                                            </a>
                                            <p class="button duration"><b>Thời lượng:</b> </p>
                                            <p class="button category"><b>Thể loại:</b> Kinh Dị</p>
                                            <p class="button format"><b>Định dạng</b> 2D </p>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h2><a href="https://touchcinema.com/phim/con-cam">Cám</a></h2>
                                        <p class="release">Khởi chiếu 20/09/2024</p>
                                    </div>
                                </div>
                            </div>
                        @endfor

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
