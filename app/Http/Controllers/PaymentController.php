<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\PaymentRequest;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentsClients()
    {
        route('api.payments', ['client' => 'id']);

        $clients = Client::findOrFail(request()->client)->payments;

        return response()->json($clients);
    }

    public function createPayment(PaymentRequest $request)
    {
        return Payment::create($request->validated());
    }
}
