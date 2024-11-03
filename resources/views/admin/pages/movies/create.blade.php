@extends('admin.layouts.main')

@section('title', 'Thêm mới phim')

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
                <form method="post" action="{{ route('admin.movies.store') }}" class="product-vali"
                    enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#infor"><i
                                        class="la la-home me-2"></i>{{ __('language.admin.movies.inforMovie') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#actor"><i
                                        class="la la-user me-2"></i>{{ __('language.admin.movies.actor') }}</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="infor" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="card h-auto">
                                            <div class="card-body">
                                                <div class="row mb-4">
                                                    <div class="col-6">
                                                        <label
                                                            class="form-label mb-2">{{ __('language.admin.movies.title') }}</label>
                                                        <input type="text" value="{{ old('title') }}" id="name"
                                                            name="title" class="form-control"
                                                            placeholder="{{ __('language.admin.movies.inputTitle') }}"
                                                            value="">
                                                        @error('title')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <label
                                                            class="form-label mb-2">{{ __('language.admin.movies.slug') }}</label>
                                                        <input type="text" value="{{ old('slug') }}"
                                                            class="form-control" id="slug" name="slug"
                                                            placeholder="{{ __('language.admin.movies.inputSlug') }}"
                                                            value="">
                                                        @error('slug')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label
                                                        class="form-label mb-2">{{ __('language.admin.movies.director') }}</label>
                                                    <input value="{{ old('director') }}" type="text"
                                                        class="form-control" name="director"
                                                        placeholder="{{ __('language.admin.movies.director') }}"
                                                        value="">
                                                    @error('director')
                                                        <div class="text-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-6">
                                                        <label
                                                            class="form-label mb-2">{{ __('language.admin.movies.duration') }}</label>
                                                        <input value="{{ old('duration') }}" type="number" id="duration"
                                                            name="duration" min="1" class="form-control"
                                                            placeholder="{{ __('language.admin.movies.duration') }}"
                                                            value="">
                                                        @error('duration')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <label
                                                            class="form-label mb-2">{{ __('language.admin.movies.formatMovie.name') }}</label>
                                                        <select name="format" id="" class="form-control">
                                                            <option value="2d">
                                                                {{ __('language.admin.movies.formatMovie.2d') }}</option>
                                                            <option value="3d">
                                                                {{ __('language.admin.movies.formatMovie.3d') }}</option>
                                                        </select>
                                                        @error('formatMovie')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label
                                                        class="form-label mb-2">{{ __('language.admin.movies.trailer_url') }}</label>
                                                    <input value="{{ old('trailer_url') }}"
                                                        placeholder="{{ __('language.admin.movies.trailer_url') }}"
                                                        type="text" class="form-control" name="trailer_url"></input>
                                                    @error('trailer_url')
                                                        <div class="text-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-6">
                                                        <label
                                                            class="form-label mb-2">{{ __('language.admin.movies.release_date') }}:</label>
                                                        <input type="date" value="{{ old('release_date') }}"
                                                            name="release_date" class="form-control">
                                                        @error('release_date')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <label
                                                            class="form-label mb-2">{{ __('language.admin.movies.premiere_date') }}</label>
                                                        <input type="date" value="{{ old('premiere_date') }}"
                                                            name="premiere_date" class="form-control" value="">
                                                        @error('premiere_date')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label mb-2">Tuổi:</label>
                                                    <input value="{{ old('age') }}"
                                                        placeholder="{{ __('language.admin.movies.inputAge') }}"
                                                        type="number" min="1" class="form-control"
                                                        name="age">
                                                    @error('age')
                                                        <div class="text-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-6">
                                                        <label class="form-label mb-2">Quốc gia:</label>
                                                        <input value="{{ old('country') }}" type="text"
                                                            id="country" name="country" class="form-control"
                                                            placeholder="{{ __('language.admin.movies.inputCountry') }}">
                                                        @error('country')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-6">
                                                        <label
                                                            class="form-label mb-2">{{ __('language.admin.movies.language') }}</label>
                                                        <select name="language" id="" class="form-control">
                                                            <option value="vietsub">
                                                                {{ __('language.admin.movies.vietSub') }}</option>
                                                            <option value="noVietsub">
                                                                {{ __('language.admin.movies.noVietsub') }}</option>
                                                        </select>
                                                        @error('language')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label
                                                        class="form-label mb-2">{{ __('language.admin.movies.introduce') }}</label>
                                                    <textarea value="{{ old('description') }}" placeholder="{{ __('language.admin.movies.inputIntroduce') }}"
                                                        class="form-control" cols="20" rows="5" name="description"></textarea>
                                                    @error('description')
                                                        <div class="text-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label
                                                        class="form-label mb-2">{{ __('language.admin.movies.content') }}</label>
                                                    <textarea placeholder="{{ __('language.admin.movies.inputContent') }}" name="content" class="ckeditor"style="display: none;">{{ old('content') }}</textarea>
                                                    @error('content')
                                                        <div class="text-danger mt-2">{{ $message }}</div>
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
                                                        {{ __('language.admin.movies.genre') }}
                                                    </div>
                                                </div>
                                                <div class="cm-content-body publish-content form excerpt">
                                                    <div class="card-body">
                                                        <select multiple class="form-control" name="parent_id[]">
                                                            <option value=" " disabled>
                                                                --{{ __('language.admin.movies.select') }}--
                                                            </option>
                                                            @if ($listGenre)
                                                                @foreach ($listGenre as $genre)
                                                                    <option value="{{ $genre->id }}"
                                                                        @selected(in_array($genre->id, old('parent_id', [])))>
                                                                        {{ $genre->name }}
                                                                    </option>
                                                                    @if (count($genre->childrenRecursive) > 0)
                                                                        @include(
                                                                            'admin.components.child-category',
                                                                            [
                                                                                'children' =>
                                                                                    $genre->childrenRecursive,
                                                                                'depth' => 1,
                                                                            ]
                                                                        )
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        @error('parent_id')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="filter cm-content-box box-primary">
                                                <div class="content-title SlideToolHeader">
                                                    <div class="cpa">
                                                        {{ __('language.admin.movies.image') }}
                                                    </div>
                                                </div>
                                                <div class="cm-content-body publish-content form excerpt">
                                                    <div class="card-body">
                                                        <div class="avatar-upload d-flex align-items-center">
                                                            <div class="position-relative" style="width: 120px;">
                                                                <div class="avatar-preview">
                                                                    <div class="imagePreview"
                                                                        style="background-image: url({{ asset('images/no-img-avatar.png') }});">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="change-btn d-flex align-items-center flex-wrap">
                                                                    <input type="file"
                                                                        class="form-control d-none uploadImage"
                                                                        id="imageUpload1" name="image"
                                                                        accept=".png, .jpg, .jpeg">
                                                                    <label for="imageUpload1"
                                                                        class="btn btn-sm btn-primary light ms-0">{{ __('language.admin.movies.select') }}</label>
                                                                    <div id="image_error1" class="mt-2"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="filter cm-content-box box-primary">
                                                <div class="content-title SlideToolHeader">
                                                    <div class="cpa">
                                                        {{ __('language.admin.movies.banner') }}
                                                    </div>
                                                </div>
                                                <div class="cm-content-body publish-content form excerpt">
                                                    <div class="card-body">
                                                        <div class="avatar-upload d-flex align-items-center">
                                                            <div class="position-relative" style="width: 120px;">
                                                                <div class="avatar-preview">
                                                                    <div class="imagePreview"
                                                                        style="background-image: url({{ asset('images/no-img-avatar.png') }});">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="change-btn d-flex align-items-center flex-wrap">
                                                                    <input type="file"
                                                                        class="form-control d-none uploadImage"
                                                                        id="imageUpload2" name="banner_movie"
                                                                        accept=".png, .jpg, .jpeg">
                                                                    <label for="imageUpload2"
                                                                        class="btn btn-sm btn-primary light ms-0">{{ __('language.admin.movies.select') }}</label>
                                                                    <div id="image_error2" class="mt-2"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="filter cm-content-box box-primary">
                                                <div class="content-title SlideToolHeader">
                                                    <div class="cpa">
                                                        {{ __('language.admin.movies.customize') }}
                                                    </div>
                                                </div>

                                                <div class="cm-content-body publish-content form excerpt">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="p-3">
                                                                <label
                                                                    class="form-label">{{ __('language.admin.movies.status') }}</label><br>
                                                                <div class="row mt-2">
                                                                    <div class="col-sm-6">
                                                                        <input class="form-check-input" type="radio"
                                                                            id="active" name="active" value="1"
                                                                            checked="">
                                                                        <label class="form-check-label" for="active">
                                                                            {{ __('language.admin.movies.show') }}
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input class="form-check-input" value="0"
                                                                            type="radio" id="active" name="active">
                                                                        <label class="form-check-label" for="active">
                                                                            {{ __('language.admin.movies.hidden') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="p-3">
                                                                <label
                                                                    class="form-label">{{ __('language.admin.movies.numberOrder') }}</label><br>
                                                                <input class="form-control" value="0" type="number"
                                                                    min="0" id="order" name="order">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <label
                                                                    class="form-label">{{ __('language.admin.movies.hot') }}</label><br>
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="hot" name="hot" value="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 d-flex justify-content-start gap-2">
                                                <button type="submit"
                                                    class="btn btn-success">{{ __('language.admin.movies.addNew') }}</button>
                                                <a href="{{ route('admin.movies.index') }}"
                                                    class="btn btn-warning">{{ __('language.admin.movies.back') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="actor">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>
                                                    {{ __('language.admin.movies.chooseActor') }}
                                                </h5>
                                                <select multiple name="actors[]" id="selectActor" class="form-control"
                                                    onchange="updateRoleBoxes()">
                                                    @if (!empty($actors))
                                                        @foreach ($actors as $actor)
                                                            <option value="{{ $actor->id }}">{{ $actor->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                                <div id="roleBoxes"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="add-actor btn btn-success" onclick="addActor()">
                                                    {{ __('language.admin.movies.addActor') }}
                                                </div>
                                                <div id="actor-list" class="row mt-4">
                                                    <div class="actor-row row mt-2">
                                                        <div class="col-3">
                                                            <label
                                                                class="form-label mb-2">{{ __('language.admin.movies.nameActor') }}:</label>
                                                            <input type="text" value="{{ old('name_actor[]') }}"
                                                                name="name_actor[]" class="form-control">
                                                        </div>
                                                        <div class="col-3">
                                                            <label
                                                                class="form-label mb-2">{{ __('language.admin.movies.birtDate') }}:</label>
                                                            <input type="date" value="{{ old('birth_date[]') }}"
                                                                name="birth_date[]" class="form-control">
                                                        </div>
                                                        <div class="col-2">
                                                            <label
                                                                class="form-label mb-2">{{ __('language.admin.movies.nationality') }}:</label>
                                                            <input type="text" value="{{ old('nationality[]') }}"
                                                                value="" name="nationality[]" class="form-control">
                                                        </div>
                                                        <div class="col-3">
                                                            <label
                                                                class="form-label mb-2">{{ __('language.admin.movies.role') }}:</label>
                                                            <input type="text" value="{{ old('role[]') }}"
                                                                value="" name="role[]" class="form-control">
                                                        </div>
                                                        <div class="col-1" style="position: relative">
                                                            <!-- Không có nút xóa cho hàng đầu tiên -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<script src="{{ asset('js/admin/commons/movies/create.js') }}"></script>
@endsection
