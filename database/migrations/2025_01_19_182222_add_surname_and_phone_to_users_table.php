<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSurnameAndPhoneToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Dodaj kolumny 'surname' i 'phone'
            $table->string('surname')->nullable()->after('name'); // Dodanie nazwiska
            $table->string('phone', 15)->nullable()->after('surname'); // Dodanie numeru telefonu
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Usuń kolumny w przypadku wycofania migracji
            $table->dropColumn(['surname', 'phone']);
        });
    }
}
