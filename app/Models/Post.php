<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // yang boleh diisi
    // protected $fillable = ['title', 'slug', 'author', 'excerpt', 'body'];

    // yang gak boleh diisi
    protected $guarded = ['id'];

    // Optimalisasi query menggunakan Eager Loading
    protected $with = ['category', 'author'];


    // Search
    public function scopeFilter($query, array $filters)
    {
        // search
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' .$search . '%')
                         ->orWhere('body', 'like', '%' .$search . '%');
        });

        // search by category menggunakan callback
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // search by author menggunakan ero functions
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }
    // Search End


    // relasi table database
    public function category()
    {
        // 1 post hanya memiliki 1 category | One to One
        return $this->belongsTo(Category::class);
    }
    
    public function author()
    {
        // 1 post hanya boleh memiliki 1 user | One to One
        return $this->belongsTo(User::class, 'user_id');
    }
}
