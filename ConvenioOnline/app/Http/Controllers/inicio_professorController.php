<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicio_professorController extends Controller
{
    public function show(){
        return view('professor.inicio_professor');
    }

}

