@extends('admin.layouts.main')

@section('title', $title['index'] ?? 'Danh sách phòng chiếu')

@section('css')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <x-page-titles />
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh Sách {{ $title['index'] ?? null }}</h4>
                    <div class="compose-btn">
                        <a href="{{ route('admin.rooms.create') }}">
                            <button class="btn btn-secondary btn-sm light" fdprocessedid="5mkvtw">
                                + Thêm mới
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md" id="data-table">
                            <thead>
                                <tr>
                                    <th style="width:80px;">#</th>
                                    <th>Tên phòng</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá cơ bản</th>
                                    <th>Số cột</th>
                                    <th>Số hàng</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody class="fs-4">
                                @foreach($rooms as $index => $room)
                                    <tr>
                                        <td>
                                            <strong
                                                class="text-black">{{ ($rooms->currentPage() - 1) * $rooms->perPage() + $index + 1 }}
                                            </strong>
                                        </td>
                                        <td>
                                            <a class="fw-bolder " href="{{ route('admin.rooms.edit', $room->id) }}">
                                                {{ $room->room_name }}
                                            </a>
                                        </td>
                                        <td>
                                            @if($room->image)
                                            <img width="100" src="{{ Storage::url($room->image) }}" alt="{{ $room->room_name }}">
                                            @else
                                            Không có hình ảnh
                                            @endif
                                        </td>
                                        <td>{{ number_format($room->base_price, 0, ',', '.') }} VNĐ</td>
                                        <td>{{ $room->col_count }}</td>
                                        <td>{{ $room->row_count }}</td>
                                        <td>
                                            <div>
                                                <a href="{{ route('admin.rooms.edit', $room->id) }}" class="btn btn-primary shadow btn-xs sharp me-1">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <x-destroy-button route="admin.rooms.destroy" id="{{ $room->id }}" />
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            <div class="text-center">
                                {{ $rooms->links('vendor.pagination.bootstrap-5') }}
                            </div>
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
