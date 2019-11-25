<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class professorController extends Controller
{
    public function show(){
        return view('professor.inicio_professor');
    }
}
