<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'showLoginForm'])->name('loginPage');
Route::post('/login', [UserController::class, 'login'])->name('loginCheck');
Route::resource('posts',PostController::class);
Route::post('logout',[UserController::class,'logout'])->name('logout');

