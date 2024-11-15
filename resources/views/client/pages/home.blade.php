@extends('client.layouts.main')

@section('title', 'BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.')

@section('css')
@endsection

@section('content')
    @if (isset($sliders) && $sliders->count() > 0)
        <section>
            <div id="main-slider" class="owl-carousel">
                @foreach ($sliders as $item)
                    <div class="item">
                        <a href="{{ route('movie.detail', $item->slug) }}">
                            <img width="1600" src="{{ asset($item->banner_movie) }}" alt="{{ $item->title }}" />
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <section id="home-movie">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nowshowing active">
                    <a data-toggle="tab" href="#nowshowing">
                        <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Phim đang chiếu" />
                        <span>Phim đang chiếu</span>
                    </a>
                    <span class="border"></span>
                </li>
                <li class="comingsoon">
                    <a data-toggle="tab" href="#comingsoon">
                        <span>Phim sắp chiếu</span>
                        <img src="{{ asset('client/images/icons/icon-sap-chieu.png') }}" alt="Phim đang chiếu" />
                    </a>
                    <span class="border"></span>
                </li>
            </ul>

            <div class="tab-content">
                <div id="nowshowing" class="tab-pane fade in active">
                    <div class="owl-carousel" id="nowshowing-slider">
                        @if (isset($movieIsShowing) && $movieIsShowing->count() > 0)
                            @foreach ($movieIsShowing as $item)
                                <div class="movie" style="padding-top: 30px;">
                                    <div class="poster">
                                        <a href="{{ route('movie.detail', $item->slug) }}">
                                            <img class="img-responsive" src="{{ asset($item->image) }}"
                                                alt="{{ $item->title }}" />
                                        </a>
                                        {{-- <div class="hot" style="top: -27px;width: 80px;height: 78px;">
                                            <img src="{{ asset('client/images/icons/sneak.png') }}">
                                        </div> --}}
                                        <div class="info">
                                            <a href="{{ route('movie.detail', $item->slug) }}" class="button detail">
                                                Chi tiết<table></table>
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
                                        <p class="release">Khởi chiếu {{ $item->release_date }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div id="comingsoon" class="tab-pane fade">
                    <div class="owl-carousel" id="comingsoon-slider">
                        @if (isset($upComingMovie) && $upComingMovie->count() > 0)
                            @foreach ($upComingMovie as $item)
                                <div class="movie" style="padding-top: 30px;">
                                    <div class="poster">
                                        <a href="{{ route('movie.detail', $item->slug) }}">
                                            <img class="img-responsive" src="{{ asset($item->image) }}"
                                                alt="{{ $item->title }}" />
                                        </a>
                                        <div class="info">
                                            <a href="{{ route('movie.detail', $item->slug) }}" class="button detail">
                                                Chi tiết
                                            </a>
                                            <a class="button ticket video-play-button" data-toggle="modal"
                                                href="#modal-trailer-{{ $item->id }}">
                                                Trailer
                                            </a>
                                            <p class="button duration"><b>Thời lượng:</b> </p>
                                            <p class="button category"><b>Thể loại:
                                                    @if ($item->movieGenre->count() > 0)
                                                        @foreach ($item->movieGenre as $genre)
                                                            {{ $loop->index > 0 ? ', ' : '' }}{{ $genre->genres->name }}
                                                        @endforeach
                                                    @else
                                                        Chưa cập nhật
                                                    @endif
                                                </b>
                                            </p>
                                            <p class="button format"><b style="text-transform: uppercase;">Định dạng:</b>
                                                {{ $item->format }} </p>

                                        </div>
                                    </div>
                                    <div class="detail">
                                        <h2>
                                            <a href="{{ route('movie.detail', $item->slug) }}">{{ $item->title }}</a>
                                        </h2>
                                        <p class="release">Khởi chiếu {{ $item->release_date }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @if (isset($promotionEvent) && count($promotionEvent) > 0)
                        <div id="promotion">
                            <div class="title">
                                <h2>{{ $promotionEvent['category']->name }}</h2>
                            </div>
                            <div class="owl-carousel" id="promotion-slider">
                                @foreach ($promotionEvent['posts'] as $item)
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('post.detail', ['slug' => $item->slug]) }}">
                                                <img class="img-responsive" style="height: 300px" src="{{ asset($item->avatar) }}"
                                                    alt="{{ $item->name }}">
                                            </a>
                                        </div>
                                        <h3 class="text-center" >
                                            <a style="font-size: 25px"
                                                href="{{ route('post.detail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                        </h3>
                                        <p class="text-center text-justify" style="color: #fff">{{ Str::limit($item->description, 55, '...') }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    {{-- modal trailer --}}
    @if (isset($movieIsShowing) && $movieIsShowing->count() > 0)
        @foreach ($movieIsShowing as $isShowing)
            <div class="modal fade in" id="modal-trailer-{{ $isShowing->id }}" style="display: none;">
                <div class="modal-dialog modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" title="Đóng" aria-hidden="true">×
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


@endsection

@section('js')
@endsection
