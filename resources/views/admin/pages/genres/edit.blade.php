@extends('admin.layouts.main')

@section('title', 'Cập nhật danh mục bài viết')

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
                <form method="post" action="{{ route('admin.genres.update', [$genreEdit->id]) }}"
                    class="product-vali" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label class="form-label mb-2">{{ __('language.admin.genres.filterName') }}</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                placeholder="{{ __('language.admin.genres.inputFilterName') }}"
                                                value="{{ old('name', $genreEdit->name) ?? '' }}">
                                            @error('name')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mb-2">{{ __('language.admin.genres.slug') }}</label>
                                            <input type="text" class="form-control" id="slug" name="slug"
                                                placeholder="{{ __('language.admin.genres.inputSlug') }}"
                                                value="{{ old('slug', $genreEdit->slug) ?? '' }}">
                                            @error('slug')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Other fields here -->

                                    <div class="mb-4">
                                        <label class="form-label mb-2">{{ __('language.admin.genres.description') }}</label>
                                        <textarea class="form-control" cols="20" rows="5"
                                                  name="description">{{ old('description') ?? $genreEdit->description }}</textarea>
                                        @error('description')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label mb-2">{{ __('language.admin.genres.content') }}</label>
                                        <textarea name="content" id="ckeditor">{!! old('content') ?? $genreEdit->content !!}</textarea>
                                        @error('content')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="right-sidebar-sticky">
                                <!-- genre Section -->
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title SlideToolHeader">
                                        <div class="cpa">
                                           {{ __('language.admin.genres.title') }}
                                        </div>
                                        <div class="tools">

                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div
                                                class="dropdown bootstrap-select form-control default-select h-auto wide dropup">
                                                <div
                                                    class="dropdown bootstrap-select form-control default-select h-auto wide dropup">
                                                    <select class="form-control default-select h-auto wide"
                                                        aria-label="Default select example" name="parent_id"
                                                        tabindex="null">

                                                        <option value="0">-- {{ __('language.admin.genres.select') }} --</option>
                                                        @foreach ($getListGenreEdit as $genre)
                                                            <option value="{{ $genre->id }}"
                                                                @selected($genre->id == old('parent_id', $genreEdit->parent_id))>
                                                              {{ $genre->name }}
                                                            </option>
                                                            @if (count($genre->childrenRecursive) > 0)
                                                                @include(
                                                                    'admin.components.child-category',
                                                                        [
                                                                            'children' => $genre->childrenRecursive,
                                                                            'depth' => 1,
                                                                        ]
                                                                )
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Image Upload Section -->
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title SlideToolHeader">
                                        <div class="cpa">
                                            {{ __('language.admin.genres.avatar') }}
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="avatar-upload d-flex align-items-center">
                                                <div class=" position-relative" style="width: 120px;">
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" class="imagePreview"
                                                             style="background-image: url({{ asset($genreEdit->avatar ?? 'images/no-img-avatar.png') }});">
                                                        </div>
                                                        @if(!empty($genreEdit->avatar))
                                                            <button type="button" class="removeImage"
                                                                    data-id="{{ $genreEdit->id }}"
                                                                    data-url="{{ route('admin.genres.removeAvatarImage') }}"
                                                                    data-image="{{ asset('images/no-img-avatar.png') }}">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
                                                        @endif
                                                    </div>

                                                    @error('avatar')
                                                        <div class="mt-2 mb-2">
                                                            <span class="text-red">{{ $message }}</span>
                                                        </div>
                                                    @enderror

                                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                                        <input type="file" class="form-control d-none" id="imageUpload"
                                                            name="avatar" accept=".png, .jpg, .jpeg">
                                                        <label for="imageUpload"
                                                            class="btn btn-sm btn-primary light ms-0">{{ __('language.admin.genres.selectImage') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('avatar')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- Custom Options Section -->
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title SlideToolHeader">
                                        <div class="cpa">
                                            {{ __('language.admin.genres.custom') }}
                                        </div>
                                    </div>

                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="p-3">
                                                    <label
                                                        class="form-label">{{ __('language.admin.genres.position') }}</label><br>
                                                    <input class="form-control" value="{{ old('position',$genreEdit->position) ?? 0 }}"
                                                           type="number" min="0" id="position" name="position">
                                                    @error('position')
                                                    <div class="mt-2">
                                                        <span class="text-red">{{ $message }}</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="p-3">

                                                    <label class="form-label">{{ __('language.admin.genres.order') }}</label><br>
                                                    <input class="form-control" value="{{ $genreEdit->order }}"
                                                        type="number" min="0" id="order" name="order">
                                                    @error('order')
                                                        <div class="text-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 d-flex justify-content-start gap-2">
                                    <button type="submit" class="btn btn-success">{{ __('language.admin.genres.editSave') }}</button>
                                    <a href="{{ route('admin.genres.index') }}" class="btn btn-warning">{{ __('language.admin.genres.back') }}</a>
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