@extends('admin.layouts.main')

@section('title', 'Danh sách Loại Đồ Ăn')

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
                <div class="row">
                    <div class="col-12">
                        <div class="filter cm-content-box box-primary">
                            <div class="content-title SlideToolHeader">
                                <div class="cpa">
                                    <i class="fa-sharp fa-solid fa-filter me-2"></i>Bộ lọc
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="filter cm-content-box box-primary">

                                    <div class="cm-content-body form excerpt" style="">
                                        <form action="{{ route('admin.food-types.index') }}" method="GET">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <label class="form-label">Tên loại đồ ăn</label>
                                                        <input id="" value="{{ request()->name }}" name="name"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="Nhập tên loại đồ ăn">
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">Sắp xếp</label>
                                                        <div id="order" class="dropdown bootstrap-select form-control">
                                                            <select name="order_with" class="form-control">
                                                                <option value="">
                                                                    --chọn--
                                                                </option>
                                                                <option @selected(request()->order_with == 'dateASC') value="dateASC">
                                                                    Ngày tạo tăng dần
                                                                </option>
                                                                <option @selected(request()->order_with == 'dateDESC') value="dateDESC">
                                                                    Ngày tạo giảm dần
                                                                </option>
                                                                <option @selected(request()->order_with == 'priceASC') value="priceASC">
                                                                    Giá tăng dần
                                                                </option>
                                                                <option @selected(request()->order_with == 'priceDESC') value="priceDESC">
                                                                    Giá giảm dần
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">Lọc theo</label>
                                                        <select name="fill_action" class="form-control">
                                                            <option value="">
                                                                --chọn--
                                                            </option>
                                                            <option @selected(request()->fill_action == 'active') value="active">
                                                                Hiện
                                                            </option>
                                                            <option @selected(request()->fill_action == 'noActive') value="noActive">
                                                                Ẩn
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-5 col-sm-5 align-self-end">
                                                        <div class="">
                                                            <button class="btn btn-primary me-2"
                                                                title="Click here to Search" type="submit"><i
                                                                    class="fa-sharp fa-solid fa-filter me-2"></i>Tìm kiếm
                                                                nâng cao
                                                            </button>
                                                            <button type="reset" class="btn btn-danger light"
                                                                title="Click here to remove filter">Xóa trống</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách loại đồ ăn</h4>
                                <div class="compose-btn">
                                    @can('create', \App\Models\FoodType::class)
                                        <a href="{{ route('admin.food-types.create') }}">
                                            <button class="btn btn-secondary btn-sm light">
                                                + Thêm mới
                                            </button>
                                        </a>
                                    @endcan
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($data->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md" id="data-table">
                                            <thead>
                                                <tr>
                                                    @can('deleteMultiple', \App\Models\FoodType::class)
                                                        <th>
                                                            <div class="box-delete-item">
                                                                <input type="checkbox" id="item-all-checked">
                                                                <button id="btn-delete-all"
                                                                    data-url="{{ route('admin.food-types.deleteItemMultipleChecked') }}"
                                                                    class="btn btn-sm btn-danger btn-delete-multiple_item">
                                                                    <svg width="15" height="15"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 448 512">
                                                                        <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                        <path fill="white"
                                                                            d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    @endcan
                                                    <th style="width:80px;">#</th>
                                                    <th>Tên</th>
                                                    <th>Trạng thái</th>
                                                    <th>Số thứ tự</th>
                                                    @if (Auth()->user()->can('update', \App\Models\FoodType::class) || Auth()->user()->can('delete', \App\Models\FoodType::class))
                                                        <th>Hành động</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $type)
                                                    <tr>
                                                        @can('deleteMultiple', \App\Models\FoodType::class)
                                                            <td>
                                                                <input type="checkbox" data-id="{{ $type->id }}"
                                                                    class="item-checked">
                                                            </td>
                                                        @endcan
                                                        <td>
                                                            <strong
                                                                class="text-black">{{ ($data->currentPage() - 1) * $data->perPage() + $key + 1 }}</strong>
                                                        </td>
                                                        <td>
                                                            <b>
                                                                {{ $type->name }}
                                                            </b>
                                                        </td>
                                                        <td>
                                                            @can('changeActive', \App\Models\FoodType::class)
                                                                <button
                                                                    class="toggle-active-btn btn btn-xs {{ $type->active == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                                    data-id="{{ $type->id }}"
                                                                    data-status="{{ $type->active }}"
                                                                    data-url="{{ route('admin.food-types.changeActive') }}">
                                                                    {{ $type->active == 1 ? 'Hiển thị' : 'Ẩn' }}
                                                                </button>
                                                            @else
                                                                <span
                                                                    class="badge light badge-{{ $type->active == 1 ? 'success' : 'danger' }}">
                                                                    {{ $type->active == 1 ? 'Hiển thị' : 'Ẩn' }}
                                                                </span>
                                                            @endcan
                                                        </td>
                                                        <td>
                                                            @can('changeOrder', \App\Models\FoodType::class)
                                                                <input type="number" min="0" name="order"
                                                                    value="{{ $type->order }}" data-id="{{ $type->id }}"
                                                                    data-url="{{ route('admin.food-types.changeOrder') }}"
                                                                    class="form-control changeOrder" style="width: 67px;">
                                                            @else
                                                                <b>{{ $type->order }}</b>
                                                            @endcan
                                                        </td>
                                                        @if (Auth()->user()->can('update', \App\Models\FoodType::class) || Auth()->user()->can('delete', \App\Models\FoodType::class))
                                                            <td>
                                                                <div
                                                                    style="padding-right: 20px; display: flex; justify-content: end">
                                                                    @can('update', \App\Models\FoodType::class)
                                                                        <a href="{{ route('admin.food-types.edit', $type->id) }}"
                                                                            class="btn btn-primary shadow btn-xs sharp me-1">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>
                                                                    @endcan
                                                                    @can('delete', \App\Models\FoodType::class)
                                                                        <form
                                                                            action="{{ route('admin.food-types.delete', $type->id) }}"
                                                                            class="formDelete" method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button
                                                                                class="btn btn-danger shadow btn-xs sharp me-1 call-ajax btn-remove btnDelete"
                                                                                data-type="DELETE" href="">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </form>
                                                                    @endcan
                                                                </div>
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-center">
                                                {{ $data->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center align-items-center p-5">
                                        <div>
                                            <h3 class="text-center">
                                                Không tìm thấy: {{ request()->name }}
                                            </h3>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
