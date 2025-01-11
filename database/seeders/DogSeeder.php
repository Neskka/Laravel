<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dog;

class DogSeeder extends Seeder
{
    public function run()
    {
        Dog::firstOrCreate([
            'slug' => 'lonely',
        ], [
            'name' => 'Lonely',
            'sex' => 'Samiec',
            'age' => 3,
            'size' => 'Średni',
            'weight' => 15,
            'height' => 50,
            'hair' => 'Krótka',
            'adopted' => false,
            'description' => 'Opis psa Lonely',
            'photo_path' => 'Lonely/lonely1.jpg',
        ]);

        Dog::firstOrCreate([
            'slug' => 'lento',
        ], [
            'name' => 'Lento',
            'sex' => 'Samica',
            'age' => 2,
            'size' => 'Mały',
            'weight' => 8,
            'height' => 30,
            'hair' => 'Długie',
            'adopted' => false,
            'description' => 'Opis psa Lento',
            'photo_path' => 'Lento/lento1.jpg',
        ]);
    }
}
