<?php

namespace App\Providers\Admin;

use App\Models\Notification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewHeaderAdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('admin.partials.header', function ($view) {
            $notifications = Notification::where('type', 'refund')
                ->orderBy('id', 'desc')
                ->get();
            $view->with('notifications', $notifications);
        });
    }
}
