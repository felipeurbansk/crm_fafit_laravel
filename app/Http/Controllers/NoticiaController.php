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
      $noticia = $req->all();
      if($noticia = Noticia::create($noticia)){
        return redirect()->route('adm.noticia')->with('sucesso','Noticía <strong>'.$noticia->titulo.'</strong> adicionada ao site');
      }else{
        return back()->with('error','Não foi possível adicionar a noticía. Tente novamente!');
      }
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
