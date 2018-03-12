<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Rotas de usuario*/
Route::get('/logout',['as' => 'login.logout','uses' => 'Login\LoginController@sair']);
/*Fim rotas de usuario*/

Route::group(['middleware' => 'auth'],function(){

/*Rota de inicio*/
Route::get('/home',['as' => 'inicio','uses'=>'CursoController@exibir']);
/*Fim rotas de inicio*/

/*Rotas dos Cursos*/
Route::get('/adm/curso',['as'=>'adm.curso','uses'=>'CursoController@index']);
Route::get('/adm/curso/exibir',['as'=>'adm.curso.exibir','uses'=>'CursoController@exibir']);
Route::get('/adm/curso/cadastro',['as'=>'adm.curso.cadastro','uses'=>'CursoController@cadastro']);
Route::post('/adm/curso/salvar',['as'=> 'adm.curso.salvar','uses'=>'CursoController@salvar']);
/*Fim rotas dos Cursos*/

/*Rotas dos Professores*/
Route::get('/adm/professor',['as'=>'adm.professor','uses'=>'ProfessoreController@index']);
Route::get('/adm/professor/cadastro', ['as'=>'adm.professor.cadastro','uses'=>'ProfessoreController@cadastro']);
Route::post('/adm/professor/salvar', ['as'=>'adm.professor.salvar','uses'=>'ProfessoreController@salvar']);
/*Fim rotas dos Professores*/

/*Rotas das Noticias*/
Route::get('/adm/noticia',['as'=>'adm.noticia','uses'=>'NoticiaController@index']);
Route::get('/adm/noticia/cadastro',['as'=>'adm.noticia.cadastro','uses'=>'NoticiaController@cadastro']);
Route::post('/adm/noticia/salvar',['as'=>'adm.noticia.salvar','uses'=>'NoticiaController@salvar']);
/*Fim rotas das Noticias*/

/*Rotas da CPAs*/
Route::get('/adm/cpa',['as'=>'adm.cpa','uses'=>'CpaController@index']);
Route::get('/adm/cpa/cadastro',['as'=>'adm.cpa.cadastro','uses'=>'CpaController@cadastro']);
Route::post('/adm/cpa/salvar',['as'=>'adm.cpa.salvar','uses'=>'CpaController@salvar']);
Route::put('/adm/cpa/excluir',['as'=>'adm.cpa.excluir','uses'=>'CpaController@excluir']);
/*Fim rotas da CPAs*/

/*Rotas do Calendario*/
Route::get('/adm/calendario',['as'=>'adm.calendario','uses'=>'CalendarioController@index']);
Route::get('/adm/calendario/cadastro',['as'=>'adm.calendario.cadastro','uses'=>'CalendarioController@cadastro']);
Route::post('/adm/calendario/salvar',['as'=>'adm.calendario.salvar','uses'=>'CalendarioController@salvar']);
/*Fim rotas dos Calendario*/

});

/*Rotas para testes*/
Route::get('/teste',function(){
  $curso = App\Cpa::find(16);

  dd($curso->membros);
});
/*Fim das rotas de testes*/

Auth::routes();
/*
Route::get('/home', function(){
  r
});
*/
