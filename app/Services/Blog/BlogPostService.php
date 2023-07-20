<?php

namespace App\Services\Blog;

use App\DataTransferObjects\BlogPostDto;
use App\Models\Post;

class BlogPostService
{
    public function allPost($paginate = 5)
    {
        return Post::orderBy('id', 'desc')->paginate($paginate);
    }

    public function store(BlogPostDto $dto)
    {
        return Post::create([
            'title' => $dto->title,
            'body' => $dto->body
        ]);
    }

    // public function update(BlogPost $blogPost, BlogPostDto $dto)
    // {
    //     //usa a tap method to return updated post no boolean
    //     return tap($blogpost)->update([
    //         'title' => $dto->title,
    //         'body' => $dto->body
    //     ]);
    // }
}
