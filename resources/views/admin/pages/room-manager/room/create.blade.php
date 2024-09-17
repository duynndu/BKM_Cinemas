@extends('admin.layouts.main')

@section('title', $title['create'] ?? null)

@section('css')
@endsection
@vite(['resources/js/app.js', 'resources/css/app.css'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <x-page-titles />
            </div>
            <form x-data="SeatLayout" method="post" action="" class="product-vali" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card h-auto">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="mb-3">
                                        <label class="me-sm-2 form-label mb-2">Tên sơ đồ ghế</label>
                                        <input type="text" class="form-control" name="title_seo" value="{{ old('title_seo') ?? '' }}"
                                            placeholder="Nhập tên sơ đồ ghế">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label mb-2">Số cột</label>
                                        <input type="number" x-model="formData.col_count" @input="renderSeatLayout" @change="formData.seats = []" class="form-control" id="slug" name="slug"
                                            placeholder="Nhập số cột">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label mb-2">Số hàng</label>
                                        <input type="number" x-model="formData.row_count" @input="renderSeatLayout" @change="formData.seats = []" class="form-control" id="slug" name="slug"
                                            placeholder="Nhập số hàng" value="{{ old('slug') ?? '' }}">
                                    </div>
                                    <div id="seatingArea" class="inline-flex items-center mb-3 text-white"></div>
                                    <div class="mb-3">
                                        <button type="button" @click="toggleModal()" class="btn btn-sm btn-primary">Chọn từ sơ đồ ghế có sẵn</button>
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
                                        Ảnh đại diện
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
                                                <div class="change-btn d-flex align-items-center flex-wrap">
                                                    <input type="file" class="form-control d-none" id="imageUpload"
                                                        accept=".png, .jpg, .jpeg">
                                                    <label for="imageUpload"
                                                        class="btn btn-sm btn-primary light ms-0">Chọn ảnh</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter cm-content-box box-primary">
                                <div class="content-title SlideToolHeader">
                                    <div class="cpa">
                                        Tùy chỉnh thêm
                                    </div>
                                </div>

                                <div class="cm-content-body publish-content form excerpt">
                                    <div class="p-3">
                                        <label class="form-label">Số thứ tự</label><br>
                                        <input class="form-control" type="number" min="0" id="order"
                                            name="order">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <label class="form-label">Trạng thái</label><br>
                                                <input class="form-check-input" type="radio" id="active"
                                                    name="active">
                                                <label class="form-check-label" for="active">
                                                    Hiện
                                                </label>
                                                <input class="form-check-input" type="radio" id="active"
                                                    name="active">
                                                <label class="form-check-label" for="active">
                                                    Ẩn
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="card-body">
                                                <label class="form-label">Nổi bật</label><br>
                                                <input class="form-check-input" type="checkbox" id="hot"
                                                    name="hot">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-start gap-2">
                                <button @click="onSubmit" class="btn btn-success">Tạo mới</button>
                                <a href="{{ route('admin.rooms.index') }}" class="btn btn-warning">Trở về
                                    trang
                                    danh
                                    sách
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" x-cloak>
                    <div @click.outside="toggleModal()" class="bg-white rounded-lg shadow-lg w-full max-w-7xl min-h-[500px] p-6 relative">
                        <div class="flex justify-between items-center border-b pb-3">
                            <h5 class="text-2xl font-bold text-black">Chọn từ sơ đồ ghế có sẵn</h5>
                            <button @click="toggleModal()" class="text-black text-2xl">&times;</button>
                        </div>
                        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 overflow-y-auto max-h-[400px]">
                            <template x-for="seatLayout in seatLayouts" :key="seatLayout.id">
                                <label @click="selectLayout(seatLayout)" :class="{'border-2 border-blue-500': formData.seats && formData.id === seatLayout.id}" class="border p-2 rounded-lg shadow hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                                    <input type="radio" name="seatLayout" :value="seatLayout.id" x-model="seatLayout.id" class="hidden">
                                    <img class="w-full object-cover" :src="seatLayout.image" :alt="seatLayout.name" class="w-full h-auto mb-4 rounded">
                                    <h3 class="text-lg font-semibold text-black" x-text="seatLayout.name"></h3>
                                    <p class="text-gray-600">Columns: <span x-text="seatLayout.col_count"></span></p>
                                    <p class="text-gray-600">Rows: <span x-text="seatLayout.row_count"></span></p>
                                </label>
                            </template>
                        </div>
                        <div class="flex justify-end p-4 border-t border-gray-200">
                            <button @click="toggleModal()" class="btn btn-secondary bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 transition duration-300">Close</button>
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