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
                                {{-- @include('admin.components.breadcrumbs', [
                                    'title' => $title['index'] ?? '',
                                    'breadcrumbs' => $breadcrumbs
                                ]) --}}
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
                                    {{ __('language.admin.payments.filter') }}
                                </div>
                            </div>
                            <div class="cm-content-body form excerpt" style="">
                                <form action="{{ route('admin.payments.index') }}" method="GET">
                                    @if(request()->system_id > 0)
                                        <input type="hidden" name="system_id" value="{{ request()->system_id }}">
                                    @endif
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6">
                                                <label class="form-label">{{ __('language.admin.payments.filterName') }}</label>
                                                <input type="text" name="name" value="{{ request()->name ?? '' }}" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1"
                                                       placeholder="{{ __('language.admin.payments.inputName') }}">
                                            </div>
                                            <div class="col-xl-2  col-sm-4 mb-3 mb-xl-0">
                                                <label class="form-label">{{ __('language.admin.payments.active') }}</label>
                                                <select name="active" class="form-control">
                                                    <option value="" {{ request()->active === null ? 'selected' : '' }}>-- {{ __('language.admin.payments.select') }} --</option>
                                                    <option value="1" {{ request()->active == '1' ? 'selected' : '' }}>{{ __('language.admin.payments.show') }}</option>
                                                    <option value="0" {{ request()->active == '0' ? 'selected' : '' }}>{{ __('language.admin.payments.hidden') }}</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-3 col-sm-6 align-self-end">
                                                <div>
                                                    <button class="btn btn-primary me-2" title="{{ __('language.admin.payments.search') }}" type="submit">
                                                        <i class="fa-sharp fa-solid fa-filter me-2"></i>
                                                        {{ __('language.admin.payments.search') }}
                                                    </button>
                                                    <button class="btn btn-danger light" title="{{ __('language.admin.payments.removeValue') }}" type="reset">
                                                        {{ __('language.admin.payments.removeValue') }}
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
                                <h4 class="card-title">{{ $title['index'] ?? __('language.admin.payments.list') }}</h4>
                                <div class="compose-btn">
                                    <a href="{{ route('admin.payments.create', request()->system_id > 0 ? 'system_id=' . request()->system_id : '') }}">
                                        <button class="btn btn-secondary btn-sm light">
                                            + {{ __('language.admin.payments.add') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if(isset($_GET['system_id']))
                                        @if(!$systemBySystemId->isEmpty())
                                            <table class="table table-responsive-md" id="data-table">
                                                <thead>
                                                <tr>
                                                    <th style="width:80px;">#</th>
                                                    <th>{{ __('language.admin.payments.folder') }}</th>
                                                    <th>{{ __('language.admin.payments.nameSystem') }}</th>
                                                    <th>{{ __('language.admin.payments.value') }}</th>
                                                    <th>{{ __('language.admin.payments.order') }}</th>
                                                    <th>{{ __('language.admin.payments.active') }}</th>
                                                    <th>{{ __('language.admin.payments.action') }}</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($systemBySystemId as $key => $system)
                                                    <tr>
                                                        <td>
                                                            <strong class="text-black">{{ $key + 1 }}</strong>
                                                        </td>
                                                        <td>
                                                            @if ($system->childs->count() > 0)
                                                                <i class="nav-icon fas fa-folder"></i>
                                                            @else
                                                                <i class="nav-icon fas fa-file"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.payments.index') . '?system_id=' . $system->id }}">
                                                                <b>{{ $system->name }}</b>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            {{ $system->description }}
                                                        </td>
                                                        <td>
                                                            <input type="number" min="0" name="order"
                                                                   value="{{ $system->order }}"
                                                                   data-id="{{ $system->id }}"
                                                                   data-url="{{ route('admin.payments.changeOrder') }}"
                                                                   class="form-control changeOrder" style="width: 67px;">
                                                        </td>
                                                        <td>
                                                            <button
                                                                class="toggle-active-btn btn btn-xs {{ $system->active == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                                data-id="{{ $system->id }}"
                                                                data-status="{{ $system->active }}"
                                                                data-url="{{ route('admin.payments.changeActive') }}">
                                                                {{ $system->active == 1 ? __('language.admin.payments.show') : __('language.admin.payments.hidden') }}
                                                            </button>
                                                        </td>

                                                        <td>
                                                            <div
                                                                style="padding-right: 20px; display: flex; justify-content: end">
                                                                <a href="{{ route('admin.payments.edit', $system->id) }}{{ request()->system_id > 0 ? '?system_id=' . request()->system_id : '' }}"
                                                                   class="btn btn-primary shadow btn-xs sharp me-1">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('admin.payments.delete', $system->id) }}{{ request()->system_id > 0 ? '?system_id=' . request()->system_id : '' }}"
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
                                                    <h3 class="text-center">{{ __('language.admin.payments.noData') }}</h3>
                                                </div>
                                            </div>
                                        @endif
                                    @else
                                        @if(!$systemByType0->isEmpty())
                                            <table class="table table-responsive-md" id="data-table">
                                                <thead>
                                                <tr>
                                                    <th style="width:80px;">#</th>
                                                    <th>{{ __('language.admin.payments.folder') }}</th>
                                                    <th>{{ __('language.admin.payments.nameSystem') }}</th>
                                                    <th>{{ __('language.admin.payments.value') }}</th>
                                                    <th>{{ __('language.admin.payments.order') }}</th>
                                                    <th>{{ __('language.admin.payments.active') }}</th>
                                                    <th>{{ __('language.admin.payments.action') }}</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($systemByType0 as $key => $system)
                                                    <tr>
                                                        <td>
                                                            <strong class="text-black">{{ $key + 1 }}</strong>
                                                        </td>
                                                        <td>
                                                            @if ($system->childs->count() > 0)
                                                                <i class="nav-icon fas fa-folder"></i>
                                                            @else
                                                                <i class="nav-icon fas fa-file"></i>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.payments.index') . '?system_id=' . $system->id }}">
                                                                <b>{{ $system->name }}</b>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            {{ $system->description }}
                                                        </td>
                                                        <td>
                                                            <input type="number" min="0" name="order"
                                                                   value="{{ $system->order }}"
                                                                   data-id="{{ $system->id }}"
                                                                   data-url="{{ route('admin.payments.changeOrder') }}"
                                                                   class="form-control changeOrder" style="width: 67px;">
                                                        </td>
                                                        <td>
                                                            <button
                                                                class="toggle-active-btn btn btn-xs {{ $system->active == 1 ? 'btn-success' : 'btn-danger' }} text-white"
                                                                data-id="{{ $system->id }}"
                                                                data-status="{{ $system->active }}"
                                                                data-url="{{ route('admin.payments.changeActive') }}">
                                                                {{ $system->active == 1 ? __('language.admin.payments.show') : __('language.admin.payments.hidden') }}
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <div
                                                                style="padding-right: 20px; display: flex; justify-content: end">
                                                                <a href="{{ route('admin.payments.edit', $system->id) }}"
                                                                   class="btn btn-primary shadow btn-xs sharp me-1">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form action="{{ route('admin.payments.delete', $system->id) }}"
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
                                                    <h3 class="text-center">{{ request()->name ? __('language.admin.payments.noDataSearch') . request()->name : __('language.admin.payments.noData') }}</h3>
                                                </div>
                                            </div>
                                        @endif
                                    @endif

                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="text-center">
                                            @if(!empty($_GET['system_id']))
                                                {{ $systemBySystemId->links('pagination::bootstrap-4') }}
                                            @else
                                                {{ $systemByType0->links('pagination::bootstrap-4') }}
                                            @endif
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

@endsection