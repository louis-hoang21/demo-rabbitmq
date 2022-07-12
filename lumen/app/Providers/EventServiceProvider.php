<?php

namespace App\Providers;

use App\Events\OrderCreated;
use App\Events\OrderShipped;
use App\Listeners\OrderCreatedListener;
use App\Listeners\OrderShippedListener;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        OrderCreated::class => [
            OrderCreatedListener::class,
        ],
        OrderShipped::class => [
            OrderShippedListener::class,
        ],
    ];

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
