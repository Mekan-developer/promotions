<?php

namespace App\Listeners;

use App\Events\SupplierRegistered;
use App\Mail\CongratulationMail;
use App\Mail\WelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendCongratulationEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SupplierRegistered $event): void
    {
        Mail::to($event->supplier->email)->send(new CongratulationMail($event->supplier));
    }
}
