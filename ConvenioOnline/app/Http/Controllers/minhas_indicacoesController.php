<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class minhas_indicacoesController extends Controller
{

    public function show() {

        $estagios = DB::collection('estagio')->get();
        $meusEstagios = [];

        foreach ($estagios as $key => $estagio) {


            if ($estagio['nomeProfessor'] === $_SESSION["nomeProfessor"]) {

                // echo $estagio['nomeProfessor'];
                array_push($meusEstagios, $estagio);
            }
        }
        

        // return var_dump($meusEstagios);
    
        return view('professor.minhas_indicacoes', compact('meusEstagios'));
    }

}