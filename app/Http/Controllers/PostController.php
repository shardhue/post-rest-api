<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function CreatePost(Request $request) {
        $newPost = new Post();
        $newPost->title = $request->title;
        $newPost->content = $request->content;
        $newPost->save();
    }
}
