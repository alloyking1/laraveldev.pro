<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_post_prompts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('slog')->nullable();
            $table->text('category')->nullable();
            $table->text('tag')->nullable();
            $table->text('prompt');
            $table->integer('min_to_read')->default(1);
            $table->string('image_path')->nullable();
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('meta_robots');
            $table->string('grade');
            $table->boolean('is_published')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_prompts');
    }
};
