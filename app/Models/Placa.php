<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'veiculo_id',
        'cliente_id'
    ];

    public function veiculo(){
        return $this->hasOne(veiculo::class, 'veiculo_id');
    }

    public function cliente(){
        return $this->hasOne(Cliente::class, 'cliente_id');
    }

}
