<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show() {
        return view('login');
    }

    public function logar(Request $dados) {
        $usuario = $dados->usuario;
        $senha = $dados->senha;
        

        if ($usuario != null && $senha != null) {

            if (stristr($usuario, 'preg')) {
                
                return view('preg.inicio_preg');

            } else if (stristr($usuario, 'empr')) {
                
                return view('empresa.inicio_empresa');

            }

            else {return view('login');}
        
        } else {
            return view('login');
        }
        
    }
}
