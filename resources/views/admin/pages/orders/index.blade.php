@extends('admin.layouts.main')

@section('title', 'Danh sách Loại Đồ Ăn')

@section('css')

@endsection

@vite(['resources/js/app.js', 'resources/css/app.css'])

@section('content')
    <div class="container-fluid" x-data="OrderComponent">
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
                                                        <label class="form-label">Tên mã</label>
                                                        <input id="" value="{{ request()->code }}" name="code"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="Nhập mã đơn">
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
                                <h4 class="card-title">Danh sách đơn hàng</h4>
                            </div>
                            <div class="card-body">
                                @if ($data->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Mã đơn</th>
                                                    <th>Phim</th>
                                                    <th>Rạp phim</th>
                                                    <th>Người đặt</th>
                                                    <th>Trạng thái</th>
                                                    <th>Trạng thái thanh toán</th>
                                                    <th>Trạng thái hoàn tiền</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $order)
                                                    <tr>
                                                        <td>
                                                            <strong
                                                                class="text-black">{{ ($data->currentPage() - 1) * $data->perPage() + $key + 1 }}</strong>
                                                        </td>
                                                        <td>
                                                            <b class="text-black">
                                                                {{ $order->code }}
                                                            </b>
                                                        </td>
                                                        <td>
                                                            {{ $order->movie->title }}
                                                        </td>
                                                        <td>
                                                            {{ $order->cinema->name }}
                                                        </td>
                                                        <td>
                                                            {{ $order->user->name }}
                                                        </td>
                                                        <td>
                                                            <select name="status" id="status-{{ $order->id }}"
                                                                class="form-control order_status"
                                                                data-url="{{ route('admin.orders.changeStatus', $order->id) }}"
                                                                @change="onChangeStatus($event)">
                                                            <option value="pending" @selected($order->status == 'pending')>Chờ xác nhận</option>
                                                            <option value="completed" @selected($order->status == 'completed')>Hoàn thành</option>
                                                            <option value="failed" @selected($order->status == 'failed')>Lỗi</option>
                                                            <option value="cancelled" @selected($order->status == 'cancelled')>Hủy</option>
                                                            <option value="waiting_for_cancellation" @selected($order->status == 'waiting_for_cancellation')>Chờ hủy</option>
                                                            <option value="rejected" @selected($order->status == 'rejected')>Từ chối hủy</option>
                                                        </select>

                                                        </td>
                                                        <td>
                                                            @switch($order->payment_status)
                                                                @case('pending')
                                                                    Chờ xác nhận
                                                                    @break
                                                                @case('completed')
                                                                    Hoàn thành
                                                                    @break
                                                                @case('failed')
                                                                    Lỗi
                                                                    @break
                                                                @case('cancelled')
                                                                    Hủy
                                                                    @break
                                                                @default
                                                                    Không xác định
                                                            @endswitch
                                                        </td>
                                                        <td>
                                                            <select name="refund_status" class="form-control"
                                                                id="">
                                                                <option value="pending" @selected($order->refund_status == 'pending')>
                                                                    Chờ xác nhân
                                                                </option>
                                                                <option value="completed" @selected($order->refund_status == 'completed')>
                                                                    Hoàn thành
                                                                </option>
                                                                <option value="failed" @selected($order->refund_status == 'failed')>
                                                                    lỗi
                                                                </option>
                                                                <option value="cancelled" @selected($order->refund_status == 'cancelled')>
                                                                    Hủy
                                                                </option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.orders.detail', $order->id) }}"
                                                                class="btn btn-primary shadow btn-xs sharp me-1">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
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
