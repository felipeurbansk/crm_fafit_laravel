<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CpaRequest;
use App\Cpa;
use App\Membro;
use DB;

class CpaController extends Controller
{

    public function index(){
      $cpa = Membro::orderBy('nome','asc')->paginate(5);
      return view('adm.cpa.inicio',compact('cpa'));
    }

    public function cadastro(){
      return view('adm.cpa.form');
    }

    public function salvar(CpaRequest $req){
      DB::beginTransaction();
      try{
        $cpa = Cpa::create($req->all());
        $membro = new Membro($req->all());
        $membro->cpa()->associate($cpa);
        $membro->save();
        DB::commit();
        return redirect()->route('adm.cpa')->with('sucesso', 'Membro cadastrado com sucesso!');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('erro', 'Erro ao tentar cadastrar um novo membro');
      }
    }

    public function editar($id){
        $membro = Membro::find($id);
        return view('adm.cpa.form',compact('membro'));
    }

    public function visualizar($id){
        $membro = Membro::find($id);
        return view('adm.cpa.visualizar',compact('membro'));
    }

    public function atualizar(CpaRequest $req){
      DB::beginTransaction();
      try{
        $membro = $req->all();
        $membro = Membro::find($membro['id']);
        $cpa = Cpa::find($membro->cpas_id)->update($req->all());
        $membro->update($req->all());
        DB::commit();
        return redirect()->route('adm.cpa')->with('sucesso', 'CPA cadastrado com sucesso');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('error', 'CPA cadastrado com sucesso');
      }
    }

    public function excluir($id){
      DB::beginTransaction();
      try{
        $membro = Membro::find($id);
        $membro->delete();
        $membro->cpa()->delete();
        DB::commit();
        return redirect()->route('adm.cpa')->with('sucesso', 'CPA excluido com sucesso');;
      }catch(Exception $e){
        DB::rollback();
        return back()->with('error', 'CPA não foi excluido com sucesso');
      }
        
    }
}
