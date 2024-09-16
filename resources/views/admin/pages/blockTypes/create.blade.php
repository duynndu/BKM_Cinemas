@extends('admin.layouts.main')

@section('title', 'Thêm mới loại khối')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="page-titles">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    @include('admin.components.breadcrumbs', [
                        'breadcrumbs' => $breadcrumbs
                    ])
                </nav>
            </div>

            <form method="post" action="{{ route('admin.blockTypes.store') }}" class="product-vali"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label class="form-label mb-2">{{ __('language.admin.interfaces.blockTypes.name') }}</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('language.admin.interfaces.blockTypes.inputName') }}" value="{{ old('name') ?? '' }}">
                                        @error('name')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="right-sidebar-sticky">
                            <div class="filter cm-content-box box-primary">
                                <div class="content-title SlideToolHeader">
                                    <div class="cpa">
                                        {{ __('language.admin.interfaces.blockTypes.custom') }}
                                    </div>
                                </div>


                                <div class="cm-content-body publish-content form excerpt">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="p-3">
                                                <label class="form-label">{{ __('language.admin.interfaces.blockTypes.language') }}</label><br>
                                                <select class="form-control" multiple name="language_id[]" id="language">
                                                    <option value=" " disabled>-- {{ __('language.admin.interfaces.blockTypes.select') }} --</option>
                                                    @if (!empty($languages))
                                                        @foreach ($languages as $language)
                                                            <option @selected(in_array($language->id, old('language_id', [])))
                                                            value="{{ $language->id }}">{{ $language->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('language_id')
                                                    <div class="mt-2">
                                                        <span class="text-red">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3">
                                                <label class="form-label">{{ __('language.admin.interfaces.blockTypes.order') }}</label><br>
                                                <input class="form-control" value="{{ old('order') ?? 0 }}" type="number"
                                                    min="0" id="order" name="order">
                                                @error('order')
                                                    <div class="mt-2">
                                                        <span class="text-red">{{ $message }}</span>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="card-body">
                                                <label class="form-label">{{ __('language.admin.interfaces.blockTypes.active') }}</label><br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input class="form-check-input" type="radio" id="active"
                                                            name="active" value="1" checked>
                                                        <label class="form-check-label" for="active">
                                                            {{ __('language.admin.interfaces.blockTypes.show') }}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input class="form-check-input" value="0" type="radio"
                                                            id="active" name="active">
                                                        <label class="form-check-label" for="active">
                                                            {{ __('language.admin.interfaces.blockTypes.hidden') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-start gap-2">
                                <button type="submit" class="btn btn-success">{{ __('language.admin.interfaces.blockTypes.add') }}</button>
                                <a href="{{ route('admin.blockTypes.index') }}" class="btn btn-warning">{{ __('language.admin.interfaces.blockTypes.back') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
