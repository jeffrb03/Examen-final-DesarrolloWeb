<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animales';

    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'edad',
    ];
}
