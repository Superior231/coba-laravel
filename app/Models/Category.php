<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    
    // relasi table database
    public function posts()
    {
        // 1 category boleh memiliki banyak post | One to Many
        return $this->hasMany(Post::class);
    }
}
