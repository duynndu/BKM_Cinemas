@extends('client.layouts.main')
@section('title', 'Khuyễn mãi')
@section('css')
    <link rel="stylesheet" href="https://touchcinema.com/statics/frontend/plugins/owl-carousel/assets/owl.carousel.min.css"
        type="text/css" media="all" />
@endsection

@section('content')
    <div class="container page-post-detail">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                @if ($post)
                    <div class="post-detail">
                        <h1>{{ $post->name }}</h1>
                        <div class="pull-left">
                            <div class="post-meta">
                                Đăng lúc
                                <span>{{ $post->created_at->format('d/m/Y') }}</span>

                                {{-- bởi --}}
                                {{-- <a href="#">
                                    Garrix
                                </a> --}}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="post-content">
                            {!! $post->content !!}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                @endif

                <div class="box-comment">
                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" colorscheme="light"
                        width="100%" data-href="https://touchcinema.com/danh-gia-phim/con-lac-ta-thuat" data-numposts="20"
                        fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="app_id=1700069773628064&amp;color_scheme=light&amp;container_width=750&amp;height=100&amp;href=https%3A%2F%2Ftouchcinema.com%2Fdanh-gia-phim%2Fcon-lac-ta-thuat&amp;locale=vi_VN&amp;numposts=20&amp;sdk=joey&amp;skin=light&amp;version=v12.0&amp;width="
                        style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 200px;"><iframe
                                name="f55fca7c4c800dd66" width="1000px" height="100px"
                                data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin"
                                frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                allow="encrypted-media"
                                src="https://www.facebook.com/v12.0/plugins/comments.php?app_id=1700069773628064&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2b28df71733e0ef8%26domain%3Dtouchcinema.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftouchcinema.com%252Ff28c24800eccf3a73%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=750&amp;height=100&amp;href=https%3A%2F%2Ftouchcinema.com%2Fdanh-gia-phim%2Fcon-lac-ta-thuat&amp;locale=vi_VN&amp;numposts=20&amp;sdk=joey&amp;skin=light&amp;version=v12.0&amp;width="
                                style="border: none; visibility: visible; width: 100%; height: 200px;"
                                class=""></iframe></span></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 sidebar">
                <div class="facebook-box hidden-xs">
                    <div class="fb-page fb_iframe_widget" data-width="390" data-adapt-container-width="true"
                        data-hide-cover="false" data-href="https://www.facebook.com/touchcinema/" data-show-facepile="true"
                        data-small-header="false" fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1700069773628064&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390">
                        <span style="vertical-align: bottom; width: 390px; height: 130px;"><iframe name="f50a5c00215600bf1"
                                width="390px" height="1000px" data-testid="fb:page Facebook Social Plugin"
                                title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                src="https://www.facebook.com/v12.0/plugins/page.php?adapt_container_width=true&amp;app_id=1700069773628064&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2428f8b2d84b5510%26domain%3Dtouchcinema.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftouchcinema.com%252Ff28c24800eccf3a73%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390"
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
                                <option value="978">Cám</option>
                                <option value="975">Transformers Một (Phụ Đề)</option>
                                <option value="1032">Transformers Một (Lồng Tiếng)</option>
                                <option value="973">Làm Giàu Với Ma</option>
                                <option value="1027">Anh Trai Vượt Mọi Tam Tai</option>
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
                <div class="related-movie">
                    <h2>Phim đang chiếu</h2>
                    <div class="list">
                        <a href="https://touchcinema.com/phim/con-cam">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slide-web/458921730-122133290114325031-6716915900288410321-n.png')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/transformers-one">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-11-1726654506.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/lt-transformers-mot">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-11-1726654506.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/lam-giau-voi-ma">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/lam-giau-voi-ma-1-1724686130347.jpg')">
                            </div>
                        </a>
                        <a href="https://touchcinema.com/phim/anh-trai-vuot-moi-tam-tai">
                            <div class="poster"
                                style="background-image: url('https://touchcinema.com/storage/slider-app/2048wx858h-5-1726124535.jpg')">
                            </div>
                        </a>
                    </div>
                    <div class="view-more">
                        <a href="https://touchcinema.com/phim">
                            <div class="text">xem thêm</div>
                            <div class="arrow-down"></div>
                        </a>
                    </div>
                </div>
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
                                    <img class="img-responsive" src=" {{ asset($item->avatar) }}"
                                        alt="{{ $item->name }}">
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
