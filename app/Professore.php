<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professore extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'nome','titulacao','descricao','img','coordenador','facebook','linkedin','google'
  ];

  public function disciplinas(){
    return $this->hasMany('App\Disciplina','professores_id');
  }

}
