<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">{{ __('language.admin.dashboards.name') }}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.dashboard') }}">{{ __('language.admin.dashboards.name') }}</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">settings</i>
                    <span class="nav-text">{{ __('language.admin.systems.title') }}</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void(0);"
                           aria-expanded="false">{{ __('language.admin.systems.name') }}</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.systems.index') }}">{{ __('language.admin.systems.listSidebar') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.systems.create') }}">{{ __('language.admin.systems.createSidebar') }}</a>
                            </li>
                        </ul>
                    </li>
                    @if(!empty($systemsByType0))
                        @foreach($systemsByType0 as $key => $system)
                            <li>
                                <a class="has-arrow" href="javascript:void(0);"
                                   aria-expanded="false">{{ $system->name ?? null }}</a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="{{ route('admin.systems.index') . '?system_id=' . $system->id }}">{{ __('language.admin.systems.listSidebar') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.systems.create') . '?system_id=' . $system->id }}">{{ __('language.admin.systems.createSidebar') }}</a>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </li>

            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">extension</i>
                    <span class="nav-text">{{ __('language.admin.interfaces.title') }}</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.menus.index') }}" aria-expanded="false">{{ __('language.admin.interfaces.menus.title') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pages.index') }}" aria-expanded="false">{{ __('language.admin.interfaces.pages.title') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.blocks.index') }}" aria-expanded="false">{{ __('language.admin.interfaces.blocks.title') }}</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">article</i>
                    <span class="nav-text">{{ __('language.admin.posts.title') }}</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.categoryPosts.index') }}" aria-expanded="false">{{ __('language.admin.categories.title') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.posts.index') }}" aria-expanded="false">{{ __('language.admin.posts.title') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.tags.index') }}" aria-expanded="false">{{ __('language.admin.tags.title') }}</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons">movie</i>
                    <span class="nav-text">Quản lý phòng chiếu</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.rooms.index') }}" aria-expanded="false">Phòng chiếu</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.seat-layouts.index') }}" aria-expanded="false">Sơ đồ ghế</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.seat-types.index') }}" aria-expanded="false">Loại ghế</a>
                    </li>
                </ul>
            </li>
{{--            <li>--}}
{{--                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">--}}
{{--                    <i class="material-icons">person</i>--}}
{{--                    <span class="nav-text">{{ __('language.admin.members.title') }}</span>--}}
{{--                </a>--}}
{{--                <ul aria-expanded="false">--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" aria-expanded="false">{{ __('language.admin.members.user') }}</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('admin.roles.index') }}" aria-expanded="false">{{ __('language.admin.members.roles.title') }}</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" aria-expanded="false">{{ __('language.admin.members.module') }}</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" aria-expanded="false">{{ __('language.admin.members.permission') }}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="{{ route('admin.contacts.index') }}" aria-expanded="false">--}}
{{--                    <i class="material-icons">assignment_ind</i>--}}
{{--                    <span class="nav-text">{{ __('language.admin.contacts.title') }}</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">--}}
{{--                    <i class="material-icons">tune</i>--}}
{{--                    <span class="nav-text">{{ __('language.admin.settings.title') }}</span>--}}
{{--                </a>--}}
{{--                <ul aria-expanded="false">--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" aria-expanded="false">{{ __('language.admin.settings.general_settings') }}</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('admin.languages.index') }}" aria-expanded="false">{{ __('language.admin.settings.languages.title') }}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
