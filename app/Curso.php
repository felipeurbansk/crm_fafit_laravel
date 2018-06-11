<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Curso extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
      'nome','descricao','duracao','ch_total','img'
    ];


    public function disciplinas(){
      return $this->belongsToMany('App\Disciplina');
    }



}
