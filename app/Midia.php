<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midia extends Model
{
    protected $fillable = [
      'caminho','destaque'
    ];

    public function noticia(){
      return $this->belongTo('App\Noticia');
    }
}
