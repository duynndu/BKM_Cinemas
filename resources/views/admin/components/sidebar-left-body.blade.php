<div class="file-left-body">
    <div class="email-left-body">
        <div class="email-left-box border-end  dlab-scroll" id="email-left">
            <!-- If -->
            @if(request()->routeIs('admin.pages.index'))
                <div class="p-0">
                    <a href="{{ route('admin.pages.create') }}" class="btn btn-dark btn-block"><i
                            class="fa-solid fa-plus me-2"></i>{{ __('language.admin.interfaces.pages.add') }}</a>
                </div>
                <div class="mail-list rounded ">
                    <a href="javascript:void(0);" class="list-group-item active"><i
                            class="fa-regular fa-file align-middle"></i>{{ __('language.admin.interfaces.pages.allPage') }}</a>
                </div>
            @else
                <div class="p-0">
                    <button data-bs-toggle="modal"
                            data-bs-target="#modalAddBlock" class="btn btn-dark btn-block"><i
                            class="fa-solid fa-plus me-2"></i>{{ __('language.admin.interfaces.blocks.add') }}
                    </button>
                </div>
                <div class="mail-list rounded ">
                    <a href="{{ route('admin.blocks.index') }}"
                       class="list-group-item {{ request()->routeIs('admin.blocks.index') ? 'active' : '' }}"><i
                            class="fa-regular fa-file align-middle"></i>{{ __('language.admin.interfaces.blocks.allBlock') }}</a>
                </div>
                <div class="mail-list rounded" style="margin-top: 12px !important;">
                    <a href="javascript:void(0);"
                       class="list-group-item {{ request()->routeIs('admin.blockTypes.index') ? 'active' : '' }}">
                        <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 8.25L11 13.75L16.5 8.25" stroke="#666666" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        {{ __('language.admin.interfaces.blockTypes.blockType_sample') }}
                    </a>
                </div>
                <div class="mail-list rounded overflow-hidden mt-2">
                    <a href="{{ route('admin.blockTypes.index') }}"
                       class="list-group-item change {{ request()->routeIs('admin.blockTypes.index') ? 'active' : '' }}">{{ __('language.admin.interfaces.blockTypes.list') }}</a>
                    <a href="{{ route('admin.blockTypes.create') }}" class="list-group-item change">{{ __('language.admin.interfaces.blockTypes.create') }}</a>
                </div>

            @endif
            <!-- End If -->
        </div>
    </div>
</div>

<!-- Modal Add Block -->
@if(!request()->routeIs('admin.pages.index'))
    <div class="modal fade bd-example-modal-lg" id="modalAddBlock" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('language.admin.interfaces.blocks.information') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <form action="{{ route('admin.blocks.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label mb-2">{{ __('language.admin.interfaces.blocks.name') }}</label>
                                <input type="text" id="name" name="name" class="form-control"
                                       placeholder="{{ __('language.admin.interfaces.blocks.inputName') }}" value="{{ old('name') }}">
                                @error('name')
                                <div class="mt-2">
                                    <span class="text-red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label mb-2">{{ __('language.admin.interfaces.blocks.slug') }}</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                       placeholder="{{ __('language.admin.interfaces.blocks.inputSlug') }}" value="{{ old('slug') }}">
                                @error('slug')
                                <div class="mt-2">
                                    <span class="text-red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label">{{ __('language.admin.interfaces.blocks.selectBlock') }}</label><br>
                                <select class="form-control" name="page_id" id="page_id">
                                    <option selected>-- {{ __('language.admin.interfaces.blocks.select') }} --</option>
                                    @if(!empty($pages))
                                        @foreach($pages as $page)
                                            <option value="{{ $page->id }}">{{ $page->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('page_id')
                                <div class="mt-2">
                                    <span class="text-red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label class="form-label">{{ __('language.admin.interfaces.blocks.typeBlock') }}</label><br>
                                <select class="form-control" name="block_type_id" id="block_type_id">
                                    <option selected>-- {{ __('language.admin.interfaces.blocks.select') }} --</option>
                                    @if(!empty($blockTypes))
                                        @foreach($blockTypes as $blockType)
                                            <option value="{{ $blockType->id }}">{{ $blockType->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('block_type_id')
                                <div class="mt-2">
                                    <span class="text-red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label">{{ __('language.admin.interfaces.blocks.language') }}</label><br>
                                <select class="form-control" multiple name="language_id[]" id="language">
                                    <option value=" " disabled>-- {{ __('language.admin.interfaces.blocks.select') }} --</option>
                                    @if(!empty($languages))
                                        @foreach($languages as $language)
                                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('language_id')
                                <div class="mt-2">
                                    <span class="text-red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label class="form-label">{{ __('language.admin.interfaces.blocks.order') }}</label><br>
                                <input class="form-control" value="0"
                                       type="number" min="0" id="order"
                                       name="order">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label">{{ __('language.admin.interfaces.blocks.active') }}</label><br>
                                <div class="row mt-2">
                                    <div class="col-sm-6">
                                        <input class="form-check-input" type="radio" id="active"
                                               name="active"
                                               value="1" checked>
                                        <label class="form-check-label" for="active">
                                            {{ __('language.admin.interfaces.blocks.show') }}
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-check-input" value="0" type="radio"
                                               id="active"
                                               name="active">
                                        <label class="form-check-label" for="active">
                                            {{ __('language.admin.interfaces.blocks.hidden') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">{{ __('language.admin.interfaces.blocks.cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('language.admin.interfaces.blocks.create') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
