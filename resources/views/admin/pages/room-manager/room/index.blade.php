@extends('admin.layouts.main')

@section('title', $title['index'] ?? null)

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
                            <a href="{{ route('rooms.create') }}">
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
                                        <th>Folder</th>
                                        <th>Tên nội dung</th>
                                        <th>Giá trị</th>
                                        <th>Số thứ tự</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <strong class="text-black">1</strong>
                                    </td>
                                    <td>
                                        <i class="nav-icon fas fa-file"></i>
                                    </td>
                                    <td>
                                        <a href="">
                                            Nội dung trang chủ
                                        </a>
                                    </td>
                                    <td>
                                        Nội dung ở đây
                                    </td>
                                    <td>
                                        <button class="toggle-active-btn btn btn-xs btn-success text-white" data-id="11"
                                                data-status="1"
                                                data-url="">
                                            Hiển thị
                                        </button>
                                    </td>
                                    <td>
                                        <button class="toggle-hot-btn btn btn-xs btn-success text-white" data-id="11"
                                                data-status="1"
                                                data-url="">
                                            Nổi bật
                                        </button>
                                    </td>

                                    <td>
                                        <div>
                                            <a href="" class="btn btn-primary shadow btn-xs sharp me-1">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger shadow btn-xs sharp me-1 call-ajax btn-remove"
                                               data-type="DELETE" href="">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong class="text-black">6</strong>
                                    </td>
                                    <td>
                                        <i class="nav-icon fas fa-folder"></i>
                                    </td>
                                    <td>
                                        <a href="">
                                            Nội dung đầu trang
                                        </a>
                                    </td>
                                    <td>
                                        Nội dung ở đây
                                    </td>
                                    <td>
                                        <button class="toggle-active-btn btn btn-xs btn-success text-white" data-id="16"
                                                data-status="1"
                                                data-url="">
                                            Hiển thị
                                        </button>
                                    </td>
                                    <td>
                                        <button class="toggle-hot-btn btn btn-xs btn-success text-white" data-id="16"
                                                data-status="1"
                                                data-url=""
                                                fdprocessedid="dopdx9">
                                            Nổi bật
                                        </button>
                                    </td>

                                    <td>
                                        <div>
                                            <a href="" class="btn btn-primary shadow btn-xs sharp me-1">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger shadow btn-xs sharp me-1 call-ajax btn-remove"
                                               data-type="DELETE"
                                               href="">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div>
                                <div class="text-center">

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
