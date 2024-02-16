<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function author(User $author)
    {
        return view('author', [
            'title' => 'Post by author : '.$author->name,
            'author' => $author->name,
            'email' => $author->email,
            // Optimalisasi query menggunakan Lazy Eager Loading
            'posts' => $author->posts->load('author', 'category')
        ]);
    }
}
