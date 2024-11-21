@extends('client.layouts.main')
@section('title', $post->name ?? '')
@section('css')
    {{-- <link rel="stylesheet" href="https://touchcinema.com/statics/frontend/plugins/owl-carousel/assets/owl.carousel.min.css"
        type="text/css" media="all" /> --}}
@endsection

@section('content')
    <div class="container page-post-detail">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                @if ($post)
                    <div class="post-detail">
                        <h1>{{ $post->name }}</h1>
                        <div class="pull-left">
                            <div class="post-meta">
                                Đăng lúc
                                <span>{{ $post->created_at->format('d/m/Y') }}</span>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="post-content">
                            {!! $post->content ?? 'Đang cập nhật nội dung !' !!}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endif

                <div class="box-comment">
                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" colorscheme="light"
                        width="100%" data-href="{{ route('post.detail', ['slug' => $post->slug]) }}" data-numposts="20"
                        fb-xfbml-state="rendered" style="width: 100%;"><span
                            style="vertical-align: bottom; width: 100%; height: 500px;"><iframe name="f55fca7c4c800dd66"
                                width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin"
                                title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                style="border: none; visibility: visible; width: 100%; height: 500px;"
                                class=""></iframe>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 sidebar">
                <div class="widget-ticket ">
                    <h2>
                        <img src="{{ asset('client/images/icons/icon-ticket.png') }}" alt="Đặt vé">
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
                                <option value="1054">Kẻ Đóng Thế</option>
                                <option value="979">Mật Mã Đỏ</option>
                                <option value="1039">Cu Li Không Bao Giờ Khóc</option>
                                <option value="1052">Học Viện Anh Hùng: You're Next (Phụ Đề)</option>
                            </select>
                        </div>
                        <div class="select-group">
                            <span class="addon"><i class="fa fa-calendar-plus"></i></span>
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
                @empty(!$movieIsShowing)
                    <div class="related-movie">
                        <h2>Phim đang chiếu</h2>
                        <div class="list">
                            @forelse ($movieIsShowing as $item)
                                <a href="{{ route('movie.detail', $item->slug) }}">
                                    <div class="poster"
                                        style="background-image: url('https://touchcinema.com/storage/slider-app/1920x1080-16.jpg')">
                                    </div>
                                    <p style="color: #000"> {{ $item->title }}</p>
                                </a>
                            @empty
                                Chưa có phim
                            @endforelse
                        </div>
                        @if (isset($movieIsShowing) && count($movieIsShowing) > 6)
                            <div class="view-more">
                                <a href="{{ route('movie') }}">
                                    <div class="text">xem thêm</div>
                                    <div class="arrow-down"></div>
                                </a>
                            </div>
                        @endif

                    </div>
                @endempty
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="related-post">
            <h2>Tin liên quan</h2>
            <div class="row">
                @if (count($postRelated) > 0)
                    @foreach ($postRelated as $item)
                        <div class="col-md-3 col-sm-4">
                            <div class="poster">
                                <a href="{{ route('post.detail', $item->slug) }}">
                                    <img class="img-responsive" src=" {{ asset($item->avatar) }}" alt="{{ $item->name }}">
                                </a>
                            </div>
                            <h3>
                                <a href="{{ route('post.detail', $item->slug) }}">{{ $item->name }}</a>
                            </h3>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
