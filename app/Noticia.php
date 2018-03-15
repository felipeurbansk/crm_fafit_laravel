<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'titulo','corpo','resumo','data','palavras_chaves','eh_cpa','eh_coordenador'
    ];

    public function midias(){
      return $this->hasMany('App\Midia');
    }

}
