<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function index(){
      return view('auth.login');
    }

    public function entrar(Request $req){
      $dados = $req->all();
      if(Auth::attemp(['email' => $dados['email'],'password'=>$dados['password']])){
        return redirect()->route('/adm');
      }
    }

    public function sair(){
      Auth::logout();
      return view('auth.login');
    }

    public function cadastro(){
      return view('auth.register');
    }

    public function alterar_senha(){

    }
}
