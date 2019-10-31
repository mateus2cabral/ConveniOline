<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicio_empresaController extends Controller
{
    public function show() {
        return view('empresa.inicio_empresa');
    }
}
