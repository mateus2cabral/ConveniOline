<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class cadastro_usuarioController extends Controller
{
    // Início do controller
    

    // Função cadastrar usuarios


    public function cadastro(Request $dados) {

        $usuario = $dados->usuario;
        $email = $dados->email;
        $senha = $dados->senha;
        $tipo = 'empr';

        if (($usuario && $email && $senha && $tipo)) {

            DB::collection('logins')->insert(
                ['usuario' => $dados->usuario,
                 'email' => $dados->email,
                 'senha' => $dados->senha,
                 'tipo' => $tipo
                ]
            );

            return redirect('/login');
        }
        else {
            
            return redirect('/cadastro');
            // redirect('/solicitacao');
        }

    }
















    // Fim do controller
}
