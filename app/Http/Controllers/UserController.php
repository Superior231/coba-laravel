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
            'title' => 'Author post',
            'author' => $author->name,
            'email' => $author->email,
            'posts' => $author->posts
        ]);
    }

    // public function category(Category $category)
    // {
    //     return view('category', [
    //         'title' => $category->name,
    //         'posts' => $category->posts,
    //         'category'=> $category->name
    //     ]);
    // }
}
