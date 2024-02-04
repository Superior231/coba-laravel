<?php

use Illuminate\Support\Facades\Route;

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
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        "name" => "Hikmal Falah",
        "email" => "hikmal@gmail.com",
        "image" => "img/foto_profile.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hikmal Falah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, atque nostrum quaerat reiciendis ipsum et dolorem magni suscipit quo ullam eius, autem aut? Dolorum ducimus quibusdam repellendus, aperiam in libero, quaerat quia consequuntur adipisci voluptas ratione molestias soluta laborum voluptate, debitis natus tenetur architecto officia doloribus quos ad rerum dicta."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Justina Xie",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, eaque necessitatibus aut dicta, est animi minus rem iusto distinctio, itaque repellendus cupiditate? Iure quam nisi nesciunt accusamus modi quia asperiores! Repudiandae corporis laudantium unde id exercitationem est, nihil laborum earum fuga, commodi veritatis necessitatibus obcaecati nobis dolorem impedit quaerat quisquam temporibus. Excepturi, earum atque nulla quas cumque totam molestias est porro, consequatur eveniet eum quia quaerat modi architecto optio quam quis quae reiciendis facere. Nobis modi voluptatibus quaerat consequatur! Consectetur!"
        ]
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_post
    ]);
});


Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hikmal Falah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, atque nostrum quaerat reiciendis ipsum et dolorem magni suscipit quo ullam eius, autem aut? Dolorum ducimus quibusdam repellendus, aperiam in libero, quaerat quia consequuntur adipisci voluptas ratione molestias soluta laborum voluptate, debitis natus tenetur architecto officia doloribus quos ad rerum dicta."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Justina Xie",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, eaque necessitatibus aut dicta, est animi minus rem iusto distinctio, itaque repellendus cupiditate? Iure quam nisi nesciunt accusamus modi quia asperiores! Repudiandae corporis laudantium unde id exercitationem est, nihil laborum earum fuga, commodi veritatis necessitatibus obcaecati nobis dolorem impedit quaerat quisquam temporibus. Excepturi, earum atque nulla quas cumque totam molestias est porro, consequatur eveniet eum quia quaerat modi architecto optio quam quis quae reiciendis facere. Nobis modi voluptatibus quaerat consequatur! Consectetur!"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
