<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\AnnouncementController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('customers', CustomerController::class);
Route::apiResource('brands', BrandController::class);
Route::apiResource('announcements', AnnouncementController::class);
