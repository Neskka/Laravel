<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUnusedColumnsFromDogsTable extends Migration
{
    public function up()
    {
        Schema::table('dogs', function (Blueprint $table) {
            // Usuń nieużywane kolumny
            $table->dropColumn(['adopter_name', 'adopter_email', 'gallery_photo_1', 'gallery_photo_2', 'gallery_photo_3', 'gallery_photo_4']);
        });
    }

    public function down()
    {
        Schema::table('dogs', function (Blueprint $table) {
            // Przywróć usunięte kolumny w razie potrzeby
            $table->string('adopter_name')->nullable();
            $table->string('adopter_email')->nullable();
            $table->string('gallery_photo_1')->nullable();
            $table->string('gallery_photo_2')->nullable();
            $table->string('gallery_photo_3')->nullable();
            $table->string('gallery_photo_4')->nullable();
        });
    }
}
