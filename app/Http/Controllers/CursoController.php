<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Http\Requests\CursoRequest;

class CursoController extends Controller
{

    public function index(){
      $curso = Curso::orderBy('nome','asc')->paginate(5);
      return view('adm.curso.inicio',compact('curso'));
    }

    public function cadastro(){
      return view('adm.curso.form');
    }

    public function salvar(CursoRequest $req){
      if(Curso::create($req->all())) {
        return redirect()->route('adm.curso')->with('sucesso','Curso cadastrado com sucesso');
      }else{
        return back()->with('erro','Erro ao cadastrar o curso');
      }
    }

    public function editar($id){
      $curso = Curso::find($id);
      return view('adm.curso.form',compact('curso'));
    }

    public function visualizar($id){
      if($curso = Curso::find($id)){
          return view('adm.curso.visualizar',compact('curso'));
      }else{
        return back;
      }

    }

    public function atualizar(CursoRequest $req){
      $curso = $req->all();
      if(Curso::find($curso['id'])->update($curso)){
        return redirect()->route('adm.curso')->with('sucesso','Curso alterado com sucesso');
      }else{
        return back;
      }
    }

    public function excluir($id){
      $curso = Curso::find($id);
      $curso->disciplinas()->delete();
      $curso->delete();

      return redirect()->route('adm.curso');
    }
}
