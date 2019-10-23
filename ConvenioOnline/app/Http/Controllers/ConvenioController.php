<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    public function login () {
        return view('login');
    }

    public function logado_inicio () {
        return view('logadoInicio');
    }
    public function logado_formulario () {
        return view('logadoForm');
    }
    public function inicio () {
        return view('inicio');
    }
    public function solicitacao_formulario () {
        return view('solicitacao');
    }
}
