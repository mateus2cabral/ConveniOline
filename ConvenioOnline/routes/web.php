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
Route::get('login', 'loginController@show');
Route::post('handle', 'loginControler@handle');


// Rota para o controller "ConvenioControlller" na função logado_formulario
Route::get('solicitacao', 'ConvenioController@convenio_solicitacao');

// Rota para o controller "ConvenioControlller" na função inicio
Route::get('inicio', 'ConvenioController@inicio');

// Rota para o controller "ConvenioControlller" na função visualizar_solicitacao
Route::get('visualizar_solicitacao', 'ConvenioController@visualizar_solicitacao');

// Rota para o controller "ConvenioControlller" na função detalhe_solicitacao
Route::get('detalhe_solicitacao', 'ConvenioController@detalhe_solicitacao');