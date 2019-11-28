<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class minhas_indicacoesController extends Controller
{

    public function show() {
    
        return view('professor.minhas_indicacoes');
    }

}