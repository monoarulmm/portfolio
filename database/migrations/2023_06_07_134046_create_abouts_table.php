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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('years')->nullable();
            $table->string('clients_satisfections')->nullable();
            $table->text('short_description')->nullable();
            $table->string('skill_1')->nullable();
            $table->string('percent_1')->nullable();
            $table->string('skill_2')->nullable();
            $table->string('percent_2')->nullable();
            $table->string('skill_3')->nullable();
            $table->string('percent_3')->nullable();
            $table->string('skill_4')->nullable();
            $table->string('percent_4')->nullable();
            $table->string('skill_5')->nullable();
            $table->string('percent_5')->nullable();
            $table->string('skill_6')->nullable();
            $table->string('percent_6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
