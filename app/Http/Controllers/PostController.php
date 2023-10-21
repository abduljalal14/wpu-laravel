<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest();

        

        return view('Posts', [
            "title" => "All Posts",
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
