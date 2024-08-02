<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('messages', MessageController::class);
});