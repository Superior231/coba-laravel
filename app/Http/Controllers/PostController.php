<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Clockwork\Storage\Search;

class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('slug', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('posts', [
            'title' => 'All posts' . $title,
            'active' => 'posts',
            // Optimalisasi query menggunakan Eager Loading | pindah ke Models Post agar tidak terlalu panjang
            // 'posts' => Post::with(['category', 'author'])->latest()->get();

            // filter dapat dari function di Models Post
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
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
