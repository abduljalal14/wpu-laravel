<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }

        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' in '.$user->name;
        }
        

        return view('Posts', [
            "title" => "All Posts".$title, // varibel judul
            "active" => "posts", // varibel kelas aktif di navbar
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString() // variable query ke model
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
