<?php

namespace App\Services\Blog\AiPost;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Models\BlogPostPrompt;
use App\Services\Blog\BlogPostService;
use App\DataTransferObjects\BlogPostDto;

class GenerateAiPostService
{
    protected $client;
    protected $apiKey;
    protected $aiModel;

    public function __construct()
    {
        $this->apiKey = env('OPEN_AI_API_KEY');
        $this->aiModel = env('OPEN_AI_MODEL');
        $this->client = new Client();
    }

    public function getPrompt()
    {
        return BlogPostPrompt::where('status', '0')->first();
    }

    public function generateBlogPost($prompt)
    {
        $payload = [
            'model' => $this->aiModel, // Adjust model as necessary.
            'prompt' => $prompt, // Define your prompt
            'temperature' => 0.7,
            'max_tokens' => 64,
        ];

        try {
            $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => $payload,
            ]);

            $body = json_decode($response->getBody(), true);

            // $post = $blogPostService->createPost(BlogPostDto::fromPostRequest($body));
            // BlogPostPrompt::where('id', $prompt->id)->update([
            //     'status' => 1
            // ]);

            return $body['choices'][0]['message']['content'] ?? 'No quote could be generated.';
        } catch (GuzzleException $e) {
            return 'Failed to generate blog post: ' . $e->getMessage();
        }
    }
}
