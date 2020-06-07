<?php

namespace App\Http\Controllers;

use App\Client;

class ClientController extends Controller
{
    public function listClients()
    {
        $clients = Client::all();

        return response()->json($clients);
    }
}
