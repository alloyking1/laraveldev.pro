<?php

namespace App\Services\Blog;

use App\DataTransferObjects\BlogPostDto;
use App\Models\Post;
use App\Models\PostGrade;
use App\Models\PostMeta;

class BlogPostService
{
    public function allPost($paginate = 5)
    {
        return Post::orderBy('id', 'desc')->paginate($paginate);
    }

    public function getPost($id)
    {
        $postWithRelationships = Post::with(['category', 'tag', 'grade', 'meta'])->where('id', $id)->get();
        return $postWithRelationships;
    }

    public function createPost(BlogPostDto $postDto): Post
    {
        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => $postDto->title,
            'excerpt' => $postDto->excerpt,
            'min_to_read' => $postDto->min_to_read,
            'body' => $postDto->body,
        ]);

        $post->category()->syncWithoutDetaching($postDto->category); //make a multi select form
        $post->tag()->syncWithoutDetaching($postDto->tag); //make a multi select form

        $post->meta()->create([
            'post_id' => $post->id,
            'meta_description' => $postDto->meta_description,
            'meta_keywords' => $postDto->meta_keywords,
            'meta_robots' => $postDto->meta_robots,
        ]);

        $post->grade()->create([
            'post_id' => $post->id,
            'name' => $postDto->grade,
        ]);

        return ($post);
    }


    public function updatePost(BlogPostDto $postDto, $blogPost)
    {
        // dd($postDto);
        //refactor into a single function with create
        $post = tap(Post::find($blogPost))->update([
            'title' => $postDto->title,
            'excerpt' => $postDto->excerpt,
            'min_to_read' => $postDto->min_to_read,
            'body' => $postDto->body,
        ]);

        // $post->category()->sync($postDto->category); //make a multi select form
        // $post->tag()->syncWithoutDetaching($postDto->tag); //make a multi select form

        PostMeta::where('post_id', $post->id)->update([
            'post_id' => $post->id,
            'meta_description' => $postDto->meta_description,
            'meta_keywords' => $postDto->meta_keywords,
            'meta_robots' => $postDto->meta_robots,
        ]);

        PostGrade::where('post_id', $post->id)->update([
            'post_id' => $post->id,
            'name' => $postDto->grade,
        ]);

        return ($post->category());
    }
}
