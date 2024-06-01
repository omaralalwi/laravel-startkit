<?php

namespace App\Listeners\Frontend\UserUpdated;

use App\Events\Frontend\UserUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserUpdatedProfileUpdate implements ShouldQueue
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
     */
    public function handle(UserUpdated $event): void
    {
        $user = $event->user;
    }
}
