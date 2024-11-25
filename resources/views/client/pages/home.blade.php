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
                    @if (isset($movieIsShowing) && $movieIsShowing->count() > 0)
                        <div class="owl-carousel" id="nowshowing-slider">
                            @foreach ($movieIsShowing as $item)
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
                                                Trailer <img src="https://cdn-icons-png.flaticon.com/512/777/777242.png"
                                                    alt="Trailer">
                                            </a>
                                            <p class="button duration">
                                                <b>Thời lượng: </b>
                                                {{ $item->duration }} phút
                                            </p>
                                            <p class=" category">
                                                <b>Thể loại:</b>
                                                @if ($item->movieGenre->count() > 0)
                                                    @foreach ($item->movieGenre as $genre)
                                                        {{ $loop->index > 0 ? ', ' : '' }}{{ $genre->genres->name }}
                                                    @endforeach
                                                @else
                                                    Chưa cập nhật
                                                @endif
                                            </p>
                                            <p class="button format">
                                                <b>Định dạng</b>
                                                {{ $item->format }}
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
                    @endif
                </div>
                <div id="comingsoon" class="tab-pane fade">
                    @if (isset($upComingMovie) && $upComingMovie->count() > 0)
                        <div class="owl-carousel" id="comingsoon-slider">
                            @foreach ($upComingMovie as $item)
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
                                                Trailer <img src="https://cdn-icons-png.flaticon.com/512/777/777242.png"
                                                    alt="Trailer">
                                            </a>
                                            <p class="button duration">
                                                <b>Thời lượng: </b>
                                                {{ $item->duration }} phút
                                            </p>
                                            <p class=" category">
                                                <b>Thể loại:</b>
                                                @if ($item->movieGenre->count() > 0)
                                                    @foreach ($item->movieGenre as $genre)
                                                        {{ $loop->index > 0 ? ', ' : '' }}{{ $genre->genres->name }}
                                                    @endforeach
                                                @else
                                                    Chưa cập nhật
                                                @endif
                                            </p>
                                            <p class="button format">
                                                <b>Định dạng</b>
                                                {{ $item->format }}
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
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section id="home-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    @if (!empty($postPromotion))
                        <div id="promotion">
                            <div class="title">
                                <h2>Ưu đãi - Sự kiện</h2>
                            </div>
                            <div class="owl-carousel owl-loaded owl-drag" id="promotion-slider">
                                @foreach ($postPromotion as $item)
                                    <div class="post-item">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('post.detail', ['cate_slug' => 'khuyen-mai', 'slug' => $item->slug]) }}">
                                                <img class="img-responsive" src="{{ asset($item->avatar) }}"
                                                    alt="{{ $item->name }}">
                                            </a>
                                        </div>
                                        <h3>
                                            <a href="{{ route('post.detail', ['cate_slug' => 'khuyen-mai', 'slug' => $item->slug]) }}">
                                                {{ $item->name }}
                                            </a>
                                        </h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (!empty($postReviews))
                        <div id="carousel-post" class="carousel slide">
                            <div class="post-arrow"></div>
                            <div class="clearfix"></div>
                            <div class="title">
                                <h2>Đánh giá phim</h2>
                                <ol class="carousel-indicators">
                                    @foreach ($postReviews as $item)
                                        <li data-target="#carousel-post" data-slide-to="{{ $loop->index }}"
                                            class="{{ $loop->index == 0 ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                            </div>
                            <div class="list-post">
                                <div class="carousel-inner">
                                    @foreach ($postReviews as $item)
                                        <div class="item  {{ $loop->index == 0 ? 'active' : '' }} ">
                                            @foreach ($item as $childitem)
                                                <div class="post-item">
                                                    <div class="post-thumbnail">
                                                        <a
                                                            href="{{ route('post.detail', ['cate_slug' => 'danh-gia-phim', 'slug' => $childitem->slug]) }}">
                                                            <img class="img-responsive"
                                                                src="{{ asset($childitem->avatar) }}"
                                                                alt="Review phim Con lắc tà thuật – The Hypnosis">
                                                        </a>
                                                    </div>
                                                    <div class="post-detail">
                                                        <h3>
                                                            <a
                                                                href="{{ route('post.detail', ['cate_slug' => 'danh-gia-phim', 'slug' => $childitem->slug]) }}">
                                                                {{ $childitem->name }}
                                                            </a>
                                                        </h3>
                                                        <div class="description">
                                                            {{ Str::limit($childitem->description, 500, '...') }}</div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 sidebar">
                    <div class="facebook-box hidden-xs">
                        <div class="fb-page fb_iframe_widget" data-width="390" data-adapt-container-width="true"
                            data-hide-cover="false" data-href="https://www.facebook.com/touchcinema/"
                            data-show-facepile="true" data-small-header="false" fb-xfbml-state="rendered"
                            fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1700069773628064&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390">
                            <span style="vertical-align: bottom; width: 390px; height: 130px;"><iframe
                                    name="fe37f795f65f6f972" width="390px" height="1000px"
                                    data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                    frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                    allow="encrypted-media"
                                    src="https://www.facebook.com/v12.0/plugins/page.php?adapt_container_width=true&amp;app_id=1700069773628064&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfcdd35c1cc603ed1e%26domain%3Dtouchcinema.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftouchcinema.com%252Fffab0b18aaad35957%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390"
                                    style="border: none; visibility: visible; width: 390px; height: 130px;"
                                    class=""></iframe></span>
                        </div>
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
                                    <option value="1021">Linh Miêu</option>
                                    <option value="997">Wicked (Phụ Đề)</option>
                                    <option value="1053">Cười Xuyên Biên Giới (Phụ Đề)</option>
                                    <option value="1059">Cười Xuyên Biên Giới (Lồng Tiếng)</option>
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
                            <button type="button" class="close" data-dismiss="modal" title="Đóng"
                                aria-hidden="true">×
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="video-container video-trailer--home">
                                <iframe src="{{ $isShowing->trailer_url }}" frameborder="0"></iframe>
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
                                <iframe src="{{ $coming->trailer_url }}" frameborder="0"></iframe>
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
