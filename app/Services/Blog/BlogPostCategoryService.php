<?php

namespace App\Services\Blog;

use App\DataTransferObjects\CategoryDto;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class BlogPostCategoryService
{
    public function allPostCategory()
    {
        return Category::get();
    }

    public function selectedPostCategory($id)
    {
        $value = [];
        $postCategory = Post::with('category')->where('id', $id)->get();
        foreach ($postCategory as $val) {
            foreach ($val->category as $each) {
                array_push($value, $each->title);
            }
        }

        return $value;
    }

    public function create(CategoryDto $dto)
    {
        return Category::create([
            'title' => $dto->title,
            'description' => $dto->description
        ]);
    }

    public function updateCategory()
    {
    }
}
