<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visualizar_solicitacao_pregController extends Controller
{
    public function show() {
        return view('visualizar_solicitacao_preg');
    }
}
