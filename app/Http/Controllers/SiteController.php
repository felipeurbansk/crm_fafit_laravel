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

    public function cursos(){
        $cursos = Curso::orderBy('nome','desc')->paginate(6);
        return view('public.cursos',compact('cursos'));
    }

    public function curso($id){
        $curso = Curso::find($id);
        return view('public.curso_detalhe',compact('curso'));
    }

    public function professores(){
        $professores = Professore::orderBy('nome','desc')->paginate(4);
        return view('public.professores',compact('professores'));
    }

    public function professor($id){
        $professor = Professore::find($id);
        $professores = Professore::where('id','<>',$professor->id)->orderBy('nome','desc')->get();
        return view('public.professor',compact('professor','professores'));
    }

    public function noticias(){
        $noticias = Noticia::orderBy('data','desc')->paginate(6);
        return view('public.noticias',compact('noticias'));
    }

    public function noticia($id){
        $noticia = Noticia::find($id);
        $noticias = Noticia::where('id','<>',$id)->orderBy('data','desc')->get();
        return view('public.noticia',compact('noticia','noticias'));
    }

    public function contato(){
        return view('public.contato');
    }
}
