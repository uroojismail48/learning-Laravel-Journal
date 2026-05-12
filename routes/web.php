<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('welcome');
});

 

Route::view('/form', 'form');
Route::view('/home', 'home');
Route::view('/about/{name}', 'about');
Route::post('adduser', [UserController::class, 'addUser']);