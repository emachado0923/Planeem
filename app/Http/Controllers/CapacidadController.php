<?php

namespace App\Http\Controllers;

// use App\Model\capacidads;
use App\Model\capacidad;

use App\Model\tipoCapacidad;
use App\Model\Proyectos;
use App\Model\respuestaCapacidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\tipo_Matriz_crecimiento;


class CapacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $id_planeacion = Proyectos::all();

        $capa = capacidad::all();

        $directiva = capacidad::select('capacidads.*')
            ->where('idTipo', 1)
            ->get();

        $competitiva = capacidad::select('capacidads.*')
            ->where('idTipo', 2)
            ->get();

        $financiera = capacidad::select('capacidads.*')
            ->where('idTipo', 3)
            ->get();

        $tecnologica = capacidad::select('capacidads.*')
            ->where('idTipo', 4)
            ->get();

        $humano = capacidad::select('capacidads.*')
            ->where('idTipo', 5)
            ->get();


        return view('Modulo2.capaInterna')->with(compact('capa', 'directiva', 'competitiva', 'financiera', 'tecnologica', 'humano', 'id_planeacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $capacidad = capacidad::all();

        $planeacion = Proyectos::all();



        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response

         */
    }

    public function store(Request $request)
    {

        $plane = $request->get('idPlaneacion');
        $preguntas =  $request->get('preguntas');
        $Nombre_Capacidad = $request->get('Nombre_Capacidad');
        $state = "";


        foreach($preguntas as $preguntas){


            if($request->get($preguntas) === null){

                $message = array(
                    'message' => 'Recuerda llenar todo el formulario',
                    'alert-type' => 'error'
                );
    
                return back()->with($message);

            }

        }

        $preguntas =  $request->get('preguntas');
            
        for ($i =0; $i < count($preguntas) ; $i++) {
           
                respuestaCapacidad::updateOrCreate(
                    [
                        "idPlaneacion" => $plane,
                        "idCapacidad" => $preguntas[$i],
                    ],
                    [
                        "idPlaneacion" => $plane,
                        "idCapacidad" => $preguntas[$i],
                        "Nombre_Capacidad"=>$Nombre_Capacidad[$i],
                        "respuesta" => $request->get($preguntas[$i])
                    ]
                );

        }


            $message = array(
                'message' => 'Perfíl de capacidad interna guardada con Éxito',
                'alert-type' => 'success'
            );

            return redirect('/perfilCompeInfo')->with($message);

}
        


    /**
     * Display the specified resource.
     *
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function show(capacidad $capacidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function edit(capacidad $capacidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, capacidad $capacidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(capacidad $capacidad)
    {
        //
    }

    public function getAnswers($id)
    {

        $res = respuestaCapacidad::select('respuesta as idRespuesta', 'idCapacidad as capacidad', 'idPlaneacion as planeacion')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
            ->where('idPlaneacion', $id)
            ->get();




        return response()->json($res);
    }

   
}
