@extends('admin.layouts.main')

@section('title', __('language.admin.members.permissions.titleEdit'))

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
                <form method="post" action="{{ route('admin.permissions.update', $data['permission']->id) }}" class="product-vali" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card h-auto">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label class="form-label mb-2">{{ __('language.admin.members.permissions.name') }}</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                   placeholder="{{ __('language.admin.members.permissions.inputName') }}" value="{{ old('name', $data['permission']->name) }}">
                                            @error('name')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label class="form-label mb-2">{{ __('language.admin.members.permissions.selectModule') }}</label><br>
                                            <select class="form-control w-50" name="module_id">
                                                <option value="" selected>-- {{ __('language.admin.members.modules.select') }} --</option>
                                                @if($data['modules']->isNotEmpty())
                                                    @foreach($data['modules'] as $module)
                                                        <option
                                                            @selected($data['permission']->module_id == $module->id)
                                                            value="{{ $module->id }}">{{ $module->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('module_id')
                                            <div class="mt-2">
                                                <span class="text-red">{{ $message }}</span>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label mb-2">{{ __('language.admin.members.permissions.value') }}</label>
                                        <input type="text" class="form-control"
                                               placeholder="{{ __('language.admin.members.permissions.inputValue') }}" name="value" value="{{ old('value', $data['permission']->value) }}">
                                        @error('value')
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
                                    <button type="submit" class="btn btn-success">{{ __('language.admin.members.modules.editSave') }}</button>
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
