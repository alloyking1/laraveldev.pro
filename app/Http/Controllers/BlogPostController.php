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

    public function show()
    {
        return view('blog.create', [
            'category' => Category::get(),
            'tag' => Tag::get(),
        ]);
    }

    public function create(BlogPostRequest $request)
    {
        $post = $this->service->createPost(BlogPostDto::fromPostRequest($request));
        return back()->with('success', 'Post created successfully');
    }

    public function edit($id)
    {

        return view('blog.edit', [
            'post' => $this->service->getPost($id),
            'category' => Category::get(),
            'tag' => Tag::get(),
        ]);
    }
}
