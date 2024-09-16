@extends('admin.layouts.main')

@section('title', $title['index'] ?? 'Danh sách nội dung')

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
                                    'title' => $title['index'] ?? '',
                                    'breadcrumbs' => $breadcrumbs
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
                                    <i class="fa-sharp fa-solid fa-filter me-2"></i>
                                    {{ __('language.admin.systems.filter') }}
                                </div>
                            </div>
                            <div class="cm-content-body form excerpt" style="">
                                <form action="{{ route('admin.contacts.index') }}" method="GET">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-2 col-sm-6">
                                                <label class="form-label">{{ __('language.admin.contacts.name') }}</label>
                                                <input type="text" name="name" value="{{ request()->name ?? '' }}" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1"
                                                       placeholder="{{ __('language.admin.contacts.inputName') }}">
                                            </div>
                                            <div class="col-xl-2 col-sm-6">
                                                <label class="form-label">{{ __('language.admin.contacts.email') }}</label>
                                                <input type="text" name="email" value="{{ request()->email ?? '' }}" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1"
                                                       placeholder="{{ __('language.admin.contacts.inputEmail') }}">
                                            </div>
                                            <div class="col-xl-2 col-sm-6">
                                                <label class="form-label">{{ __('language.admin.contacts.phone') }}</label>
                                                <input type="text" name="phone" value="{{ request()->phone ?? '' }}" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1"
                                                       placeholder="{{ __('language.admin.contacts.inputPhone') }}">
                                            </div>
                                            <div class="col-xl-2 col-sm-4 mb-3 mb-xl-0">
                                                <label class="form-label">{{ __('language.admin.contacts.active') }}</label>
                                                <select name="status" class="form-control">
                                                    <option value="" {{ request()->status === null ? 'selected' : '' }}>--{{ __('language.admin.contacts.select') }}--</option>
                                                    <option value="0" {{ request()->status == '0' ? 'selected' : '' }}>{{ __('language.admin.contacts.contactNotProcessed') }}</option>
                                                    <option value="1" {{ request()->status == '1' ? 'selected' : '' }}>{{ __('language.admin.contacts.contactProcessed') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 align-self-end">
                                                <div>
                                                    <button class="btn btn-primary me-2" title="{{ __('language.admin.contacts.search') }}" type="submit">
                                                        <i class="fa-sharp fa-solid fa-filter me-2"></i>
                                                        {{ __('language.admin.contacts.search') }}
                                                    </button>
                                                    <button class="btn btn-danger light" title="{{ __('language.admin.contacts.removeValue') }}" type="reset">
                                                        {{ __('language.admin.contacts.removeValue') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('language.admin.contacts.list') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if(!$data->isEmpty())
                                        <table class="table table-responsive-md" id="data-table">
                                            <thead>
                                            <tr>
                                                <th style="width:80px;">#</th>
                                                <th>{{ __('language.admin.contacts.title') }}</th>
                                                <th>{{ __('language.admin.contacts.user') }}</th>
                                                <th>{{ __('language.admin.contacts.date') }}</th>
                                                <th>{{ __('language.admin.contacts.content') }}</th>
                                                <th>{{ __('language.admin.contacts.status') }}</th>
                                                <th>{{ __('language.admin.contacts.action') }}</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($data as $key => $item)
                                                <tr>
                                                    <td>
                                                        <strong class="text-black">{{ $key + 1 }}</strong>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li class="mt-2">Họ và tên: {{ $item->name }}</li>
                                                            <li class="mt-2">Email: {{ $item->email }}</li>
                                                            <li class="mt-2">Số điện thoại: {{ $item->phone }}</li>
                                                            <li class="mt-2">Địa chỉ: {{ $item->address }}</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <b>{{ !empty($item->user_id) ? ($item->user->name ?? 'Người dùng không hợp lệ') : 'Khách vãng lai' }}</b>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>{{ date('d-m-Y', strtotime($item->created_at)) }}</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        {{ $item->content }}
                                                    </td>
                                                    <td>
                                                        <button
                                                            class="btnStatus btn btn-xs {{ $item->status == 0 ? 'btn-danger' : 'btn-success' }} text-white"
                                                            data-id="{{ $item->id }}"
                                                            data-status="{{ $item->status }}"
                                                            data-url="{{ route('admin.contacts.changeStatus') }}">
                                                            {{ $item->status == 0 ? __('language.admin.contacts.contactNotProcessed') : __('language.admin.contacts.contactProcessed') }}
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <div style="padding-right: 20px; display: flex; justify-content: end">
                                                            <form action="{{ route('admin.contacts.delete', $item->id) }}"
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
                                    @else
                                        <div class="d-flex justify-content-center align-items-center p-5">
                                            <div>
                                                <h3 class="text-center">{{ request()->name ? __('language.admin.contacts.noDataSearch') . request()->name : __('language.admin.contacts.noData') }}</h3>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            {{ $data->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
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
    <script src="{{ asset('js/admin/ajaxs/change-contact.js') }}"></script>
@endsection
