<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfessoreController extends Controller
{
    public function index(){
      return view('adm.professor.inicio');
    }

    public function cadastro(){
      return view('adm.professor.form');
    }
    public function disciplinas(){
      return $this->hasMany('App\Disciplina');
    }

}
