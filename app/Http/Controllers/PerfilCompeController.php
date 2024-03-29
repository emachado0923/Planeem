<?php

namespace App\Http\Controllers;

use App\Model\factorclave;
use App\Model\perfilCompe;
use App\Model\Proyectos;
use App\Model\perfilCompeEmpresa;
use Illuminate\Http\Request;
use App\Model\respuestaCapacidad;

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
        $Factor_nombre = $request->get('Factor_nombre');
        $calificacion = $request->get('calificacion');
        $cantidad = $request->get('sss');
        $tolpeso = 0;
        $tolcalificacion = 0;




            for ($i = 0; $i < count($request->get('idFactorClave')); $i++) {


                if($pesoRelativo[$i] == null || $calificacion[$i] == null ||  $peso[$i] == null  ){

                    $message = array(
                        'message' => 'lo sentimos, todos los datos son obligatorios, por favor llena todos los campos',
                        'alert-type' => 'error'
                    );
                    return back()->with($message);

                }else{
                    $tolpeso  += $pesoRelativo[$i];
                    $tolcalificacion +=$calificacion[$i];
                }if($tolpeso > 1  ){

                    $message = array(
                        'message' => 'El pesos relativo no pude ser superior a 1 y  calificación de pude ser superior a 4',
                        'alert-type' => 'error'
                    );

                    return back()->with($message);

                }else{
                  



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
       
             }



     


        $Factor_nombre = $request->get('Factor_nombre');
        $calificacion = $request->get('calificacion');
        $pesoRelativo = $request->get('pesoRelativo');

        for ($a=0; $a < count($calificacion) ; $a++) { 

            if($calificacion[$a] == 0){
                respuestaCapacidad::updateOrCreate(
                    [
                        "idPlaneacion" => $planeacion,
                        "Nombre_Capacidad"=>$Factor_nombre[$a],
                        
                    ],
                    [
                        "idPlaneacion" => $planeacion,
                        "Nombre_Capacidad"=>$Factor_nombre[$a],
                        "respuesta" => "NA"
                    ]
                );
           }else if($calificacion[$a] == 1){
                    respuestaCapacidad::updateOrCreate(
                        [
                            "idPlaneacion" => $planeacion,
                            "Nombre_Capacidad"=>$Factor_nombre[$a],
                            
                        ],
                        [
                            "idPlaneacion" => $planeacion,
                            "Nombre_Capacidad"=>$Factor_nombre[$a],
                            "respuesta" => "dAlta"
                        ]
                    );
               }else if($calificacion[$a] == 2){
                respuestaCapacidad::updateOrCreate(
                    [
                        "idPlaneacion" => $planeacion,
                        "Nombre_Capacidad"=>$Factor_nombre[$a],
                        
                    ],
                    [
                        "idPlaneacion" => $planeacion,
                        "Nombre_Capacidad"=>$Factor_nombre[$a],
                        "respuesta" => "dMedia"
                    ]
                );
             
               }else if($calificacion[$a] == 3) {
                
        
                    respuestaCapacidad::updateOrCreate(
                        [
                            "idPlaneacion" => $planeacion,
                            "Nombre_Capacidad"=>$Factor_nombre[$a],
                            
                        ],
                        [
                            "idPlaneacion" => $planeacion,
                            "Nombre_Capacidad"=>$Factor_nombre[$a],
                            "respuesta" => "fMedia"
                        ]
                    );
        
               }else if($calificacion[$a] == 4) {
        
                
                    respuestaCapacidad::updateOrCreate(
                        [
                            "idPlaneacion" => $planeacion,
                            "Nombre_Capacidad"=>$Factor_nombre[$a],
                            
                        ],
                        [
                            "idPlaneacion" => $planeacion,
                            "Nombre_Capacidad"=>$Factor_nombre[$a],
                            "respuesta" => "fAlta"
                        ]
                    );
                  
                }
                

        
               
        }



        
        // $factorClave=factorclave::all();
        $perfilCompe=perfilCompe::all();


        $factorClave= perfilCompe::select('perfil_compe.*','factorclaves.nombre')
        ->join('factorclaves', 'perfil_compe.idFactorClave', '=', 'factorclaves.id')
        ->where('perfil_compe.idPlaneacion',$planeacion)
        ->where('perfil_compe.pesoRelativo','<>',0)
        ->where('perfil_compe.calificacion','<>',0)
        ->where('perfil_compe.pesoPonderado','<>',0)
        ->get();


        toastr()->success('Datos registrados correctamente');

        
        // return Response()->jason();
        return view('Modulo2.perfilCompe')->with('cantidad',$cantidad)->with('planeacion',$planeacion)->with('factorClave',$factorClave)->with('perfilCompe',$perfilCompe);

  
        // return Response()->jason();



        // return response()->json(["success"=> "perfil competitivo guardado con éxito"]);
    }

    // public function storeEmpe(Request $request)

    // {  

    

    //     $count = $request->input('count');

        
    //     $factorClave = $request->get('idFactorClave');
    //     $planeacion = $request->get('idPlaneacion');
    //     $nombre = $request->get('nombreEmpresa');
    //     $pesoRelativo = $request->get('pesoRelativo');
    //     $calificacion = $request->get('calificacion');
    //     $peso = $request->get('pesoPonderado');


    //     foreach ($nombre as $nombre) {


    //         for ($i = 0; $i < count($request->get('idFactorClave')); $i++) {

    //             // print_r($pone);die;
    
    //             perfilCompe::updateorCreate(
    //                 [
    //                     'idFactorClave' => $request->get('idFactorClave')[$i],
    //                     'idPlaneacion' => $planeacion,
    //                     'nombreEmpresa' => $nombre,
    //                 ],
    //                 [
    //                     'idFactorClave' => $request->get('idFactorClave')[$i],
    //                     'idPlaneacion' => $planeacion,
    //                     'nombreEmpresa' => $nombre,
    //                     'pesoRelativo' => $pesoRelativo[$i],
    //                     'calificacion' => $calificacion[$i],
    //                     'pesoPonderado' => $peso[$i]
    //                 ]
    //             );
    //         }


           
    //     }
    //     $message = array(
    //         'message' => 'Empresas Guardadas con Éxito',
    //         'alert-type' => 'success'
    //     );
        
     

    //    return redirect('factoresInternosI')->with($message);
    // }
    // {
       
    //     $plane = $request->get('idPlaneacion');
    //     $pone = $request->get('pesoRelativo');
    //     $cali = $request->get('calificacion');
    //     $puntua = $request->get('pesoPonderado');

    //     for ($i = 0; $i < count($request->get('idFactorClave')); $i++) {


    //         perfilCompe::updateorCreate(

    //             [
    //                 'idFactorClave' => $request->get('idFactorClave')[$i],
    //                 'idPlaneacion' => $plane,
    //             ],
    //             [
    //                 'idFactorClave' => $request->get('idFactorClave')[$i],
    //                 'idPlaneacion' => $plane,
    //                 'pesoRelativo' => $pone[$i],
    //                 'calificacion' => $cali[$i],
    //                 'pesoPonderado' => $puntua[$i],
    //             ]
    //         );
    //     }


    //     return response()->json(['success' => 'Coordinador agregado con éxito.', 'data' => $data]);
    // }

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
