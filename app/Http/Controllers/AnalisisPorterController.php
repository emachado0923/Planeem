<?php

namespace App\Http\Controllers;

use App\Model\analisisPorter;
use App\Model\respuestaAnalisisPorter;
use App\Model\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Model\ansorft;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_mercado;
class AnalisisPorterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id_planeacion = Proyectos::all();

        $poderProvee = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',1)
        ->get();


        // dd($id_planeacion);

        $poderCliente= analisisPorter::select('analisis_porters.*')
        ->where('idTipo',2)
        ->get();

        $productoSustituto = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',3)
        ->get();

        $amenazaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',4)
        ->get();
        
        $rivaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',5)
        ->get();


        return view('Modulo2.analisisPorter')->with( 'id_planeacion',$id_planeacion)->with('poderProvee',$poderProvee)->with('poderCliente',$poderCliente)->with('productoSustituto',$productoSustituto)->with('amenazaCompe',$amenazaCompe)->with('rivaCompe',$rivaCompe);
             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $poderProvee = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',1)
        ->get();

        $poderCliente= analisisPorter::select('analisis_porters.*')
        ->where('idTipo',2)
        ->get();

        $productoSustituto = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',3)
        ->get();

        $amenazaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',4)
        ->get();
        
        $rivaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',5)
        ->get();

        
        $anaPorter = analisisPorter::all();

        $planeacion = Proyectos::all();
        return view('Modulo2.analisisPorter')->with(compact('planeacion', 'anaPorter','rivaCompe','amenazaCompe','productoSustituto','poderCliente','poderProvee'));

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
        $plane = $request->get('idPlaneacion');
        // dd($plane);

        foreach ($request->get('preguntas') as $key => $value) {

            if ($request->get($value) === null) {

                $message = array(
                    'message' => 'Recuerda responder todo el cuestionario',
                    'alert-type' => 'error'
                );

                return back()->with($message);

             } else {

                respuestaAnalisisPorter::updateOrCreate(
                    [
                        "idAnaPorter" => $value,
                        "idPlaneacion" => $plane
                    ],

                    [
                        "idPlaneacion" => $plane,
                        "idAnaPorter" => $value,
                        "respuesta" => $request->get($value)
                    ]
                );

                $message = array(
                    'message' => 'Análisis porter guardado con Éxito',
                    'alert-type' => 'success'
                );
            }
        }

    

        $DesaMerca = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_mercado=tipo_mercado::all();
        $id_planeacion =  $plane;

        $ansorft = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('idPlaneacion',$plane)
        ->get();


  
        $cantidadMercado= count($ansorft);

        ///Sustitutos
        $Sustitutos = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Sustitutos")
        ->where('idPlaneacion',$plane)
        ->get();


        ///Producto
        $Producto = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.id_tipo_mercado',"2")
        ->where('idPlaneacion',$plane)
        ->get();

        ///Productotitutos
        $Productotitutos = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Forma de Uso y Aplicación del Productotitutos")
        ->where('idPlaneacion',$plane)
        ->get();
                
        
      
         ///  Intercambio de Tecnología
        $Tecnología = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Intercambio de Tecnología")
        ->where('idPlaneacion',$plane)
        ->get();
                      
        
        /// Geográficamente
        $Geográficamente = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Geográficamente")
        ->where('idPlaneacion',$plane)
        ->get(); 
        
        //Segmentación
        $Segmentación = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Segmentación")
        ->where('idPlaneacion',$plane)
        ->get(); 

        //Alianzas Convenios
        $Convenios = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Alianzas Convenios")
        ->where('idPlaneacion',$plane)
        ->get(); 

        //Promoción
        $Promoción = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Promoción")
        ->where('idPlaneacion',$plane)
        ->get(); 
        

        $datos = count(ansorft::all());
        


        return view('Modulo2.ansorftDesarrolloMerca')->with(compact('ansorft','datos','DesaMerca','id_planeacion','tipo_mercado','Sustitutos','Producto','Productotitutos','Tecnología','Geográficamente','Segmentación','Convenios','Promoción','cantidadMercado'))->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function show(analisisPorter $analisisPorter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function edit(analisisPorter $analisisPorter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analisisPorter $analisisPorter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function destroy(analisisPorter $analisisPorter)
    {
        //
    }

    public function getAnswers($id)
    {

        $res = respuestaAnalisisPorter::select('respuesta as idRespuesta', 'idAnaPorter	 as anaPorter', 'idPlaneacion as planeacion')
            ->join('analisis_porters', 'analisis_porters.id', 'respuesta_analisis_porters.idAnaPorter')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis_porters.idPlaneacion')
            ->where('idPlaneacion', $id)
            ->get();




        return response()->json($res);
    }
}
