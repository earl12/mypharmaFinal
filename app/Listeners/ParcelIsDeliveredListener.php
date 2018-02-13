<?php

namespace App\Listeners;

use App\Events \ParcelIsDelivered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParcelIsDeliveredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ParcelIsDelivered  $event
     * @return void
     */
    public function handle(ParcelIsDelivered $event)
    {
        //
    }
}
