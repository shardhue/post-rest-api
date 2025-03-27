<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();
    return view('home', ['posts'=> $posts]);
});

Route::get('/edit-post/{post}', function (Post $post) {
    return view('edit-post', ['post' => $post]);
});