<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    // Campos preenchíveis — espelham as colunas da tabela 'contatos'
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'mensagem',
    ];
}
