<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\CategoryDto;
use App\Http\Requests\CategoryRequest;
use App\Services\Blog\BlogPostCategoryService;
use App\Services\Blog\BlogPostService;
use Exception;
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
        return view('blog.category.create');
    }

    public function save(CategoryRequest $request)
    {
        try {
            app(BlogPostCategoryService::class)->create(CategoryDto::fromCategoryRequest($request));
            return redirect()->back()->with('message', 'category created successfully');
        } catch (Exception $e) {
            //write error to log file
            return ($e);
        }
    }

    public function edit(CategoryRequest $request)
    {
        $categoryService = app(BlogPostCategoryService::class)->updateCategory(CategoryDto::fromCategoryRequest($request));
        dd($categoryService);
    }
}
