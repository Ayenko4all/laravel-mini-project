<?php

namespace App\Providers\App\Listener;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisteredCustomerToNewsletter
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
     * @param  NewCustomerHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        //
    }
}
