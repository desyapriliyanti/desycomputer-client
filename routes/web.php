<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('katalog', KatalogController::class);
Route::resource('order', OrderController::class);
