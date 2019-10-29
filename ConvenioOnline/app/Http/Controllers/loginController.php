<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show () {
        return view('login');
    }

    public function handle (Request $dados) {
        return view('inicio');
    }
}
