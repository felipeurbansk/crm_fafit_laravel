<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    public function index(){
      $disciplina = Disciplina::orderBy('nome','asc');
      return view('adm.disciplina.inicio',compact('disciplina'));
    }
}
