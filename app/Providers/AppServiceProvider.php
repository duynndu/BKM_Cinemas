<?php

namespace App\Providers;

use App\Repositories\Admin\CategoryPosts\Interface\CategoryPostInterface;
use App\Repositories\Admin\CategoryPosts\Repository\CategoryPostRepository;
use App\Repositories\Admin\Posts\Interface\PostInterface;
use App\Repositories\Admin\Posts\Repository\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryPostInterface::class, CategoryPostRepository::class);
        $this->app->bind(PostInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
