<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class convenio_solicitacaoController extends Controller
{

    public function validar() {
        session_start();
        $convenios = DB::collection('convenios')->get();
        $finded = false;
        foreach ($convenios as $convenio) {
            // echo $convenio["login"];
            if ($convenio['login'] === $_SESSION["user"]) {
                
                $finded = true;
            } else {
                
                $finded = false;
            }
        }
        if ($finded){
            return redirect('ver_solicitacao');
            // echo 'ja solicitou';
            // return redirect('/ver_solicitacao')->with($login);
        } else {
            echo 'não solicitou';
            return redirect('/solicitacao');
        }
        
    }

    public function show() {
        return view('empresa.convenio_solicitacao');
    }

    public function ver_solicitacao() {
        $dados_convenios = DB::collection('convenios')->get();
        return view('empresa.status_solicitacao_empresa', compact('dados_convenios'));
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
            session_start();
            DB::collection('convenios')->insert(
                ['login' => $_SESSION["user"],
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
