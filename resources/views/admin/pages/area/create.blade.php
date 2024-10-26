@extends('admin.layouts.main')

@section('title', $title['create'] ?? 'Thêm mới khu vực')

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
                                    'title' => $title['create'] ?? '',
                                    'breadcrumbs' => $breadcrumbs
                                ]) --}}
                            </nav>
                        </div>
                    </div>
                </div>
                <form method="post"
                    action="{{ route('admin.areas.store', request()->area_id > 0 ? 'area_id=' . request()->area_id : '') }}"
                    class="product-vali" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="{{ request()->area_id ?? 0 }}">
                    <div class="row">
                        <div>
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div>
                                        <div>
                                            <label class="form-label mb-2">{{ __('language.admin.areas.nameArea') }}</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="{{ __('language.admin.areas.inputName') }}" value="{{ old('name') ?? '' }}">
                                            @error('name')
                                                <div class="mt-2">
                                                    <span class="text-red">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <label class="form-label mb-2">{{ __('language.admin.areas.city_id') }}</label>
                                        <select name="city_id" class="form-control">
                                            <option value="" selected>-- {{ __('language.admin.areas.chooseCity') }} --</option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('city_id')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mt-3 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-success">{{ __('language.admin.areas.createNew') }}</button>
                                        <a href="{{ route('admin.areas.index') }}" class="btn btn-warning">{{ __('language.admin.areas.back') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
