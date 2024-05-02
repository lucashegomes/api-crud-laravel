<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concessionaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sigla',
        'cnpj'
    ];

}
