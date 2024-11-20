@extends('admin.layouts.main')

@section('title', 'Danh sách bài viết')

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                @include('admin.components.breadcrumbs', [
                                    'breadcrumbs' => $breadcrumbs,
                                ])
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="filter cm-content-box box-primary">
                            <div class="content-title SlideToolHeader">
                                <div class="cpa">
                                    <i class="fa-sharp fa-solid fa-filter me-2"></i>{{ __('language.admin.movies.filter') }}
                                </div>
                            </div>
                            <div class="cm-content-body form excerpt" style="">
                                <form action="{{ route('admin.movies.index') }}" method="GET">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6">
                                                <label
                                                    class="form-label">{{ __('language.admin.movies.filterName') }}</label>
                                                <input id="name" value="{{ request()->title }}" name="title"
                                                    type="text" class="form-control mb-xl-0 mb-3"
                                                    placeholder="{{ __('language.admin.movies.inputFilterName') }} / {{ __('language.admin.movies.content') }}">
                                            </div>
                                            <div class="col-xl-3  col-sm-4 mb-3 mb-xl-0">
                                                <label
                                                    class="form-label">{{ __('language.admin.movies.arranges.title') }}</label>
                                                <div id="order" class="dropdown bootstrap-select form-control">
                                                    <select name="order_with" class="form-control">
                                                        <option value="">
                                                            --{{ __('language.admin.movies.select') }}--
                                                        </option>
                                                        <option @selected(request()->order_with == 'postedDateASC') value="postedDateASC">
                                                            {{ __('language.admin.movies.arranges.postedDateASC') }}
                                                        </option>
                                                        <option @selected(request()->order_with == 'postedDateDESC') value="postedDateDESC">
                                                            {{ __('language.admin.movies.arranges.postedDateDESC') }}
                                                        </option>
                                                        <option @selected(request()->order_with == 'releaseDateASC') value="releaseDateASC">
                                                            {{ __('language.admin.movies.arranges.releaseDateASC') }}
                                                        </option>
                                                        <option @selected(request()->order_with == 'releaseDateDESC') value="releaseDateDESC">
                                                            {{ __('language.admin.movies.arranges.releaseDateDESC') }}
                                                        </option>
                                                        <option @selected(request()->order_with == 'premiereDateASC') value="premiereDateASC">
                                                            {{ __('language.admin.movies.arranges.premiereDateASC') }}
                                                        </option>
                                                        <option @selected(request()->order_with == 'premiereDateDESC') value="premiereDateDESC">
                                                            {{ __('language.admin.movies.arranges.premiereDateDESC') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-4 mb-3 mb-xl-0">
                                                <label class="form-label">{{ __('language.admin.movies.genre') }}</label>
                                                <div class="dropdown bootstrap-select form-control">
                                                    <select multiple name="genres[]" class="form-control">
                                                        <option disabled value="">
                                                            --{{ __('language.admin.movies.select') }}--
                                                        </option>
                                                        @if ($listGenre)
                                                            @foreach ($listGenre as $genre)
                                                                <option value="{{ $genre->id }}"
                                                                    @selected(in_array($genre->id, request()->genres ?? []))>
                                                                    {{ $genre->name }}
                                                                </option>
                                                                @if (count($genre->childrenRecursive) > 0)
                                                                    @include(
                                                                        'admin.components.child-category',
                                                                        [
                                                                            'children' =>
                                                                                $genre->childrenRecursive,
                                                                            'depth' => 1,
                                                                            'cateData' => request()->genres,
                                                                        ]
                                                                    )
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-sm-4 mb-3 mb-xl-0">
                                                <label
                                                    class="form-label">{{ __('language.admin.movies.filters.title') }}</label>
                                                <select name="fill_action" class="form-control">
                                                    <option value="">
                                                        --{{ __('language.admin.movies.select') }}--
                                                    </option>


                                                    <option @selected(request()->fill_action == 'hot') value="hot">
                                                        {{ __('language.admin.movies.filters.movieHot') }}
                                                    </option>
                                                    <option @selected(request()->fill_action == 'noHot') value="noHot">
                                                        {{ __('language.admin.movies.filters.movieNoHot') }}
                                                    </option>
                                                    <option @selected(request()->fill_action == 'active') value="active">
                                                        {{ __('language.admin.movies.filters.movieShow') }}
                                                    </option>
                                                    <option @selected(request()->fill_action == 'noActive') value="noActive">
                                                        {{ __('language.admin.movies.filters.movieHidden') }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-sm-6 align-self-end mt-3">
                                                <div>
                                                    <button class="btn btn-primary me-2" title="Click here to Search"
                                                        type="submit"><i
                                                            class="fa-sharp fa-solid fa-filter me-2"></i>{{ __('language.admin.movies.search') }}
                                                    </button>

                                                    <button type="reset" class="btn btn-danger light"
                                                        title="Click here to remove filter">{{ __('language.admin.movies.removeValue') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('language.admin.movies.list') }}</h4>
                                <div class="compose-btn">
                                    <a href="{{ route('admin.movies.create') }}">
                                        <button class="btn btn-secondary btn-sm light">
                                            + {{ __('language.admin.movies.add') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if (!empty($data))
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md" id="data-table">
                                            <input type="hidden" id="value-item-id" value="">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="box-delete-item">
                                                            <input type="checkbox" id="item-all-checked">
                                                            <button id="btn-delete-all"
                                                                data-url="{{ route('admin.movies.deleteItemMultipleChecked') }}"
                                                                class="btn btn-sm btn-danger btn-delete-multiple_item">
                                                                <svg width="15" height="15"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512">
                                                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                    <path fill="white"
                                                                        d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </th>

                                                    <th>#</th>
                                                    <th class="white-space-nowrap">{{ __('language.admin.movies.title') }}
                                                    </th>
                                                    <th>{{ __('language.admin.movies.image') }}</th>
                                                    <th>{{ __('language.admin.movies.duration') }}</th>
                                                    <th style="text-align: start">
                                                        {{ __('language.admin.movies.genre') }}
                                                    </th>
                                                    <th>{{ __('language.admin.movies.created_at') }}</th>
                                                    <th>{{ __('language.admin.movies.release_date') }}</th>
                                                    <th>{{ __('language.admin.movies.premiere_date') }}</th>
                                                    <th>{{ __('language.admin.movies.active') }}</th>
                                                    <th>{{ __('language.admin.movies.hot') }}</th>
                                                    <th>{{ __('language.admin.movies.order') }}</th>
                                                    <th>{{ __('language.admin.movies.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $movie)
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" data-id="{{ $movie->id }}"
                                                                class="item-checked">
                                                        </td>
                                                        <td>
                                                            <strong
                                                                class="text-black">{{ ($data->currentPage() - 1) * $data->perPage() + $key + 1 }}</strong>
                                                        </td>
                                                        <td style="max-width: 155px !important;">
                                                            <b class="text-style">
                                                                {{ $movie->title }}
                                                            </b>
                                                        </td>
                                                        <td>
                                                            <img style="width:120px;" src="{{ $movie->image ?? '' }}"
                                                                alt="">
                                                        </td>
                                                        <td>
                                                            {{ $movie->duration }}
                                                            {{ __('language.admin.movies.minute') }}
                                                        </td>
                                                        <td style="text-align: start">
                                                            <ul>
                                                                @if ($movie->movieGenre->isNotEmpty())
                                                                    @foreach ($movie->movieGenre as $genreMovie)
                                                                        <li>
                                                                            {{ $genreMovie->genres->name ?? __('language.admin.movies.noData') }}
                                                                            @if (!$loop->last)
                                                                                ,
                                                                            @endif
                                                                        </li>
                                                                    @endforeach
                                                                @else
                                                                    <b>{{ __('language.admin.movies.noData') }}</b>
                                                                @endif
                                                            </ul>
                                                        </td>
                                                        <td>{{ $movie->created_at->format('d/m/Y H:i') }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($movie->premiere_date)->format('d/m/Y') }}
                                                        </td>

                                                        <td>
                                                            <button
                                                                class="toggle-active-btn btn btn-xs {{ $movie->active == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                                data-id="{{ $movie->id }}"
                                                                data-status="{{ $movie->active }}"
                                                                data-url="{{ route('admin.movies.changeActive') }}">
                                                                {{ $movie->active == 1 ? __('language.admin.movies.show') : __('language.admin.movies.hidden') }}
                                                            </button>
                                                        </td>

                                                        <td>
                                                            <button
                                                                class="toggle-hot-btn btn btn-xs {{ $movie->hot == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                                data-id="{{ $movie->id }}"
                                                                data-status="{{ $movie->hot }}"
                                                                data-url="{{ route('admin.movies.changeHot') }}">
                                                                {{ $movie->hot == 1 ? __('language.admin.movies.hot') : __('language.admin.movies.noHot') }}
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <input type="number" min="0" name="order"
                                                                value="{{ $movie->order }}"
                                                                data-id="{{ $movie->id }}"
                                                                data-url="{{ route('admin.movies.changeOrder') }}"
                                                                class="form-control changeOrder" style="width: 67px;">
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="padding-right: 20px; display: flex; justify-content: end">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#showModal_{{ $movie->id }}"
                                                                    class="btn btn-success shadow btn-xs sharp me-1 show-order">
                                                                    <i class="fa fa-eye"></i>
                                                                </button>

                                                                <a href="{{ route('admin.movies.edit', $movie->id) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>

                                                                <form
                                                                    action="{{ route('admin.movies.delete', $movie->id) }}"
                                                                    class="formDelete" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button
                                                                        class="btn btn-danger shadow btn-xs sharp me-1 call-ajax btn-remove btnDelete"
                                                                        data-type="DELETE" href="">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </form>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="modal fade" id="showModal_{{ $movie->id }}"
                                                                tabindex="-1"
                                                                aria-labelledby="showModalLabel_{{ $movie->id }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-lg custom-modal">
                                                                    <!-- Thêm lớp custom-modal -->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title text-white"
                                                                                id="exampleModalLabel">
                                                                                {{ __('language.admin.movies.movieDetail') }}
                                                                            </h3>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="{{ __('language.admin.movies.close') }}"></button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                                <img style="height:300px"
                                                                                    src="{{ $movie->banner_movie ?? '' }}"
                                                                                    alt="Banner">
                                                                            <p><strong>{{ __('language.admin.movies.description') }}
                                                                                    :
                                                                                </strong>{{ $movie->description }}</p>
                                                                            <p> <strong>{{ __('language.admin.movies.director') }}
                                                                                    :
                                                                                </strong>{{ $movie->director }}</p>
                                                                            <p> <strong>{{ __('language.admin.movies.trailer_url') }}
                                                                                    :
                                                                                </strong>{{ $movie->trailer_url }}
                                                                            </p>
                                                                            <p><strong>{{ __('language.admin.movies.format') }}
                                                                                    :
                                                                                </strong>{{ $movie->format }}</p>
                                                                            <p> <strong>{{ __('language.admin.movies.age') }}
                                                                                    : </strong>
                                                                                {{ $movie->age }}
                                                                            </p>
                                                                            <p> <strong>{{ __('language.admin.movies.release_date') }}
                                                                                    : </strong>
                                                                                {{ $movie->release_date }}
                                                                            </p>
                                                                            <p> <strong>{{ __('language.admin.movies.premiere_date') }}
                                                                                    : </strong>
                                                                                {{ $movie->premiere_date }}</p>
                                                                            <p> <strong>{{ __('language.admin.movies.country') }}
                                                                                    : </strong>
                                                                                {{ $movie->country }}</p>
                                                                            <p> <strong>{{ __('language.admin.movies.Subtitles') }}
                                                                                    : </strong>
                                                                                {{ $movie->language }}</p>
                                                                            <div class="actor-movie-detail">
                                                                                <h4>{{ __('language.admin.movies.actor') }}
                                                                                </h4>
                                                                                @if ($movie->actors->isNotEmpty())
                                                                                    <div class="list-actor_detail">
                                                                                        <div class="swiper-container">
                                                                                            <div class="swiper-wrapper">


                                                                                                @foreach ($movie->actors as $actor)
                                                                                                    <div
                                                                                                        class="swiper-slide actor-slide">
                                                                                                        <img src="{{ $actor->image }}"
                                                                                                            alt="">
                                                                                                        <p>{{ $actor->name }}
                                                                                                        </p>
                                                                                                    </div>
                                                                                                @endforeach
                                                                                                <div
                                                                                                    class="swiper-button-prev">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="swiper-button-next">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @else
                                                                                    <div class="text-center">
                                                                                        <h4 class="text-center">Chưa có dữ
                                                                                            liệu</h4>

                                                                                    </div>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">{{ __('language.admin.movies.close') }}</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center">
                                                {{ $data->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>

                                    </div>
                                @else
                                    <div class="d-flex justify-content-center align-items-center p-5">
                                        <div>
                                            <h3 class="text-center">
                                                {{ request()->name ? __('language.admin.movies.noDataSearch') . request()->name : __('language.admin.movies.noData') }}
                                            </h3>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script></script>
@endsection
