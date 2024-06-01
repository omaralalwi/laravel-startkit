<?php

namespace App\Listeners\Backend\UserUpdated;

use App\Events\Backend\UserUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserUpdatedNotifyUser implements ShouldQueue
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
