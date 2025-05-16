<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'universe_id'];

    /** @use HasFactory<\Database\Factories\HeroFactory> */
    use HasFactory;

    public function universe(){
        // one hero only belongs to one universe
        return $this->belongsTo(Universe::class);
    }
}
