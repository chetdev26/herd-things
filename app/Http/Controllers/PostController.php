<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public static function  all() :object
    {
        $posts = Post::all();
        return $posts;
    }
    public static function find($id) : object
    {
        $posts = Post::all();

        $post = $posts->where('id', $id)->first();

        if (!$post) {
            abort(404, 'Post not found');
        }

        else {
            return $post;
        }
    }



}
