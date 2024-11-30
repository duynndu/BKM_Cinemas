@extends('admin.layouts.main')

@section('title', 'Thêm mới vouchers')

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
                <form method="post" action="{{ route('admin.vouchers.store') }}" class="product-vali"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label class="form-label mb-2">Tên voucher</label>
                                            <input type="text" id="name" name="voucher[name]" class="form-control"
                                                placeholder="Nhập tên voucher" value="{{ old('voucher.name') }}">
                                            @error('voucher.name')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mb-2">Mã code</label>
                                            <input type="text" class="form-control" id="code" name="voucher[code]"
                                                placeholder="Nhập mã code" value="{{ old('voucher.code') }}">
                                            @error('voucher.code')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label class="form-label mb-2">Điều kiện giảm giá</label>
                                            <select class="form-control" name="voucher[discount_condition]"
                                                id="discountCondition">
                                                <option value="all"
                                                    {{ old('voucher.discount_condition') == 'all' ? 'selected' : '' }}>Tất
                                                    cả</option>
                                                <option value="condition"
                                                    {{ old('voucher.discount_condition') == 'condition' ? 'selected' : '' }}>
                                                    Theo điều kiện</option>
                                            </select>
                                        </div>

                                        <div class="col-4 d-none" id="full-conditionType">
                                            <label class="form-label mb-2">Loại điều kiện</label>
                                            <select class="form-control" name="voucher[condition_type]" id="conditionType">
                                                <option
                                                    {{ old('voucher.condition_type') == 'new_member' ? 'selected' : '' }}
                                                    value="new_member">Thành viên mới</option>
                                                
                                                <option {{ old('voucher.condition_type') == 'level_up' ? 'selected' : '' }}
                                                    value="level_up">Thăng hạng</option>
                                            </select>
                                        </div>
                                        <div class="col-4 d-none" id="full-levelType">
                                            <label class="form-label mb-2">Loại hạng</label>
                                            <select class="form-control" name="voucher[level_type]" id="levelType">
                                                <option {{ old('voucher.level_type') == 'vip' ? 'selected' : '' }}
                                                    value="vip">Loại VIP</option>
                                                <option {{ old('voucher.level_type') == 'vvip' ? 'selected' : '' }}
                                                    value="vvip">Loại VVIP</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="mb-4">
                                        <label class="form-label mb-2">Số lượng:</label>
                                        <input type="number" min="1" max="1000" class="form-control"
                                            name="voucher[quantity]" value="{{ old('voucher.quantity', 1) }}">
                                        @error('voucher.quantity')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label class="form-label mb-2">Ngày bắt đầu:</label>
                                            <input type="datetime-local" name="voucher[start_date]" class="form-control"
                                                value="{{ old('voucher.start_date') }}">
                                            @error('voucher.start_date')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label mb-2">Ngày kết thúc</label>
                                            <input type="datetime-local" class="form-control" name="voucher[end_date]"
                                                value="{{ old('voucher.end_date') }}">
                                            @error('voucher.end_date')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label mb-2">Mô tả:</label>
                                        <textarea name="voucher[description]" class="form-control">{!! old('voucher.description') !!}</textarea>
                                        @error('voucher.description')
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
                                            Loại giảm giá
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div>
                                                <select class="form-control" name="voucher[discount_type]">
                                                    <option value="money"
                                                        {{ old('voucher.discount_type') == 'money' ? 'selected' : '' }}>
                                                        Số tiền ( Vnđ )
                                                    </option>
                                                    <option value="percent"
                                                        {{ old('voucher.discount_type') == 'percent' ? 'selected' : '' }}>
                                                        Phần trăm ( % )
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="mt-3">
                                                <label class="form-label mb-2">Giá trị giảm</label>
                                                <input type="number" min="1" name="voucher[discount_value]"
                                                    class="form-control" value="{{ old('voucher.discount_value') }}"
                                                    placeholder="Nhập số tiền or %">
                                                @error('voucher.discount_value')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title SlideToolHeader">
                                        <div class="cpa">
                                            Hình ảnh
                                        </div>
                                        <div class="tools">

                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="avatar-upload d-flex align-items-center">
                                                    <div class=" position-relative" style="width: 120px;">
                                                        <div class="avatar-preview">
                                                            <div class="imagePreview"
                                                                style="background-image: url({{ asset('images/no-img-avatar.png') }});">
                                                            </div>
                                                        </div>
                                                        <div class="change-btn d-flex align-items-center flex-wrap">
                                                            <input type="file" class="form-control d-none uploadImage"
                                                                id="imageUpload" name="voucher[image]"
                                                                accept=".png, .jpg, .jpeg, .webp">
                                                            <label for="imageUpload"
                                                                class="btn btn-sm btn-primary light ms-0">Chọn
                                                                ảnh</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('voucher.image')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-3 d-flex justify-content-start gap-2">
                                    <button type="submit" class="btn btn-success">Thêm mới</button>
                                    <a href="{{ route('admin.vouchers.index') }}" class="btn btn-warning">quay
                                        lại</a>
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
<script src="{{ asset('js/admin/commons/vouchers/add.js') }}"></script>
@endsection
