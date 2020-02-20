<?php

namespace App\Http\Controllers;

use App\Model\analisis;
use App\Model\Proyectos;
use App\Model\respuestaAnalisis;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AnalisisController extends Controller
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

        $politico = analisis::select('analisis.*')
        ->where('idTipo',1)
        ->get();

        $economico= analisis::select('analisis.*')
        ->where('idTipo',4)
        ->get();

        $social = analisis::select('analisis.*')
        ->where('idTipo',2)
        ->get();

        $tecnologico = analisis::select('analisis.*')
        ->where('idTipo',6)
        ->get();
        
        $ambiental = analisis::select('analisis.*')
        ->where('idTipo',5)
        ->get();


        $legal = analisis::select('analisis.*')
        ->where('idTipo',3)
        ->get();

        return view('Modulo2.analisisPestal')->with(compact('politico','social','legal','economico','ambiental','tecnologico','id_planeacion'));
             

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $analisis = analisis::all();

        $planeacion = Proyectos::all();

        return view('Modulo2.analisisPestal')->with(compact('analisis','planeacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
  */
    public function store(Request $request)
    {
       
        $plane = $request->get('idPlaneacion');
        
        $count=0;
       
        foreach ($request->get('preguntas') as $key => $value) {

        try {
            respuestaAnalisis::updateOrCreate(
                [
                'idAnalisis' => $value,
                'idPlaneacion' => $plane
            ],
            [
                'idPlaneacion' => $plane,
                'idAnalisis' => $value,
                'respuesta' => $request->get($value),
             
                ]);

                if ($request->get($value) !== null) {
                    $count++;
                }

        } catch (\Throwable $th) {
          
        }
         
           
        }

        if ($count !== count($request->get('preguntas'))) {
            $message = array(
                'message' => 'Recuerda llenar todo el cuestionario, seleccionando los chekbox',
                'alert-type' => 'error'
            );
            return back()->with($message);
        }elseif ($count===count($request->get('preguntas'))) {
            $message = array(
                'message' => 'Análisis pestal Guardado con Éxito',
                'alert-type' => 'success'
            );

            
    return redirect('/analisisPorter')->with($message);

        }


      
   }
           





    /**
     * Display the specified resource.
     *
     * @param  \App\Model\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function show(analisis $analisis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function edit(analisis $analisis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analisis $analisis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function destroy(analisis $analisis)
    {
        //
    }
    public function getAnswers($id){
        $res = respuestaAnalisis::select('respuesta as idRespuesta', 'idanalisis as analisis', 'idPlaneacion as planeacion')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->where('idPlaneacion', $id)
        ->get();



    return response()->json($res);

    }

    public function getEFI(Request $request){


        $id = $request->get('id_Planeacion');
        
        $typeA = ['aAlta', 'aMedia', 'aBaja'];
        $typeO = ['oAlta', 'oMedia', 'oBaja'];

        $amenaza= DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();

        $oportunidad=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();

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


        // dd($amenaza);

        return view('Modulo2.analisisEFI')->with(compact('amenaza','oportunidad','fortaleza','debilidad'));

    }


    public function getDOFA(){


        $id = auth()->user()->selected_planne;
        
        $typeA = ['aAlta', 'aMedia', 'aBaja'];
        $typeO = ['oAlta', 'oMedia', 'oBaja'];

        $amenaza= DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();

        $oportunidad=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();

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


        // dd($amenaza);

        return view('Modulo2.analisisDofaI')->with(compact('amenaza','oportunidad','fortaleza','debilidad'));

    }
}
