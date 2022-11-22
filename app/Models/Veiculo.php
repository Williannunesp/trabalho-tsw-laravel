<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
      'nome',
      'marca_id'
    ];

    public function marca(){
        return $this->hasOne(Marca::class, 'marca_id');
    }
}
