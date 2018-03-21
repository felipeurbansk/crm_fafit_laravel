<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professore extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'nome','titulacao','descricao','img','coordenador'
  ];

  public function disciplinas(){
    return $this->hasMany('App\Disciplina','professores_id');
  }

}
