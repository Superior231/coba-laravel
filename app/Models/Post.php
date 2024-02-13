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


    // relasi table database
    public function category()
    {
        // 1 post hanya memiliki 1 category | One to One
        return $this->belongsTo(Category::class);
    }
    
    public function user()
    {
        // 1 post hanya boleh memiliki 1 user | One to One
        return $this->belongsTo(User::class);
    }
}
