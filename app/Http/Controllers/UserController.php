<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class UserController extends Controller
{
    // public function author(User $author)
    // {

    //     if (request('category')) {
    //         $category = Category::firstWhere('slug', request('category'));
    //     }

    //     if (request('author')) {
    //         $authora = User::firstWhere('username', request('author'));
    //     }

    //     return view('author', [
    //         'title' => "Post by author: $author->name",
    //         'active' => 'posts',
    //         'username' => $author->username,
    //         'author' => $author->name,
    //         'email' => $author->email,
    //         // Optimalisasi query menggunakan Lazy Eager Loading
    //         // 'posts' => $author->posts->load('author', 'category')
    //         'posts' => $author->posts()->with(['author', 'category'])->get()
    //         // 'posts' => ->filter2(request(['search', 'category', 'author']))

    //     ]);
    // }


    public function author(User $author)
    {
        $posts = $author->posts()->with(['author', 'category'])->latest();
    
        if (request('search')) {
            $posts->where('title', 'like', '%' .request('search') . '%')
                     ->orWhere('body', 'like', '%' .request('search') . '%');
        }
    
        if (request('category')) {
            $posts->whereHas('category', function($query) {
                $query->where('slug', request('category'));
            });
        }
    
        $posts = $posts->get();
    
        return view('author', [
            'title' => "Post by author: $author->name",
            'active' => 'posts',
            'username' => $author->username,
            'author' => $author->name,
            'email' => $author->email,
            'posts' => $posts
        ]);
    }


}
