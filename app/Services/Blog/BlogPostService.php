<?php

namespace App\Services\Blog;

use App\DataTransferObjects\BlogPostDto;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostGrade;
use App\Models\PostMeta;

class BlogPostService
{
    public function allPost($paginate = 5)
    {
        return Post::orderBy('id', 'desc')->paginate($paginate);
    }

    /**
     * Returns a category with all
     * its post
     *
     * @param [type] $category
     * @param integer $paginate
     * @return void
     */
    public function recentPost($category = null, $paginate = 5)
    {
        return Category::with(['post' => function ($query) use ($paginate) {
            $query->paginate($paginate);
        }])->where('title', $category)->get();
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

        $post->category()->sync($postDto->category); //make a multi select form
        $post->tag()->sync($postDto->tag); //make a multi select form by passing multiple id's to sync method

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
        //refactor into a single function with create
        $post = tap(Post::find($blogPost))->update([
            'title' => $postDto->title,
            'excerpt' => $postDto->excerpt,
            'min_to_read' => $postDto->min_to_read,
            'body' => $postDto->body,
        ]);

        $post->category()->sync($postDto->category);
        $post->tag()->sync($postDto->tag);

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

    public function delete($postId)
    {
        return Post::find('id')->delete();
    }
}
