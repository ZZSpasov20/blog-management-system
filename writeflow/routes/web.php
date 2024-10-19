<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Policies\PostPolicy;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/register', [RegisterController::class, 'index'])->name('register');;
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');;
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create')
    ->middleware('auth');

Route::post('/posts', [PostController::class, 'store'])->middleware('auth');;
