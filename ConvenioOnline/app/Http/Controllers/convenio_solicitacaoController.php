<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class convenio_solicitacaoController extends Controller
{
    // public function show($usuario) {
        
    //     DB::collection('convenios')->select('login', )
    //     where('login', $usuario)

    //     return view('empresa.convenio_solicitacao', compact('usuario'));
    // }


    public function validar($login) {
        $convenios = DB::collection('convenios')->get();
        $finded = false;
        foreach ($convenios as $convenio) {
            if ($convenio['login'] === $login) {
                echo 'ja solicitou';
                $finded = true;
            } else {
                echo 'não solicitou';
                $finded = false;
            }
        }
        if (!$finded){
            return redirect('solicitacao')->with($login);
        }

    }

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
                ['login' => '',
                 'representante' => $dados->representante,
                 'rsocial' => $dados->rsocial,
                 'cnpj' => $dados->cnpj,
                 'ie' => $dados->ie,
                 'endereco' => $dados->endereco,
                 'cep' => $dados->cep,
                 'contato' => $dados->contato,
                 'status' => 'a',
                 'observacao' => '',
                 'data' => date('d-m-Y'),
                 'aconhecimento' => $dados->aconhecimento]
            );

            return redirect('/inicio_empresa');
            
        } else {
        
            redirect('/solicitacao');
        }

    }

} //Fim do controller
