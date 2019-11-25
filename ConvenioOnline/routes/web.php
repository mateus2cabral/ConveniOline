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

// Rota para o controller "ConvenioControlller" na função login

use Illuminate\Support\Facades\Route;

Route::get('login', 'loginController@show');
Route::post('logar', 'loginController@logar');

Route::get('cadastro', 'loginController@cadastro');
Route::post('cadastro_empresa', 'cadastro_usuarioController@cadastro_empresa');

Route::get('usuarios', 'cadastro_usuarioController@mostra_usuarios');
Route::get('cadastro_usuario', 'cadastro_usuarioController@cadastro_usuario');
Route::post('cadastrar_usuario', 'cadastro_usuarioController@cadastrar_usuario');


// Rota para o controller "ConvenioControlller" na função logado_formulario
Route::get('solicitacao/{login}', 'convenio_solicitacaoController@validar');

Route::get('solicitacao', 'convenio_solicitacaoController@show');
Route::post('enviar_solicitacao', 'convenio_solicitacaoController@enviar_solicitacao');


// Rota para o controller "ConvenioControlller" na função inicio
Route::get('inicio_preg', 'inicio_pregController@show');

// Rota para o controller "ConvenioControlller" na função inicio
Route::get('inicio_empresa', 'inicio_empresaController@show');

// Rota para o controller "ConvenioControlller" na função visualizar_solicitacao
Route::get('visualizar_solicitacao', 'visualizar_solicitacao_pregController@mostra_solicitacoes');
Route::get('deferir/{id}', 'visualizar_solicitacao_pregController@deferir');
// Route::get('indeferir/{id}/{observacao}', 'visualizar_solicitacao_pregController@indeferir');
Route::post('indeferir', 'visualizar_solicitacao_pregController@indeferir');



// Rota para o controller "ConvenioControlller" na função detalhe_solicitacao
Route::get('detalhe_solicitacao', 'detalhe_solicitacaoController@show');

Route::get('inicio_professor', 'professorController@show');
