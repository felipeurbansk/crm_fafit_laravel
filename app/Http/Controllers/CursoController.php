<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\Disciplina;
use App\Http\Requests\CursoRequest;
use DB;

class CursoController extends Controller
{

    public function index(){
      $curso = Curso::orderBy('nome','desc')->paginate(5);
      return view('adm.curso.inicio',compact('curso'));
    }

    public function cadastro(){
      $disciplina = Disciplina::orderBy('nome','desc')->get();
      return view('adm.curso.form',compact('disciplina'));
    }

    public function salvar(CursoRequest $req){
      
      DB::beginTransaction();
      try{
        $c = Curso::create($req->all());
        $c->disciplinas()->attach($req['disciplina']);
        DB::commit();
        return redirect()->route('adm.curso')->with('sucesso','Curso cadastrado com sucesso');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('erro','Erro ao cadastrar o curso');
      }
    }

    public function editar($id){
      $curso = Curso::find($id);
      $vetDisc = [];

      foreach($curso->disciplinas as $d){
        $vetDisc[] = $d->id;
      }

      $disciplina  = Disciplina::orderBy('nome','asc')->get();
      return view('adm.curso.form',compact('curso','disciplina','vetDisc'));
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
      DB::beginTransaction();
      try{
        $c = Curso::with(['disciplinas'])->find($req->input('id'));
        $c->disciplinas()->sync($curso['disciplina']);
        DB::commit();
        return redirect()->route('adm.curso')->with('sucesso','Curso alterado com sucesso');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('erro','Erro ao atualizar o curso');
      }
    }

    public function excluir($id){
      $curso = Curso::find($id);
      $curso->disciplinas()->delete();
      $curso->delete();

      return redirect()->route('adm.curso');
    }
}
