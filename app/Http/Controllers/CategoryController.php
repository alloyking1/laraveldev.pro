<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogPostCategoryService;
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
}
