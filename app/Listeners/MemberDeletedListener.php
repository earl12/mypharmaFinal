<?php

namespace App\Listeners;

use App\Events\MemberDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberDeletedListener
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
     * @param  MemberDeleted  $event
     * @return void
     */
    public function handle(MemberDeleted $event)
    {
        //
    }
}
