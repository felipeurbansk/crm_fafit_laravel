<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Curso extends Model
{

    protected $fillable = [
      'nome','descricao','duracao','ch_total'
    ];


    public function disciplinas(){
      return $this->belongsToMany('App\Disciplina','cursos_has_disciplinas','cursos_id','disciplinas_id');
    }

}
