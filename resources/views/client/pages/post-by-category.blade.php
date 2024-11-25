@extends('client.layouts.main')

@section('title', $categoryPost->name ?? '')

@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/promotion.css') }}">
    <link rel="stylesheet"
        href="https://touchcinema.com/statics/frontend/plugins/owl-carousel/assets/owl.carousel.min.css"type="text/css"
        media="all" />
@endsection

@section('content')
    <div class="container post-page">
        <div class="row">
            <div class="col-md-8 col-sm-8 list-post">
                <h1>{{ $categoryPost->name }}</h1>
                @if (!$posts->isEmpty())
                    @foreach ($posts as $item)
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <a href="{{ asset($categoryPost->slug.'/'.$item->slug) }}">
                                    <img class="img-responsive"
                                        src="{{ asset($item->avatar) }}"
                                        alt="{{ $item->name }}">
                                </a>
                            </div>
                            <div class="post-detail">
                                <h3>
                                    <a href="{{ route('post.detail', ['cate_slug' => $categoryPost->slug, 'slug' => $item->slug]) }}">
                                        {{ $item->name }}
                                    </a>
                                </h3>
                                <div class="description">
                                    {{ Str::limit($item->description, 500, '...') }}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach
                    <div class="center">
                        {{ $posts->links('vendor.pagination.bootstrap-4') }}
                    </div>
                @else
                    <h3 class="text-white">Không có bài viết nào trong danh mục này!</h3>
                @endif
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 sidebar">
                <div class="facebook-box hidden-xs">
                    <div class="fb-page fb_iframe_widget" data-width="390" data-adapt-container-width="true"
                        data-hide-cover="false" data-href="https://www.facebook.com/touchcinema/"
                        data-show-facepile="true" data-small-header="false" fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1700069773628064&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390">
                        <span style="vertical-align: bottom; width: 390px; height: 130px;"><iframe
                                name="fade8b816db563014" width="390px" height="1000px"
                                data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v12.0/plugins/page.php?adapt_container_width=true&amp;app_id=1700069773628064&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfffd9830ad1e32cd8%26domain%3Dtouchcinema.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftouchcinema.com%252Ff5bb98143cbd0615c%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390"
                                style="border: none; visibility: visible; width: 390px; height: 130px;"
                                class=""></iframe></span></div>
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
@endsection

@section('js')

@endsection
{{-- <div class="container post-page">
    <div class=" list-post">
        @if (count($posts) > 0)
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 ">
                    @isset($categoryPost)
                        <h1>{{ $categoryPost->name }}</h1>
                    @endisset
                    @if (isset($posts))
                        @forelse ($posts as $item)
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="{{ route('post.detail', $item->slug) }}">
                                        <img class="img-responsive" src="{{ asset($item->avatar) }}"
                                            alt="{{ $item->name }}" />
                                    </a>
                                </div>
                                <div class="post-detail">
                                    <h3><a href="{{ route('post.detail', $item->slug) }}">{{ $item->name }}</a></h3>
                                    <div class="description">
                                        {{ Str::limit($item->description, 500, '...') }}
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @empty
                            <h3>Chưa có tin</h3>
                        @endforelse
                        <div class="center">
                            {{ $posts->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 sidebar ">
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
                                            style="background-image: url({{ $item->image ?? asset('client/images/no-image.jpg') }})">
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
        @endif
    </div>
</div> --}}
