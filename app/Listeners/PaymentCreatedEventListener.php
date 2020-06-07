<?php

namespace App\Listeners;

use App\Events\PaymentCreatedEvent;
use App\Mail\PaymentCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PaymentCreatedEventListener implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle(PaymentCreatedEvent $event)
    {
        $to = $event->payment->client->email;
        
        Mail::to($to)->send(new PaymentCreatedMail());
    }
}
