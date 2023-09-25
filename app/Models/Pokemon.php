<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $table = 'pokemons';
    protected $fillable = [
        'name',
        'height',
        'weight',
        'type',
        'speed',
        'special-defence',
        'special-attack',
        'defence',
        'attack',
        'hp',
        'move',
        'img_url'
    ];
}
