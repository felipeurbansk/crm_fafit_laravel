<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cpa;

class CpaController extends Controller
{
    public function index(){
      $dados = Cpa::all();
      return view('adm.cpa.inicio',compact('dados'));
    }

    public function cadastro(){
      return view('adm.cpa.form');
    }

    public function salvar(){
      dd(Cpa::all());
    }
}
