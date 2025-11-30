<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
    'razaoSocial',
    'nomeFantasia',
    'cnpj',
    'inscricao_estadual',

    'telefone',
    'email',

    'rua',
    'numero',
    'bairro',
    'cidade',
    'estado',
    'cep',
    ];
}
