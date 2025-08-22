<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'showLoginForm'])->name('loginPage');
Route::post('/login', [UserController::class, 'login'])->name('loginCheck');
Route::get('dashboard',[UserController::class,'dashboard'])->name('dashboard')->can('isAdmin');
Route::get('profile/{id}',[UserController::class,'profile'])->name('profile');
Route::get('post/{id}',[UserController::class,'post'])->name('posts');
Route::post('logout',[UserController::class,'logout'])->name('logout');
Route::get('admin',[UserController::class,'admin'])->name('admin');
Route::get('other',[UserController::class,'other'])->name('other');
