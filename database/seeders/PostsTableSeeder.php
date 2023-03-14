<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Post 1',
                'excert' => 'Summary of Post one',
                'body' => 'Body of post one',
                'img_path' => 'Empty',
                'is_published' => 'false',
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post 2',
                'excert' => 'Summary of Post two',
                'body' => 'Body of post two',
                'img_path' => 'Empty',
                'is_published' => 'false',
                'min_to_read' => 3,
            ]
        ];

        foreach ($posts as $key => $value) {
            Post::create($value);
        }
    }
}
