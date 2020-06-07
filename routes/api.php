<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/clients', 'ClientController@listClients');
Route::get('/payments', 'PaymentController@paymentsClients')->name('api.payments');
Route::post('/payment', 'PaymentController@createPayment');
