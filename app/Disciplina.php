<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'nome','semestres','descricao','ch'
    ];


    public function cursos(){
      return $this->hasmMany('App\Curso','cursos_has_disciplinas','disciplinas_id', 'cursos_id')->withTimestamps();;
    }

    public function professor(){
      return $this->belongsTo('App\Professore','professores_id');
    }
}
