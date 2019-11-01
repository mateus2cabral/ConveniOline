<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visualizar_solicitacao_pregController extends Controller
{

    public function mostra_solicitacoes() {

        $dados_solicitacao = [

            'empresa' => [
                'Apple',
                'Microsoft',
                'Amazon',
                'Google'
            ],

            'cnpj' => [
                '1245',
                '76589',
                '34567',
                '34563'
            ],

            'endereco' => [
                'Teresina',
                'Timon',
                'União',
                'Picos'
            ],

            'cep' => [
                '64027-815',
                '63212-432',
                '64876-234',
                '64231-223'
            ]
        ];

        return view('preg.visualizar_solicitacao_preg', $dados_solicitacao);
    
    }

}// Fim controller
