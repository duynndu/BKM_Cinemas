<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Views\Composers\GetAllDataComposer;
use App\Services\Admin\Tags\Services\TagService;
use App\Services\Admin\Areas\Services\AreaService;
use App\Services\Admin\Foods\Services\FoodService;
use App\Services\Admin\Menus\Services\MenuService;
use App\Services\Admin\Pages\Services\PageService;
use App\Services\Admin\Posts\Services\PostService;
use App\Services\Admin\Roles\Services\RoleService;
use App\Services\Admin\Users\Services\UserService;
use App\Services\Client\Home\Services\HomeService;
use App\Services\Admin\Cities\Services\CityService;
use App\Services\Admin\Actors\Services\ActorService;
use App\Services\Admin\Blocks\Services\BlockService;
use App\Services\Admin\Genres\Services\GenreService;
use App\Services\Admin\Movies\Services\MovieService;
use App\Services\Admin\Cinemas\Services\CinemaService;
use App\Services\Admin\Foods\Services\FoodTypeService;
use App\Services\Admin\Systems\Services\SystemService;
use App\Repositories\Admin\Tags\Interface\TagInterface;
use App\Services\Admin\Foods\Services\FoodComboService;
use App\Services\Admin\Modules\Services\ModuleServices;
use App\Repositories\Admin\Areas\Interface\AreaInterface;
use App\Repositories\Admin\Foods\Interface\FoodInterface;
use App\Repositories\Admin\Menus\Interface\MenuInterface;
use App\Repositories\Admin\Pages\Interface\PageInterface;
use App\Repositories\Admin\Posts\Interface\PostInterface;
use App\Repositories\Admin\Roles\Interface\RoleInterface;
use App\Repositories\Admin\Tags\Repository\TagRepository;
use App\Repositories\Admin\Users\Interface\UserInterface;
use App\Services\Auth\Admin\Logins\Services\LoginService;
use App\Repositories\Admin\Cities\Interface\CityInterface;
use App\Repositories\Admin\Actors\Interface\ActorInterface;
use App\Repositories\Admin\Areas\Repository\AreaRepository;
use App\Repositories\Admin\Blocks\Interface\BlockInterface;
use App\Repositories\Admin\Foods\Repository\FoodRepository;
use App\Repositories\Admin\Genres\Interface\GenreInterface;
use App\Repositories\Admin\Menus\Repository\MenuRepository;
use App\Repositories\Admin\Movies\Interface\MovieInterface;
use App\Repositories\Admin\Pages\Repository\PageRepository;
use App\Repositories\Admin\Posts\Repository\PostRepository;
use App\Repositories\Admin\Roles\Repository\RoleRepository;
use App\Repositories\Admin\Users\Repository\UserRepository;
use App\Services\Admin\Tags\Interfaces\TagServiceInterface;
use App\Repositories\Admin\Cities\Repository\CityRepository;
use App\Services\Admin\BlockTypes\Services\BlockTypeService;
use App\Repositories\Admin\Actors\Repository\ActorRepository;
use App\Repositories\Admin\Blocks\Repository\BlockRepository;
use App\Repositories\Admin\Cinemas\Interface\CinemaInterface;
use App\Repositories\Admin\Foods\Interface\FoodTypeInterface;
use App\Repositories\Admin\Genres\Repository\GenreRepository;
use App\Repositories\Admin\Modules\Interface\ModuleInterface;
use App\Repositories\Admin\Movies\Repository\MovieRepository;
use App\Repositories\Admin\Systems\Interface\SystemInterface;
use App\Services\Admin\Areas\Interfaces\AreaServiceInterface;
use App\Services\Admin\Foods\Interfaces\FoodServiceInterface;
use App\Services\Admin\Menus\Interfaces\MenuServiceInterface;
use App\Services\Admin\Pages\Interfaces\PageServiceInterface;
use App\Services\Admin\Posts\Interfaces\PostServiceInterface;
use App\Services\Admin\Roles\Interfaces\RoleServiceInterface;
use App\Services\Admin\Users\Interfaces\UserServiceInterface;
use App\Services\Client\Home\Interfaces\HomeServiceInterface;
use App\Repositories\Admin\Foods\Interface\FoodComboInterface;
use App\Services\Admin\Cities\Interfaces\CityServiceInterface;
use App\Services\Admin\Permissions\Services\PermissionService;
use App\Repositories\Admin\Cinemas\Repository\CinemaRepository;
use App\Repositories\Admin\Foods\Repository\FoodTypeRepository;
use App\Repositories\Admin\Modules\Repository\ModuleRepository;
use App\Repositories\Admin\Payments\Interface\PaymentInterface;
use App\Repositories\Admin\Systems\Repository\SystemRepository;
use App\Services\Admin\Actors\Interfaces\ActorServiceInterface;
use App\Services\Admin\Blocks\Interfaces\BlockServiceInterface;
use App\Services\Admin\Genres\Interfaces\GenreServiceInterface;
use App\Services\Admin\Movies\Interfaces\MovieServiceInterface;
use App\Repositories\Admin\Foods\Repository\FoodComboRepository;
use App\Repositories\Auth\Admin\Logins\Interface\LoginInterface;
use App\Services\Auth\Client\Registers\Services\RegisterService;
use App\Repositories\Admin\Payments\Repository\PaymentRepository;
use App\Services\Admin\Cinemas\Interfaces\CinemaServiceInterface;
use App\Services\Admin\Foods\Interfaces\FoodTypeServiceInterFace;
use App\Services\Admin\Modules\Interfaces\ModuleServiceInterface;
use App\Services\Admin\Systems\Interfaces\SystemServiceInterface;
use App\Repositories\Auth\Admin\Logins\Repository\LoginRepository;
use App\Services\Admin\CategoryPosts\Services\CategoryPostService;
use App\Services\Admin\Foods\Interfaces\FoodComboServiceInterface;
use App\Repositories\Admin\BlockTypes\Interface\BlockTypeInterface;
use App\Services\Auth\Client\ForgotPasswords\ForgotPasswordService;
use App\Services\Auth\Admin\Logins\Interfaces\LoginServiceInterface;
use App\Repositories\Admin\BlockTypes\Repository\BlockTypeRepository;
use App\Repositories\Admin\Permissions\Interface\PermissionInterface;
use App\Repositories\Admin\Permissions\Repository\PermissionRepository;
use App\Repositories\Auth\Client\Registers\Interface\RegisterInterface;
use App\Services\Admin\BlockTypes\Interfaces\BlockTypeServiceInterface;
use App\Repositories\Admin\CategoryPosts\Interface\CategoryPostInterface;
use App\Repositories\Auth\Client\Registers\Repository\RegisterRepository;
use App\Services\Admin\Permissions\Interfaces\PermissionServiceInterface;
use App\Repositories\Admin\CategoryPosts\Repository\CategoryPostRepository;
use App\Services\Auth\Client\Registers\Interfaces\RegisterServiceInterface;
use App\Services\Auth\Client\ChangePasswords\Services\ChangePasswordService;
use App\Services\Admin\CategoryPosts\Interfaces\CategoryPostServiceInterface;
use App\Repositories\Auth\Client\ChangePasswords\Interface\ChangePasswordInterface;
use App\Repositories\Auth\Client\ForgotPasswords\Interface\ForgotPasswordInterface;
use App\Repositories\Auth\Client\ChangePasswords\Repository\ChangePasswordRepository;
use App\Repositories\Auth\Client\ForgotPasswords\Repository\ForgotPasswordRepository;
use App\Services\Admin\Payments\Interfaces\PaymentServiceInterface;
use App\Services\Admin\Payments\Services\PaymentService;
use App\Services\Auth\Client\ChangePasswords\Interfaces\ChangePasswordServiceInterface;
use App\Services\Auth\Client\ForgotPasswords\Interfaces\ForgotPasswordServicesInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Admin
        $this->app->bind(ActorInterface              ::class, ActorRepository       ::class);
        $this->app->bind(ActorServiceInterface       ::class, ActorService          ::class);
        $this->app->bind(AreaInterface               ::class, AreaRepository        ::class);
        $this->app->bind(AreaServiceInterface        ::class, AreaService           ::class);
        $this->app->bind(BlockTypeInterface          ::class, BlockTypeRepository   ::class);
        $this->app->bind(BlockTypeServiceInterface   ::class, BlockTypeService      ::class);
        $this->app->bind(BlockInterface              ::class, BlockRepository       ::class);
        $this->app->bind(BlockServiceInterface       ::class, BlockService          ::class);
        $this->app->bind(CategoryPostInterface       ::class, CategoryPostRepository::class);
        $this->app->bind(CategoryPostServiceInterface::class, CategoryPostService   ::class);
        $this->app->bind(CinemaInterface             ::class, CinemaRepository      ::class);
        $this->app->bind(CinemaServiceInterface      ::class, CinemaService         ::class);
        $this->app->bind(CityInterface               ::class, CityRepository        ::class);
        $this->app->bind(CityServiceInterface        ::class, CityService           ::class);
        $this->app->bind(FoodComboInterface          ::class, FoodComboRepository   ::class);
        $this->app->bind(FoodComboServiceInterface   ::class, FoodComboService      ::class);
        $this->app->bind(FoodInterface               ::class, FoodRepository        ::class);
        $this->app->bind(FoodServiceInterface        ::class, FoodService           ::class);
        $this->app->bind(FoodTypeInterface           ::class, FoodTypeRepository    ::class);
        $this->app->bind(FoodTypeServiceInterFace    ::class, FoodTypeService       ::class);
        $this->app->bind(GenreInterface              ::class, GenreRepository       ::class);
        $this->app->bind(GenreServiceInterface       ::class, GenreService          ::class);
        $this->app->bind(MovieInterface              ::class, MovieRepository       ::class);
        $this->app->bind(MovieServiceInterface       ::class, MovieService          ::class);
        $this->app->bind(ModuleInterface             ::class, ModuleRepository      ::class);
        $this->app->bind(ModuleServiceInterface      ::class, ModuleServices        ::class);
        $this->app->bind(MenuInterface               ::class, MenuRepository        ::class);
        $this->app->bind(MenuServiceInterface        ::class, MenuService           ::class);
        $this->app->bind(UserInterface               ::class, UserRepository        ::class);
        $this->app->bind(UserServiceInterface        ::class, UserService           ::class);
        $this->app->bind(PageInterface               ::class, PageRepository        ::class);
        $this->app->bind(PageServiceInterface        ::class, PageService           ::class);
        $this->app->bind(PaymentInterface            ::class, PaymentRepository     ::class);
        $this->app->bind(PaymentServiceInterface     ::class, PaymentService        ::class);
        $this->app->bind(PostInterface               ::class, PostRepository        ::class);
        $this->app->bind(PostServiceInterface        ::class, PostService           ::class);
        $this->app->bind(PermissionInterface         ::class, PermissionRepository  ::class);
        $this->app->bind(PermissionServiceInterface  ::class, PermissionService     ::class);
        $this->app->bind(SystemInterface             ::class, SystemRepository      ::class);
        $this->app->bind(SystemServiceInterface      ::class, SystemService         ::class);
        $this->app->bind(TagInterface                ::class, TagRepository         ::class);
        $this->app->bind(TagServiceInterface         ::class, TagService            ::class);
        $this->app->bind(RoleInterface               ::class, RoleRepository        ::class);
        $this->app->bind(RoleServiceInterface        ::class, RoleService           ::class);
        $this->app->bind(LoginInterface              ::class, LoginRepository       ::class);
        $this->app->bind(LoginServiceInterface       ::class, LoginService          ::class);
        // End admin

        // Client
        $this->app->bind(RegisterInterface                  ::class, RegisterRepository         ::class);
        $this->app->bind(RegisterServiceInterface           ::class, RegisterService            ::class);
        $this->app->bind(ForgotPasswordInterface            ::class, ForgotPasswordRepository   ::class);
        $this->app->bind(ForgotPasswordServicesInterface    ::class, ForgotPasswordService      ::class);
        $this->app->bind(ChangePasswordInterface            ::class, ChangePasswordRepository   ::class);
        $this->app->bind(ChangePasswordServiceInterface     ::class, ChangePasswordService      ::class);
        $this->app->bind(HomeServiceInterface     ::class, HomeService      ::class);



        // End client
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Admin
        View::composer('admin.partials.sidebar', GetAllDataComposer::class);

        // if (env('APP_ENV') !== 'local') {
        //     URL::forceScheme('https');
        // }
    }
}
