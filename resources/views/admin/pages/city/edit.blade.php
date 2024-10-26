@extends('admin.layouts.main')

@section('title', $title['edit'] ?? 'Cập nhật thành phố')

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
                                    'title' => $title['edit'] ?? '',
                                    'breadcrumbs' => $breadcrumbs
                                ]) --}}
                            </nav>
                        </div>
                    </div>
                </div>
                <form method="post" action="{{ route('admin.cities.update', $city->id) }}" class="product-vali" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <input type="hidden" name="type" value="{{ request()->city_id ?? 0 }}">
                    <div class="row">
                        <div>
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div>
                                        <div>
                                            <label class="form-label mb-2">{{ __('language.admin.cities.nameCity') }}</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="{{ __('language.admin.cities.inputName') }}" value="{{ old('name') ?? $city->name }}">
                                            @error('name')
                                                <div class="mt-2">
                                                    <span class="text-red">{{ $message }}</span>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-3 d-flex justify-content-start gap-2">
                                        <button type="submit" class="btn btn-success">{{ __('language.admin.cities.saveEdit') }}</button>
                                        <a href="{{ route('admin.cities.index') }}" class="btn btn-warning">{{ __('language.admin.cities.back') }}</a>
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
