<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class cadastro_supervisorController extends Controller
{
    // Início do controller
    

    // Função cadastrar usuarios de empresas

    public function mostra_supervisores(){
        $dados = DB::collection('logins')->get();
        $supervisores = [];

        foreach ($dados as $dado) {
            if ($dado['tipo'] === 'super') {
                if ($dado['user_empr'] === $_SESSION['user']) {

                    array_push($supervisores, $dado);
                }
            } 
        }
        

        return view('empresa.supervisor', compact('supervisores'));
    }

    
    public function cadastro_supervisor(){  
        return view('empresa.cadastro_supervisor');
    }

    
    public function cadastrar_supervisor(Request $dados) {

        $nome = $dados->nome;
        $email = $dados->email;
        $usuario = $dados->usuario;
        $senha = $dados->senha;
        $conf_senha = $dados->conf_senha;
        
        $tipo = 'super';

        
        
        $dados_users = DB::collection('logins')->get();
        $existe = false;

        if (($nome && $usuario && $email && $senha && $tipo)) {
            
            foreach ($dados_users as $dado_user) {
                if ($dado_user['usuario'] === $usuario) {
                    $existe = true;
                } // Fim valida se usuario ja existe
            } // Fim foreach


            if ($existe === false) {
                
                if ($senha === $conf_senha) {


                    // session_start();
                    DB::collection('logins')->insert(
                            ['user_empr' => $_SESSION['user'],
                            // 'area' => $dados->area,
                            'nome' => $dados->nome,
                            'email' => $dados->email,
                            'usuario' => $dados->usuario,
                            'senha' => $dados->senha,
                            'tipo' => $tipo
                            ]
                        );
                        return redirect('/supervisores');
                        
                    }
                    else {return redirect('/cadastro');}
                    
                }
                    
                else {return redirect('/cadastro');}
                    
        } // Fim if verifica se todos campos foram preenchidos

        else {return redirect('/cadastro');}
            
    } // Fim da função de cadastro da empresa



    
    // Fim do controller
}
