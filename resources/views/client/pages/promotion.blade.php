@extends('client.layouts.main')

@section('title', 'Khuyễn mãi')

@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/promotion.css') }}">
    <link rel="stylesheet" href="https://touchcinema.com/statics/frontend/plugins/owl-carousel/assets/owl.carousel.min.css"
        type="text/css" media="all" />
@endsection

@section('content')
    <div class="container post-page">
        <div class="row">
            <div class="col-md-8 col-sm-8 list-post">
                @isset($categoryPost)
                    <h1>{{ $categoryPost->name }}</h1>
                @endisset

                @if (count($posts) > 0)
                    @foreach ($posts as $item)
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <a href="{{ route('post.detail', $item->slug) }}">
                                    <img class="img-responsive" src="{{ asset($item->avatar) }}"
                                        alt="{{ $item->name }}" />
                                </a>
                            </div>
                            <div class="post-detail">
                                <h3><a href="{{ route('post.detail', $item->slug) }}">{{ $item->name  }}</a></h3>
                                <div class="description">
                                   {{ $item->description }}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach
                @endif


                <div class="center">
                    {{ $posts->links('vendor.pagination.bootstrap-4') }}
                    {{-- <ul class="pagination">

                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>





                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="khuyen-mai4658.html?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-mai9ba9.html?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-maifdb0.html?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-maiaf4d.html?page=5">5</a></li>
                        <li class="page-item"><a class="page-link" href="khuyen-maic575.html?page=6">6</a></li>


                        <li class="page-item"><a class="page-link" href="khuyen-mai4658.html?page=2"
                                rel="next">&raquo;</a></li>
                    </ul> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 sidebar">
                <div class="facebook-box hidden-xs">
                    <div class="fb-page fb_iframe_widget" data-width="390" data-adapt-container-width="true"
                        data-hide-cover="false" data-href="https://www.facebook.com/touchcinema/" data-show-facepile="true"
                        data-small-header="false" fb-xfbml-state="rendered"
                        fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1700069773628064&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390">
                        <span style="vertical-align: bottom; width: 390px; height: 130px;"><iframe name="f3e722c84f31cab22"
                                width="390px" height="1000px" data-testid="fb:page Facebook Social Plugin"
                                title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                src="https://web.facebook.com/v12.0/plugins/page.php?adapt_container_width=true&amp;app_id=1700069773628064&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dffdb3cf7d97080a2a%26domain%3Dtouchcinema.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftouchcinema.com%252Ff2b32f582b5238d6a%26relation%3Dparent.parent&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftouchcinema%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=390"
                                style="border: none; visibility: visible; width: 390px; height: 130px;"
                                class=""></iframe></span>
                    </div>
                </div>
                <div class="widget-ticket ">
                    <h2>
                        <img src="{{ asset('') }}" alt="">
                        <img src="https://touchcinema.com/images/icons/icon-ticket.png" alt="Đặt vé" />
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
                                <option value="1012">Shin Cậu Bé Bút Chì: Nhật Ký Khủng Long Của Chúng Mình
                                    (Lồng Tiếng)</option>
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
                            <img src="https://touchcinema.com/images/loader.gif" alt="Loading..." />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
