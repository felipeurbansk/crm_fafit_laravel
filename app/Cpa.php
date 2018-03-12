<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpa extends Model
{
    protected $fillable = [
      'descricao','img'
    ];

    public $timestamps = false;

    public function membros(){
      return $this->hasMany('App\Membro','cpas_id');
    }
}
