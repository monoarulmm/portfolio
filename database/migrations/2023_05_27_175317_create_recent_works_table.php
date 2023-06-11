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
        Schema::create('recent_works', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('cetagory')->nullable();
            $table->string('service')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            
            $table->string('client')->nullable();
            $table->string('architect')->nullable();
            $table->string('location')->nullable();
            $table->string('duration')->nullable();
            $table->string('completion')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('work')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recent_works');
    }
};