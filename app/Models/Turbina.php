<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turbina extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa (proteção contra mass assignment)
    protected $fillable = [
        'nome',
        'descricao',
        'potencia_kw',
        'preco',
        'fabricante',
        'imagem',
        'disponivel',
    ];

    // Casting de tipos — garante conversão automática ao ler do banco
    protected $casts = [
        'disponivel'  => 'boolean',
        'preco'       => 'decimal:2',
        'potencia_kw' => 'decimal:2',
    ];
}
