<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Proyectos;
use App\Model\Verbos;
use DB;

use App\Model\respuesta_verbo;

class Modulo3Controller extends Controller
{


    public function estrategias(Request $request){


        $id_plane = Proyectos::all();

        $proyecto = Proyectos::all();

        $proyecto->nombre_proyecto=$request->input('nombre_proyecto');


    return view('Modulo3.formulacion_de_estrategias.tercero1-1')->with('id_plane',$id_plane)->with('proyecto',$proyecto);

}

    public function Verbos(Request $request){



        $nombre =$request->input('nombre_proyecto');
        
        $id = DB::table('planeacion')
        ->select('id_Planeacion')
        ->where('nombre_proyecto', $nombre)->first();
        
        foreach($id as $id){
            $proyecto = Proyectos::find($id);
        }
        
        $Verbos = Verbos::all();
        
        $id_plane = Proyectos::all();
 


    return view('Modulo3.DisenoObjetivos3')->with('id_plane',$id_plane)->with('proyecto',$proyecto)->with('Verbos',$Verbos);

    }



    public function guardar(Request $request){

        $Objetivos = $request->input('Objetivos');
        $id_planecion = $request->input('id_planecion');

        $posiciones = $request->input('posiciones');
        
    for ($i=0; $i < count($posiciones) ; $i++) {
        
            respuesta_verbo::updateOrCreate([
                'posiciones'=> $posiciones[$i],
                'Objetivos'=> $Objetivos[$i],
                'id_Planeacion'=> $id_planecion,
            ]);

    }

        return view('Modulo3.FormulacionInfo')->with('id_planecion',$id_planecion);

          


    }
}
