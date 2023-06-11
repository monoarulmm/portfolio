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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('user_id')->nullable();
            
            $table->text('p_image')->nullable();
            $table->text('c_image')->nullable();
            $table->text('p_bio')->nullable();
            
            
            
            $table->string('phone')->nullable();
            
            $table->string('socail_media_1')->nullable();
            $table->string('socail_media_2')->nullable();
            $table->string('socail_media_3')->nullable();
            
            // $table->json('services')->nullable();
            $table->text('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};