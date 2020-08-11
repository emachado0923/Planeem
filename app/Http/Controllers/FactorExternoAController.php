<?php

namespace App\Http\Controllers;

use App\Model\FactorExternoA;
use App\Model\Proyectos;
use App\Model\respuestaAnalisis;
use Illuminate\Http\Request;
use DB;
use App\Model\tipo_Matriz_crecimiento;

class FactorExternoAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $id = $request->get('planeacion');
        
        $typeA = ['aAlta', 'aMedia', 'aBaja'];
        $typeO = ['oAlta', 'oMedia', 'oBaja'];

        $Amenazas= DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();
       /* dd($idPlanecion);*/
        $Oportunidades=DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();

      
        return view('Modulo2.factoresExternos')->with(compact('Oportunidades', 'Amenazas', 'id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function show(FactorExternoA $factorExternoA)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function edit(FactorExternoA $factorExternoA)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, FactorExternoA $factorExternoA)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function destroy(FactorExternoA $factorExternoA)
    // {
    //     //
    // }
}
