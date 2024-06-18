<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/notify', [NotifyController::class, 'notify']);
Route::get('/notify-private', [NotifyController::class, 'notifyPrivate']);

Route::get('/login', [LoginController::class, 'login']);