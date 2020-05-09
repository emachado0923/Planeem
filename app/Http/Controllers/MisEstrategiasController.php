<?php

namespace App\Http\Controllers;
use App;
use App\Http\Controllers\Controller;
use App\misEstrategias;
use Illuminate\Http\Request;
use DB;

class MisEstrategiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $id = $request->input('id_planecion');

         $typeA = ['aAlta', 'aMedia', 'aBaja'];
         $typeO = ['oAlta', 'oMedia', 'oBaja'];
    
        // $misEstrategias=DB::table('mis_estrategias')
        // ->select('estrategia')
        // ->join('planeacion', 'planeacion.id_Planeacion', 'mis_estrategias.idPlaneacion')
        // ->where('idPlaneacion', $id)
        // ->get();
        
        $typeF = ['fAlta', 'fMedia', 'fBaja'];
        $typeD = ['dAlta', 'dMedia', 'dBaja'];
 
        $fortaleza= DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id)
        ->get();
 
        $debilidad= DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id)
        ->get();
 
        $debilidad1 = DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id)
        ->get();
        
        $debilidad3 = DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id)
        ->get();

        $debilidad4= DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id)
        ->get();
        $oportunidad=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();
        $oportunidad2=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();
        $oportunidad3=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();
        $oportunidad4=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();
        $amenaza= DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();
       $amenaza1= DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();
 
       $amenaza2= DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();
        
       $amenaza3= DB::table('respuesta_analisis')
       ->select('nombre')
       ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
       ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
       ->whereIn('respuesta', $typeA)
       ->where('idPlaneacion', $id)
       ->get();
 
        $fortaleza3= DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id)
        ->get();

        $fortaleza2= DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id)
        ->get();
 
        $fortaleza1= DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id)
        ->get();
 
        return view('Modulo2.misEstrategias')->with(compact('oportunidad4','debilidad4','amenaza3','debilidad3','fortaleza3','oportunidad3','amenaza','id','oportunidad','amenaza1','fortaleza','debilidad','debilidad1','oportunidad2','fortaleza1','amenaza2','fortaleza2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $misEstrategiasAgregar = new misEstrategias;
        $misEstrategiasAgregar->estrategia = $request->estrategia;
        $misEstrategiasAgregar->save();
        return back()->with('Agregar','La estrategia se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
