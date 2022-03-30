<?php

namespace App\Providers;

use App\Providers\UserReferred;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RewardUser
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
     * @param  \App\Providers\UserReferred  $event
     * @return void
     */
    public function handle(UserReferred $event)
    {
        //
    }
}
