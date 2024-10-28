<?php

namespace App\Providers;

use App\Repositories\Admin\Areas\Interface\AreaInterface;
use App\Repositories\Admin\Areas\Repository\AreaRepository;
use App\Repositories\Admin\CategoryPosts\Interface\CategoryPostInterface;
use App\Repositories\Admin\CategoryPosts\Repository\CategoryPostRepository;
use App\Repositories\Admin\Cities\Interface\CityInterface;
use App\Repositories\Admin\Cities\Repository\CityRepository;
use App\Repositories\Admin\Payments\Interface\PaymentInterface;
use App\Repositories\Admin\Payments\Repository\PaymentRepository;
use App\Repositories\Admin\Posts\Interface\PostInterface;
use App\Repositories\Admin\Posts\Repository\PostRepository;
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
        $this->app->bind(CategoryPostInterface::class, CategoryPostRepository::class);
        $this->app->bind(PostInterface::class, PostRepository::class);
        $this->app->bind(CityInterface::class, CityRepository::class);
        $this->app->bind(AreaInterface::class, AreaRepository::class);
        $this->app->bind(PaymentInterface::class, PaymentRepository::class);
        $this->app->bind(SystemInterface::class, SystemRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Admin
        View::composer('admin.partials.sidebar', GetAllDataComposer::class);
    }
}
