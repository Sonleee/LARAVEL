<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carros extends Model
{
    #reconhecendo a tabela carros
    protected $table = 'carros';

    #definindo os campos que podem ser preenchidos
    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'ano_fabricacao',
    ];
}
