<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostCreateRequest;
use App\Http\Requests\BlogPostRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Services\Blog\BlogPostService;
use Illuminate\Http\Request;
use App\DataTransferObjects\BlogPostDto;
use App\Models\Post;

class BlogPostController extends Controller
{
    public function __construct(protected BlogPostService $service)
    {
    }

    public function edit()
    {
        return view('blog.create', [
            'category' => Category::get(),
            'tag' => Tag::get(),
        ]);
    }

    public function update(BlogPostRequest $request, Post $blogPost = null)
    {
        $post = $this->service->updateOrCreate(BlogPostDto::fromPostRequest($request), $blogPost);
    }
}
