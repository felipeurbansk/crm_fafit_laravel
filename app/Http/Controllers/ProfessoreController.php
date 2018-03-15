<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessoreRequest;
use App\Professore;

class ProfessoreController extends Controller
{
    public function index(){
      $professor = Professore::all();
      return view('adm.professor.inicio',compact('professor'));
    }

    public function cadastro(){
      return view('adm.professor.form');
    }

    public function salvar(ProfessoreRequest $req){
      Professore::create($req->all());

      return redirect()->route('adm.professor');
    }

    public function excluir($id){
      Professore::find($id)->delete();

      return redirect()->route('adm.professor');
    }

}
