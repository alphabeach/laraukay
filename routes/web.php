<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');


Route::view('/customer-all', 'customer.index');
Route::view('/brand-all', 'brand.index');
Route::view('/announcement-all', 'announcement.index');

require __DIR__ . '/auth.php';
