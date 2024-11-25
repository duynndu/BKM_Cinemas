@extends('admin.layouts.main')

@section('title', 'Sửa diễn viên')

@section('css')
@endsection

@section('content')
    {{-- @if ($errors->any())
        @foreach ($errors as $item)
            {{ $item }}
        @endforeach

    @endif --}}
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
                <form method="post" action="{{ route('admin.rewards.update', $data->id) }}" class="product-vali"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="actor-row row mt-2">
                                            <div class="col-4">
                                                <label
                                                    class="form-label mb-2">Tên quà tặng:</label>
                                                <input type="text" value="{{ old('reward.name', $data->name) }}" name="reward[name]"
                                                    class="form-control"
                                                    placeholder="Nhập tên quà tặng">
                                                @error('reward.name')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-4">
                                                <label
                                                    class="form-label mb-2">Điểm quy đổi:</label>
                                                <input type="text" min="1" value="{{ old('reward.points_required', $data->points_required) }}"
                                                    name="reward[points_required]" class="form-control"
                                                   >
                                                @error('reward.points_required')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-8 p-3">
                                                <label class="form-label mb-2">Mô tả:</label>
                                                <textarea class="form-control ckeditor" cols="20" rows="5" name="reward[description]">{{ old('reward.description', $data->description) }}</textarea>
                                                @error('reward.description')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-4 p-3">
                                                <label class="form-label mb-2">Ảnh</label>
                                                <div class="avatar-upload d-flex align-items-center">
                                                    <div class=" position-relative" style="width: 120px;">
                                                        <div class="avatar-preview">
                                                            <div class="imagePreview"
                                                                style="background-image: url({{ asset($data->image ?? 'images/no-img-avatar.png') }});">
                                                            </div>
                                                            @if (!empty($data->image))
                                                                <button type="button"
                                                                    class="removeImage"
                                                                    data-id="{{ $data->id }}"
                                                                    data-url="{{ route('admin.rewards.removeAvatarImage') }}"
                                                                    data-image="{{ asset('images/no-img-avatar.png') }}">
                                                                    <i class="fa-solid fa-xmark"></i>
                                                                </button>
                                                            @endif
                                                        </div>
                                                        <div
                                                            class="change-btn d-flex align-items-center flex-wrap">
                                                            <input type="file"
                                                                class="form-control d-none uploadImage"
                                                                id="imageUpload" name="reward[image]"
                                                                accept=".png, .jpg, .jpeg, .webp">
                                                            <label for="imageUpload"
                                                                class="btn btn-sm btn-primary light ms-0">Chọn
                                                                ảnh</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('actor.image')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">
                        Cập nhật
                    </button>
                    <a href="{{ route('admin.rewards.index') }}" class="btn btn-warning">
                        Trở về trang danh sách
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection
