<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function GetAllPosts() {
        return Post::all();
        return redirect('/');
    }

    public function GetPost(Post $post) {
        return $post;
        return redirect('/');
    }

    public function CreatePost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        
        Post::create($incomingFields);
        return redirect('/');
    }

    public function EditPost(Request $request, Post $post) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        
        $post->update($incomingFields);
        return redirect('/');
    }

    public function DeletePost(Post $post) {
        $post->delete();
        return redirect('/');
    }
}
