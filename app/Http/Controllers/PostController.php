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
        return Response::json(
            array(
                'status' => 'success',
                'post' => $post->toArray(),
            ),
            200
        );
    }

    public function view(Request $request, $slug)
    {
        return Post::where('slug', $slug)->first();
    }
}
