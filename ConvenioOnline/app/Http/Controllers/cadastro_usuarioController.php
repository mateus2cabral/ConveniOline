<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class cadastro_usuarioController extends Controller
{
    // Início do controller
    

    // Função cadastrar usuarios de empresas

    public function mostra_usuarios(){
        $dados = DB::collection('logins')->get();   
        return view('preg.usuarios', compact('dados'));
    }

    
    public function cadastro_usuario(){  
        return view('preg.cadastro_usuario');
    }

    
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
            }
            else {return redirect('/cadastro');}
        }
        else {return redirect('/cadastro');}

    } // Fim da função de cadastro da empresa




    // Função para cadastro de qualquer usuário

    public function cadastrar_usuario(Request $dados) {

        $nome = $dados->nome;
        $email = $dados->email;
        $usuario = $dados->usuario;
        $senha = $dados->senha;
        $conf_senha = $dados->conf_senha;
        $tipo = $dados->tipo;

        if (($nome && $usuario && $email && $senha && $tipo)) {
            if ($senha === $conf_senha) {
                DB::collection('logins')->insert(
                    ['nome' => $dados->nome,
                     'email' => $dados->email,
                     'usuario' => $dados->usuario,
                     'senha' => $dados->senha,
                     'tipo' => $dados->tipo
                    ]
                );
    
                return redirect('/usuarios');

            }
            else {return redirect('/cadastro_usuario');}
        }
        else {return redirect('/cadastro_usuario');}

    } // Fim da função de cadastro de todos usuários
    
















    // Fim do controller
}
