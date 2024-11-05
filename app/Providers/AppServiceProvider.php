<?php

namespace App\Providers;

use App\Http\Views\Composers\GetAllDataComposer;
use App\Repositories\Admin\Systems\Interface\SystemInterface;
use App\Repositories\Admin\Systems\Repository\SystemRepository;
use App\Repositories\Auth\Client\ForgotPasswords\Interface\ForgotPasswordInterface;
use App\Repositories\Auth\Client\ForgotPasswords\Repository\ForgotPasswordRepository;
use App\Repositories\Client\Cities\Interface\CityInterface;
use App\Repositories\Client\Cities\Repository\CityRepository;
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
        $this->app->bind(CityInterface::class, CityRepository::class);
        $this->app->bind(ForgotPasswordInterface::class, ForgotPasswordRepository::class);
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
