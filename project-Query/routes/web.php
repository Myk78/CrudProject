<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\userdataController;
use App\Http\Controllers\userinfoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[userdataController::class,'userdata']);


Route::get('/userinfo',[userinfoController::class,'showinfo'])->name('alluser');
Route::get('/userdetails/{id}',[userinfoController::class,'singleuser'])->name('userdetail');
// Route::get('/userdata/{id}',[userinfoController::class,'singleuser'])->name('userdata');
Route::get('/userdata/{id}',[dataController::class,'userdata'])->name('userdata');