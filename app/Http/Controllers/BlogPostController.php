<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostCreateRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Services\Blog\BlogPostService;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function __construct(BlogPostService $service)
    {
    }

    public function edit(BlogPostCreateRequest $request)
    {
        return view('blog.create', [
            'category' => Category::get(),
            'tag' => Tag::get(),
        ]);
    }
}
