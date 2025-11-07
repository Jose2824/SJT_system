<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;

    protected $table = 'motoristas';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'datanasc',
        'cpf',
        'cnh',
        'numcont',
    ];

    /**
     * Setters para limpar CPF e CNH antes de salvar no banco
     */
    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = preg_replace('/\D/', '', $value);
    }

    public function setCnhAttribute($value)
    {
        $this->attributes['cnh'] = preg_replace('/\D/', '', $value);
    }
}
