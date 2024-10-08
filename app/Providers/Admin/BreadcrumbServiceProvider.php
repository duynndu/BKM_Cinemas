<?php

namespace App\Providers\Admin;

use App\Models\System;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('admin.*', function ($view) {
            $routeName = Route::currentRouteName();

            $breadcrumbs = [
                ['title' => __('language.admin.home'), 'url' => route('admin.dashboard')],
            ];

            switch ($routeName) {
                // Dashboard
                case 'admin.dashboard':
                    $breadcrumbs[] = ['title' => __('language.admin.dashboard'), 'url' => route('admin.dashboard')];
                    break;

                // Products
                case 'admin.products.index':
                    $breadcrumbs[] = ['title' => __('language.admin.products.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.products.list'), 'url' => route('admin.products.index')];
                    break;
                case 'admin.products.create':
                    $breadcrumbs[] = ['title' => __('language.admin.products.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.products.list'), 'url' => route('admin.products.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.products.create'), 'url' => route('admin.products.create')];
                    break;
                case 'admin.products.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.products.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.products.list'), 'url' => route('admin.products.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.products.edit'), 'url' => route('admin.products.edit', request()->id)];
                    break;

                // Category Products
                case 'admin.categoryProducts.index':
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.list'), 'url' => route('admin.categoryProducts.index')];
                    break;
                case 'admin.categoryProducts.create':
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.list'), 'url' => route('admin.categoryProducts.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.create'), 'url' => route('admin.categoryProducts.create')];
                    break;
                case 'admin.categoryProducts.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.list'), 'url' => route('admin.categoryProducts.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.categoryProducts.edit'), 'url' => route('admin.categoryProducts.edit', request()->id)];
                    break;

                // Posts
                case 'admin.posts.index':
                    $breadcrumbs[] = ['title' => __('language.admin.posts.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.posts.list'), 'url' => route('admin.posts.index')];
                    break;
                case 'admin.posts.create':
                    $breadcrumbs[] = ['title' => __('language.admin.posts.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.posts.list'), 'url' => route('admin.posts.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.posts.create'), 'url' => route('admin.posts.create')];
                    break;
                case 'admin.posts.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.posts.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.posts.list'), 'url' => route('admin.posts.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.posts.edit'), 'url' => route('admin.posts.edit', request()->id)];
                    break;

                // Category Posts
                 case 'admin.categoryPosts.index':
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.title'), 'url' => route('admin.dashboard')];
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.list'), 'url' => route('admin.categoryPosts.index')];
                     break;
                 case 'admin.categoryPosts.create':
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.title'), 'url' => route('admin.dashboard')];
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.list'), 'url' => route('admin.categoryPosts.index')];
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.create'), 'url' => route('admin.categoryPosts.create')];
                     break;
                 case 'admin.categoryPosts.edit':
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.title'), 'url' => route('admin.dashboard')];
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.list'), 'url' => route('admin.categoryPosts.index')];
                     $breadcrumbs[] = ['title' => __('language.admin.categoryPosts.edit'), 'url' => route('admin.categoryPosts.edit', request()->id)];
                     break;

                // Tags
                case 'admin.tags.index':
                    $breadcrumbs[] = ['title' => __('language.admin.tags.post'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.list'), 'url' => route('admin.tags.index')];
                    break;
                case 'admin.tags.create':
                    $breadcrumbs[] = ['title' => __('language.admin.tags.post'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.list'), 'url' => route('admin.tags.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.create'), 'url' => route('admin.tags.create')];
                    break;
                case 'admin.tags.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.tags.post'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.list'), 'url' => route('admin.tags.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.tags.edit'), 'url' => route('admin.tags.edit', request()->id)];
                    break;

                // Systems
                case 'admin.systems.index':
                    $breadcrumbs[] = ['title' => __('language.admin.systems.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.systems.list'), 'url' => route('admin.systems.index')];

                    if (request()->has('system_id')) {
                        $system = System::find(request()->system_id);

                        // Tạo một mảng tạm để lưu các hệ thống theo thứ tự ngược lại (từ con lên cha)
                        $tempBreadcrumbs = [];

                        // Bắt đầu từ hệ thống hiện tại và tìm cha của nó cho đến khi không còn cha nữa
                        while ($system) {
                            $tempBreadcrumbs[] = [
                                'title' => $system->name,
                                'url' => route('admin.systems.index', ['system_id' => $system->id])
                            ];
                            $system = $system->parent; // Lấy hệ thống cha
                        }

                        // Đảo ngược mảng tạm để có đúng thứ tự từ cha đến con
                        $tempBreadcrumbs = array_reverse($tempBreadcrumbs);

                        // Gộp mảng tạm vào mảng breadcrumbs chính
                        $breadcrumbs = array_merge($breadcrumbs, $tempBreadcrumbs);
                    }

                    break;

                case 'admin.systems.create':
                    $breadcrumbs[] = ['title' => __('language.admin.systems.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.systems.list'), 'url' => route('admin.systems.index')];

                    if (request()->has('system_id')) {
                        $system = System::find(request()->system_id);

                        // Tạo một mảng tạm để lưu các hệ thống theo thứ tự ngược lại (từ con lên cha)
                        $tempBreadcrumbs = [];

                        // Bắt đầu từ hệ thống hiện tại và tìm cha của nó cho đến khi không còn cha nữa
                        while ($system) {
                            $tempBreadcrumbs[] = [
                                'title' => $system->name,
                                'url' => route('admin.systems.create', ['system_id' => $system->id])
                            ];
                            $system = $system->parent; // Lấy hệ thống cha
                        }

                        // Đảo ngược mảng tạm để có đúng thứ tự từ cha đến con
                        $tempBreadcrumbs = array_reverse($tempBreadcrumbs);

                        // Gộp mảng tạm vào mảng breadcrumbs chính
                        $breadcrumbs = array_merge($breadcrumbs, $tempBreadcrumbs);
                    }

                    $breadcrumbs[] = ['title' => __('language.admin.systems.create'), 'url' => route('admin.systems.create')];

                    break;

                case 'admin.systems.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.systems.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.systems.list'), 'url' => route('admin.systems.index')];

                    if (request()->has('system_id')) {
                        $system = System::find(request()->system_id);

                        // Tạo một mảng tạm để lưu các hệ thống theo thứ tự ngược lại (từ con lên cha)
                        $tempBreadcrumbs = [];

                        // Bắt đầu từ hệ thống hiện tại và tìm cha của nó cho đến khi không còn cha nữa
                        while ($system) {
                            $tempBreadcrumbs[] = [
                                'title' => $system->name,
                                'url' => route('admin.systems.create', ['system_id' => $system->id])
                            ];
                            $system = $system->parent; // Lấy hệ thống cha
                        }

                        // Đảo ngược mảng tạm để có đúng thứ tự từ cha đến con
                        $tempBreadcrumbs = array_reverse($tempBreadcrumbs);

                        // Gộp mảng tạm vào mảng breadcrumbs chính
                        $breadcrumbs = array_merge($breadcrumbs, $tempBreadcrumbs);
                    }

                    $breadcrumbs[] = ['title' => __('language.admin.systems.edit'), 'url' => route('admin.systems.edit', request()->id)];
                    break;

                // Menus
                case 'admin.menus.index':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.menus.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.menus.name'), 'url' => route('admin.menus.index')];
                    break;
                case 'admin.menus.create':
                    $breadcrumbs[] = ['title' => 'Danh sách menu', 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => 'Thêm menu', 'url' => route('admin.menus.create')];
                    break;
                case 'admin.menus.edit':
                    $breadcrumbs[] = ['title' => 'Danh sách menu', 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => 'Cập nhật menu', 'url' => route('admin.menus.edit', request()->id)];
                    break;

                // Pages
                case 'admin.pages.index':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.list'), 'url' => route('admin.pages.index')];
                    break;
                case 'admin.pages.create':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.list'), 'url' => route('admin.pages.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.add'), 'url' => route('admin.pages.create')];
                    break;
                case 'admin.pages.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.list'), 'url' => route('admin.pages.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.pages.edit'), 'url' => route('admin.pages.edit', request()->id)];
                    break;

                // Blocks
                case 'admin.blocks.index':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.list'), 'url' => route('admin.blocks.index')];
                    break;
                case 'admin.blocks.create':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.list'), 'url' => route('admin.blocks.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.add'), 'url' => route('admin.blocks.create')];
                    break;
                case 'admin.blocks.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.list'), 'url' => route('admin.blocks.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blocks.edit'), 'url' => route('admin.blocks.edit', request()->id)];

                    break;

                // Block Types
                case 'admin.blockTypes.index':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.list'), 'url' => route('admin.blockTypes.index')];
                    break;
                case 'admin.blockTypes.create':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.list'), 'url' => route('admin.blockTypes.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.create'), 'url' => route('admin.blockTypes.create')];
                    break;
                case 'admin.blockTypes.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.list'), 'url' => route('admin.blockTypes.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.interfaces.blockTypes.edit'), 'url' => route('admin.blockTypes.edit', request()->id)];
                    break;

                // contacts
                case 'admin.roles.index':
                    $breadcrumbs[] = ['title' => __('language.admin.members.title'), 'url' => '#'];
                    $breadcrumbs[] = ['title' => __('language.admin.members.roles.title'), 'url' => route('admin.roles.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.members.roles.list'), 'url' => route('admin.roles.index')];
                    break;
                case 'admin.roles.create':
                    $breadcrumbs[] = ['title' => __('language.admin.members.title'), 'url' => '#'];
                    $breadcrumbs[] = ['title' => __('language.admin.members.roles.title'), 'url' => route('admin.roles.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.members.roles.list'), 'url' => route('admin.roles.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.members.roles.create'), 'url' => route('admin.roles.create')];
                    break;

                // contacts
                case 'admin.contacts.index':
                    $breadcrumbs[] = ['title' => __('language.admin.contacts.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.contacts.list'), 'url' => route('admin.contacts.index')];
                    break;

                // Languages
                case 'admin.languages.index':
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.list'), 'url' => route('admin.languages.index')];
                    break;
                case 'admin.languages.create':
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.list'), 'url' => route('admin.languages.index')];
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.create'), 'url' => route('admin.languages.create')];
                    break;
                case 'admin.languages.edit':
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.title'), 'url' => route('admin.dashboard')];
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.list'), 'url' => route('admin.languages.edit', request()->id)];
                    $breadcrumbs[] = ['title' => __('language.admin.settings.languages.edit'), 'url' => route('admin.languages.edit', request()->id)];
                    break;
            }

            $view->with('breadcrumbs', $breadcrumbs);
        });
    }
}
