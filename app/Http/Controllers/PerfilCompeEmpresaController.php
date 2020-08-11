<?php

namespace App\Http\Controllers;

use App\Model\factorclave;
use App\Model\perfilCompe;
use App\Model\perfilCompeEmpresa;
use App\Model\Proyectos;
use Illuminate\Http\Request;
use DB;


class PerfilCompeEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $cantidad = $request->input('cantidad');

        $idPlaneacion = $request->input('id_planecion');
        $factorClave=factorclave::all();
        $perfilCompe=perfilCompe::all();


        $perfilCompeEmpresa= perfilCompeEmpresa::select('*')
        ->where('idPlaneacion',$idPlaneacion)->get();


        $planeacion=Proyectos::all();
        
  
        // return Response()->jason();
        return view('Modulo2.perfilCompe')->with('cantidad',$cantidad)->with('idPlaneacion',$idPlaneacion)->with('factorClave',$factorClave)->with('perfilCompe',$perfilCompe)->with('perfilCompeEmpresa',$perfilCompeEmpresa)->with('planeacion',$planeacion);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $factorClave=factorclave::all();
        $perfilCompe=perfilCompe::all();

        $perfilCompeEmpresa=perfilCompeEmpresa::all();
        
        $planeacion=Proyectos::all();

        return view('Modulo2.perfilCompe')->with(compact('factorClave','planeacion','perfilCompeEmpresa','perfilCompe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEmpe(Request $request)

    {  
        $factorClave = $request->get('idFactorClave');
        $planeacion = $request->get('idPlaneacion');
        $nombre = $request->get('nombreEmpresa');
        $pesoRelativo = $request->get('pesoRelativo');
        $calificacion = $request->get('calificacion');
        $peso = $request->get('pesoPonderado');
        $cantidad = $request->get('cantidad');
        $tolpeso = 0;
        $tolcalificacion = 0;



            foreach ($nombre as $nombre) {

                if($nombre === null){

                    toastr()->error('lo sentimos, todos los datos son obligatorios, por favor llena todos los campos', 'Erro!');
    
    
                    $perfilCompe=perfilCompe::all();


                    $factorClave= perfilCompe::select('perfil_compe.*','factorclaves.nombre')
                    ->join('factorclaves', 'perfil_compe.idFactorClave', '=', 'factorclaves.id')
                    ->where('perfil_compe.idPlaneacion',$planeacion)
                    ->where('perfil_compe.pesoRelativo','<>',0)
                    ->where('perfil_compe.calificacion','<>',0)
                    ->where('perfil_compe.pesoPonderado','<>',0)
                    ->get();



                    
                    // return Response()->jason();
                    return view('Modulo2.perfilCompe')->with('cantidad',$cantidad)->with('planeacion',$planeacion)->with('factorClave',$factorClave)->with('perfilCompe',$perfilCompe)->with($message);;




                }else{


                    for ($i = 0; $i < count($factorClave); $i++) {


                        if($pesoRelativo[$i] == null || $calificacion[$i] == null ||  $peso[$i] == null  ){
            
                
    
                            toastr()->error('lo sentimos, todos los datos son obligatorios, por favor llena todos los campos', 'Erro!');
    
    
                            $perfilCompe=perfilCompe::all();
    
    
                            $factorClave= perfilCompe::select('perfil_compe.*','factorclaves.nombre')
                            ->join('factorclaves', 'perfil_compe.idFactorClave', '=', 'factorclaves.id')
                            ->where('perfil_compe.idPlaneacion',$planeacion)
                            ->where('perfil_compe.pesoRelativo','<>',0)
                            ->where('perfil_compe.calificacion','<>',0)
                            ->where('perfil_compe.pesoPonderado','<>',0)
                            ->get();
    
    
    
                            
                            // return Response()->jason();
                            return view('Modulo2.perfilCompe')->with('cantidad',$cantidad)->with('planeacion',$planeacion)->with('factorClave',$factorClave)->with('perfilCompe',$perfilCompe)->with($message);;
    
      
            
                        }else{
                            $tolpeso  += $pesoRelativo[$i];
                            $tolcalificacion +=$calificacion[$i];
                        }if($tolpeso > 1 ){
            
                      
    
                            toastr()->error('El pesos relativo no pude ser superior a 1 y  calificación de pude ser superior a 4', 'Erro!');
    
    
                              // $factorClave=factorclave::all();
                            $perfilCompe=perfilCompe::all();
    
    
                            $factorClave= perfilCompe::select('perfil_compe.*','factorclaves.nombre')
                            ->join('factorclaves', 'perfil_compe.idFactorClave', '=', 'factorclaves.id')
                            ->where('perfil_compe.idPlaneacion',$planeacion)
                            ->where('perfil_compe.pesoRelativo','<>',0)
                            ->where('perfil_compe.calificacion','<>',0)
                            ->where('perfil_compe.pesoPonderado','<>',0)
                            ->get();
    
    
    
                            
                            // return Response()->jason();
                            return view('Modulo2.perfilCompe')->with('cantidad',$cantidad)->with('planeacion',$planeacion)->with('factorClave',$factorClave)->with('perfilCompe',$perfilCompe);
    
                    
            // return Response()->jason();
    
    
                          
    
                           
            
                        }else{
                                perfilCompeEmpresa::updateorCreate(
                                    [
                                        
                                        'idPlaneacion' => $planeacion,
                                        'nombreEmpresa' => $nombre,
                                    ],
                                    [
                                        'id_perfil_compe' => $factorClave[$i],
                                        'idPlaneacion' => $planeacion,
                                        'nombreEmpresa' => $nombre,
                                        'pesoRelativo' => $pesoRelativo[$i],
                                        'calificacion' => $calificacion[$i],
                                        'pesoPonderado' => $peso[$i],
                                        'cantidad'=>$cantidad
                                    ]
                                );
                            
                        }
                
                    }
                    
                }


                
        



      
                

                 toastr()->success('Datos registrados correctamente');

        
                return view('Modulo2.factoresInternosI')->with('planeacion',$planeacion);
            }
         
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Model\perfilCompeEmpresa  $perfilCompeEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $perfilCompeEmpresa = perfilCompeEmpresa::select('idPlaneacion as id','idFactorClave as factorClave','nombreEmpresa as nombreEmpresa','pesoRelativo as pesoRelativo','calificacion as calificacion','pesoPonderado as pesoPonderado')
            ->where('idPlaneacion',$id)
            ->get();

           return response()->json($perfilCompeEmpresa);
    }


    public function getCantidad ($id){

        $perfilCompeEmpresa= perfilCompeEmpresa::select('cantidad')
        ->where('idPlaneacion',$id)->first();

        return response()->json($perfilCompeEmpresa);
    }
}
