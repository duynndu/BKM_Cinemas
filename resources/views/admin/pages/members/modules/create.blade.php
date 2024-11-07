@extends('admin.layouts.main')

@section('title', __('language.admin.members.modules.titleAdd'))

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
                                    'breadcrumbs' => $breadcrumbs
                                ])
                            </nav>
                        </div>
                    </div>
                </div>
                <form method="post" action="{{ route('admin.modules.store') }}" class="product-vali" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label class="form-label mb-2">{{ __('language.admin.members.modules.name') }}</label>
                                            <input type="text" id="name" name="module[name]" class="form-control"
                                                   placeholder="{{ __('language.admin.members.modules.inputName') }}" value="{{ old('module.name') }}">
                                            @error('module.name')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="form-label mb-2">{{ __('language.admin.members.modules.permissions') }}</label>
                                        <select id="multi-value-select" name="permissions[]" style="width:100%;" multiple="multiple">
                                            @if($data['permissions']->isNotEmpty())
                                                @foreach($data['permissions'] as $permission)
                                                    <option value="{{ $permission->id ?? '' }}">{{ $permission->name ?? '' }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('permissions')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label mb-2">{{ __('language.admin.members.modules.description') }}</label>
                                        <textarea class="form-control" cols="20" rows="5" name="module[description]">{{ old('module.description') }}</textarea>
                                        @error('module.description')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="right-sidebar-sticky">
                                <div class="mt-3 d-flex justify-content-start gap-2">
                                    <button type="submit" class="btn btn-success">{{ __('language.admin.members.modules.createNew') }}</button>
                                    <a href="{{ route('admin.modules.index') }}" class="btn btn-warning">{{ __('language.admin.members.modules.back') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@section('js')
@endsection
