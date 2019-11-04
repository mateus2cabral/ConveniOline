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
        $empresa = $dados->empresa;
        $cnpj = $dados->cnpj;
        $endereco = $dados->endereco;
        $cep = $dados->cep;

        if (($representante && $empresa && $cnpj && $cep)) {

            DB::collection('convenios')->insert(
                ['representante' => $dados->representante,
                 'empresa' => $dados->empresa,
                 'cnpj' => $dados->cnpj,
                 'endereco' => $dados->endereco,
                 'cep' => $dados->cep,
                 'status' => 'a']
            );

            return redirect('/inicio_empresa');
        }
        else {
            return redirect('/solicitacao');
        }

    }

} //Fim do controller
