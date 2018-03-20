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
    return redirect()->route('login');
});
/*Grupo de rotas para usuarios autenticados*/
Route::group(['middleware' => 'auth'],function(){


/*Rotas de usuario*/
Route::get('/logout',['as' => 'login.logout','uses' => 'Login\LoginController@sair']);
Route::get('/alterpassword',['as' => 'login.reset','uses' => 'Login\LoginController@alterpassword']);
/*Fim rotas de usuario*/


/*Rota de inicio*/
Route::get('/home',['as' => 'inicio','uses'=>'DashboardController@index']);
/*Fim rotas de inicio*/

/*Rotas dos Cursos*/
Route::get('/adm/curso',['as'=>'adm.curso','uses'=>'CursoController@index']);
Route::get('/adm/curso/cadastro',['as'=>'adm.curso.cadastro','uses'=>'CursoController@cadastro']);
Route::post('/adm/curso/salvar',['as'=>'adm.curso.salvar','uses'=>'CursoController@salvar']);
Route::get('/adm/curso/editar/{id}',['as'=> 'adm.curso.editar','uses'=>'CursoController@editar']);
Route::get('/adm/curso/visualizar/{id}',['as'=> 'adm.curso.visualizar','uses'=>'CursoController@visualizar']);
Route::put('/adm/curso/atualizar/',['as'=> 'adm.curso.atualizar','uses'=>'CursoController@atualizar']);
Route::get('/adm/curso/excluir/{id}',['as'=> 'adm.curso.excluir','uses'=>'CursoController@excluir']);
/*Fim rotas dos Cursos*/

/*Rotas dos Professores*/
Route::get('/adm/professor',['as'=>'adm.professor','uses'=>'ProfessoreController@index']);
Route::get('/adm/professor/cadastro', ['as'=>'adm.professor.cadastro','uses'=>'ProfessoreController@cadastro']);
Route::post('/adm/professor/salvar', ['as'=>'adm.professor.salvar','uses'=>'ProfessoreController@salvar']);
Route::get('/adm/professor/editar/{id}', ['as'=>'adm.professor.editar','uses'=>'ProfessoreController@editar']);
Route::get('/adm/professor/visualizar/{id}', ['as'=>'adm.professor.visualizar','uses'=>'ProfessoreController@visualizar']);
Route::put('/adm/professor/atualizar', ['as'=>'adm.professor.atualizar','uses'=>'ProfessoreController@atualizar']);
Route::get('/adm/professor/excluir/{id}', ['as'=>'adm.professor.excluir','uses'=>'ProfessoreController@excluir']);
/*Fim rotas dos Professores*/

/*Rotas das Noticias*/
Route::get('/adm/noticia',['as'=>'adm.noticia','uses'=>'NoticiaController@index']);
Route::get('/adm/noticia/cadastro',['as'=>'adm.noticia.cadastro','uses'=>'NoticiaController@cadastro']);
Route::post('/adm/noticia/salvar',['as'=>'adm.noticia.salvar','uses'=>'NoticiaController@salvar']);
Route::get('/adm/noticia/editar/{id}',['as'=>'adm.noticia.editar','uses'=>'NoticiaController@editar']);
Route::get('/adm/noticia/visualizar/{id}',['as'=>'adm.noticia.visualizar','uses'=>'NoticiaController@visualizar']);
Route::put('/adm/noticia/atualizar',['as'=>'adm.noticia.atualizar','uses'=>'NoticiaController@atualizar']);
Route::get('/adm/noticia/excluir/{id}',['as'=>'adm.noticia.excluir','uses'=>'NoticiaController@excluir']);
/*Fim rotas das Noticias*/

/*Rotas da CPAs*/
Route::get('/adm/cpa',['as'=>'adm.cpa','uses'=>'CpaController@index']);
Route::get('/adm/cpa/cadastro',['as'=>'adm.cpa.cadastro','uses'=>'CpaController@cadastro']);
Route::post('/adm/cpa/salvar',['as'=>'adm.cpa.salvar','uses'=>'CpaController@salvar']);
Route::get('/adm/cpa/editar/{id}',['as'=>'adm.cpa.editar','uses'=>'CpaController@editar']);
Route::get('/adm/cpa/visualizar/{id}',['as'=>'adm.cpa.visualizar','uses'=>'CpaController@visualizar']);
Route::put('/adm/cpa/atualizar/',['as'=>'adm.cpa.atualizar','uses'=>'CpaController@atualizar']);
Route::get('/adm/cpa/excluir/{id}',['as'=>'adm.cpa.excluir','uses'=>'CpaController@excluir']);
/*Fim rotas da CPAs*/

/*Rotas do Calendario*/
Route::get('/adm/calendario',['as'=>'adm.calendario','uses'=>'CalendarioController@index']);
Route::get('/adm/calendario/cadastro',['as'=>'adm.calendario.cadastro','uses'=>'CalendarioController@cadastro']);
Route::post('/adm/calendario/salvar',['as'=>'adm.calendario.salvar','uses'=>'CalendarioController@salvar']);
Route::post('/adm/calendario/excluir',['as'=>'adm.calendario.excluir','uses'=>'CalendarioController@excluir']);
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
