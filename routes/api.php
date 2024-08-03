<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v2')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('user', [UserController::class, 'store']);
    
    // Route::middleware('auth:api')->group(function () {
    //     Route::put('update', [UserController::class, 'update']);
    //     Route::get('', [UserController::class, 'delete']);
    //     Route::get('show', [UserController::class, 'show']);
    //     Route::apiResource('product', ProductController::class);
    // });
});
