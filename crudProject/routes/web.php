<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/create',[productController::class, 'create'])->name('product.create');
