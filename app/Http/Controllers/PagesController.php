<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('blog.pages.home');
    }
    public function blog()
    {
        return view('blog.pages.home');
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
