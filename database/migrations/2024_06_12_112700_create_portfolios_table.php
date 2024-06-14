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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('portfolio_review_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('portfolio_email_list_id')->constrained()->cascadeOnDelete();
            $table->string('url');
            $table->string('greeting')->uniqid()->nullable();
            $table->string('about')->nullable();
            $table->string('profile_img')->nullable();
            $table->json('skills')->nullable();
            $table->string('cv')->nullable();
            $table->string('status')->default('inprogress');
            $table->boolean('published')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
