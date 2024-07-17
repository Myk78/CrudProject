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
Route::get('/adduser',[userinfoController::class,'adduser'])->name('adduser');
Route::get('/update',[userinfoController::class,'updateuser'])->name('adduser');
Route::get('/delete/{id}',[userinfoController::class,'deleteuser'])->name('removeuser');
Route::get('/userdetails/{id}',[userinfoController::class,'singleuser'])->name('userdetail');

// Route::get('/userdata/{id}',[userinfoController::class,'singleuser'])->name('userdata');
// Route::get('/userdata/{id}',[dataController::class,'userdata'])->name('userdata');