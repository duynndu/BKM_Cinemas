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
                                    <i
                                        class="fa-sharp fa-solid fa-filter me-2"></i>Bộ lọc
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="filter cm-content-box box-primary">

                                    <div class="cm-content-body form excerpt" style="">
                                        <form action="{{ route('admin.food-types.index') }}" method="GET">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <label
                                                            class="form-label">Tên loại đồ ăn</label>
                                                        <input id="" value="{{ request()->name }}" name="name"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="Nhập tên loại đồ ăn">
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label
                                                            class="form-label">Sắp xếp</label>
                                                        <div id="order" class="dropdown bootstrap-select form-control">
                                                            <select name="order_with" class="form-control">
                                                                <option value="">
                                                                    --chọn--
                                                                </option>
                                                                <option @selected( request()->order_with == 'dateASC' ) value="dateASC">
                                                                    Ngày tạo tăng dần
                                                                </option>
                                                                <option @selected( request()->order_with == 'dateDESC' ) value="dateDESC">
                                                                    Ngày tạo giảm dần
                                                                </option>
                                                                <option @selected( request()->order_with == 'priceASC' ) value="priceASC">
                                                                    Giá tăng dần
                                                                </option>
                                                                <option @selected( request()->order_with == 'priceDESC' ) value="priceDESC">
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
                                                            <option @selected(request()->fill_action == "active") value="active">
                                                                Hiện
                                                            </option>
                                                            <option @selected(request()->fill_action == "noActive") value="noActive">
                                                                Ẩn
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-5 col-sm-5 align-self-end">
                                                        <div class="">
                                                            <button class="btn btn-primary me-2"
                                                                title="Click here to Search" type="submit"><i
                                                                    class="fa-sharp fa-solid fa-filter me-2"></i>Tìm kiếm nâng cao
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
                                <h4 class="card-title">Danh sách đơn hàng</h4>
                            </div>
                            <div class="card-body">
                                @if ($data->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th style="width:80px;">#</th>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Trạng thái</th>
                                                    <th>Số thứ tự</th>
                                                    <th>Hành động</th>
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
                                                            <strong class="text-black">{{ ($data->currentPage() - 1) * $data->perPage() + $key + 1 }}</strong>
                                                        </td>
                                                        <td>
                                                            <b>
                                                                <a
                                                                    href="{{ route('admin.food-types.index') }}">
                                                                    {{ $type->name }}
                                                                </a>
                                                            </b>
                                                        </td>
                                                        @can('changeActive', \App\Models\FoodType::class)
                                                            <td>
                                                                <button
                                                                    class="toggle-active-btn btn btn-xs {{ $type->active == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                                    data-id="{{ $type->id }}"
                                                                    data-status="{{ $type->active }}"
                                                                    data-url="{{ route('admin.food-types.changeActive') }}">
                                                                    {{ $type->active == 1 ? 'Hiển thị' : 'Ẩn' }}
                                                                </button>
                                                            </td>
                                                        @endcan
                                                        @can('changeOrder', \App\Models\FoodType::class)
                                                            <td>
                                                                <input type="number" min="0" name="order"
                                                                    value="{{ $type->order }}"
                                                                    data-id="{{ $type->id }}"
                                                                    data-url="{{ route('admin.food-types.changeOrder') }}"
                                                                    class="form-control changeOrder" style="width: 67px;">
                                                            </td>
                                                        @endcan
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
