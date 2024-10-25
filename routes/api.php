<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TopUpController;
use App\Http\Controllers\Api\WebhookController;

// Route::get('/test', function (Request $request) {
//     echo('success');
// })->middleware('jwt.verify');

// NOTE: Auth routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::post('webhooks', [WebhookController::class, 'update']);

Route::middleware('jwt.verify')->group(function() {
    Route::post('top_ups', [TopUpController::class, 'store']);
});