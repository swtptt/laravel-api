<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthController;

// Route login (tanpa middleware)
Route::post('login', [AuthController::class, 'login']);

// Route proteksi pakai JWT middleware 'auth:api'
Route::middleware('auth:api')->group(function () {
    Route::apiResource('products', ProductController::class);
});
