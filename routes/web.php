<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk autentikasi
Auth::routes();

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {

    // Rute untuk CRUD Post
    Route::resource('posts', PostController::class);

    // Rute untuk CRUD Akun hanya untuk admin
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UserController::class);
    });
});
