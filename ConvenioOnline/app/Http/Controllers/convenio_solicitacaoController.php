<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class convenio_solicitacaoController extends Controller
{
    public function show() {
        return view('empresa.convenio_solicitacao');
    }

    public function enviar_solicitacao(Request $dados) {

        $representante = $dados->representante;
        $rsocial = $dados->rsocial;
        $cnpj = $dados->cnpj;
        $ie = $dados->ie;
        $endereco = $dados->endereco;
        $cep = $dados->cep;
        $contato = $dados->contato;

        if (($representante && $rsocial && $cnpj && $ie && $endereco && $cep && $contato)) {

            DB::collection('convenios')->insert(
                ['representante' => $dados->representante,
                 'rsocial' => $dados->rsocial,
                 'cnpj' => $dados->cnpj,
                 'ie' => $dados->ie,
                 'endereco' => $dados->endereco,
                 'cep' => $dados->cep,
                 'contato' => $dados->contato,
                 'status' => 'a',
                 'data' => date('d-m-Y')]
            );

            return redirect('/inicio_empresa');
            
        } else {
        
            redirect('/solicitacao');
        }

    }

} //Fim do controller
