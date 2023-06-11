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
        Schema::create('allclasses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('cetagory')->nullable();
            $table->string('service')->nullable();
            $table->string('video_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allclasses');
    }
};