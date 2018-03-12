<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index(){
      return view('adm.noticia.inicio');
    }

    public function cadastro(){
      return view('adm.noticia.form');
    }
}
