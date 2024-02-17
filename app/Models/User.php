<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // // Search
    // public function scopeTest($query, array $test)
    // {
    //     // search
    //     $query->when($test['search'] ?? false, function($query, $search) {
    //         return $query->where('title', 'like', '%' .$search . '%')
    //                      ->orWhere('body', 'like', '%' .$search . '%');
    //     });

    //     // search by category menggunakan callback
    //     $query->when($test['category'] ?? false, function($query, $category) {
    //         return $query->whereHas('category', function($query) use ($category) {
    //             $query->where('slug', $category);
    //         });
    //     });

    //     // search by author menggunakan ero functions
    //     $query->when($test['author'] ?? false, fn($query, $author) =>
    //         $query->whereHas('author', fn($query) =>
    //             $query->where('username', $author)
    //         )
    //     );
    // }
    // // Search End



    // relasi table database
    public function posts()
    {
        // 1 user boleh memiliki banyak post | One to Many
        return $this->hasMany(Post::class);
    }
}
