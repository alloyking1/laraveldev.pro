<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostPrompt extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slog',
        'category',
        'prompt',
        'tag',
        'meta_description',
        'meta_keywords',
        'meta_robots',
        'grade'
    ];
}
