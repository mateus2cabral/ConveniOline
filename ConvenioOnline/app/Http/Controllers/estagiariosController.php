<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
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
        $data_atual = new DateTime();

        echo $data_atual->format('m');

        $segunda = date_create($data_atual->format('d/m/Y'));
        $terca = date_create($data_atual->format('d/m/Y'));
        $quarta = date_create($data_atual->format('d/m/Y'));
        $quinta = date_create($data_atual->format('d/m/Y'));
        $sexta = date_create($data_atual->format('d/m/Y'));


        switch ($data_atual->format('l')) {
            case 'Monday':
                $segunda = new DateTime();
                $terca = new DateTime('+1 day');
                $quarta = new DateTime('+2 day');
                $quinta = new DateTime('+3 day');
                $sexta = new DateTime('+4 day');
                break;

            case 'Tuesday':
                $segunda = new DateTime('-1 day');
                $terca = new DateTime();
                $quarta = new DateTime('+1 day');
                $quinta = new DateTime('+2 day');
                $sexta = new DateTime('+3 day');
                break;

            case 'Wednesday':
                $segunda = new DateTime('-2 day');
                $terca = new DateTime('-1 day');
                $quarta = new DateTime();
                $quinta = new DateTime('+1 day');
                $sexta = new DateTime('+2 day');
                break;
                
            case 'Thursday':
                $segunda = new DateTime('-3 day');
                $terca = new DateTime('-2 day');
                $quarta = new DateTime('-1 day');
                $quinta = new DateTime();
                $sexta = new DateTime('-4 day');
                break;

            case 'Friday':
                $segunda = new DateTime('-4 day');
                $terca = new DateTime('-3 day');
                $quarta = new DateTime('-2 day');
                $quinta = new DateTime('-1 day');
                $sexta = new DateTime();
                break;

            case 'Saturday':
                $segunda = new DateTime('-5 day');
                $terca = new DateTime('-4 day');
                $quarta = new DateTime('-3 day');
                $quinta = new DateTime('-2 day');
                $sexta = new DateTime('-1 day');
                break;

            case 'Sunday':
                $segunda = new DateTime('-6 day');
                $terca = new DateTime('-5 day');
                $quarta = new DateTime('-4 day');
                $quinta = new DateTime('-3 day');
                $sexta = new DateTime('-2 day');
                break;

        }

        $datas = array (
            "segunda" => $segunda->format('d/m/Y'),
            "terca" => $terca->format('d/m/Y'),
            "quarta" => $quarta->format('d/m/Y'),
            "quinta" => $quinta->format('d/m/Y'),
            "sexta" => $sexta->format('d/m/Y')
        );       
        
        foreach ($estagiarios as $estagiario) {
            if ($estagiario['_id'] == $id) {
                return view('supervisor.frequencia', compact('estagiario'), compact('datas'));
            }
        }

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
