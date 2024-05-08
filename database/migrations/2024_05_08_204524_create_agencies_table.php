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
        //     - fields
        // - status
        // - company name
        // - company email
        // - company type -agency -freelancer
        // - company headquarters - a drop down of continents
        // - company size
        // - minimum project size
        // - website
        // - video (optional) *premium feature later
        // - featured img
        // - short description
        // - about company
        // - video under about section (optional) *premium feature later
        // - company logo
        // - skills (tags) (json)
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('type');
            $table->string('headquarters');
            $table->string('size');
            $table->string('project_size');
            $table->string('video');
            $table->string('feature_img');
            $table->string('short_description');
            $table->string('about_company');
            $table->string('about_video');
            $table->string('logo');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
