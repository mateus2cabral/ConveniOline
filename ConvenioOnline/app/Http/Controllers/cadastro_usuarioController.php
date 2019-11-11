<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class cadastro_usuarioController extends Controller
{
    // Início do controller
    

    // Função cadastrar usuarios


    public function cadastro_empresa(Request $dados) {

        $nome = $dados->nome;
        $email = $dados->email;
        $usuario = $dados->usuario;
        $senha = $dados->senha;
        $conf_senha = $dados->conf_senha;
        
        $tipo = 'empr';

       

        if (($nome && $usuario && $email && $senha && $tipo)) {
            if ($senha === $conf_senha) {
                DB::collection('logins')->insert(
                    ['nome' => $dados->nome,
                     'email' => $dados->email,
                     'usuario' => $dados->usuario,
                     'senha' => $dados->senha,
                     'tipo' => $tipo
                    ]
                );
    
                return redirect('/login');
            } else {
                return redirect('/cadastro');
            }
        }
        else {
            
            return redirect('/cadastro');
            // redirect('/solicitacao');
        }

    }
















    // Fim do controller
}
