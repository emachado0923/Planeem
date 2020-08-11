<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Evaluacion_Factores;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_Penetracion;
use App\Model\tipo_Matriz_crecimiento;

class Evaluacion_FactoresController extends Controller
{


    public function store(Request $request)

    {  
        $id_respuesta_analisis_porters = $request->get('id_respuesta');
        $id_Planeacion = $request->get('id_Planeacion');
        $tipo = $request->get('tipo');
        $pesoRelativo = $request->get('Peso_Relativo');
        $calificacion = $request->get('Calificación');
        $peso = $request->get('Peso_Ponderado');
        
         $suma1=0;
         $suma2=0;
   

            for ($i = 0; $i < count($id_respuesta_analisis_porters); $i++) {
               
                Evaluacion_Factores::updateorCreate(
                    [
                        'id_Planeacion' => $id_Planeacion,
                        'id_respuesta_analisis_porters' =>$id_respuesta_analisis_porters[$i]
                    ],
                    [
                        'id_Planeacion' => $id_Planeacion,
                        'id_respuesta_analisis_porters' => $id_respuesta_analisis_porters[$i],
                        'tipo' => $tipo[$i],
                        'Peso_Relativo' => $pesoRelativo[$i],
                        'Calificación' => $calificacion[$i],
                        'Peso_Ponderado' => $peso[$i],
                    ]
                );
            }
        



        $message = array(
            'message' => 'Empresas Guardadas con Éxito',
            'alert-type' => 'success'
        );
    

    
        $Oportunidades =  Evaluacion_Factores::all()
        ->where('tipo','Oportunidades')
        ->where('id_Planeacion',$id_Planeacion);


        $Amenazas=  Evaluacion_Factores::all()
        ->where('tipo','Amenazas')
        ->where('id_Planeacion',$id_Planeacion);


        foreach ($Oportunidades as $Oportunidades) {
            $suma1 +=$Oportunidades->Calificación; 
        }

        foreach ($Amenazas as $Amenazas) {
            $suma2 +=$Amenazas->Calificación; 
        }

      
      
        toastr()->success('Datos registrados correctamente');
        
        return view('Modulo2.analisisEFInfo')->with($message)->with('id_Planeacion',$id_Planeacion)
        ->with('suma1',$suma1)
        ->with('suma2',$suma2);

    }
}
