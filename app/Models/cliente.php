<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'telefone',
    ];
    public $timestamps = true;
}
