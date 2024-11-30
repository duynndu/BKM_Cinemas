<?php

namespace App\Providers;

use App\Models\BlockType;
use App\Models\CategoryPost;
use App\Models\Menu;
use App\Models\Module;
use App\Models\Page;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Block as BlockModel;
use App\Models\Booking;
use App\Models\Cinema;
use App\Models\Food;
use App\Models\FoodCombo;
use App\Models\FoodType;
use App\Models\Reward;
use App\Models\Role;
use App\Models\Room;
use App\Models\SeatLayout;
use App\Models\SeatType;
use App\Models\System;
use App\Models\Tag;
use App\Models\User;
use App\Models\Voucher;
use App\Policies\Admin\Blocks\BlockPolicy;
use App\Policies\Admin\Blocks\BlockTypePolicy;
use App\Policies\Admin\Bookings\BookingPolicy;
use App\Policies\Admin\CategoryPosts\CategoryPostPolicy;
use App\Policies\Admin\Cinemas\CinemaPolicy;
use App\Policies\Admin\Dashboards\DashboardPolicy;
use App\Policies\Admin\Events\EventPolicy;
use App\Policies\Admin\Events\VoucherPolicy;
use App\Policies\Admin\Foods\FoodComboPolicy;
use App\Policies\Admin\Foods\FoodPolicy;
use App\Policies\Admin\Foods\FoodTypePolicy;
use App\Policies\Admin\Menus\MenuPolicy;
use App\Policies\Admin\Modules\ModulePolicy;
use App\Policies\Admin\Pages\PagePolicy;
use App\Policies\Admin\Permissions\PermissionPolicy;
use App\Policies\Admin\Posts\PostPolicy;
use App\Policies\Admin\Roles\RolePolicy;
use App\Policies\Admin\Rooms\RoomPolicy;
use App\Policies\Admin\Rooms\SeatLayoutPolicy;
use App\Policies\Admin\Rooms\SeatTypePolicy;
use App\Policies\Admin\Systems\SystemPolicy;
use App\Policies\Admin\Tags\TagPolicy;
use App\Policies\Admin\Users\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use PhpParser\Node\Stmt\Block;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'Dashboard' => DashboardPolicy::class,
        System::class => SystemPolicy::class,
        Menu::class => MenuPolicy::class,
        Page::class => PagePolicy::class,
        BlockModel::class => BlockPolicy::class,
        BlockType::class => BlockTypePolicy::class,
        CategoryPost::class => CategoryPostPolicy::class,
        Post::class => PostPolicy::class,
        Tag::class => TagPolicy::class,
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Module::class => ModulePolicy::class,
        Permission::class => PermissionPolicy::class,
        Food::class => FoodPolicy::class,
        FoodType::class => FoodTypePolicy::class,
        FoodCombo::class => FoodComboPolicy::class,
        Cinema::class => CinemaPolicy::class,
        Booking::class => BookingPolicy::class,
        Room::class => RoomPolicy::class,
        SeatLayout::class => SeatLayoutPolicy::class,
        SeatType::class => SeatTypePolicy::class,
        Reward::class => EventPolicy::class,
        Voucher::class => VoucherPolicy::class,


    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
