<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estagiariosController extends Controller
{
    public function show() {
        return view('supervisor.estagiarios');
    }
}
