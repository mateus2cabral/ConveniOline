<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detalhe_solicitacaoController extends Controller
{
    public function show() {
        return view('detalhe_solicitacao');
    }

}
