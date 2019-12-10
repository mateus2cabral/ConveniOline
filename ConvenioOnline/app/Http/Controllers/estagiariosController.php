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

        foreach ($usuarios as $usuario) {
            if ($usuario['usuario'] === $_SESSION['user']) {
                // echo $usuario['empresa'];
                return view('supervisor.estagiarios', compact('estagiarios'), compact('usuario'));
                
            }
        }

    } // Fim da função show()




    public function aluno_frequencia(Request $estagiario) {

        $id = $estagiario->id;

        // echo $id;    
        
        $estagiarios = DB::collection('alunos')->get();
        $data_atual = new DateTime();

        // echo $data_atual->format('m');

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

    } // Fim da função aluno_frequencia()



    public function salvar_frequencia(Request $frequencia_aluno){


        $frequencias = DB::collection('frequencia')->get();

        $data_segunda = $frequencia_aluno->data_segunda;
        $data_terca = $frequencia_aluno->data_terca;
        $data_quarta = $frequencia_aluno->data_quarta;
        $data_quinta = $frequencia_aluno->data_quinta;
        $data_sexta = $frequencia_aluno->data_sexta;


        $nome_estagiario = $frequencia_aluno->nome_estagiario;
        $inicio_semana = $frequencia_aluno->inicio_semana;
        $segunda = $frequencia_aluno->segunda;
        $terca = $frequencia_aluno->terca;
        $quarta = $frequencia_aluno->quarta;
        $quinta = $frequencia_aluno->quinta;
        $sexta = $frequencia_aluno->sexta;



        $existe_estagiario = false;
        $existe_frequencia = false;

        foreach ($frequencias as $frequencia) {

            if ($frequencia['estagiario'] === $nome_estagiario) {
                $existe_estagiario = true;
                if ($frequencia['data_segunda'] === $inicio_semana) {
                    $existe_frequencia = true;
                }
            }

            // echo $frequencia['estagiario'];
        }

        if ($existe_estagiario) {
            if ($existe_frequencia) {
                return redirect ('supervisionar');
            }
            else {
                
                DB::collection('frequencia')->insert(
                    [
                        'estagiario' => $nome_estagiario,
        
                        // 'inicio_semana' => $inicio_semana,
        
                        'data_segunda' => $data_segunda,
                        'segunda' => $segunda,
        
                        'data_terca' => $data_terca,
                        'terca' => $terca,
        
                        'data_quarta' => $data_quarta,
                        'quarta' => $quarta,
                        
                        'data_quinta' => $data_quinta,
                        'quinta' => $quinta,
        
                        'data_sexta' => $data_sexta,
                        'sexta' => $sexta
                    ]
                );
                return redirect ('supervisionar');

            }
        }

        else {
            DB::collection('frequencia')->insert(
                [
                    'estagiario' => $nome_estagiario,
    
                    // 'inicio_semana' => $inicio_semana,
    
                    'data_segunda' => $data_segunda,
                    'segunda' => $segunda,
    
                    'data_terca' => $data_terca,
                    'terca' => $terca,
    
                    'data_quarta' => $data_quarta,
                    'quarta' => $quarta,
                    
                    'data_quinta' => $data_quinta,
                    'quinta' => $quinta,
    
                    'data_sexta' => $data_sexta,
                    'sexta' => $sexta
                ]
            );

            return redirect ('supervisionar');
        }








        // echo $inicio_semana;


        
        



        // DB::collection('frequencia')->insert(
        //     [
        //         'estagiario' => $nome_estagiario,

        //         'inicio_semana' => $inicio_semana,

        //         'data_segunda' => $data_segunda,
        //         'segunda' => $segunda,

        //         'data_terca' => $data_terca,
        //         'terca' => $terca,

        //         'data_quarta' => $data_quarta,
        //         'quarta' => $quarta,
                
        //         'data_quinta' => $data_quinta,
        //         'quinta' => $quinta,

        //         'data_sexta' => $data_sexta,
        //         'sexta' => $sexta
        //     ]
        // );






        // return redirect('supervisionar');
    }















    

} // Fim controller
