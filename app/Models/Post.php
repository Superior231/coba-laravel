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
}
