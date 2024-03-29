<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        "name" => "Hikmal Falah",
        "email" => "hikmal@gmail.com",
        "image" => "img/foto_profile.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'categories']);
Route::get('/category/{category:slug}', [CategoryController::class, 'category']);
Route::get('/authors/{author:username}', [UserController::class, 'author']);