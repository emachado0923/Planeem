<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\estrategias_matriz;
use App\Model\Matriz_crecimiento;
use SweetAlert;

class estrategias_matrizController extends Controller
{
    function storage(Request $request){

        $id_Planeacion = $request->get('id_planeacion');
        $id_matriz_crecimiento = $request->get('id_matriz_crecimiento');
       
        if ($request->get('id_matriz_crecimiento') === null) {

            $tipo_Matriz1 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
            ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
            ->where('matriz_crecimiento.respuesta',5)
            ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
            ->get();
  
    
            $tipo_Matriz2 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
            ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
            ->where('matriz_crecimiento.respuesta',4)
            ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
            ->get();
    
            $tipo_Matriz3 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
            ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
            ->where('matriz_crecimiento.respuesta',3)
            ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
            ->get();
    
            $tipo_Matriz4 =  Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
            ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
            ->where('matriz_crecimiento.respuesta',4)
            ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
            ->get();
    

            $message = array(
                'message' => 'Recuerda llenar todo el formulario',
                'alert-type' => 'error'
            );

             return view('Modulo2.estrategiasCrecimiento')->with(compact('id_Planeacion','tipo_Matriz1','tipo_Matriz2','tipo_Matriz3','tipo_Matriz4'))->with($message);           

        }else{

            $id_Planeacion = $request->get('id_planeacion');
            $id_matriz_crecimiento = $request->get('id_matriz_crecimiento');

            foreach($id_matriz_crecimiento as $a){
                estrategias_matriz::updateOrCreate(
                    [
                        'id_Planeacion'=>$id_Planeacion,
                        'id_Matriz_crecimiento'=>$a
                    ],
                    [
                        'id_Planeacion'=>$id_Planeacion,
                        'id_Matriz_crecimiento'=>$a
                    ],
                );       
             }
    

            toastr()->success('Guardado con Éxito');

    
            return view('Modulo2.pregunta');
        }
    }
    
}

