@extends('admin.layouts.main')

@section('title', $title['index'] ?? null)

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
@endsection
@vite(['resources/js/app.js', 'resources/css/app.css'])

@section('content')
<div class="container-fluid">
  @if (session('message'))
  <x-alert :message="session('message')" :type="session('type')" />
  @endif
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
            <a href="{{ route('seat-layouts.create') }}">
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
                  <th>Tên</th>
                  <th>Hình ảnh</th>
                  <th>Số cột</th>
                  <th>Số hàng</th>
                  <th>Ghế</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
                @foreach($seat_layouts as $seat_layout)
                <tr>
                  <td><strong class="text-black">{{ $loop->iteration }}</strong></td>
                  <td>{{ $seat_layout->name }}</td>
                  <td>
                    @if($seat_layout->image)
                    <img src="{{ asset('storage/' . $seat_layout->image) }}" alt="{{ $seat_layout->name }}" width="100">
                    @else
                    Không có hình ảnh
                    @endif
                  </td>
                  <td>{{ $seat_layout->col_count }}</td>
                  <td>{{ $seat_layout->row_count }}</td>
                  <td>
                    <i class="fa fa-chair"></i> {{ $seat_layout->col_count * $seat_layout->row_count }} ghế
                  </td>
                  <td>
                    <div>
                      <a href="{{ route('seat-layouts.edit', $seat_layout->id) }}"
                        class="btn btn-primary shadow btn-xs sharp me-1">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <x-destroy-button route="seat-layouts.destroy" id="{{ $seat_layout->id }}" />
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div>
              <div class="text-center">
                {{ $seat_layouts->links('vendor.pagination.bootstrap-5') }}
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