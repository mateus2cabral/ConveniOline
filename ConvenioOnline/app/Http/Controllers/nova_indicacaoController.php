<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class nova_indicacaoController extends Controller
{

    public function show() {

        // filtra as empresas e recolhe as areas disponiveis em umm vetor

        $aconhecimentos = DB::collection('aconhecimentos')->get();
        $areas = [];

        foreach ($aconhecimentos as $area) {
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
        
        return view('professor.nova_indicacao', compact('areas'));
    }

}