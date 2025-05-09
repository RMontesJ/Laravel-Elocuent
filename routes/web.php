<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/crear-post', [PostController::class, 'create'])->name("crear-post");
Route::post('/crear-post', [PostController::class, 'store']);

Route::get('/ver', [PostController::class, 'index'])->name('ver-posts');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
