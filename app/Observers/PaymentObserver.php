<?php

namespace App\Observers;

use App\Events\PaymentCreatedEvent;
use App\External\ApiDollar;
use App\Payment;
use Illuminate\Support\Str;

class PaymentObserver
{
    /**
     * Handle the payment "creating" event.
     *
     * @param  \App\Payment  $payment
     * @return void
     */
    public function creating(Payment $payment)
    {
        $payment->uuid = Str::uuid();
        $payment->payment_date = now();
        $payment->expired_at = now()->addMonths(6);
        $payment->clp_usd = (new ApiDollar())->get();
    }

    /**
     * Handle the payment "created" event.
     *
     * @param  \App\Payment  $payment
     * @return void
     */
    public function created(Payment $payment)
    {
        event(new PaymentCreatedEvent($payment));
    }
}
