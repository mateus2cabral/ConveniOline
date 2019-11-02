<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    public function show() {
        return view('login');
    }

    public function logar(Request $dados) {
        $usuario = $dados->usuario;
        $senha = $dados->senha;
        
        $users = DB::collection('logins')->get();

        if ($usuario != null && $senha != null) {

            foreach ($users as $user) {
                if($user["login"] === $usuario && $user["senha"] === $senha) {
                    
                    if (stristr($usuario, 'preg')) {
                
                        return view('preg.inicio_preg');
        
                    } else if (stristr($usuario, 'empr')) {
                        
                        return view('empresa.inicio_empresa');
        
                    } 

                } else {
                    return view('login');
                }
                  
            } 

        } else {
            return view('login');
        }
        
    }
}
