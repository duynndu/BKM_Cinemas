@extends('admin.layouts.main')

@section('title', 'Danh sách diễn viên')

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
                                        <form action="{{ route('admin.actors.index') }}" method="GET">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-3 col-sm-6">
                                                        <label class="form-label">Tên diễn viên</label>
                                                        <input id="" value="{{ request()->name }}" name="name"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="Nhập tên diễn viên">
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
                                                                <option @selected(request()->order_with == 'birthDateASC') value="birthDateASC">
                                                                    Tuổi tăng dần
                                                                </option>
                                                                <option @selected(request()->order_with == 'birthDateDESC') value="birthDateDESC">
                                                                    Tuổi giảm dần
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                        <label class="form-label">Quốc tịch</label>
                                                        <input id="" value="{{ request()->nationality }}" name="nationality"
                                                            type="text" class="form-control mb-xl-0 mb-3"
                                                            placeholder="Nhập quốc tịch">
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
                                <h4 class="card-title">Danh sách diễn viên</h4>
                                <div class="compose-btn">
                                    <a href="{{ route('admin.actors.create') }}">
                                        <button class="btn btn-secondary btn-sm light">
                                            + Thêm mới
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($data->count() > 0)
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="box-delete-item">
                                                            <input type="checkbox" id="item-all-checked">
                                                            <button id="btn-delete-all"
                                                                data-url="{{ route('admin.actors.deleteItemMultipleChecked') }}"
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
                                                    <th style="width:80px;">#</th>
                                                    <th>Tên</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Ngày sinh</th>
                                                    <th>Quốc tịch</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $actor)
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" data-id="{{ $actor->id }}"
                                                                class="item-checked">
                                                        </td>
                                                        <td>
                                                            <strong class="text-black">{{ ($data->currentPage() - 1) * $data->perPage() + $key + 1 }}</strong>
                                                        </td>
                                                        <td>
                                                            <b>
                                                                <a href="{{ route('admin.actors.index') }}">
                                                                    {{ $actor->name }}
                                                                </a>
                                                            </b>
                                                        </td>
                                                        <td>
                                                            @if (!empty($actor->image) && file_exists(public_path($actor->image)))
                                                                <img src="{{ asset($actor->image) }}"
                                                                    style="width:80px; height:100px; object-fit:cover">
                                                            @else
                                                                <img src="#" alt="No image"
                                                                    style="width:80px; height:100px; object-fit:cover">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <b>
                                                                {{ $actor->birth_date }}
                                                            </b>
                                                        </td>
                                                        <td>
                                                            <b>
                                                                {{ $actor->nationality }}
                                                            </b>
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="padding-right: 20px; display: flex; justify-content: end">
                                                                <a href="{{ route('admin.actors.edit', $actor->id) }}"
                                                                    class="btn btn-primary shadow btn-xs sharp me-1">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('admin.actors.delete', $actor->id) }}"
                                                                    class="formDelete" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button
                                                                        class="btn btn-danger shadow btn-xs sharp me-1 call-ajax btn-remove btnDelete"
                                                                        data-type="DELETE" href="">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </form>
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