<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Professore;
use App\Disciplina;
use App\Membro;
use App\Noticia;
use App\User;
use App\Cpa;

class DashboardController extends Controller
{
    public function index(){
      $cursos = Curso::all();
      $disciplinas = Disciplina::all();
      $professores = Professore::all();
      $membros = Membro::all();
      $noticias = Noticia::all();
      $usuarios = User::all();
      $cpas = Cpa::all();

      return view('adm.inicio',compact('cursos','disciplinas','professores','membros','noticias','usuarios','cpas'));
    }
}
