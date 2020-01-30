<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\Mail;

class WelcomeNewCustomerListener implements ShouldQueue
{
    

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event){

        sleep(10);

        Mail::to($event->customer->email)->send(new WelcomeNewUserMail());
    }
}
