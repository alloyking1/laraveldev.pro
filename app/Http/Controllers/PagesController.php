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
        $recentPost = $this->blogPostService->recentPost(10);
        return view('blog.pages.home', [
            'recentPost' => $recentPost
        ]);
    }
    public function blog()
    {
        return view('blog.index', [
            'posts' => $this->blogPostService->allPost(10)
        ]);
    }
    public function packages()
    {
        return view('blog.pages.home');
    }
    public function tutorial()
    {
        return view('blog.pages.home');
    }
}
