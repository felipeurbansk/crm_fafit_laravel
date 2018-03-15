<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professore extends Model
{
  protected $fillable = [
    'nome','titulacao','descricao','img','coordenador'
  ];

  public function disciplinas(){
    return $this->hasMany('App\Disciplina','professores_id');
  }

}
