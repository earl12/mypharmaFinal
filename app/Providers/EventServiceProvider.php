<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\MemberIsAdded' => [
            'App\Listeners\MemberIsAddedListener',
        ],

        'App\Events\MemberDeleted' => [
            'App\Listeners\MemberDeletedListener',
        ],


        'App\Events\MemberInformationUpdated' => [
            'App\Listeners\MemberInformationUpdatedListener',
        ],

        'App\Events\ParcelIsDelivered' => [
            'App\Listeners\ParcelIsDeliveredListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
