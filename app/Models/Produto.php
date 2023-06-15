<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'sku',
        'nome',
        'quantidade',
        'tipo',
        'descricao',
        'valor',
        'tamanho',
        'banho'
    ];

    protected $validation_rules = [
        'sku' => 'required|unique'
    ];

}
