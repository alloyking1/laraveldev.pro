<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\CategoryDto;
use App\Http\Requests\CategoryRequest;
use App\Services\Blog\BlogPostCategoryService;
use App\Services\Blog\BlogPostService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('blog.category.index', [
            'category' => app(BlogPostCategoryService::class)->allPostCategory()
        ]);
    }

    public function create()
    {
        dd('create');
    }

    public function edit(CategoryRequest $request)
    {
        $categoryService = app(BlogPostCategoryService::class)->updateCategory(CategoryDto::fromCategoryRequest($request));
        dd($categoryService);
    }
}
