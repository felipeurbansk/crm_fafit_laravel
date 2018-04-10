<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessoreRequest;
use App\Professore;

class ProfessoreController extends Controller
{

    public function index(){
        $professor = Professore::orderBy('nome','asc')->paginate(5);
        return view('adm.professor.inicio',compact('professor'));
    }

    public function cadastro(){
        return view('adm.professor.form');
    }

    public function salvar(ProfessoreRequest $req){
      if(Professore::create($req->all())){
        return redirect()->route('adm.professor')->with('sucesso','Professor cadastrado com sucesso!');
      }else{
        return back()->with('error','Não foi possivel cadastrar o professor');
      }
    }

    public function visualizar($id){
      $professor = Professore::find($id);
      return view('adm.professor.visualizar',compact('professor'));
    }

    public function editar($id){
      $professor = Professore::find($id);
      return view('adm.professor.form',compact('professor'));
    }

    public function atualizar(ProfessoreRequest $req){
      $professor = $req->all();
      if(Professore::find($professor['id'])->update($professor)){
        return redirect()->route('adm.professor')->with('sucesso','Professor alterado com sucesso!');
      }else{
        return back()->with('erro','Erro ao tentar alterar o professor!');
      }

    }

    public function excluir($id){
      if(Professore::find($id)->delete()){
        return redirect()->route('adm.professor')->with('sucesso','Professor excluido com sucesso!');
      }else{
        return back()->with('error','Não foi possivel excluir o professor.');
      }
    }

}
