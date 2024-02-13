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
            'categories'=> Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts,
            'category'=> $category->name
        ]);
    }
}
