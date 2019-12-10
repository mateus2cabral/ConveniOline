<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class nova_indicacaoController extends Controller
{

    public function abaAreas() {

        // filtra as empresas e recolhe as areas disponiveis em um vetor

        $aconhecimentos = DB::collection('aconhecimentos')->get();
        $convenios = DB::collection('convenios')->get();

        $areas = [];
        $usersDisponiveis = [];

        foreach ($convenios as $key => $convenio) {
            if ($convenio['status'] === 'd') {
                array_push($usersDisponiveis, $convenio['login']);
            }
        }

        foreach ($usersDisponiveis as $user) {
            foreach ($aconhecimentos as $key => $area) {
            
                if ($area['user'] === $user) {
                    
                    if (sizeof($areas) === 0) {
                        array_push($areas, $area['area']);
        
                    } else {
                        $repetido = false;
        
                        foreach ($areas as $a) {
        
                            if($area['area'] === $a){
                                $repetido = true;
                            }
                        }
        
                        if(!$repetido) {
                            array_push($areas, $area['area']);
                        }
                        
                    }
                }
            }  
        }
        

        return view('professor.nova_indicacao_areas', compact('areas'));
    }

   

    public function abaEmpresas (Request $request) {


         // filtra os elementos do vetor pela area selecionada

        $aconhecimentos = DB::collection('aconhecimentos')->get();
        $convenios = DB::collection('convenios')->get();

        $usersOfertantes = [];
        $empresas = [];
        $conveniosDisponiveis = [];

        // Verifico os convenios ue foram deferidos
        foreach ($convenios as $key => $convenio) {
            if ($convenio['status'] === 'd') {
                array_push($conveniosDisponiveis, $convenio);
            }
        }

        // Verifico os usuarios que ofertam a area selecionada
        foreach ($aconhecimentos as $registro) {
            if ($registro['area'] === $request->radio) {

                if (sizeof($usersOfertantes) === 0) {
                    array_push($usersOfertantes, $registro['user']);

                } else {
                    $repetido = false;

                    foreach ($usersOfertantes as $u) {

                        if($registro['user'] === $u){
                            $repetido = true;
                        }
                    }

                    if(!$repetido) {
                        array_push($usersOfertantes, $registro['user']);
                    }
                    
                }
            }
            
        }

        foreach ($usersOfertantes as $user) {
            foreach ($conveniosDisponiveis as $convenio) {
             
                if ($user === $convenio['login'] ) {
                    array_push($empresas, $convenio['rsocial']);
                }
            }
        }

        return view('professor.nova_indicacao_empresas', compact('empresas'));
    }

    public function abaAlunos (Request $request) {

        return view('professor.nova_indicacao_alunos');
    }

    public function abaTermo (Request $request) {

        return "View em construção";
    }

}