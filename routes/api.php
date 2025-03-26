<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/posts', [PostController::class, 'GetAllPosts']);

Route::get('/posts/{post}', [PostController::class, 'GetPost']);

Route::post('/posts', [PostController::class, 'CreatePost']);

Route::patch('/posts/{post}', [PostController::class, 'EditPost']);

Route::delete('/posts/{post}', [PostController::class, 'DeletePost']);
