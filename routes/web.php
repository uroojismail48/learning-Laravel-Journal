<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

 

Route::view('/form', 'form');
Route::post('adduser', [UserController::class, 'addUser']);