<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    public function run()
    {
        DB::table('dogs')->insert([
            [
                'name' => 'Lonely',
                'sex' => 'Suczka',
                'age' => 2,
                'size' => 'Średni',
                'weight' => 14,
                'height' => 45,
                'hair' => 'Krótka/mieszana',
                'adopted' => false,
                'description' => 'Friendly and playful',
                'photo_path' => 'images/rex.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bella',
                'sex' => 'Female',
                'age' => 3,
                'size' => 'Medium',
                'weight' => 20,
                'height' => 50,
                'hair' => 'Long',
                'adopted' => false,
                'description' => 'Loves cuddles',
                'photo_path' => 'images/bella.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}