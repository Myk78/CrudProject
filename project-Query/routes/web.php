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
Route::post('/adduser',[userinfoController::class,'adduser'])->name('adduser');
Route::get('/updateuser/{id}',[userinfoController::class,'updatepage'])->name('updateuser.page');
Route::post('/update{id}',[userinfoController::class,'updateuser'])->name('updateuser.data');
Route::get('/delete/{id}',[userinfoController::class,'deleteuser'])->name('removeuser');
Route::get('/userdetails/{id}',[userinfoController::class,'singleuser'])->name('userdetail');

Route::view('/Adduser','adduser')->name('newuser');

// Route::get('/userdata/{id}',[userinfoController::class,'singleuser'])->name('userdata');
// Route::get('/userdata/{id}',[dataController::class,'userdata'])->name('userdata');