<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'sex', 'age', 'size', 'weight', 'height', 'hair', 'adopted', 'description', 'photo_path'
    ];

    // Generowanie sluga przed zapisaniem psa
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($dog) {
            if (!$dog->slug) {
                $dog->slug = Str::slug($dog->name);
            }
        });
    }

    // Walidacja danych
    public static $rules = [
        'name' => 'required|max:255',
        'slug' => 'required|unique:dogs|alpha_dash',
        'sex' => 'required|in:Samiec,Samica',
        'age' => 'required|integer|min:0',
        'size' => 'required|in:Mały,Średni,Duży',
        'weight' => 'required|integer|min:0',
        'height' => 'required|integer|min:0',
        'hair' => 'required|in:Krótka,Długie',
        'adopted' => 'boolean',
        'description' => 'nullable|string',
        'photo_path' => 'nullable|string',
    ];

    public function photos()
    {
        return $this->hasMany(DogPhoto::class);
    }
}
