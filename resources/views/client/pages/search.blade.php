@extends('client.layouts.main')
@section('title', request()->q ?? '')
@section('css')
@endsection

@section('content')
    <div class="container page-search">
        <h1>Kết quả Tìm kiếm </h1>
        <section class="page-list-movie">
            <h2 class="title">Phim</h2>
            <div class="tab-content">
                <div class="row row-flex">
                    @if (isset($movies))

                        @forelse ($movies as $item)
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
                            </div>
                        @empty
                            <p class="text-center">Không tìm thấy phim nào phù hợp với từ khóa:
                                <strong>{{ request()->k ?? '' }}</strong></p>
                        @endforelse ($movies as $item)
                    @endif

                </div>
            </div>
        </section>
    </div>

    {{-- // --}}
    <div class="col-md-3 col-sm-4 col-xs-6">
        <div class="movie" style="padding-top: 30px;">
            <div class="poster">
                <a href="https://touchcinema.com/phim/chi-tro-ly-cua-anh">
                    <img class="img-responsive" src="https://touchcinema.com/uploads/chi-tro-ly-cua-anh-1-zewe-poster.jpg"
                        alt="Chị Trợ Lý Của Anh">
                </a>
                <div class="info">
                    <a href="https://touchcinema.com/phim/chi-tro-ly-cua-anh" class="button detail">
                        &gt; Chi tiết
                    </a>
                    <a href="https://touchcinema.com/phim/chi-tro-ly-cua-anh#showtime" class="button ticket">
                        Mua vé <img src="https://touchcinema.com/images/icons/icon-dat-ve.png" alt="Mua vé">
                    </a>
                    <p class="button duration"><b>Thời lượng:</b> 115 phút</p>
                    <p class="button category"><b>Thể loại:</b> Tình Cảm</p>
                    <p class="button format"><b>Định dạng</b> 2D </p>
                </div>
            </div>
            <div class="detail">
                <h2><a href="https://touchcinema.com/phim/chi-tro-ly-cua-anh">Chị Trợ Lý Của Anh</a></h2>
                <p class="release">Khởi chiếu 04/01/2019</p>
            </div>
        </div>
    </div>
@endsection
