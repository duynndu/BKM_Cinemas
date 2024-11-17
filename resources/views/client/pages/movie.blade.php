@extends('client.layouts.main')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
@endsection

@section('content')
    <section id="home-movie" class="page-list-movie">
        <div class="container">
            <h1 style="display: block;margin-top: -46px;text-align: left;color: #FFF;">Danh sách phim</h1>
            <ul class="nav nav-tabs" style="margin-top: 0;">
                <li class="nowshowing active">
                    <a data-toggle="tab" href="#phimdangchieu" aria-expanded="false">
                        <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Phim đang chiếu" />
                        <span>Phim đang chiếu</span>
                    </a>
                    <span class="border"></span>
                </li>
                <li class="comingsoon ">
                    <a data-toggle="tab" href="#phimsapchieu" aria-expanded="true">
                        <span>Phim sắp chiếu</span>
                        <img src="{{ asset('client/images/icons/icon-sap-chieu.png') }}" alt="Phim đang chiếu" />
                    </a>
                    <span class="border"></span>
                </li>
            </ul>

            <div class="tab-content">
                <div id="phimdangchieu" class="tab-pane active fade in">
                    <div class="row row-eq-height">
                        @if (isset($movieIsShowing) && $movieIsShowing->count() > 0)
                            @foreach ($movieIsShowing as $item)
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="{{ route('movie.detail', $item->slug) }}">
                                                <img class="img-responsive" src="{{ asset($item->image) }}"
                                                    alt="{{ $item->title }}">
                                            </a>
                                            <div class="info">
                                                <a href="{{ route('movie.detail', $item->slug) }}" class="button detail">
                                                    Chi tiết
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-{{ $item->id }}">
                                                    Trailer
                                                </a>
                                                <p class="button duration"><b>Thời lượng:</b> {{ $item->duration }} phút</p>
                                                <p class="button category">
                                                    <b>Thể loại:
                                                        @if ($item->movieGenre->count() > 0)
                                                            @foreach ($item->movieGenre as $genre)
                                                                {{ $loop->index > 0 ? ', ' : '' }}{{ $genre->genres->name }}
                                                            @endforeach
                                                        @else
                                                            Chưa cập nhật
                                                        @endif
                                                    </b>
                                                </p>
                                                <p class="button format"><b>Định dạng:</b> {{ $item->format }} </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2><a href="{{ route('movie.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </h2>
                                            <p class="release">Khởi chiếu 13/09/2024</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="clearfix"></div>

                        <div class="center">
                            {{-- {{ $movieIsShowing->links('vendor.pagination.bootstrap-4') }} --}}
                        </div>
                    </div>
                </div>
                <div id="phimsapchieu" class="tab-pane fade in">
                    <div class="row row-eq-height">
                        @if (isset($upComingMovie) && $upComingMovie->count() > 0)
                            @foreach ($upComingMovie as $item)
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="movie" style="padding-top: 30px;">
                                        <div class="poster">
                                            <a href="{{ route('movie.detail', $item->slug) }}">
                                                <img class="img-responsive" src="{{ asset($item->image) }}"
                                                    alt="{{ $item->title }}">
                                            </a>
                                            <div class="info">
                                                <a href="{{ route('movie.detail', $item->slug) }}" class="button detail">
                                                    Chi tiết
                                                </a>
                                                <a class="button ticket video-play-button" data-toggle="modal"
                                                    href="#modal-trailer-{{ $item->id }}">
                                                    Trailer
                                                </a>
                                                <p class="button duration"><b>Thời lượng:</b> {{ $item->duration }} phút
                                                </p>
                                                <p class="button category">
                                                    <b>Thể loại:
                                                        @if ($item->movieGenre->count() > 0)
                                                            @foreach ($item->movieGenre as $genre)
                                                                {{ $loop->index > 0 ? ', ' : '' }}{{ $genre->genres->name }}
                                                            @endforeach
                                                        @else
                                                            Chưa cập nhật
                                                        @endif
                                                    </b>
                                                </p>
                                                <p class="button format"><b>Định dạng:</b> {{ $item->format }} </p>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <h2><a href="{{ route('movie.detail', $item->slug) }}">{{ $item->title }}</a>
                                            </h2>
                                            <p class="release">Khởi chiếu 13/09/2024</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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

    {{-- modal trailer --}}
    @if (isset($movieIsShowing) && $movieIsShowing->count() > 0)
        @foreach ($movieIsShowing as $isShowing)
            <div class="modal fade in" id="modal-trailer-{{ $isShowing->id }}" style="display: none;">
                <div class="modal-dialog modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" title="Đóng"
                                aria-hidden="true">×
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="video-container video-trailer--home">
                                {!! $isShowing->trailer_url !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    @if (isset($upComingMovie) && $upComingMovie->count() > 0)
        @foreach ($upComingMovie as $coming)
            <div class="modal fade in" id="modal-trailer-{{ $coming->id }}" style="display: none;">
                <div class="modal-dialog modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" title="Đóng"
                                aria-hidden="true">×
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="video-container video-trailer--home">
                                {!! $coming->trailer_url !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif


    {{-- modal trailer full --}}
    @if (isset($upComingMovie) && $upComingMovie->count() > 0)
        @foreach ($upComingMovie as $coming)
            <div class="modal fade in" id="modal-trailer-{{ $coming->id }}" style="display: none;">
                <div class="modal-dialog modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" title="Đóng"
                                aria-hidden="true">×
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="video-container video-trailer--home">
                                {!! $coming->trailer_url !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection@if (isset($upComingMovie) && $upComingMovie->count() > 0)
    @foreach ($upComingMovie as $coming)
        <div class="modal fade in" id="modal-trailer-{{ $coming->id }}" style="display: none;">
            <div class="modal-dialog modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" title="Đóng"
                            aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="video-container video-trailer--home">
                            {!! $coming->trailer_url !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
@if (isset($upComingMovie) && $upComingMovie->count() > 0)
    @foreach ($upComingMovie as $coming)
        <div class="modal fade in" id="modal-trailer-{{ $coming->id }}" style="display: none;">
            <div class="modal-dialog modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" title="Đóng"
                            aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="video-container video-trailer--home">
                            {!! $coming->trailer_url !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

@section('js')
@endsection
