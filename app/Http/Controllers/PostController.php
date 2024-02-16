<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All posts',
            'active' => 'posts',
            // 'posts' => Post::all()

            // Optimalisasi query menggunakan Eager Loading | pindah ke Models Post agar tidak terlalu panjang
            // 'posts' => Post::with(['category', 'author'])->latest()->get();
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
