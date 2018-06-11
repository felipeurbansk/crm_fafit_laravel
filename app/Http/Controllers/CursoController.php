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

    public function salvar(Request $req){
      DB::beginTransaction();
      $curso = $req->all();
      try{
        $nameFile = null;
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
          $name = uniqid(date('HisYmd'));
          $extension = $req->img->extension();
          $nameFile = "{$name}.{$extension}";
          $upload = $req->img->storeAs('curso/foto', $nameFile);
        }
        $curso['img'] = "storage/".$upload;
        $c = Curso::create($curso);
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
      $disciplina  = Disciplina::orderBy('nome','asc')->get();
      $vetDisc = [];
      foreach($disciplina as $d){
        $vetDisc[] = $d->id;
      }
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
