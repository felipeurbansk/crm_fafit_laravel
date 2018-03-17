<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessoreRequest;
use App\Professore;

class ProfessoreController extends Controller
{
    public function index(){
      $professor = Professore::get();
      return view('adm.professor.inicio',compact('professor'));
    }

    public function cadastrar(){
      return view('adm.professor.form');
    }

    public function cadastro(ProfessoreRequest $req){
      Professore::create($req->all());

      return redirect()->route('adm.professor');
    }

    public function editar($id){
      $professor = Professore::find($id);
      return view('adm.professor.form',compact('professor'));
    }

    public function atualizar(ProfessoreRequest $req){
      $professor = $req->all();

      Professore::find($professor['id'])->update($professor);

      return redirect()->route('adm.professor');
    }

    public function excluir($id){
      Professore::find($id)->delete();

      return redirect()->route('adm.professor');
    }

}
