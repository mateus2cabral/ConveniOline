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

    

   
}
