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
               
                if($user["usuario"] === $usuario && $user["senha"] === $senha) {
                    
                    if ($user["tipo"] == 'preg') {
                        
                        $finded = true;
                        return redirect('/inicio_preg');
        
                    } 
                    if ($user["tipo"] == 'empr') {
                        
                        $finded = true;
                        return redirect('/inicio_empresa');
        
                    } 
                } 
            } 

            if ($finded === false) {
                return redirect('/login');
            }

        } else {
            return redirect('/login');
        }
        
    } // Função logar

    public function cadastro() {

        return view('empresa.cadastro_usuario');

    } // Função cadastro
}
