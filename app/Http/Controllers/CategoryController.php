<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories'=> Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'active' => 'category',
            // Optimalisasi query menggunakan Lazy Eager Loading
            'posts' => $category->posts->load('category', 'author'),
            'category'=> $category->name
        ]);
    }
}
