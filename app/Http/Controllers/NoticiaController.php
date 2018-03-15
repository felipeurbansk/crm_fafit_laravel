<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;
use App\Noticia;

class NoticiaController extends Controller
{
    public function index(){
      return view('adm.noticia.inicio');
    }

    public function cadastro(){
      return view('adm.noticia.form');
    }

    public function salvar(NoticiaRequest $req){
      $noticia = Noticia::create($req->all());
      return redirect()->route('adm.noticia');
    }
}
