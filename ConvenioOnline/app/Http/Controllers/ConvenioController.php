<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    public function login () {
        return view('login');
    }

    public function inicio () {
        return view('inicio');
    }

    public function convenio_solicitacao () {
        return view('convenio_solicitacao');
    }

    public function visualizar_solicitacao () {
        return view('visualizar_solicitacao_preg');
    }

    public function detalhe_solicitacao () {
        return view('detalhe_solicitacao');
    }



    public function store(Request $request)
    {
        $name = $request->input('usuario');
        if ($name == "test") {
            return view('detalhe_solicitacao');
            # code...
        }

        //
    }

    

    

   
}
