<?php

namespace App\External;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ApiDollar
{
    public function get()
    {
        return Cache::has('clp_usd') ? Cache::get('clp_usd') : $this->fetchApi();
    }

    private function fetchApi()
    {
        $response = Http::get('https://mindicador.cl/api/dolar');

        $data = (array) json_decode($response->body());

        $last = collect($data['serie'])->first();

        Cache::put('clp_usd', $last->valor, now());

        return $last->valor;
    }
}
