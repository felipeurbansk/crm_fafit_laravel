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

    public function salvar(Request $req){
      DB::beginTransaction();
      $professor = $req->all();
      try{
        $nameFile = null;
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
          $name = uniqid(date('HisYmd'));
          $extension = $req->img->extension();
          $nameFile = "{$name}.{$extension}";
          $upload = $req->img->storeAs('professor/foto', $nameFile);
        }
        $professor['img'] = "storage/".$upload;
        Professore::create($professor);
        DB::commit();
        return redirect()->route('adm.professor')->with('sucesso','Professor cadastrado com sucesso!');
      }catch(Exception $e){
        DB::rollback();
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

    public function atualizar(Request $req){
      DB::beginTransaction();

      try{
        $nameFile = null;
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
          $name = uniqid(date('HisYmd'));
          $extension = $req->img->extension();
          $nameFile = "{$name}.{$extension}";
          $upload = $req->img->storeAs('professor/foto', $nameFile);
        }
        $professor['img'] = "storage/".$upload;
        Professore::find($req['id'])->update($req->all());
        DB::commit();
        return redirect()->route('adm.professor')->with('sucesso','Professor alterado com sucesso!');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('erro','Erro ao tentar alterar o professor!');
      }

    }

    public function excluir($id){
      DB::beginTransaction();
      try{
        Professore::find($id)->delete();
        DB::commit();
        return redirect()->route('adm.professor')->with('sucesso','Professor excluido com sucesso!');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('error','Não foi possivel excluir o professor.');
      }
    }

}
