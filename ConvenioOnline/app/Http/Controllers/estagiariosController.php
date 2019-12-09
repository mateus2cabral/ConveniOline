<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class estagiariosController extends Controller
{
    public function show() {

        $estagiarios = DB::collection('alunos')->get();
        $usuarios = DB::collection('logins')->get(); 
        // echo $usuario['empresa'];


        foreach ($usuarios as $usuario) {
            if ($usuario['usuario'] === $_SESSION['user']) {
                echo $usuario['empresa'];
                return view('supervisor.estagiarios', compact('estagiarios'), compact('usuario'));
                
            }
        }




        // return view('supervisor.estagiarios');
    }



    public function aluno_frequencia(Request $estagiario) {

        $id = $estagiario->id;

        // echo $id;    
        
        $estagiarios = DB::collection('alunos')->get();
        
        
        foreach ($estagiarios as $estagiario) {
            // echo $estagiario['nome'];
            if ($estagiario['_id'] == $id) {
                // echo $estagiario['nome'];
                return view('supervisor.frequencia', compact('estagiario'));
            }
        }

        // echo $estagiario;
    }





    // public function frequencia() {
   
    //     return view('supervisor.estagiarios');

    //     // return view('supervisor.estagiarios');
    // }

    
    // public function frequencia($id) {

    //     $estagiarios = DB::collection('alunos')->get();

    //     foreach ($estagiarios as $estagiario) {
    //         if ($estagiario['_id'] == $id) {
    //             // echo $estagiario['nome'];
    //             return view('supervisor.frequencia', compact('estagiario'));
    //         }
    //     }

    //     // echo $estagiario;
    // }

    // public function frequencia($id) {

    //     // DB::collection('convenios')->where('_id', $id)->update(['status' => 'd']);
    //     $estagiarios = DB::collection('alunos')->where('_id', $id)->get(); 
    //     return redirect('/frequencia' with compact('estagiarios'));
    
    // }

} // Fim controller
