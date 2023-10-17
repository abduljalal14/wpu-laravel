<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Abdul Jalal",
        "email" => "abduljalal@gmail.com",
        "image" => "https://down-id.img.susercontent.com/file/8b4f93a3afaa5328153737d74ccfa392"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load(['category', 'user'])
    ]);
} );

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' =>"Post by Category : $user->name",
        'posts' => $user->posts->load(['category', 'user'])
    ]);
} );