<?php

use App\Http\Controllers\RedirectPaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('payment_finish', [RedirectPaymentController::class, 'finish']);

Route::group(['prefix' => 'admin'], function() {
    Route::view('/', 'dashboard');
});