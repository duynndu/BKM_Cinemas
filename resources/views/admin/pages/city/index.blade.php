@extends('admin.layouts.main')

@section('title', $title['index'] ?? 'Danh sách thành phố')

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
                                {{-- @include('admin.components.breadcrumbs', [
                                    'title' => $title['index'] ?? '',
                                    'breadcrumbs' => $breadcrumbs
                                ]) --}}
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
                                    {{ __('language.admin.cities.filter') }}
                                </div>
                            </div>
                
                            <div class="cm-content-body form excerpt" style="">
                                <form action="{{ route('admin.cities.index') }}" method="GET">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6">
                                                <label class="form-label">{{ __('language.admin.cities.filterName') }}</label>
                                                <input type="text" name="name" value="{{ request()->name ?? '' }}" class="form-control mb-xl-0 mb-3" placeholder="{{ __('language.admin.cities.inputName') }}">
                                            </div>
                                            {{-- <div class="col-xl-2 col-sm-4 mb-3 mb-xl-0">
                                                <label class="form-label">{{ __('language.admin.cities.active') }}</label>
                                                <select name="active" class="form-control">
                                                    <option value="" {{ request()->active === null ? 'selected' : '' }}>-- {{ __('language.admin.cities.select') }} --</option>
                                                    <option value="1" {{ request()->active == '1' ? 'selected' : '' }}>{{ __('language.admin.cities.show') }}</option>
                                                    <option value="0" {{ request()->active == '0' ? 'selected' : '' }}>{{ __('language.admin.cities.hidden') }}</option>
                                                </select>
                                            </div> --}}
                                            <div class="col-xl-3 col-sm-6 align-self-end">
                                                <div>
                                                    <button class="btn btn-primary me-2" type="submit">
                                                        <i class="fa-sharp fa-solid fa-filter me-2"></i>
                                                        {{ __('language.admin.cities.search') }}
                                                    </button>
                                                    <button class="btn btn-danger light" type="reset">
                                                        {{ __('language.admin.cities.removeValue') }}
                                                    </button>
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
                                <h4 class="card-title">{{ $title['index'] ?? __('language.admin.cities.list') }}</h4>
                                <div class="compose-btn">
                                    <a href="{{ route('admin.cities.create') }}">
                                        <button class="btn btn-secondary btn-sm light">
                                            + {{ __('language.admin.cities.add') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if(!$cities->isEmpty())
                                        <table class="table table-responsive-md" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th style="width:80px;">STT</th>
                                                    <th>{{ __('language.admin.cities.name') }}</th>
                                                    <th>{{ __('language.admin.cities.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cities as $key => $city)
                                                <tr>
                                                    <td>
                                                        <strong class="text-black">{{ $key + 1 }}</strong>
                                                    </td>
                                                    <td>
                                                        <b>{{ $city->name }}</b>
                                                    </td>
                                                    <td>
                                                        <div style="display: flex; justify-content: end">
                                                            <a href="{{ route('admin.cities.edit', $city->id) }}" class="btn btn-primary shadow btn-xs sharp me-1">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <form action="{{ route('admin.cities.delete', $city->id) }}" class="formDelete" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger shadow btn-xs sharp me-1 btn-remove" data-type="DELETE" href="">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <div class="d-flex justify-content-center align-items-center p-5">
                                            <h3 class="text-center">{{ __('language.admin.cities.noData') }}</h3>
                                        </div>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center">
                                        {{-- {{ $cities->links('pagination::bootstrap-4') }} --}}
                                    </div>
                                </div>
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
