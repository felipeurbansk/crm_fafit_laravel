<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
      'nome','descricao','duracao','ch_total'
    ];

    public $timestamps = false;

    public function disciplinas(){
      return $this->belongsToMany('App\Disciplina','cursos_has_disciplinas','cursos_id','disciplinas_id');
    }

}
