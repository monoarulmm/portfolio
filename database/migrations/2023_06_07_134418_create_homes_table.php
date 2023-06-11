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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('copyrighttext')->nullable();
            
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('bio')->nullable();
            
            $table->string('icon1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('icon5')->nullable();
            
            $table->string('socail_media_1')->nullable();
            $table->string('socail_media_2')->nullable();
            $table->string('socail_media_3')->nullable();
            $table->string('socail_media_4')->nullable();
            $table->string('socail_media_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
