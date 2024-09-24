<?php

namespace App\Providers\Client;

use App\Services\Client\Views\ViewDataService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    protected $viewDataService;

    public function boot(): void
    {
        // Resolve ViewDataService
//        $this->viewDataService = App::make(ViewDataService::class);
//
//        // Sử dụng ViewDataService để lấy dữ liệu cho header và footer
//        View::composer('client.partials.*', function ($view) {
//            $header = $this->viewDataService->getHeaderData();
//
//            $sidebar = $this->viewDataService->getSidebarData();
//
//            $footer = $this->viewDataService->getFooterData();
//
//            $view->with([
//                'header' => $header,
//                'sidebar' => $sidebar,
//                'footer' => $footer,
//            ]);
//        });
//
//        View::composer('client.*', function ($view) {
//            $menus = $this->viewDataService->getMenus();
//            $data = $this->viewDataService->getGlobalData();
//
//            $view->with([
//                'menus' => $menus,
//                'data' => $data,
//            ]);
//        });
    }
}
