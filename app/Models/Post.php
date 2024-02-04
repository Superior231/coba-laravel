<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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

    // Menggunakan Collections
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
