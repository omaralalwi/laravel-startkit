<?php

namespace App\Listeners\Backend\UserCreated;

use App\Events\Backend\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreatedNotifyUser implements ShouldQueue
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
    public function handle(UserCreated $event): void
    {
        $user = $event->user;
    }
}
