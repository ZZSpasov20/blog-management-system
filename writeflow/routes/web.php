<?php

use App\Http\Controllers\CommentController;
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


Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])
    ->middleware('auth');
Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create')
    ->middleware('auth');
Route::get('/posts/userPosts', [PostController::class, 'userPosts'])
    ->name("posts.userPosts")
    ->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->middleware(['auth', 'can:show,post'])
    ->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->middleware(['auth', 'can:edit,post'])
    ->name('posts.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])
    ->middleware(['auth', 'can:edit,post']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])
    ->middleware(['auth', 'can:edit,post']);

Route::post('/comments/{post}', [CommentController::class, 'store'])
    ->middleware('auth')
    ->name('comments.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])
    ->middleware('auth', 'can:delete,comment')
    ->name('comments.destroy');
