<?php

namespace App\Http\Controllers;

use App\Model\factorclave;
use App\Model\perfilCompe;
use App\Model\Proyectos;
use App\Model\perfilCompeEmpresa;
use Illuminate\Http\Request;


// use Validator;

class PerfilCompeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexInfo()
    {


        $factorClave=factorclave::all();

        $factorClave=factorclave::all();


        $perfilCompe=perfilCompe::all();

        $planeacion= Proyectos::all();

        return view('Modulo2.perfilCompeInfo')->with(compact('factorClave','planeacion','perfilCompe'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perfil = perfilCompe::all()->last();
        $factorClave=factorclave::all();
        return view('Modulo2.perfilCompeInfo')->with(compact('perfil','factorClave'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    public function store(Request $request)

    {

        // $factorClave = $request->get('idFactorClave');
        $planeacion = $request->get('idPlaneacion');
        $nombre = $request->get('nombreEmpresa');
        $pesoRelativo = $request->get('pesoRelativo');
        $calificacion = $request->get('calificacion');
        $peso = $request->get('pesoPonderado');

        $totalPeso= $request->get('totalPeso');
        $totalCali= $request->get('totalCalificacion');
        $totalPonde= $request->get('totalPonderado');


            for ($i = 0; $i < count($request->get('idFactorClave')); $i++) {
                perfilCompe::updateorCreate(

                    [
                        'idFactorClave' => $request->get('idFactorClave')[$i],
                        'idPlaneacion' => $planeacion,
                        'nombreEmpresa' => $nombre,
                    ],
                    [
                        'idFactorClave' => $request->get('idFactorClave')[$i],
                        'idPlaneacion' => $planeacion,
                        'nombreEmpresa' => $nombre,
                        'pesoRelativo' => $pesoRelativo[$i],
                        'calificacion' => $calificacion[$i],
                        'pesoPonderado' => $peso[$i],
                        'totalPeso'=>$totalPeso,
                       ' totalCalificacion'=>$totalCali,
                        'totalPonderado'=>$totalPonde


                    ]
                );
    }


        return response()->json(["success"=> "perfil competitivo guardado con éxito"]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Model\perfilCompe  $perfilCompe
     * @return \Illuminate\Http\Response
     */
    public function show(perfilCompe $perfilCompe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\perfilCompe  $perfilCompe
     * @return \Illuminate\Http\Response
     */
    public function edit(perfilCompe $perfilCompe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\perfilCompe  $perfilCompe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perfilCompe $perfilCompe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\perfilCompe  $perfilCompe
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfilCompe $perfilCompe)
    {
        //
    }

    public function getAnswersMyEmpre($id)
    {
        $res = perfilCompe::select('idFactorClave as factorClave', 'idPlaneacion as planeacion' ,'pesoRelativo','calificacion', 'pesoPonderado')
            ->join('factorclaves', 'factorclaves.id', 'perfil_compe.idFactorClave')
            ->join('planeacion', 'planeacion.id_Planeacion', 'perfil_compe.idPlaneacion')
            ->where('perfil_compe.idPlaneacion', $id)
            ->get();


        // $res = respuestaAnalisis::select('respuesta as idRespuesta', 'idanalisis as analisis', 'idPlaneacion as planeacion')
        // ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        // ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        // ->where('idPlaneacion', $id)
        // ->get();



        //    dd($res);

        return response()->json($res);
    }


    public function empresa($id)
    {
        $EMPRESA = perfilCompeEmpresa::select('*')
            ->where('idPlaneacion', $id)
            ->get();




        return response()->json($EMPRESA);
    }
}
