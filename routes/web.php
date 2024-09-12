<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\data;


Route::get('/', function () {

    return view('home');
});
Route::get('/home', function () {
    return view('home');
});



Route::get('/posts', function () {
    $posts = PostController::all();
    return view('about', ['posts' => $posts]);
});


Route::get('/posts/{id}', function ($id) {

    $posts = PostController::all();
    $post = PostController::find($id);
    return view('post', ['posts' => $posts , 'post'=> $post]);
});

Route::get('/mongo', [PostController::class , 'all']);


// Route::get('/api', [PostController::class,'index']);
