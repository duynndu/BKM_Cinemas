<?php

namespace App\Providers;

use App\Http\Views\Composers\GetAllDataComposer;
use App\Repositories\Admin\Systems\Interface\SystemInterface;
use App\Repositories\Admin\Systems\Repository\SystemRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SystemInterface::class, SystemRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Admin
        View::composer('admin.partials.sidebar',GetAllDataComposer::class);
    }
}
