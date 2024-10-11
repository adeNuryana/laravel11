<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home',['name'=>'Ade Nuryana', 'title'=>'Home']);
});

Route::get('/about', function () {
    return view('about',['name'=>'Ade Nuryana', 'title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts',['name'=>'Ade Nuryana', 'title'=>'blog', 'posts'=> Post::all()]);
});

Route::get('/post/{slug}', function ($slug) {

    $post=Post::find($slug);
    return view('post',['title'=>'Blog', 'post'=>$post]);
});
Route::get('/contact', function () {
    return view('contact',['name'=>'Ade Nuryana', 'title'=>'contact']);
});