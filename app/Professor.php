<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $fillable = [
      'nome','titulacao','descricao','img','coordenador'
    ];

    public $timestamps = false;

    public function disciplinas(){
      return $this->hasMany('App\Disciplina');
    }

}
