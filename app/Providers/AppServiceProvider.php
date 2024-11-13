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
use App\Repositories\Admin\Tags\Interfaces\TagInterface;
use App\Services\Admin\Foods\Services\FoodComboService;
use App\Repositories\Admin\Areas\Interfaces\AreaInterface;
use App\Repositories\Admin\Foods\Interfaces\FoodInterface;
use App\Repositories\Admin\Posts\Interfaces\PostInterface;
use App\Repositories\Admin\Tags\Repositories\TagRepository;
use App\Repositories\Admin\Cities\Interfaces\CityInterface;
use App\Repositories\Admin\Actors\Interfaces\ActorInterface;
use App\Repositories\Admin\Areas\Repositories\AreaRepository;
use App\Repositories\Admin\Foods\Repositories\FoodRepository;
use App\Repositories\Admin\Genres\Interfaces\GenreInterface;
use App\Repositories\Admin\Movies\Interfaces\MovieInterface;
use App\Repositories\Admin\Posts\Repositories\PostRepository;
use App\Services\Admin\Tags\Interfaces\TagServiceInterface;
use App\Repositories\Admin\Cities\Repositories\CityRepository;
use App\Repositories\Admin\Actors\Repositories\ActorRepository;
use App\Repositories\Admin\Blocks\Interfaces\BlockInterface;
use App\Repositories\Admin\Blocks\Repositories\BlockRepository;
use App\Repositories\Admin\BlockTypes\Interfaces\BlockTypeInterface;
use App\Repositories\Admin\BlockTypes\Repositories\BlockTypeRepository;
use App\Repositories\Admin\Cinemas\Interfaces\CinemaInterface;
use App\Repositories\Admin\Foods\Interfaces\FoodTypeInterface;
use App\Repositories\Admin\Genres\Repositories\GenreRepository;
use App\Repositories\Admin\Movies\Repositories\MovieRepository;
use App\Repositories\Admin\Systems\Interfaces\SystemInterface;

use App\Services\Admin\Areas\Interfaces\AreaServiceInterface;
use App\Services\Admin\Foods\Interfaces\FoodServiceInterface;
use App\Services\Admin\Menus\Interfaces\MenuServiceInterface;
use App\Services\Admin\Pages\Interfaces\PageServiceInterface;
use App\Services\Admin\Posts\Interfaces\PostServiceInterface;
use App\Repositories\Admin\Foods\Interfaces\FoodComboInterface;
use App\Services\Admin\Cities\Interfaces\CityServiceInterface;
use App\Repositories\Admin\Cinemas\Repositories\CinemaRepository;
use App\Repositories\Admin\Foods\Repositories\FoodTypeRepository;
use App\Repositories\Admin\Payments\Interfaces\PaymentInterface;
use App\Repositories\Admin\Systems\Repositories\SystemRepository;

use App\Services\Admin\Actors\Interfaces\ActorServiceInterface;
use App\Services\Admin\Blocks\Interfaces\BlockServiceInterface;
use App\Services\Admin\Genres\Interfaces\GenreServiceInterface;
use App\Services\Admin\Movies\Interfaces\MovieServiceInterface;
use App\Repositories\Admin\Foods\Repositories\FoodComboRepository;
use App\Repositories\Admin\Payments\Repositories\PaymentRepository;

use App\Services\Admin\Cinemas\Interfaces\CinemaServiceInterface;
use App\Services\Admin\Foods\Interfaces\FoodTypeServiceInterFace;
use App\Services\Admin\Modules\Interfaces\ModuleServiceInterface;
use App\Services\Admin\Systems\Interfaces\SystemServiceInterface;
use App\Repositories\Auth\Admin\Logins\Repository\LoginRepository;
use App\Services\Admin\CategoryPosts\Services\CategoryPostService;
use App\Services\Admin\Foods\Interfaces\FoodComboServiceInterface;

use App\Repositories\Admin\CategoryPosts\Interfaces\CategoryPostInterface;
use App\Repositories\Admin\CategoryPosts\Repositories\CategoryPostRepository;
use App\Repositories\Admin\Menus\Interfaces\MenuInterface;
use App\Repositories\Admin\Menus\Repositories\MenuRepository;
use App\Repositories\Admin\Modules\Interfaces\ModuleInterface;
use App\Repositories\Admin\Modules\Repositories\ModuleRepository;
use App\Repositories\Admin\Pages\Interfaces\PageInterface;
use App\Repositories\Admin\Pages\Repositories\PageRepository;
use App\Repositories\Admin\Permissions\Interfaces\PermissionInterface;
use App\Repositories\Admin\Permissions\Repositories\PermissionRepository;
use App\Repositories\Admin\Roles\Interfaces\RoleInterface;
use App\Repositories\Admin\Roles\Repositories\RoleRepository;
use App\Repositories\Admin\Users\Interfaces\UserInterface;
use App\Repositories\Admin\Users\Repositories\UserRepository;
use App\Repositories\Auth\Admin\Logins\Repository\LoginRepository;
use App\Repositories\Auth\Client\ChangePasswords\Interface\ChangePasswordInterface;
use App\Repositories\Auth\Client\ChangePasswords\Repository\ChangePasswordRepository;
use App\Repositories\Auth\Client\ForgotPasswords\Interface\ForgotPasswordInterface;
use App\Repositories\Auth\Client\ForgotPasswords\Repository\ForgotPasswordRepository;
use App\Repositories\Auth\Client\Registers\Interface\RegisterInterface;
use App\Repositories\Auth\Client\Registers\Repository\RegisterRepository;
use App\Repositories\Client\Cities\Interfaces\CityInterface as ClientCityInterface;
use App\Repositories\Client\Cities\Repositories\CityRepository as ClientCityRepository;
use App\Repositories\Client\Deposits\Interfaces\DepositInterface;
use App\Repositories\Client\Deposits\Repositories\DepositRepository;
use App\Repositories\Client\Transactions\Interfaces\TransactionInterface;
use App\Repositories\Client\Transactions\Repositories\TransactionRepository;
use App\Repositories\Client\Users\Interfaces\UserInterface as ClientUserInterface;
use App\Repositories\Client\Users\Repositories\UserRepository as ClientUserRepository;
use App\Services\Admin\Blocks\Interfaces\BlockServiceInterface;
use App\Services\Admin\Blocks\Services\BlockService;

use App\Services\Admin\BlockTypes\Interfaces\BlockTypeServiceInterface;
use App\Repositories\Admin\CategoryPosts\Interface\CategoryPostInterface;
use App\Repositories\Auth\Client\Registers\Repository\RegisterRepository;
use App\Services\Admin\Permissions\Interfaces\PermissionServiceInterface;
use App\Repositories\Admin\CategoryPosts\Repository\CategoryPostRepository;
use App\Services\Auth\Client\Registers\Interfaces\RegisterServiceInterface;
use App\Services\Auth\Client\ChangePasswords\Services\ChangePasswordService;

use App\Services\Auth\Client\ForgotPasswords\ForgotPasswordService;
use App\Services\Auth\Client\Registers\Services\RegisterService;
use App\Services\Client\Cities\Interfaces\CityServiceInterface as ClientCityServiceInterface;
use App\Services\Client\Cities\Services\CityService as ClientCityService;
use App\Services\Client\Deposits\Interfaces\DepositServiceInterface;
use App\Services\Client\Deposits\Services\DepositService;
use App\Services\Client\Transactions\Interfaces\TransactionServiceInterface;
use App\Services\Client\Transactions\Services\TransactionService;
use App\Services\Client\Users\Interfaces\UserServiceInterface as ClientUserServiceInterface;
use App\Services\Client\Users\Services\UserService as ClientUserService;


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
        $this->app->bind(ClientCityInterface                ::class, ClientCityRepository       ::class);
        $this->app->bind(ClientCityServiceInterface         ::class, ClientCityService          ::class);
        $this->app->bind(DepositInterface                   ::class, DepositRepository          ::class);
        $this->app->bind(DepositServiceInterface            ::class, DepositService             ::class);
        $this->app->bind(TransactionInterface               ::class, TransactionRepository      ::class);
        $this->app->bind(TransactionServiceInterface        ::class, TransactionService         ::class);
        $this->app->bind(ClientUserInterface                ::class, ClientUserRepository       ::class);
        $this->app->bind(ClientUserServiceInterface         ::class, ClientUserService          ::class);
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
