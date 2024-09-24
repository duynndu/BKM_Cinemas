@extends('admin.layouts.main')

@section('title', 'Danh sách thẻ tags')

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
                                    <i class="fa-sharp fa-solid fa-filter me-2"></i>
                                    {{ __('language.admin.tags.filterName') }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="filter cm-content-box box-primary">

                                    <div class="cm-content-body form excerpt" style="">
                                        <form action="{{ route('admin.tags.index') }}" method="GET">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-sm-6">
                                                        <label class="form-label">{{ __('language.admin.tags.filterName') }}</label>
                                                        <input id="" value="{{ request()->name }}" name="name"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="{{ __('language.admin.tags.inputFilterName') }}">
                                                    </div>
                                                    <div class="col-xl-4  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">{{ __('language.admin.tags.active') }}</label>
                                                        <select name="fill_action" class="form-control">
                                                            <option value="">--{{ __('language.admin.tags.select') }}--</option>
                                                            <option @selected(request()->fill_action == 'active') value="active">{{ __('language.admin.tags.filters.tagShow') }}</option>
                                                            <option @selected(request()->fill_action == 'noActive') value="noActive">{{ __('language.admin.tags.filters.tagHidden') }}</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-xl-4 col-sm-6 align-self-end">
                                                        <div class="">
                                                            <button class="btn btn-primary me-2"
                                                                title="Click here to Search" type="submit"
                                                                fdprocessedid="vozqnk"><i
                                                                    class="fa-sharp fa-solid fa-filter me-2"></i>
                                                                    {{ __('language.admin.tags.search') }}
                                                            </button>
                                                            <button type="reset" fdprocessedid="x3orwi"
                                                                class="btn btn-danger light"
                                                                title="Click here to remove filter">  {{ __('language.admin.tags.removeValue') }} </button>
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
                                <h4 class="card-title">{{ __('language.admin.tags.list') }}</h4>
                                <div class="compose-btn">
                                    <a href="{{ route('admin.tags.create') }}">
                                        <button class="btn btn-secondary btn-sm light">
                                            + {{ __('language.admin.tags.create') }}
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
                                                    <th>{{ __('language.admin.tags.filterName') }}</th>
                                                    <th>{{ __('language.admin.tags.active') }}</th>
                                                    <th>{{ __('language.admin.tags.order') }}</th>
                                                    <th>{{ __('language.admin.tags.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $tag)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            <b>
                                                                {{ $tag->name }}
                                                            </b>
                                                        </td>
                                                        <td>
                                                            <button
                                                                class="toggle-active-btn btn btn-xs {{ $tag->active == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                                data-id="{{ $tag->id }}"
                                                                data-status="{{ $tag->active }}"
                                                                data-url="{{ route('admin.tags.changeActive') }}">
                                                                {{ $tag->active == 1 ?  __('language.admin.tags.show') :  __('language.admin.tags.hidden') }}
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <input type="number" min="0" name="order"
                                                                value="{{ $tag->order }}" data-id="{{ $tag->id }}"
                                                                data-url="{{ route('admin.tags.changeOrder') }}"
                                                                class="form-control changeOrder" style="width: 67px;">
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="padding-right: 20px; display: flex; justify-content: end">
                                                                <a href="{{ route('admin.tags.edit', $tag->id) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form action="{{ route('admin.tags.delete', $tag->id) }}"
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
                                                {{ request()->name ? __('language.admin.tags.noDataSearch') . request()->name : __('language.admin.tags.noData') }}
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
