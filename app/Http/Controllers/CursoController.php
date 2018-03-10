<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
class CursoController extends Controller
{
    public function index(){
      $dados = Curso::get();
      return view('adm.curso.inicio',compact('dados'));
    }

    public function cadastro(){
      return view('adm.curso.form');
    }

    public function salvar(Request $req){
      $curso = $req->all();
      Curso::create($curso);
      return redirect()->route('adm.curso');
    }

    public function exibir(){
      $cursos = Curso::all();

      return view('adm.inicio',compact('cursos'));
    }
}
