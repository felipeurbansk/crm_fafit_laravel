<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Midia extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'caminho','destaque'
    ];

    public function noticia(){
      return $this->belongTo('App\Noticia','noticias_id');
    }
}
