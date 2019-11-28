<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class nova_indicacaoController extends Controller
{

    public function show() {
    
        return view('professor.nova_indicacao');
    }

}