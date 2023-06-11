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
        Schema::create('cetagories', function (Blueprint $table) {
            $table->id();
            $table->string('cetagory_name')->nullable();
            $table->string('image')->nullable();
            $table->string('cetagory_icon')->nullable();
            $table->text('short_description')->nullable();
            
            $table->longText('description')->nullable();
            
    
            $table->text('approach')->nullable();
            
            $table->text('capabilities')->nullable();
            
            $table->string('line1')->nullable();
            $table->string('line2')->nullable();
            $table->string('line3')->nullable();
            $table->string('line4')->nullable();
            $table->string('line5')->nullable();
            
            $table->text('workprocess')->nullable();
            
            $table->string('line6')->nullable();
            $table->string('line7')->nullable();
            $table->string('line8')->nullable();
            $table->string('line9')->nullable();
            $table->string('line')->nullable();
            
            $table->string('image1');
            $table->string('image2');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cetagories');
    }
};