<?php

namespace App\Http\Controllers;

use Canvas\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        $response = $post->toArray();

        return response($response, 200);
    }

    public function view(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $response = $post->toArray();

        return response($response, 200);
    }
}
