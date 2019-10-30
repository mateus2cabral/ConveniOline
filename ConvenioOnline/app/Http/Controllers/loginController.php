<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show() {
        return view('login');
    }

    public function logar(Request $dados) {
        // $usuario = $dados->usuario;
        // $senha = $dados->senha;

        // return "Usuario: $usuario"." senha: $senha";
        return view('inicio');
    }
}
