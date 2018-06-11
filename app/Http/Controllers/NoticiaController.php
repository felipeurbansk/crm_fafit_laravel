<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;
use App\Noticia;
use App\Midia;
use DB;

class NoticiaController extends Controller
{

    public function index(){
      $noticia = Noticia::orderBy('data','desc')->paginate(5);

      return view('adm.noticia.inicio',compact('noticia'));
    }

    public function cadastro(){
      return view('adm.noticia.form');
    }

    public function salvar(Request $req){
      $noticia = $req->all();
      DB::beginTransaction();
      try{
        $noticia = Noticia::create($noticia);
        $nameFile = null;
        if ($req->hasFile('img') && $req->file('img')->isValid()) {
        $name = uniqid(date('HisYmd'));
        $extension = $req->img->extension();
        $nameFile = "{$name}.{$extension}";
        $upload = $req->img->storeAs('noticias/midias', $nameFile);
      }
        $midia = new Midia();
        $midia->caminho = "storage/".$upload;
        $midia->noticias_id = $noticia->id;
        $midia->save();
        DB::commit();
        return redirect()->route('adm.noticia')->with('sucesso','Noticía '.$noticia->titulo.' adicionada ao site');
      }catch(Exception $e){
        DB::rollback();
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

    public function atualizar(Request $req){
      $noticia = $req->all();
      DB::beginTransaction();
      try{
        Noticia::find($noticia['id'])->update($noticia);
        DB::commit();
        return redirect()->route('adm.noticia')->with('sucesso','Noticía atualizada com sucesso');
      }catch(Exception $e){
        DB::rollback();
        return back()->with('error','Não foi possível atualizar a noticía. Tente novamente!');
      }

    }

    public function excluir($id){
      DB::beginTransaction();
      try{
        Noticia::find($id)->delete();
        DB::commit();
        return redirect()->route('adm.noticia')->with('sucesso','Noticía excluido com sucesso');
        
      }catch(Exception $e){
        DB::rollback();
        return back()->with('error','Não foi possível excluir a noticía. Tente novamente!');
      }

    }
}
