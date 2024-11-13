<?php

namespace App\Providers;

use App\Events\Client\DepositSucceeded;
use App\Events\Client\ForgotPasswordRequested;
use App\Events\Client\PasswordChanged;
use App\Events\Client\UserRegistered;
use App\Listeners\Client\SendDepositSuccessEmail;
use App\Listeners\Client\SendPasswordChangeNotification;
use App\Listeners\Client\SendPasswordResetEmail;
use App\Listeners\Client\SendRegisterEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        UserRegistered::class => [
            SendRegisterEmail::class,
        ],
        ForgotPasswordRequested::class => [
            SendPasswordResetEmail::class,
        ],
        PasswordChanged::class => [
            SendPasswordChangeNotification::class
        ],
        DepositSucceeded::class => [
            SendDepositSuccessEmail::class
        ]
    ];

    protected $observers = [
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
