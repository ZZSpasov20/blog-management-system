<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
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
Route::get('/posts/userPosts', [PostController::class, 'userPosts'])
    ->name("posts.userPosts")
    ->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->middleware(['auth', 'can:show,post'])
    ->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');
