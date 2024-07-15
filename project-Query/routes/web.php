<?php

use App\Http\Controllers\userdataController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[userdataController::class,'userdata']);
