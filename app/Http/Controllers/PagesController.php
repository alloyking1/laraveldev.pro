<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogPostService;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct(protected BlogPostService $blogPostService)
    {
    }
    public function home()
    {
        return view('blog.pages.home', [
            //fetch constants from enum class
            'recentPost' => $this->blogPostService->recentPost('tutorial', 5),
            'recentPackages' => $this->blogPostService->recentPost('packages', 5),
            'recentNews' => $this->blogPostService->recentPost('news', 5),
        ]);
    }

    public function tutorial()
    {
        return view('blog.pages.list-post-by-category', [
            'data' => $this->blogPostService->recentPost('tutorial', 1),
            'title' => 'Tutorials'
        ]);
    }

    public function blog()
    {
        return view('blog.pages.list-post-by-category', [
            'data' => $this->blogPostService->recentPost('blog', 1),
            'title' => 'Blog'
        ]);
    }
    public function packages()
    {
        return view('blog.pages.list-post-by-category', [
            'data' => $this->blogPostService->recentPost('news', 1),
            'title' => 'Packages'
        ]);
    }
}
