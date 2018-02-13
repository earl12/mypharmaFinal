<?php

namespace App\Listeners;

use App\Events\MemberInformationUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberInformationUpdatedListener
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
     * @param  MemberInformationUpdated  $event
     * @return void
     */
    public function handle(MemberInformationUpdated $event)
    {
        //
    }
}
