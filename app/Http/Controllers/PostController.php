<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'content' => 'required'
        ]);
        auth()->user()->posts()->create($request->only('content'));
        return back();
    }
}
