<?php

namespace App\Http\Controllers;
use App\Model\misEstrategias;
use App\Model\estrategiasDiagnostico;
use App\Model\estrategiasDiagnosticoSeed;
use App\Model\Proyectos;
use DB;

use Illuminate\Http\Request;
use App\Model\tipo_Matriz_crecimiento;

class EstrategiasDiagnosticoController extends Controller
{
    public function index(){}
    public function create(){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
   
    public function store(Request $request)
    { 
        // dd($request);
        $id_Planeacion = $request->get('id_planecion');
        $id_estrategias = $request->get('id_estrategias');
        
      
        foreach($id_estrategias as $id_estrategias){
            EstrategiasDiagnostico::updateOrCreate(
                    [
                        'id_Planeacion'=> $id_Planeacion,
                        'id_estrategias'=>$id_estrategias
                    ],
                    [
                        'id_Planeacion'=>$id_Planeacion,
                        'id_estrategias'=>$id_estrategias

                    ]
              
            );
                        
        }
        
        
        $typeA = ['aAlta', 'aMedia', 'aBaja'];
        $typeO = ['oAlta', 'oMedia', 'oBaja'];
       
        $amenaza= DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();

        $amenaza2= DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();

         $cmamanaza = count( $amenaza);

        // 
       
        $oportunidad=DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();


        $oportunidad2=DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();


        
        $oportunidad=DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();


        $cmoportunidad = count( $oportunidad);


        $typeF = ['fAlta', 'fMedia', 'fBaja'];
        $typeD = ['dAlta', 'dMedia', 'dBaja'];

        $fortaleza= DB::table('respuesta_capacidad')
        ->select('capacidads.nombre','respuesta_capacidad.id')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();

        $fortaleza2= DB::table('respuesta_capacidad')
        ->select('capacidads.nombre','respuesta_capacidad.id')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();

        $cmfortaleza = count( $fortaleza);
        
        $debilidad= DB::table('respuesta_capacidad')
        ->select('capacidads.nombre','respuesta_capacidad.id')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();

        $debilidad2= DB::table('respuesta_capacidad')
        ->select('capacidads.nombre','respuesta_capacidad.id')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();

        $cmdebilidad = count( $debilidad);

        
        toastr()->success('Datos registrados correctamente');
        
        
        
        

    
     return view('Modulo2.estrategiasOfensivas')->with(compact('amenaza','oportunidad','fortaleza','debilidad','id_Planeacion','cmamanaza','cmoportunidad','cmfortaleza','cmdebilidad','fortaleza2','oportunidad2','debilidad2','debilidad2','amenaza2')); 
    }

            //Ayuda de los checkboton
            //     $id_respuesta_analisis = $request->input('id_respuesta_analisis');
            //     $id_respuesta_capacidad = $request->input('id_respuesta_capacidad');
            //     for ($i=0; $i < count($ $id_respuesta_analisis) ; $i++) { 
            //         Corporativos::updateOrCreate([
            //             'valores'=> $valores1[$i],
            //             'id_Planeacion'=> $id_Planeacion,
            //             'descripcion'=>$descripcion[$i]
            //         ]);
            // }
            // return view('Modulo2.analisisEFIgrafica'); }

}
