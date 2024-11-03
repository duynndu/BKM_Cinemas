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
use App\Repositories\Admin\Actors\Interface\ActorInterface;
use App\Repositories\Admin\Foods\Interface\FoodComboInterface;
use App\Repositories\Admin\Foods\Interface\FoodInterface;
use App\Repositories\Admin\Foods\Interface\FoodTypeInterface;
use App\Repositories\Admin\Actors\Repository\ActorRepository;
use App\Repositories\Admin\Cinemas\Interface\CinemaInterface;
use App\Repositories\Admin\Cinemas\Repository\CinemaRepository;
use App\Repositories\Admin\Foods\Repository\FoodComboRepository;
use App\Repositories\Admin\Foods\Repository\FoodRepository;
use App\Repositories\Admin\Foods\Repository\FoodTypeRepository;
use App\Repositories\Admin\Systems\Interface\SystemInterface;
use App\Repositories\Admin\Systems\Repository\SystemRepository;
use App\Services\Admin\CategoryPosts\Services\CategoryPostService;
use App\Services\Admin\CategoryPosts\Interfaces\CategoryPostServiceInterface;
use App\Services\Admin\Foods\Interfaces\FoodComboServiceInterface;
use App\Services\Admin\Foods\Interfaces\FoodServiceInterface;
use App\Services\Admin\Foods\Interfaces\FoodTypeServiceInterFace;
use App\Services\Admin\Foods\Services\FoodComboService;
use App\Services\Admin\Foods\Services\FoodService;
use App\Services\Admin\Foods\Services\FoodTypeService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryPostInterface    ::class, CategoryPostRepository::class);
        $this->app->bind(CategoryPostServiceInterface    ::class, CategoryPostService::class);
        $this->app->bind(PostInterface            ::class, PostRepository        ::class);
        $this->app->bind(CityInterface            ::class, CityRepository        ::class);
        $this->app->bind(AreaInterface            ::class, AreaRepository        ::class);
        $this->app->bind(PaymentInterface         ::class, PaymentRepository     ::class);
        $this->app->bind(SystemInterface          ::class, SystemRepository      ::class);
        $this->app->bind(FoodTypeInterface        ::class, FoodTypeRepository    ::class);
        $this->app->bind(FoodInterface            ::class, FoodRepository        ::class);
        $this->app->bind(FoodComboInterface       ::class, FoodComboRepository   ::class);
        $this->app->bind(FoodTypeServiceInterFace ::class, FoodTypeService       ::class);
        $this->app->bind(FoodServiceInterface     ::class, FoodService           ::class);
        $this->app->bind(FoodComboServiceInterface::class, FoodComboService      ::class);
        $this->app->bind(ActorInterface           ::class, ActorRepository       ::class);
        $this->app->bind(CinemaInterface          ::class, CinemaRepository      ::class);
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
