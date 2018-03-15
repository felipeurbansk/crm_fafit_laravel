<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CpaRequest;
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

    public function salvar(CpaRequest $req){
        $cpa = Cpa::create($req->all());

        $membro = new Membro($req->all());
        $membro->cpa()->associate($cpa);
        $membro->save();

        return redirect()->route('adm.cpa');
    }

    public function excluir($id){
        $membro = Membro::find($id);
        $membro->delete();
        $membro->cpa()->delete();
        return redirect()->route('adm.cpa');
    }
}
