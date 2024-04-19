<?php

namespace App\Console\Commands;

use App\Services\Blog\AiPost\GenerateAiPostService;
use Illuminate\Console\Command;

class AiPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:ai-post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ai generated blog post';

    /**
     * Execute the console command.
     */
    public function handle(GenerateAiPostService $AiPostService): void
    {
        $prompt = $AiPostService->getPrompt();
        // $writeRequest = $AiPostService->generateBlogPost($prompt->prompt);
        dd($prompt->prompt);
    }
}
