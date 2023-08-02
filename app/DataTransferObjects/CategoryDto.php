<?php

namespace App\DataTransferObjects;

use App\Http\Requests\CategoryRequest;

class CategoryDto
{
    public function __construct(protected $title, protected $description)
    {
    }

    public static function fromCategoryRequest(CategoryRequest $request)
    {
        return new self(
            title: $request->title(),
            description: $request->description(),
        );
    }
}
