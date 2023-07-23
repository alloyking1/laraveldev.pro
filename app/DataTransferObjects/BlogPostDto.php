<?php

namespace App\DataTransferObjects;

use App\Http\Requests\BlogPostRequest;

class BlogPostDto
{
    public function __construct(
        public readonly string $title,
        public readonly string $excerpt,
        public readonly string $min_to_read,
        public readonly string $category,
        public readonly string $body,
    ) {
    }

    public static function fromPostRequest(BlogPostRequest $request)
    {
        return new self(
            title: $request->validated('title'),
            excerpt: $request->validated('body'),
            min_to_read: $request->validated('body'),
            category: $request->validated('body'),
            body: $request->validated('body'),
        );
    }
}
