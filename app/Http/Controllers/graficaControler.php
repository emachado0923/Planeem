<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class graficaControler extends Controller
{
   public function dotos($id){

 
     $devilidad = ['dAlta','dBaja','dMedia'];


    $perfil_compeDevilidad = DB::table('factor_internos')
    ->join('respuesta_capacidad','factor_internos.idRespuestaCapacidad','respuesta_capacidad.id')
    ->select('factor_internos.totalPuntuacion')
    ->where('factor_internos.idPlaneacion',$id)
    ->where('respuesta',$devilidad)
    ->get();

    return response()->json($perfil_compeDevilidad);


   }


   public function fortalesas($id){
   $fortalesa = ['fMedia','fAlta','fBaja'];

    $perfil_compefortalesa = DB::table('factor_internos')
    ->join('respuesta_capacidad','factor_internos.idRespuestaCapacidad','respuesta_capacidad.id')
    ->select('factor_internos.totalPuntuacion')
    ->where('factor_internos.idPlaneacion',$id)
    ->where('respuesta',$fortalesa)
    ->get();

    return response()->json($perfil_compefortalesa);

   }


public function perfil_compe($id)
   {


   $totalPonderado = DB::table('perfil_compe')
    ->select('totalPonderado')
    ->where('idPlaneacion',$id)
    ->get();

    return response()->json($totalPonderado);

   }
}
