<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostPromptRequest;
use App\Models\BlogPostPrompt;
use App\Models\Category;
use App\Services\Blog\BlogPostTagService;
use Illuminate\Http\Request;

class BlogPostPromptController extends Controller
{
    /**
     * refactor to strategy pattern using an interface
     */

    public function index(BlogPostTagService $tag)
    {
        return view('blog.AiContent.index', [
            'category' => Category::get(),
            'tag' => $tag->allTags(),
        ]);
    }

    public function save(BlogPostPromptRequest $request)
    {
        BlogPostPrompt::create([
            'title' => $request->title,
            'slog' => $request->slog,
            'category' => $request->category,
            'prompt' => $request->prompt,
            'tag' => $request->tag,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'meta_robots' => $request->meta_robots,
            'grade' => $request->grade,
        ]);

        return redirect()->route('blog.ai-prompt.index')->with('success', 'Blog post prompt added successfully');
    }
}
