<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caminhoes extends Model
{
    use HasFactory;

    protected $table = 'caminhoes';

    protected $fillable = [
        'modelo',
        'cor',
        'cavalaria',
        'ano',
        'renavam',
        'placa',
    ];
}
