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
/*Rota de inicio*/
Route::get('/adm',function(){
  return view('adm.inicio');
});
/*Fim rotas de inicio*/

/*Rotas dos Cursos*/
Route::get('/adm/curso',['as'=>'adm.curso','uses'=>'CursoController@index']);
Route::get('/adm/curso/cadastro',['as'=>'adm.curso.cadastro','uses'=>'CursoController@cadastro']);
Route::post('/adm/curso/salvar',['as'=> 'adm.curso.salvar','uses'=>'CursoController@salvar']);
/*Fim rotas dos Cursos*/

/*Rotas dos Professores*/
Route::get('/adm/professor',['as'=>'adm.professor','uses'=>'ProfessorController@index']);
Route::get('/adm/professor/cadastro', ['as'=>'adm.professor.cadastro','uses'=>'ProfessorController@cadastro']);
Route::get('/adm/professor/salvar', ['as'=>'adm.professor.salvar','uses'=>'ProfessorController@salvar']);
/*Fim rotas dos Professores*/

/*Rotas das Noticias*/
Route::get('/adm/noticia',['as'=>'adm.noticia','uses'=>'NoticiaController@index']);
Route::get('/adm/noticia/cadastro',['as'=>'adm.noticia.cadastro','uses'=>'NoticiaController@cadastro']);
Route::get('/adm/noticia/salvar',['as'=>'adm.noticia.salvar','uses'=>'NoticiaController@salvar']);
/*Fim rotas das Noticias*/

/*Rotas da CPAs*/
Route::get('/adm/cpa',['as'=>'adm.cpa','uses'=>'CpaController@index']);
Route::get('/adm/cpa/cadastro',['as'=>'adm.cpa.cadastro','uses'=>'CpaController@cadastro']);
Route::get('/adm/cpa/salvar',['as'=>'adm.cpa.salvar','uses'=>'CpaController@salvar']);
/*Fim rotas da CPAs*/

/*Rotas do Calendario*/
Route::get('/adm/calendario',['as'=>'adm.calendario','uses'=>'CalendarioController@index']);
Route::get('/adm/calendario/cadastro',['as'=>'adm.calendario.cadastro','uses'=>'CalendarioController@cadastro']);
Route::get('/adm/calendario/salvar',['as'=>'adm.calendario.salvar','uses'=>'CalendarioController@salvar']);
/*Fim rotas dos Calendario*/



/*Rotas para testes*/
Route::get('/teste',function(){
  $curso = App\Curso::find(1);

  dd($curso->disciplinas);
});
/*Fim das rotas de testes*/
