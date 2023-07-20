<?php

namespace App\DataTransferObjects;

use App\Http\Requests\StorePostRequest;

class BlogPostDto
{
    public function __construct(
        public readonly string $title,
        public readonly string $body,
    ) {
    }

    public static function fromAppRequest(StorePostRequest $request)
    {
        return new self(
            title: $request->validated('title'),
            body: $request->validated('body'),
        );
    }
}
