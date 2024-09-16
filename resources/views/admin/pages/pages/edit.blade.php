@extends('admin.layouts.main')

@section('title', 'Cập nhật trang')

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

            <form method="post" action="{{ route('admin.pages.update', $page->id) }}" class="product-vali"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <label class="form-label mb-2">{{ __('language.admin.interfaces.pages.name') }}</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('language.admin.interfaces.pages.inputName') }}" value="{{ old('name') ?? $page->name }}">
                                        @error('name')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label mb-2">{{ __('language.admin.interfaces.pages.slug') }}</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="{{ __('language.admin.interfaces.pages.inputSlug') }}" value="{{ old('slug') ?? $page->slug }}">
                                        @error('slug')
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
                                        {{ __('language.admin.interfaces.pages.custom') }}
                                    </div>
                                </div>

                                <div class="cm-content-body publish-content form excerpt">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="p-3">
                                                <label class="form-label">{{ __('language.admin.interfaces.pages.language') }}</label><br>
                                                <select class="form-control" multiple name="language_id[]" id="language">
                                                    <option value=" " disabled>-- {{ __('language.admin.interfaces.pages.select') }} --</option>
                                                    @if (!empty($languages))
                                                        @foreach ($languages as $language)
                                                            <option @selected(in_array($language->id, old('language_id', $languagesTransactions)))
                                                                value="{{ $language->id }}">
                                                                {{ $language->name }}
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
                                                <label class="form-label">{{ __('language.admin.interfaces.pages.order') }}</label><br>
                                                <input class="form-control" value="{{ $page->order ?? 0 }}" type="number"
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
                                                <label class="form-label">{{ __('language.admin.interfaces.pages.active') }}</label><br>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input class="form-check-input" type="radio" id="active"
                                                            name="active" value="1"
                                                            {{ $page->active == 1 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="active">
                                                            {{ __('language.admin.interfaces.pages.show') }}
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input class="form-check-input" value="0" type="radio"
                                                            id="active" name="active"
                                                            {{ $page->active == 0 ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="active">
                                                            {{ __('language.admin.interfaces.pages.hidden') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-start gap-2">
                                <button type="submit" class="btn btn-success">{{ __('language.admin.interfaces.pages.editSave') }}</button>
                                <a href="{{ route('admin.pages.index') }}" class="btn btn-warning">{{ __('language.admin.interfaces.pages.back') }}</a>
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
