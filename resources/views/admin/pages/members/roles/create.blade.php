@extends('admin.layouts.main')

@section('title', 'Thêm vai trò')

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
                <form method="post"
                      action="{{ route('admin.roles.store', request()->system_id > 0 ? 'system_id=' . request()->system_id : '') }}"
                      class="product-vali" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="{{ request()->system_id ?? 0 }}">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label class="form-label mb-2">{{ __('language.admin.members.roles.name') }}</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                   placeholder="{{ __('language.admin.members.roles.inputName') }}" value="{{ old('name') ?? '' }}">
                                            @error('name')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label mb-2">{{ __('language.admin.members.roles.description') }}</label>
                                        <textarea class="form-control" cols="20" rows="5" name="description">{{ old('description') ?? '' }}</textarea>
                                        @error('description')
                                        <div class="mt-2">
                                            <span class="text-red">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="right-sidebar-sticky">
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title SlideToolHeader">
                                        <div class="cpa">
                                            {{ __('language.admin.members.roles.avatar') }}
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="avatar-upload d-flex align-items-center">
                                                <div class=" position-relative" style="width: 120px;">
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview"
                                                             style="background-image: url({{ asset('images/no-img-avatar.png') }});">
                                                        </div>
                                                    </div>
                                                    @error('image')
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-red">{{ $message }}</span>
                                                    </div>
                                                    @enderror
                                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                                        <input type="file" class="form-control d-none" name="image"
                                                               id="imageUpload" accept=".png, .jpg, .jpeg">
                                                        <label for="imageUpload"
                                                               class="btn btn-sm btn-primary light ms-0">{{ __('language.admin.members.roles.selectImage') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title SlideToolHeader">
                                        <div class="cpa">
                                            {{ __('language.admin.members.roles.custom') }}
                                        </div>
                                    </div>

                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="p-3">
                                                    <label class="form-label">{{ __('language.admin.members.roles.language') }}</label><br>
                                                    <select class="form-control" multiple name="language_id[]"
                                                            id="language">
                                                        <option value=" " disabled>-- {{ __('language.admin.members.roles.select') }} --</option>
                                                        @if (!empty($data['languages']))
                                                            @foreach ($data['languages'] as $language)
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
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex justify-content-start gap-2">
                                    <button type="submit" class="btn btn-success">{{ __('language.admin.members.roles.createNew') }}</button>
                                    <a href="{{ route('admin.roles.index') }}" class="btn btn-warning">{{ __('language.admin.members.roles.back') }}</a>
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
