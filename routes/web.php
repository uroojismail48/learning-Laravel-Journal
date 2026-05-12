<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\UserController;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\NewController;
use  App\Http\Controllers\StudentController;
Route::view('/form', 'form');
Route::view('/home', 'home');
Route::view('/welcome', 'welcome')->name('wel');
Route::view('/contact', 'contacts')->name('con');
Route::view('/about/{name}', 'about');
Route::post('adduser', [UserController::class, 'addUser']);
Route::view('/home', 'home');
Route::get('/user/{name}', [HomeController::class, 'user'])->name('user');


// grouping with prefix

Route::prefix('/student')->group(function(){  
Route::view('fair', 'fair');
Route::get('show', [StudentController::class, 'show']);
Route::get('add', [StudentController::class, 'add']);
});
 
// ..grouping with  controllers
Route::controller(NewController::class)-> group (function(){
Route::get('list',  'list');
Route::get('add',  'add');
Route::get('delete',  'delete');
});
