@extends('admin.layouts.main')

@section('title', 'Danh sách danh mục bài viết')

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
                                    <i
                                        class="fa-sharp fa-solid fa-filter me-2"></i>{{ __('language.admin.categoryPosts.filter') }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="filter cm-content-box box-primary">

                                    <div class="cm-content-body form excerpt" style="">
                                        <form action="{{ route('admin.categoryPosts.index') }}" method="GET">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <label
                                                            class="form-label">{{ __('language.admin.categoryPosts.filterName') }}</label>
                                                        <input id="" value="{{ request()->name }}" name="name"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="{{ __('language.admin.categoryPosts.inputFilterName') }}">
                                                    </div>
                                                    <div class="col-xl-6 col-sm-6 align-self-end">
                                                        <div class="">
                                                            <button class="btn btn-primary me-2"
                                                                title="Click here to Search" type="submit"><i
                                                                    class="fa-sharp fa-solid fa-filter me-2"></i>{{ __('language.admin.categoryPosts.search') }}
                                                            </button>
                                                            <button type="reset" class="btn btn-danger light"
                                                                title="Click here to remove filter">{{ __('language.admin.categoryPosts.removeValue') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('language.admin.categoryPosts.list') }}</h4>
                                <div class="compose-btn">
                                    <a href="{{ route('admin.categoryPosts.create') }}">
                                        <button class="btn btn-secondary btn-sm light">
                                            + {{ __('language.admin.categoryPosts.add') }}
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
                                                    <th style="width:80px;">#</th>
                                                    <th>{{ __('language.admin.categoryPosts.folder') }}</th>
                                                    <th>{{ __('language.admin.categoryPosts.filterName') }}</th>
                                                    <th>{{ __('language.admin.categoryPosts.position') }}</th>
                                                    <th>{{ __('language.admin.categoryPosts.order') }}</th>
                                                    <th>{{ __('language.admin.categoryPosts.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $categoryPost)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            @if ($categoryPost->childs->count() > 0)
                                                                <i class="nav-icon fas fa-folder"></i>
                                                            @else
                                                                <i class="nav-icon fas fa-file"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <b>
                                                                <a
                                                                    href="{{ route('admin.categoryPosts.index') . '?parent_id=' . $categoryPost->id }}">
                                                                    {{ $categoryPost->name }}
                                                                </a>
                                                            </b>
                                                        </td>

                                                        <td>
                                                            <input type="number" min="0" name="position"
                                                                value="{{ $categoryPost->position }}"
                                                                data-id="{{ $categoryPost->id }}"
                                                                data-value="{{ $categoryPost->position }}"
                                                                data-url="{{ route('admin.categoryPosts.changePosition') }}"
                                                                class="form-control changePosition" style="width: 80px;">
                                                        </td>
                                                        <td>
                                                            <input type="number" min="0" name="order"
                                                                value="{{ $categoryPost->order }}"
                                                                data-id="{{ $categoryPost->id }}"
                                                                data-url="{{ route('admin.categoryPosts.changeOrder') }}"
                                                                class="form-control changeOrder" style="width: 67px;">
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="padding-right: 20px; display: flex; justify-content: end">
                                                                <a href="{{ route('admin.categoryPosts.edit', $categoryPost->id) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('admin.categoryPosts.delete', $categoryPost->id) }}"
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
                                            <h3 class="text-center">
                                                {{ request()->name ? __('language.admin.categoryPosts.noDataSearch') . request()->name : __('language.admin.categoryPosts.noData') }}
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
@endsection
