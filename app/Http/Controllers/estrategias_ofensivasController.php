<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Estrategias_Ofensivas;
use DB;
class estrategias_ofensivasController extends Controller
{
    public function storage(Request $request){
        // dd($request);
        $id = $request->get('tipo');
        $tipo = $request->get('tipo');
        $id_Planeacion = $request->get('id_Planeacion');
        $id_respuesta_analisis = $request->get('id_respuesta_analisis');
        $id_respuesta_capacidad = $request->get('id_respuesta_capacidad');

        // dd($request);

        for($i=0; $i<count($tipo); $i++){
                
            // foreach($tipo as $tipo){
                Estrategias_Ofensivas::updateOrCreate(
                    
                    [
                        'tipo' => $tipo[$i],
                        'id_Planeacion'=> $id_Planeacion[$i],
                        'id_respuesta_analisis' => $id_respuesta_analisis[$i],
                        'id_respuesta_capacidad'=> $id_respuesta_capacidad[$i],
                    ],
                    [
                        'tipo' => $tipo[$i],
                        'id_Planeacion'=> $id_Planeacion[$i],
                        'id_respuesta_analisis' => $id_respuesta_analisis[$i],
                        'id_respuesta_capacidad'=> $id_respuesta_capacidad[$i],
                    ]
                );
            }
       
            $FO = ['FO'];
            $FA = ['FA'];
            $DO = ['DO'];
            $DA = ['DA'];
      
            
            // Respuesta capacidad fortaleza y debilidades
            // Respuesta analisis oportunidades y amenzas
             
            //Fortalezas y Amaneznas
            //Debilidades y Oportunidades 

            //Fortalezas y Oportunidades 
            //Debilidades y Amenzas

            $estrategiasFO= DB::table('estrategias_ofensivas')
            ->select('estrategias_ofensivas.*','capacidads.nombre as nombre','analisis.nombre as R') 
            ->leftjoin('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->leftjoin('analisis', 'analisis.id', 'respuesta_analisis.idAnalisis')
            ->leftjoin('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->leftjoin('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','estrategias_ofensivas.id_Planeacion','=','planeacion.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $FO)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->where('capacidads.nombre','!=',NULL)
            ->where('analisis.nombre','!=',NULL)
            ->get();

            $estrategiasFA= DB::table('estrategias_ofensivas')
            ->select('estrategias_ofensivas.*','capacidads.nombre as nombre','analisis.nombre as R') 
            ->leftjoin('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->leftjoin('analisis', 'analisis.id', 'respuesta_analisis.idAnalisis')
            ->leftjoin('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->leftjoin('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','estrategias_ofensivas.id_Planeacion','=','planeacion.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $FA)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->where('capacidads.nombre','!=',NULL)
            ->where('analisis.nombre','!=',NULL)
            ->get();


            $estrategiasDO= DB::table('estrategias_ofensivas')
            ->select('estrategias_ofensivas.*','capacidads.nombre as nombre','analisis.nombre as R') 
            ->leftjoin('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->leftjoin('analisis', 'analisis.id', 'respuesta_analisis.idAnalisis')
            ->leftjoin('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->leftjoin('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','estrategias_ofensivas.id_Planeacion','=','planeacion.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $DO)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->where('capacidads.nombre','!=',NULL)
            ->where('analisis.nombre','!=',NULL)
            ->get();

           
            $estrategiasDA= DB::table('estrategias_ofensivas')
            ->select('estrategias_ofensivas.*','capacidads.nombre as nombre','analisis.nombre as R') 
            ->leftjoin('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->leftjoin('analisis', 'analisis.id', 'respuesta_analisis.idAnalisis')
            ->leftjoin('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->leftjoin('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','estrategias_ofensivas.id_Planeacion','=','planeacion.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $DA)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->where('capacidads.nombre','!=',NULL)
            ->where('analisis.nombre','!=',NULL)
            ->get();
 
            

                //dd($estrategiasFO,$estrategiasDA,$estrategiasFA,$estrategiasDO);

            toastr()->success('Datos registrados correctamente');
            return view('Modulo2.estrategiasDofa')->with(compact('estrategiasFO','estrategiasFA','estrategiasDA','estrategiasDO','id_Planeacion'));
        //  'estrategiasFA','estrategiasDA','estrategiasDO','id_Planeacion'));
    }
    
}
