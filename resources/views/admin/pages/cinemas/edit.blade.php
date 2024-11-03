@extends('admin.layouts.main')

@section('title', 'Sửa rạp')

@section('css')
@endsection

@section('content')
    @if ($errors->any())
        @foreach ($errors as $item)
            {{ $item }}
        @endforeach

    @endif
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
                <form method="post" action="{{ route('admin.cinemas.update', $data->id) }}" class="product-vali"
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
                                                <label class="form-label mb-2">Tên rạp:</label>
                                                <input type="text" value="{{ old('cinema.name', $data->name) }}"
                                                    name="cinema[name]" class="form-control" placeholder="Nhập tên rạp">
                                                @error('cinema.name')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-4">
                                                <label class="form-label mb-2">Địa chỉ:</label>
                                                <input type="text" value="{{ old('cinema.address', $data->address) }}"
                                                    name="cinema[address]" placeholder="Nhập địa chỉ" class="form-control">
                                                @error('cinema.address')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-4">
                                                <label class="form-label mb-2">Khu vực</label>
                                                <div class="mb-3">
                                                    <select style="width:100%;" name="cinema[area_id]" id="single-select">
                                                        @foreach ($areas as $area)
                                                            <option value="{{ $area->id }}"
                                                                @selected(old('cinema.area_id', $data->area_id) == $area->id)>
                                                                {{ $area->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('cinema.area_id')
                                                        <div class="text-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4 p-3">
                                                <label class="form-label mb-2">Số điện thoại:</label>
                                                <input type="text" value="{{ old('cinema.phone', $data->phone) }}"
                                                    name="cinema[phone]" placeholder="Nhập số điện thoại"
                                                    class="form-control">
                                                @error('cinema.phone')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-4 p-3">
                                                <label class="form-label mb-2">Email:</label>
                                                <input type="text" value="{{ old('cinema.email', $data->email) }}"
                                                    name="cinema[email]" placeholder="Nhập email" class="form-control">
                                                @error('cinema.email')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-4 p-3">
                                                <label class="form-label mb-2">Map:</label>
                                                <textarea class="form-control" cols="20" rows="5" name="cinema[map]">{{ old('cinema.map', $data->map) }}</textarea>
                                                @error('cinema.map')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-8">
                                                <label class="form-label mb-2">Mô tả:</label>
                                                <textarea class="form-control ckeditor" cols="20" rows="5" name="cinema[description]">{{ old('cinema.description', $data->description) }}</textarea>
                                                @error('cinema.description')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-4 p-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label class="form-label mb-2">Ảnh</label>
                                                        <div class="avatar-upload d-flex align-items-center">
                                                            <div class=" position-relative" style="width: 120px;">
                                                                <div class="avatar-preview">
                                                                    <div class="imagePreview"
                                                                        style="background-image: url({{ asset($data->image ?? 'images/no-img-avatar.png') }});">
                                                                    </div>
                                                                    @if (!empty($data->image))
                                                                        <button type="button" class="removeImage"
                                                                            data-id="{{ $data->id }}"
                                                                            data-url="{{ route('admin.cinemas.removeAvatarImage') }}"
                                                                            data-image="{{ asset('images/no-img-avatar.png') }}">
                                                                            <i class="fa-solid fa-xmark"></i>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                                <div class="change-btn d-flex align-items-center flex-wrap">
                                                                    <input type="file"
                                                                        class="form-control d-none uploadImage"
                                                                        id="imageUpload" name="cinema[image]"
                                                                        accept=".png, .jpg, .jpeg, .webp">
                                                                    <label for="imageUpload"
                                                                        class="btn btn-sm btn-primary light ms-0">
                                                                        Chọn ảnh
                                                                    </label>
                                                                    @error('avatar')
                                                                        <div class="text-danger mt-2">
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('cinema.image')
                                                            <div class="text-danger mt-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-8 p-3">
                                                        <label class="form-label">Trạng thái</label><br>
                                                        <div class="row mt-2">
                                                            <div class="col-sm-7">
                                                                <input class="form-check-input" type="radio"
                                                                    id="active" name="cinema[active]" value="1"
                                                                    @checked(old('cinema.active', $data->active) == 1)>
                                                                <label class="form-check-label" for="active">
                                                                    Hiển thị
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input class="form-check-input" value="0"
                                                                    type="radio" id="active" name="cinema[active]"
                                                                    @checked(old('cinema.active', $data->active) == 0)>
                                                                <label class="form-check-label" for="active">
                                                                    Ẩn
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @error('food.active')
                                                            <div class="mt-2">
                                                                <span class="text-red">{{ $message }}</span>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">
                        Sửa
                    </button>
                    <a href="{{ route('admin.cinemas.index') }}" class="btn btn-warning">
                        Trở về trang danh sách
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection
