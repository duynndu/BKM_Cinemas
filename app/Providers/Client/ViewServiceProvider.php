<?php

namespace App\Providers\Client;

use App\Services\Client\Views\Interfaces\ViewServiceInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    protected $viewDataService;
    public function boot(): void
    {
        $this->viewDataService = App::make(abstract: ViewServiceInterface::class);

        View::composer('client.partials.*', function ($view) {
            $notifications = $this->viewDataService->getNotifications();

            $view->with([
                'notifications' => $notifications,
                //    'sidebar' => $sidebar,
                //    'footer' => $footer,
            ]);
        });
    }
}
