@extends('admin.layouts.main')

@section('title', 'Danh sách vé')

@section('css')

@endsection

@vite(['resources/js/app.js', 'resources/css/app.css'])

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
                                        <form action="{{ route('admin.orders.index') }}" method="GET">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <label class="form-label">Tên mã</label>
                                                        <input id="" value="{{ request()->code }}" name="code"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="Nhập mã đơn">
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">Trạng thái vé</label>
                                                        <select name="status" class="form-control">
                                                            <option value="">
                                                                --chọn--
                                                            </option>
                                                            <option @selected(request()->status == 'completed') value="completed">
                                                                Hoàn thành
                                                            </option>
                                                            <option @selected(request()->status == 'cancelled') value="cancelled">
                                                                Hủy
                                                            </option>
                                                            <option @selected(request()->status == 'waiting_for_cancellation')
                                                                value="waiting_for_cancellation">
                                                                Chờ hủy
                                                            </option>
                                                            <option @selected(request()->status == 'rejected') value="rejected">
                                                                Từ chối hủy
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">Trạng thái thanh toán</label>
                                                        <select name="payment_status" class="form-control">
                                                            <option value="">
                                                                --chọn--
                                                            </option>
                                                            <option @selected(request()->payment_status == 'pending') value="pending">
                                                                Chờ xác nhận
                                                            </option>
                                                            <option @selected(request()->payment_status == 'completed') value="completed">
                                                                Hoàn thành
                                                            </option>
                                                            <option @selected(request()->payment_status == 'failed') value="failed">
                                                                Lỗi
                                                            </option>
                                                            <option @selected(request()->payment_status == 'cancelled') value="cancelled">
                                                                Hủy
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">Trạng thái hoàn tiền</label>
                                                        <select name="refund_status" class="form-control">
                                                            <option value="">
                                                                --chọn--
                                                            </option>
                                                            <option @selected(request()->refund_status == 'pending') value="pending">
                                                                Chờ hoàn tiền
                                                            </option>
                                                            <option @selected(request()->refund_status == 'completed') value="completed">
                                                                Hoàn thành
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">Nhận vé</label>
                                                        <select name="get_tickets" class="form-control">
                                                            <option value="">
                                                                --chọn--
                                                            </option>
                                                            <option @selected(request()->get_tickets == 1) value="1">
                                                                Đã nhận
                                                            </option>
                                                            <option @selected(request()->get_tickets == 0) value="0">
                                                                Chưa nhận
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
                                                    <th>Nhận vé</th>
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
                                                            @if ($order->status == 'cancelled' || $order->status == null || $order->status == 'completed' || $order->status == 'rejected')
                                                                <b id="status-{{ $order->id }}">
                                                                    @switch($order->status)
                                                                        @case('completed')
                                                                            Hoàn thành
                                                                        @break

                                                                        @case('rejected')
                                                                            Từ chối hủy
                                                                        @break

                                                                        @case('cancelled')
                                                                            Hủy
                                                                        @break

                                                                        @default
                                                                            Không xác định
                                                                    @endswitch
                                                                </b>
                                                            @else
                                                                <select name="status" id="status-{{ $order->id }}"
                                                                    class="form-control order_status"
                                                                    data-url="{{ route('api.orders.changeStatus', $order->id) }}">
                                                                    <option value="cancelled" @selected($order->status == 'cancelled')>
                                                                        Hủy
                                                                    </option>
                                                                    <option value="waiting_for_cancellation"
                                                                        @selected($order->status == 'waiting_for_cancellation')>
                                                                        Chờ hủy
                                                                    </option>
                                                                    <option value="rejected" @selected($order->status == 'rejected')>
                                                                        Từ chối hủy
                                                                    </option>
                                                                </select>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <b id="payment_status-{{ $order->id }}">
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
                                                            </b>
                                                        </td>
                                                        <td>
                                                            @if (is_null($order->refund_status))
                                                                <b id="refund_status-{{ $order->id }}">Không có</b>
                                                            @elseif ($order->refund_status == 'completed')
                                                                <b id="refund_status-{{ $order->id }}">Hoàn tiền thành
                                                                    công</b>
                                                            @else
                                                                <select name="refund_status"
                                                                    data-url="{{ route('api.orders.changeRefundStatus', $order->id) }}"
                                                                    class="form-control refund_status"
                                                                    id="refund_status-{{ $order->id }}">
                                                                    <option value="pending" @selected($order->refund_status == 'pending')>
                                                                        Chờ hoàn tiền
                                                                    </option>
                                                                    <option value="completed" @selected($order->refund_status == 'completed')>
                                                                        Hoàn tiền
                                                                    </option>
                                                                </select>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if (
                                                                $order->refund_status == 'completed' ||
                                                                    $order->status == 'cancelled' ||
                                                                    $order->status == 'waiting_for_cancellation' ||
                                                                    $order->get_tickets == 1)
                                                                <b id="get_tickets-{{ $order->id }}">
                                                                    {{ $order->get_tickets == 1 ? 'Đã nhận' : 'Chưa nhận' }}
                                                                </b>
                                                            @else
                                                                <button id="get_tickets-{{ $order->id }}"
                                                                    class="get_tickets btn btn-xs btn-success text-white"
                                                                    data-id="{{ $order->id }}"
                                                                    data-url="{{ route('admin.orders.changeGetTickets', $order->id) }}">
                                                                    Nhận vé
                                                                </button>
                                                            @endif
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
    <script type="module" src=" {{ asset('/js/admin/ajaxs/order.js') }} "></script>
@endsection
