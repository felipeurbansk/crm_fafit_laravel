<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DisciplinaRequest;
use App\Disciplina;
use App\Professore;

class DisciplinaController extends Controller
{
    public function index(){
      $disciplina = Disciplina::orderBy('nome','asc')->get();
      return view('adm.disciplina.inicio',compact('disciplina'));
    }

    public function cadastro(){
      return view('adm.disciplina.form');
    }

    public function salvar(DisciplinaRequest $req){
      $prof = Professore::find($req->input('professore_id'));
      if($prof->disciplinas()->create(($req->all()))){
        return redirect()->route('adm.disciplina')->with('sucesso', 'Disciplina cadastrado com sucesso');
      }else{
        return back()->with('error', 'Disciplina não foi cadastrado com sucesso');
      }
    }

    public function excluir($id){
      if(Disciplina::find($id)->delete()){
        return redirect()->route('adm.disciplina')->with('sucesso', 'Disciplina excluida com sucesso');
      }else{
        return back()->with('error', 'Disciplina não pode ser excluida');
      }
    }

    public function atualizar(DisciplinaRequest $req){

    }
}
