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
        Schema::create('hero_section', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('line1')->nullable();
            $table->string('line2');
            $table->string('line3');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
  
        
            $table->string('icon1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('icon3')->nullable();
            
            $table->string('socail_media_1')->nullable();
            $table->string('socail_media_2')->nullable();
            $table->string('socail_media_3')->nullable();
            
            $table->string('download_cv')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_section');
    }
};