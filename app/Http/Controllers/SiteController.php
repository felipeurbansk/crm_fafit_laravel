<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Noticia;
use App\Curso;
use App\Disciplina;
use App\Professore;
use App\Cpa;

class SiteController extends Controller
{
    public function index(){
        $slide = Slide::where('exibir','=','1')->get();
        $noticia = Noticia::orderBy('data','desc')->limit(3)->get();
        $curso = Curso::orderBy('nome','desc')->get();
        $disciplina = Disciplina::orderBy('nome','desc')->get();
        $professor = Professore::orderBy('nome','desc')->limit(4)->get();
        $cpa = Cpa::all();
        return view('public.index',compact('slide','noticia','curso','professor','cpa','disciplina'));
    }
}
