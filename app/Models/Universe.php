<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $fillable = ['name', 'description', 'location'];

    /** @use HasFactory<\Database\Factories\UniverseFactory> */
    use HasFactory;

    public function heroes(){
        // one to many = one universe has many heroes
        return $this->hasMany(Hero::class);
    }
}
