<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = [
        'nome','cargos'
    ];


    public function cpa(){
        return $this->belongsTo('App\Cpa','cpas_id');
    }
}
