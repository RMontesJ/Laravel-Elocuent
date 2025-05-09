<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/crear-post', [PostController::class, 'create'])->name("crear-post");
Route::post('/crear-post', [PostController::class, 'store']);
