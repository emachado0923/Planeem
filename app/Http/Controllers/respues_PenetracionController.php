<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\respues_Penetracion;
use App\Model\analisisPorter;
use App\Model\respuestaAnalisisPorter;
use App\Model\ansorft;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_mercado;
use App\Model\tipo_Desarrollo_Producto;

class respues_PenetracionController extends Controller
{
    public function storage(Request $request){


        $Peso_Relativo = $request->input('Peso_Relativo');
        $Calificación = $request ->input('Calificación');
        $Peso_Ponderado = $request->input('Peso_Ponderado');
        $id_tipo_preguntaansorfts = $request->input('id_tipo_preguntaansorfts');
        $id_tipo_Penetracion = $request->input('id_tipo_Penetracion');
        $id_planeacion = $request->input('id_planeacion');

        for ($a=0; $a <  count($id_tipo_Penetracion) ; $a++) {


            for ($i = 0; $i < count($id_tipo_preguntaansorfts); $i++) {

                respues_Penetracion::updateorCreate(
                    [
                        "id_Planeacion" => $id_planeacion,
                        "id_tipo_Penetracion" => $id_tipo_Penetracion[$a],
                        "id_tipo_preguntaansorfts" => $id_tipo_preguntaansorfts[$i],

                    ],
                    [
                        "id_tipo_preguntaansorfts" => $id_tipo_preguntaansorfts[$i],
                        "id_Planeacion" => $id_planeacion,
                        "id_tipo_Penetracion" => $id_tipo_Penetracion[$a],
                        "Peso_Relativo" => $Peso_Relativo[$a],
                        "Calificación" => $Calificación[$a],
                        "Peso_Ponderado" => $Peso_Ponderado[$a]
                    ]
                );
            }
        }






        $DesaMerca = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion=tipo_Desarrollo_Producto::all();


        $DesaMerca2 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion2=tipo_Desarrollo_Producto::all();



        $DesaMerca3 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion3=tipo_Desarrollo_Producto::all();




        $DesaMerca4 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion4=tipo_Desarrollo_Producto::all();

        $DesaMerca5 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();
        $tipo_Penetracion5 =tipo_Desarrollo_Producto::all();


        $DesaMerca6 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion6 =tipo_Desarrollo_Producto::all();


        $DesaMerca7 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion7 =tipo_Desarrollo_Producto::all();



         return view('Modulo2.ansorftDesarrollo')->with(compact('DesaMerca','tipo_Penetracion','DesaMerca2','tipo_Penetracion2','DesaMerca3',
         'tipo_Penetracion3','DesaMerca4','tipo_Penetracion4','DesaMerca5','tipo_Penetracion5','DesaMerca6','tipo_Penetracion6','id_planeacion','DesaMerca7','tipo_Penetracion7'));

    }
}
