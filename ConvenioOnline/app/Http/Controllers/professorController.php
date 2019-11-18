<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class professorController extends Controller
{
    public function index(){
        return view('professor.professor');
    }
}
