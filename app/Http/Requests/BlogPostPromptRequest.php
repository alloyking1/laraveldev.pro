<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostPromptRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slog' => ['required', 'string', 'max:555'],
            'category' => ['required', 'integer'],
            'tag' => ['required', 'integer'],
            'prompt' => ['required', 'string'],
            'meta_description' => ['required', 'string'],
            'meta_keywords' => ['required', 'string'],
            'meta_robots' => ['required', 'string'],
            'grade' => ['required', 'string'],
        ];
    }
}
