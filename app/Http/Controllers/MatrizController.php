<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Matriz_crecimiento;
use App\Model\tipo_Matriz_crecimiento;

class MatrizController extends Controller
{
   public function  storg(Request $request){

    $id_tipo_Matriz_crecimiento = $request->get('id_tipo_Matriz_crecimiento');
    $respuesta = $request->get('preguntas');
    $planeacion = $request->get('id_planeacion');
    $tipo = $request->get('tipo');
    
     $tipo_matriz_crecimiento = tipo_matriz_crecimiento::all();

 







      foreach ($id_tipo_Matriz_crecimiento as $id_tipo_Matriz_crecimiento) {


        if($request->get($id_tipo_Matriz_crecimiento) == null){
                $tipo_Matriz1 = tipo_Matriz_crecimiento::select('*')
                ->where('tipo',1)
                ->get();
        
                $tipo_Matriz2 = tipo_Matriz_crecimiento::select('*')
                ->where('tipo',2)
                ->get();
        
        
                $tipo_Matriz3 = tipo_Matriz_crecimiento::select('*')
                ->where('tipo',3)
                ->get();
        
                $tipo_Matriz4 = tipo_Matriz_crecimiento::select('*')
                ->where('tipo',4)
                ->get();
        
                toastr()->error('lo sentimos, todos los datos son obligatorios, por favor llena todos los campos', 'Erro!');
        
                return view('Modulo2.ansorftMercado')->with(compact('tipo_Matriz1','tipo_Matriz2','tipo_Matriz3','tipo_Matriz4','plane'))->with($message);
        }else{
          Matriz_crecimiento::updateorCreate(
            [
              'id_Planeacion' => $planeacion,
              'respuesta' =>$request->get($id_tipo_Matriz_crecimiento),
              'id_tipo_Matriz_crecimiento' => $id_tipo_Matriz_crecimiento,
            ],
              [
              'id_Planeacion' => $planeacion,
              'respuesta' =>$request->get($id_tipo_Matriz_crecimiento),
              'id_tipo_Matriz_crecimiento' => $id_tipo_Matriz_crecimiento,
              ]);
        }

            
      }

      toastr()->success('Datos registrados correctamente');

     return view('Modulo2.factoresExternosI')->with(compact('planeacion'));
  }


  public function index ($id){
    $Matriz_crecimiento =  Matriz_crecimiento::select('*')
    ->where('id_Planeacion',$id)
     ->get();

    
    return response()->json($Matriz_crecimiento);
  }

    public function grafica1($id){

      $Matriz_crecimiento =  Matriz_crecimiento::select('respuesta')
      ->where('id_Planeacion',$id)
       ->get();
  
      return response()->json($Matriz_crecimiento);

    }


    
 public function Penetración($id){
  $Matriz_crecimiento =  Matriz_crecimiento::select('matriz_crecimiento.respuesta')
  ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
  ->where('tipo',1)
  ->where('id_Planeacion',$id)

   ->get();
  return response()->json($Matriz_crecimiento);

}

public function Mercado($id){
  $Matriz_crecimiento =  Matriz_crecimiento::select('matriz_crecimiento.respuesta')
  ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
  ->where('tipo',2)
  ->where('id_Planeacion',$id)

   ->get();
  return response()->json($Matriz_crecimiento);

}


public function Producto($id){
  $Matriz_crecimiento =  Matriz_crecimiento::select('matriz_crecimiento.respuesta')
  ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
  ->where('tipo',3)
  ->where('id_Planeacion',$id)

   ->get();
  return response()->json($Matriz_crecimiento);

}


public function Diversificación($id){
  $Matriz_crecimiento =  Matriz_crecimiento::select('matriz_crecimiento.respuesta')
  ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
  ->where('tipo',4)
  ->where('id_Planeacion',$id)

   ->get();
  return response()->json($Matriz_crecimiento);

}



}
