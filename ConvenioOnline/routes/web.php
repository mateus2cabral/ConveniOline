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

// ROTAS PARA QUEM NÃO ESTA LOGADO
    Route::get('login', 'loginController@show');
    Route::post('logar', 'loginController@logar');

    Route::get('cadastro', 'loginController@cadastro');
    Route::post('cadastro_empresa', 'cadastro_usuarioController@cadastro_empresa');

    

// ROTAS PARA QUEM ESTA LOGADO
    // ROTAS REFERENTES A PREG
        // ABA INICIO
            Route::get('inicio_preg', 'inicio_pregController@show');

        // ABA SOLICITAÇÕES
            Route::get('visualizar_solicitacao', 'visualizar_solicitacao_pregController@mostra_solicitacoes');
            Route::get('deferir/{id}', 'visualizar_solicitacao_pregController@deferir');
            Route::post('indeferir', 'visualizar_solicitacao_pregController@indeferir');

        // ABA USUÁRIOS
            Route::get('usuarios', 'cadastro_usuarioController@mostra_usuarios');
            Route::get('cadastro_usuario', 'cadastro_usuarioController@cadastro_usuario');
            Route::post('cadastrar_usuario', 'cadastro_usuarioController@cadastrar_usuario');
    



    // ROTAS REFERENTES A EMPRESAS
        // ABA INICIO
            Route::get('inicio_empresa', 'inicio_empresaController@show');

        // ABA CONVÊNIO
            // ANTES DE SOLICITADO
                Route::get('solicitacao', 'convenio_solicitacaoController@show');
                Route::post('enviar_solicitacao', 'convenio_solicitacaoController@enviar_solicitacao');

            // APÓS SOLICITADO
                Route::get('validar', 'convenio_solicitacaoController@validar');
                Route::get('ver_solicitacao', 'convenio_solicitacaoController@ver_solicitacao');

            // NÃO UTILIZADO
                Route::get('detalhe_solicitacao', 'detalhe_solicitacaoController@show');



    // ROTAS REFERENTES A PROFESSORES
        // ABA INICIO
            Route::get('inicio_professor', 'inicio_professorController@show');

        // ABA NOVA INDICAÇÃO
            Route::get('nova_indicacao', 'nova_indicacaoController@show');

        // ABA MINHAS INDICAÇÕES
            Route::get('minhas_indicacoes', 'minhas_indicacoesController@show');



