<?php

namespace App\Http\Controllers;

use Canvas\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function view(Request $request, $slug)
    {
        return Post::where('slug', $slug)->first();
    }
}
