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

/* Web Admin*/
Route::get('/admin', function () {
    return redirect('/login');
});

Auth::routes();
/* End Web Admin */


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

    /*Rotas dos Disciplina*/
    Route::get('/adm/disciplina',['as'=>'adm.disciplina','uses'=>'DisciplinaController@index']);
    Route::get('/adm/disciplina/cadastro',['as'=>'adm.disciplina.cadastro','uses'=>'DisciplinaController@cadastro']);
    Route::post('/adm/disciplina/salvar',['as'=>'adm.disciplina.salvar','uses'=>'DisciplinaController@salvar']);
    Route::get('/adm/disciplina/editar/{id}',['as'=> 'adm.disciplina.editar','uses'=>'DisciplinaController@editar']);
    Route::get('/adm/disciplina/visualizar/{id}',['as'=> 'adm.disciplina.visualizar','uses'=>'DisciplinaController@visualizar']);
    Route::put('/adm/disciplina/atualizar/',['as'=> 'adm.disciplina.atualizar','uses'=>'DisciplinaController@atualizar']);
    Route::get('/adm/disciplina/excluir/{id}',['as'=> 'adm.disciplina.excluir','uses'=>'DisciplinaController@excluir']);
    /*Fim rotas dos Disciplina*/

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

    /* Rotas Slides */
    Route::get('/adm/slide', ['as'=>'adm.slide','uses'=>'SlideController@index']);
    Route::get('/adm/slide/cadastro', ['as'=>'adm.slide.cadastro','uses'=>'SlideController@cadastro']);
    Route::post('/adm/slide/salvar', ['as'=>'adm.slide.salvar','uses'=>'SlideController@salvar']);
    Route::get('/adm/slide/editar/{id}', ['as'=>'adm.slide.editar','uses'=>'SlideController@editar']);
    Route::get('adm/slide/visualizar/{id}',['as'=>'adm.slide.visualizar', 'uses'=>'SlideController@visualizar']);
    Route::put('adm/slide/atualizar/',['as'=>'adm.slide.atualizar', 'uses'=>'SlideController@atualizar']);
    Route::get('/adm/slide/excluir/{id}', ['as'=>'adm.slide.excluir','uses'=>'SlideController@excluir']);
    /* Fim rotas slides */

    /*Rotas do Calendario*/
    Route::get('/adm/calendario',['as'=>'adm.calendario','uses'=>'CalendarioController@index']);
    Route::get('/adm/calendario/cadastro',['as'=>'adm.calendario.cadastro','uses'=>'CalendarioController@cadastro']);
    Route::post('/adm/calendario/salvar',['as'=>'adm.calendario.salvar','uses'=>'CalendarioController@salvar']);
    Route::post('/adm/calendario/excluir',['as'=>'adm.calendario.excluir','uses'=>'CalendarioController@excluir']);
    /*Fim rotas dos Calendario*/

});

/* Rotas para site */
    /* Rotas de navegação */
    Route::get('/', ['as'=>'site.index','uses'=>'SiteController@index']);
    Route::get('/cursos', ['as'=>'site.cursos','uses'=>'SiteController@cursos']);
    Route::get('/curso/{id}', ['as'=>'site.curso','uses'=>'SiteController@curso']);
    Route::get('/professores', ['as'=>'site.professores','uses'=>'SiteController@professores']);
    Route::get('/professor/{id}', ['as'=>'site.professor','uses'=>'SiteController@professor']);
    Route::get('/noticias', ['as'=>'site.noticias','uses'=>'SiteController@noticias']);
    Route::get('/noticia/{id}', ['as'=>'site.noticia','uses'=>'SiteController@noticia']);
    Route::get('/contato', ['as'=>'site.contato','uses'=>'SiteController@contato']);
    /* Fim rotas navegação */

/* Fim rotas site */