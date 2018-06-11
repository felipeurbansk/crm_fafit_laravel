<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DisciplinaRequest;
use App\Disciplina;
use App\Professore;
use DB;

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
      DB::beginTransaction();
      try{
        $prof = Professore::find($req->input('professore_id'));
        $prof->disciplinas()->create($req->all());
        DB::commit();
        return redirect()->route('adm.disciplina')->with('sucesso', 'Disciplina cadastrado com sucesso');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('error', 'Disciplina não foi cadastrado com sucesso'); 
      }
    }

    public function excluir($id){
      DB::beginTransaction();
      try{
        Disciplina::find($id)->delete();
        DB::commit();
        return redirect()->route('adm.disciplina')->with('sucesso', 'Disciplina excluida com sucesso');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('error', 'Disciplina não pode ser excluida');
      }
    }

    public function atualizar(DisciplinaRequest $req){
      
    }
}
