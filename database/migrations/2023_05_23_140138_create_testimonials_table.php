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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            
            $table->string('cetagory')->nullable();
            $table->string('cetagory_id')->nullable();
            $table->string('cetagory_bio')->nullable();
            $table->string('cetagory_short_description')->nullable();

            $table->string('mentor_name')->nullable();
            $table->string('mentor_bio')->nullable();
            $table->string('mentor_image')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};