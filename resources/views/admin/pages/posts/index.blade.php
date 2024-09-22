@extends('admin.layouts.main')

@section('title', 'Danh sách bài viết')

@section('css')

@endsection

@section('content')
    {{-- @dd($typeOrder) --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                @include('admin.components.breadcrumbs', [
                                    'breadcrumbs' => $breadcrumbs
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
                                    <i class="fa-sharp fa-solid fa-filter me-2"></i>{{  __('language.admin.posts.filter') }}
                                </div>
                            </div>
                            <div class="cm-content-body form excerpt" style="">
                                <form action="{{ route('admin.posts.index') }}" method="GET">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6">
                                                <label
                                                    class="form-label">{{  __('language.admin.posts.filterName') }}</label>
                                                <input id="name" value="{{ $name }}" name="name"
                                                       type="text" class="form-control mb-xl-0 mb-3"
                                                       placeholder="{{  __('language.admin.posts.inputFilterName') }}">
                                            </div>
                                            <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                <label
                                                    class="form-label">{{  __('language.admin.posts.arranges.title') }}</label>
                                                <div id="order" class="dropdown bootstrap-select form-control">
                                                    <select name="order_with" class="form-control">
                                                        <option selected value="">
                                                            --{{  __('language.admin.posts.select') }}--
                                                        </option>
                                                        <option @selected($typeOrder == 'dateASC') value="dateASC">
                                                            {{  __('language.admin.posts.arranges.dateASC') }}
                                                        </option>
                                                        <option @selected($typeOrder == 'dateDESC') value="dateDESC">
                                                            {{  __('language.admin.posts.arranges.dateDESC') }}
                                                        </option>
                                                        <option @selected($typeOrder == 'viewASC') value="viewASC">
                                                            {{  __('language.admin.posts.arranges.viewASC') }}
                                                        </option>
                                                        <option @selected($typeOrder == 'viewDESC') value="viewDESC">
                                                            {{  __('language.admin.posts.arranges.viewDESC') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-sm-4 mb-3 mb-xl-0">
                                                <label
                                                    class="form-label">{{  __('language.admin.posts.category') }}</label>
                                                <div class="dropdown bootstrap-select form-control">
                                                    <select multiple name="categories[]" class="form-control">
                                                        <option disabled value="">
                                                            --{{  __('language.admin.posts.select') }}--
                                                        </option>
                                                        @if ($listCategoryPost)
                                                            @foreach ($listCategoryPost as $category)
                                                                <option
                                                                    @selected(in_array($category->id, $selectedCategories))
                                                                    value="{{ $category->id }}">
                                                                    {{ $category->name }} </option>

                                                                @if (count($category->childrenRecursive) > 0)
                                                                    @include(
                                                                        'admin.components.child-category',
                                                                        [
                                                                            'children' =>
                                                                                $category->childrenRecursive,
                                                                            'depth' => 1,
                                                                            'cateData' => $selectedCategories,
                                                                        ]
                                                                    )
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                <label
                                                    class="form-label">{{  __('language.admin.posts.filters.title') }}</label>
                                                <select name="fill_action" class="form-control">
                                                    <option selected value="">
                                                        --{{  __('language.admin.posts.select') }}--
                                                    </option>
                                                    <option @selected($hot === 1) value="hot">{{  __('language.admin.posts.filters.postHot') }}
                                                    </option>
                                                    <option @selected($hot === 0) value="noHot">{{  __('language.admin.posts.filters.postNoHot') }}
                                                    </option>
                                                    <option @selected($active === 1) value="active">{{  __('language.admin.posts.filters.postShow') }}
                                                    </option>
                                                    <option @selected($active === 0) value="noActive">{{  __('language.admin.posts.filters.postHidden') }}
                                                    </option>

                                                </select>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 align-self-end">
                                                <div>
                                                    <button class="btn btn-primary me-2" title="Click here to Search"
                                                            type="submit"><i
                                                            class="fa-sharp fa-solid fa-filter me-2"></i>{{  __('language.admin.posts.search') }}
                                                    </button>

                                                    <button type="reset"
                                                            class="btn btn-danger light"
                                                            title="Click here to remove filter">{{  __('language.admin.posts.removeValue') }}</button>
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
                                <h4 class="card-title">{{  __('language.admin.posts.list') }}</h4>
                                <div class="compose-btn">
                                    <a href="{{ route('admin.posts.create') }}">
                                        <button class="btn btn-secondary btn-sm light">
                                            + {{  __('language.admin.posts.add') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($data->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md" id="data-table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th class="white-space-nowrap">{{  __('language.admin.posts.filterName') }}</th>
                                                <th>{{  __('language.admin.posts.image') }}</th>
                                                <th>{{  __('language.admin.posts.active') }}</th>
                                                <th>{{  __('language.admin.posts.hot') }}</th>
                                                <th>{{  __('language.admin.posts.category') }}</th>
                                                <th>{{  __('language.admin.posts.order') }}</th>
                                                <th>{{  __('language.admin.posts.action') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($data as $key => $post)
                                                <tr>
                                                    <td>
                                                        <strong class="text-black">{{ $key + 1 }}</strong>
                                                    </td>
                                                    <td style="max-width: 155px !important;">
                                                        <b class="text-style">
                                                            {{ $post->name }}
                                                        </b>
                                                    </td>
                                                    <td>
                                                        @if (!empty($post->avatar) && file_exists(public_path($post->avatar)))
                                                            <img src="{{ asset($post->avatar) }}" style="width:80px; height:100px; object-fit:cover">
                                                        @else
                                                            <img src="#" alt="No image" style="width:80px; height:100px; object-fit:cover">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button
                                                            class="toggle-active-btn btn btn-xs {{ $post->active == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                            data-id="{{ $post->id }}"
                                                            data-status="{{ $post->active }}"
                                                            data-url="{{ route('admin.posts.changeActive') }}">
                                                            {{ $post->active == 1 ? __('language.admin.posts.show') : __('language.admin.posts.hidden') }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button
                                                            class="toggle-hot-btn btn btn-xs {{ $post->hot == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                            data-id="{{ $post->id }}"
                                                            data-status="{{ $post->hot }}"
                                                            data-url="{{ route('admin.posts.changeHot') }}">
                                                            {{ $post->hot == 1 ?  __('language.admin.posts.hot') :  __('language.admin.posts.noHot') }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            @foreach ($post->postCategories as $postCategory)
                                                                <li>
                                                                    {{ $postCategory->category->name }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <input type="number" min="0" name="order"
                                                               value="{{ $post->order }}" data-id="{{ $post->id }}"
                                                               data-url="{{ route('admin.posts.changeOrder') }}"
                                                               class="form-control changeOrder" style="width: 67px;">
                                                    </td>
                                                    <td>
                                                        <div
                                                            style="padding-right: 20px; display: flex; justify-content: end">
                                                            <a href="{{ route('admin.posts.edit', $post->id) }}"
                                                               class="btn btn-primary shadow btn-xs sharp me-1">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <form action="{{ route('admin.posts.delete', $post->id) }}"
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
                                            <h3 class="text-center">{{ request()->name ?  __('language.admin.posts.noDataSearch') . request()->name :  __('language.admin.posts.noData') }}</h3>
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
@endsection
