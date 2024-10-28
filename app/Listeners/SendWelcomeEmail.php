<?php

namespace App\Listeners;
use App\Events\UserRegistered;

use Mail;
use App\Mail\WelcomeMail;

class SendWelcomeEmail 
{
    // /**
    //  * Create the event listener.
    //  */
    // public function __construct()
    // {
    //     //
    // }


    public function handle(UserRegistered $event): void
    {
        Mail::to($event->user->email)->send(new WelcomeMail($event->user));
    }
}
