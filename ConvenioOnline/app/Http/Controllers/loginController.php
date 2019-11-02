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
        $finded = false;
        $usuario = $dados->usuario;
        $senha = $dados->senha;
        
        $users = DB::collection('logins')->get();

        if ($usuario != null && $senha != null) {
           
            foreach ($users as $user) {
                echo ($user["login"]." = ".$usuario);
                if($user["login"] === $usuario && $user["senha"] === $senha) {
                    
                    if (stristr($user["login"], 'preg')) {
                        
                        $finded = true;
                        return view('preg.inicio_preg');
        
                    } 
                    if (stristr($user["login"], 'empr')) {
                        
                        $finded = true;
                        return view('empresa.inicio_empresa');
        
                    } 
                } 
            } 

            if ($finded === false) {
                return view('login');
            }

        } else {
            return view('login');
        }
        
    }
}
