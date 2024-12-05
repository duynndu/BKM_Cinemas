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
                <form id="voucher-form" method="post" action="{{ route('admin.vouchers.store') }}" class="product-vali"
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



                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <label class="form-label mb-2">Số lượng:</label>
                                            <input type="number" min="1" max="1000" class="form-control"
                                                name="voucher[quantity]" value="{{ old('voucher.quantity', 1) }}">
                                            @error('voucher.quantity')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3">
                                                <label
                                                    class="form-label">Trạng thái</label><br>
                                                <div class="row mt-2">
                                                    <div class="col-sm-6">
                                                        <input class="form-check-input" type="radio"
                                                            id="active" name="voucher[active]" value="1" @checked(old('voucher.active', 1) == 1)>
                                                        <label class="form-check-label" for="active">
                                                         Hiển thị
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input class="form-check-input" value="0"
                                                            type="radio" id="active" name="voucher[active]" @checked(old('voucher.active', 1) == 0)>
                                                        <label class="form-check-label" for="active">
                                                            Ẩn
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
                                                <select class="form-control" id="discount_value"
                                                    name="voucher[discount_type]">
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
                                                <div id="full-discount_value_money">
                                                    <input id="discount_value_money" type="number"
                                                        name="voucher[discount_value]" class="form-control"
                                                        value="{{ old('voucher.discount_value') }}"
                                                        placeholder="Nhập số tiền...">
                                                    <p class="text-danger error" id="error_discount_value_money">
                                                    </p>
                                                </div>

                                                <div id="full-discount_value_percent" class="d-none">
                                                    <input id="discount_value_percent" type="number"
                                                        name="voucher[discount_value]" class="form-control"
                                                        value="{{ old('voucher.discount_value') }}">
                                                    <p class="text-danger error" id="error_discount_value_percent"></p>
                                                </div>

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
    <script>
        $(document).ready(function() {
            // Xử lý thay đổi loại giảm giá
            $("#discount_value").change(function() {
                var discount_type = $(this).val();

                if (discount_type === 'percent') {
                    $("#full-discount_value_percent").removeClass("d-none");
                    $("#full-discount_value_money").addClass("d-none");
                    $("#discount_value_money").prop("disabled", true); // Disable trường không cần
                    $("#discount_value_percent").prop("disabled", false);
                    $("#error_discount_value_money").text(""); // Xóa lỗi khi chuyển đổi
                    $("#discount_value_percent").val(""); // Reset giá trị ô % về rỗng

                } else if (discount_type === 'money') {
                    $("#full-discount_value_money").removeClass("d-none");
                    $("#full-discount_value_percent").addClass("d-none");
                    $("#discount_value_percent").prop("disabled", true); // Disable trường không cần
                    $("#discount_value_money").prop("disabled", false);
                    $("#error_discount_value_percent").text(""); // Xóa lỗi khi chuyển đổi
                    $("#discount_value_money").val(""); // Reset giá trị ô money về rỗng

                }
            });

            // Hàm kiểm tra giá trị và hiển thị lỗi
            function validateField(inputId, errorId, type) {
                var value = $(inputId).val();
                var errorElement = $(errorId);

                // Kiểm tra giá trị nhập
                if (!value) {
                    errorElement.text("Vui lòng nhập giá trị giảm.");
                    return false;
                } else if (type === 'percent' && (value < 1 || value > 100)) {
                    errorElement.text("Phần trăm giảm giá phải nằm trong khoảng 1-100.");
                    return false;
                } else if (type === 'money' && (value <= 0 || value > 1000000)) {
                    errorElement.text("Số tiền phải lớn hơn 0 và không quá 1,000,000.");
                    return false;
                } else {
                    errorElement.text(""); // Xóa lỗi nếu hợp lệ
                    return true;
                }
            }

            // Xử lý sự kiện submit form
            $("#voucher-form").on("submit", function(event) {
                var isValid = true;

                // Kiểm tra từng trường dữ liệu
                if ($("#discount_value").val() === "money") {
                    isValid &= validateField("#discount_value_money", "#error_discount_value_money",
                        "money");
                }

                if ($("#discount_value").val() === "percent") {
                    isValid &= validateField("#discount_value_percent", "#error_discount_value_percent",
                        "percent");
                }

                // Nếu có lỗi, ngăn submit
                if (!isValid) {
                    event.preventDefault();
                }
            });

            // Ràng buộc giá trị tối đa cho ô input khi nhập
            $("#discount_value_money").on("input", function() {
                var maxMoney = 1000000;
                if ($(this).val() > maxMoney) {
                    $(this).val(maxMoney);
                }
            });

            $("#discount_value_percent").on("input", function() {
                var maxPercent = 100;
                if ($(this).val() > maxPercent) {
                    $(this).val(maxPercent);
                }
            });

            // Khởi tạo: Đảm bảo trường ban đầu hoạt động đúng
            $("#discount_value").trigger("change");
        });
    </script>
@endsection
