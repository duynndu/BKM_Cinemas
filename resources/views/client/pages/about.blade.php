@extends('client.layouts.main')

@section('title', 'Giới thiệu')

@section('css')

@endsection

@section('content')
    <div class="page-cinema-list">
        <section class="container">
            <div class="row section">
                <div class="col-md-3 col-sm-3">
                    <ul class="nav nav-tabs">
                        @foreach ($abouts as $item)
                            <li class="{{ $loop->index == 0 ? 'active' : ''}}">
                                <a data-toggle="tab" href="#{{ $item->slug }}">
                                    {{ $item->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-9 col-sm-9">
                    <div id="carousel-id" class="owl-carousel">
                        @foreach ($abouts as $item)
                            <div class="item ">
                                <img src="{{ asset($item->image) }}"
                                    alt="{{ $item->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row section">
                <div class="col-md-12">
                    <div class="tab-content">
                        @foreach ($abouts as $item)
                            <div id="{{ $item->slug }}" class="tab-pane fade in {{ $loop->index == 0 ? 'active' : '' }}">
                                <div class="des">
                                    {!! $item->content !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @if (!$movieIsShowing->isEmpty())
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
                                <div class="owl-carousel owl-loaded owl-drag" id="nowshowing-slider2">
                                    @foreach ($movieIsShowing->take(6) as $item)
                                        <div class="movie" style="padding-top: 30px;">
                                            <div class="poster">
                                                <a href="{{ route('movie.detail', $item->slug) }}">
                                                    <img class="img-responsive"
                                                        src="{{ asset($item->image) }}"
                                                        alt="{{ $item->title }}">
                                                </a>

                                                <div class="info">
                                                    <a href="{{ route('movie.detail', $item->slug) }}" class="button detail">
                                                        Chi tiết
                                                        <table></table>
                                                    </a>
                                                    <a class="button ticket video-play-button" data-toggle="modal"
                                                        href="#modal-trailer-1">
                                                        Trailer
                                                    </a>
                                                    <p class=" duration">
                                                        <b>Thời lượng:</b> {{ $item->duration }} phút
                                                    </p>
                                                    <p class=" category">
                                                        Thể loại:
                                                        @if ($item->movieGenre->count() > 0)
                                                            @foreach ($item->movieGenre as $genre)
                                                                {{ $loop->index > 0 ? ', ' : '' }}{{ $genre->genres->name }}
                                                            @endforeach
                                                        @else
                                                            Chưa cập nhật
                                                        @endif
                                                    </p>
                                                    <p class=" format">
                                                        <b>Định dạng:</b> {{ $item->format }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <h2>
                                                    <a href="{{ route('movie.detail', $item->slug) }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </h2>
                                                <p class="release">Khởi chiếu {{ $item->premiere_date }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
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
