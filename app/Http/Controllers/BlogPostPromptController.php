<?php

namespace App\Http\Controllers;

use App\Models\BlogPostPrompt;
use Illuminate\Http\Request;

class BlogPostPromptController extends Controller
{
    /**
     * refactor to strategy pattern using an interface
     */

    public function index()
    {
        return view('blog.AiContent.index');
    }

    public function save(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required | string',
            'description' => 'required | string',
        ]);

        BlogPostPrompt::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('blog.ai-prompt.index')->with('success', 'Blog post prompt added successfully');
    }
}
