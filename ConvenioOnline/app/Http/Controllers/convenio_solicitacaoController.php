<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class convenio_solicitacaoController extends Controller
{
    public function show() {
        return view('empresa.convenio_solicitacao');
    }

    public function enviar_solicitacao(Request $dados) {

        $representante = $dados->representante;
        $empresa = $dados->empresa;
        $cnpj = $dados->cnpj;
        $endereco = $dados->endereco;
        $cep = $dados->cep;

        if (($representante || $empresa || $cnpj || $cep) != null) {

            return view('empresa.inicio_empresa');
        }
        else {
            //return view('login');
        }

    }

} //Fim do controller
