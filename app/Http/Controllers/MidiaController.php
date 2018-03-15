<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidiaController extends Controller
{
    public function index(){

    }

    public function salvar(Request $req){
      $noticia = $req->all();
      dd($noticia)
      if($req->hasFile('img')){
        $img = $req->img;
        $img_nome = time().'_'.$img->getClientOriginalName();
        $img->move('img/'.strtolower(str_replace([' ','-'],'_',$noticia['titulo'])).'/midias',$img_nome);
        return redirect()->route('adm.noticia');
      }


    }
}
