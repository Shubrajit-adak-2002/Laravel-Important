<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SessionController::class,'sessionIndex']);
Route::get('storeSession',[SessionController::class,'sessionStore']);
Route::get('delete',[SessionController::class,'deleteSession']);
