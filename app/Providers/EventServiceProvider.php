<?php

namespace App\Providers;

use App\Listeners\ListenerUserCreated;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        User::created ([
            ListenerUserCreated::class, 'handle'
            ]

        );
    }
}
