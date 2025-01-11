<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DogPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['dog_id', 'photo_path'];

    public function dog()
    {
        return $this->belongsTo(Dog::class);
    }
}
