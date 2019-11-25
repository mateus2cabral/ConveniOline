<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    public function show() {
        session_start();
        unset($_SESSION["user"]);
        unset($_SESSION["tipo"]);
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
                    session_start();
                    $_SESSION["user"] = $user["usuario"];


                    if ($user["tipo"] == 'preg') {
                        $_SESSION["tipo"]= 'preg';
                        $finded = true;
                        return redirect('/inicio_preg');
        
                    } 
                    if ($user["tipo"] == 'empr') {
                        $_SESSION["tipo"]= 'empr';
                        $finded = true;

                        return redirect('/inicio_empresa');

                        // return redirect('/inicio_empresa');
        
                    }
                    if ($user["tipo"]== 'prof'){
                        $_SESSION["tipo"]= 'prof';
                        $finded = true;
                        
                        return redirect('/inicio_professor');
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

        return view('cadastro_usuario');

    } // Função cadastro
}
