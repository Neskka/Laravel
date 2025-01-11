<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sex');
            $table->integer('age');
            $table->string('size');
            $table->integer('weight');
            $table->integer('height');
            $table->string('hair');
            $table->boolean('adopted')->default(false);
            $table->text('description')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('gallery_photo_1')->nullable(); 
            $table->string('gallery_photo_2')->nullable(); 
            $table->string('gallery_photo_3')->nullable(); 
            $table->string('gallery_photo_4')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
};
