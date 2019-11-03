<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class visualizar_solicitacao_pregController extends Controller
{

    public function mostra_solicitacoes() {

        $dados = DB::collection('convenios')->get();   

        return view('preg.visualizar_solicitacao_preg', compact('dados'));
    
    }

    

}// Fim controller
