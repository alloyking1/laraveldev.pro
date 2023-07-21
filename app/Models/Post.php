<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'excerpt', 'body', 'image_path', 'is_published', 'min_to_read'
    ];

    protected $cast = [
        'is_published' => 'boolean'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'post_tag');
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    // public function meta()
    // {
    //     return $this->hasOne(PostMeta::class);
    // }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }
}
