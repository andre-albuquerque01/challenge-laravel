<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::post('users', [UserController::class, 'store']);
    Route::post('login', [AuthController::class, 'login']);
    
    Route::middleware('auth:api')->group(function () {
        Route::put('users', [UserController::class, 'update']);
        Route::get('users', [UserController::class, 'delete']);
        Route::get('users', [UserController::class, 'show']);
        Route::apiResource('product', ProductController::class);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});
