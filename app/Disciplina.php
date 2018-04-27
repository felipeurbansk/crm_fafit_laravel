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
      return $this->belongsToMany('App\Curso');
    }

    public function professor(){
      return $this->belongsTo('App\Professore','professores_id');
    }
}
