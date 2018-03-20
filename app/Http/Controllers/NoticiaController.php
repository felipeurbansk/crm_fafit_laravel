<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;
use App\Noticia;

class NoticiaController extends Controller
{

    public function index(){
      $noticia = Noticia::orderBy('data','desc')->paginate(5);

      return view('adm.noticia.inicio',compact('noticia'));
    }

    public function cadastro(){
      return view('adm.noticia.form');
    }

    public function salvar(NoticiaRequest $req){
      $noticia = Noticia::create($req->all());

      return redirect()->route('adm.noticia');
    }

    public function editar($id){
      $noticia = Noticia::find($id);

      return view('adm.noticia.form',compact('noticia'));
    }

    public function visualizar($id){
      $noticia = Noticia::find($id);

      return view('adm.noticia.visualizar',compact('noticia'));
    }

    public function atualizar(NoticiaRequest $req){
      $noticia = $req->all();

      Noticia::find($noticia['id'])->update($noticia);
      return redirect()->route('adm.noticia');
    }

    public function excluir($id){
      Noticia::find($id)->delete();

      return redirect()->route('adm.noticia');
    }
}
