<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'placa_id',
        'situacao_id',
        'valor'
    ];

    public function placa(){
        return $this->hasOne(Placa::class, 'placa_id');
    }

    public function situacao(){
        return $this->hasOne(situacao::class, 'situacao_id');
    }
}
