<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\UserController;
use  App\Http\Controllers\HomeController;


 

Route::view('/form', 'form');
Route::view('/home', 'home');

Route::view('/welcome', 'welcome')->name('wel');
Route::view('/contact', 'contacts')->name('con');
Route::view('/about/{name}', 'about');
Route::post('adduser', [UserController::class, 'addUser']);
Route::get('show',[HomeController::class,'show']) ;
Route::get('/user/{name}', [HomeController::class, 'user'])->name('user');