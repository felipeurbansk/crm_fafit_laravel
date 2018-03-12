<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpa;
use App\Membro;

class CpaController extends Controller
{
    public function index(){
      $cpa = Membro::all();
      return view('adm.cpa.inicio',compact('cpa'));
    }

    public function cadastro(){
      return view('adm.cpa.form');
    }

    public function salvar(Request $req){
        $cpa = Cpa::create($req->all());

        $membro = new Membro($req->all());
        $membro->cpa()->associate($cpa);
        $membro->save();

        return redirect()->route('adm.cpa');
    }

    public function excluir(Request $req){
        $cpa = $req->all();

        Cpa::find($cpa['id'])->delete();
        Membro::find('cpas_id',$cpa['id'])->delete();
        return redirect()->route('adm.cpa');
    }
}
