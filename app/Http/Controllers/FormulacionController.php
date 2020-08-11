<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\estrategia;
use App\Model\respuesta_verbo;
use App\Model\Proyectos;
use App\Model\resumenestrategias2;
use App\Model\estrategiasDiagnosticoSeed;
use App\Model\estrategiasDiagnostico;
use App\Model\guardarResumenDos;
use App\Model\guardarEstrategias;
use App\Model\EstrategiasDofa;
use App\Model\Matriz_crecimiento;

use App\Model\formulacionestrategias;


use DB;
use App\Model\tipo_Matriz_crecimiento;

class FormulacionController extends Controller
{
     
     /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //-----------------------------------------Vista Formulacion Asociar-----------------------------------------------------------------------------
     ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    
    public function index(Request $request){
        //Este me lista todos las estrategias traidas del modulo 2 en la vista donde se unenn con los objetivos  
        $id = $request->input('id_planecion');

        $estrategia1= DB::table('estrategiasdiagnostico')
        ->select('estrategiasdiagnosticoseed.descripcion')
        ->join('estrategiasdiagnosticoseed', 'estrategiasdiagnosticoseed.id_estrategias', 'estrategiasdiagnostico.id_estrategias')
        ->join('planeacion', 'planeacion.id_Planeacion', 'estrategiasdiagnostico.id_Planeacion')
        ->where('estrategiasdiagnostico.id_Planeacion',$id)
        ->get();

        $estrategia2= DB::table('estrategias_dofa')
        ->select('descripcion')
        ->join('planeacion', 'planeacion.id_Planeacion', 'estrategias_dofa.id_Planeacion')
        ->where('estrategias_dofa.id_Planeacion',$id)  
        ->where('estrategias_dofa.id_Estrategias_Ofensivas','!=','null')
        ->get();

        $estrategia3= DB::table('estrategias_matriz')
        ->select('tipo_matriz_crecimiento.Matriz')
        ->join('matriz_crecimiento', 'estrategias_matriz.id_Matriz_crecimiento',  'matriz_crecimiento.id')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento',  'tipo_matriz_crecimiento.id')
        ->join('planeacion', 'planeacion.id_Planeacion', 'estrategias_matriz.id_Planeacion')
        ->get();

        $proyecto = Proyectos::find($id);
        $estrategia = estrategia::all();
        $Objetivos = respuesta_verbo::select('id_respustaverbos','Objetivos','id_Planeacion','posiciones')
        ->where('id_Planeacion',$id)
        ->get();
        $cantidad = count($Objetivos); 
        
        return view('Modulo3.FormulacionAsociar')->with(compact('proyecto','Objetivos','cantidad','estrategia1','estrategia2','estrategia3'));
    }

    public function guardar(Request $request){
         //Para guardar los objetivos con los que mas adelante se uniran con las estretegias  
        $Objetivos = $request->input('Objetivos');
        $id_planecion = $request->input('id_planecion');
        $posiciones = $request->input('posiciones');
        
        for ($i=0; $i < count($posiciones) ; $i++) {

            respuesta_verbo::updateOrCreate(
                [
                    'id_Planeacion'=> $id_planecion,
                    'posiciones'=> $posiciones[$i],
                ],

                [
                    'posiciones'=> $posiciones[$i],
                    'Objetivos'=> $Objetivos[$i],
                    'id_Planeacion'=> $id_planecion
                ]
            );
        }
        toastr()->success('Datos registrados correctamente');

        return view('Modulo3.FormulacionInfo')->with('id_planecion',$id_planecion);
        
    }

    public function storeage(Request $request){
        //Para relacionar y guardar las estrategias con objetivos
    
        $id_estrategia = $request->input('id_estrategia');
        $pocision = $request->input('pocision');
        $id_respustaverbos = $request->input('id_respustaverbos');
        $id_planecion = $request->input('id_planecion');
    
        for ($i=0; $i < count($pocision) ; $i++) { 
                
            formulacionestrategias::updateorCreate(
                [
                    'id_Planeacion'=>$id_planecion[$i],
                    'id_respustaverbos'=>$pocision[$i],
                    'id_estrategia' => $id_estrategia[$i],
                    'pocision' => $pocision[$i],
                ],
                [
                    'id_Planeacion'=>$id_planecion[$i],
                    'id_respustaverbos'=>$pocision[$i],
                    'id_estrategia' => $id_estrategia[$i],
                    'pocision' => $pocision[$i],

                ]
            );
            
            
        }
        
        $formulacion = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id_planecion)
        ->get();  

        $formulacionPosiciones = formulacionestrategias::where('id_Planeacion',$id_planecion)->max('pocision');
        
        $formulacionFinal=[];
    
        for ($i=0; $i < $formulacionPosiciones ; $i++) {     
        
        $formulacionProceso=[];

            for ($x=0; $x < count($formulacion) ; $x++) { 
                
                
                    if($i+1 == $formulacion[$x]->pocision){
                    array_push($formulacionProceso,$formulacion[$x]);
                    }
            }
            array_push( $formulacionFinal,$formulacionProceso);
        
        }
        toastr()->success('Datos registrados correctamente');
        
        return view('Modulo3.FormulacionResumen')->with('formulacionFinal',$formulacionFinal);
    }


     
     /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //-----------------------------------------Vista Tercero2-4-----------------------------------------------------------------------------
     ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 


    public function resumenDos(Request $request){
        $id_planecion = $request->input('id_planecion');
        
        $objetivos1 = DB::table('respustaverbos')
        ->select('respustaverbos.*')
        ->where('respustaverbos.id_Planeacion',$id_planecion)
        ->get();  
    
        return view('Modulo3.tercero2-4')->with('objetivos1',$objetivos1)->with('id_planecion',$id_planecion);          
      }

      public function guardarResumenDos(Request $request){
        
        $id_planecion = $request->input('id_planecion');
        $id_respustaverbos = $request->get('id_respustaverbos');
        $calificacion = $request->get('calificacion');
        
       for($i = 0; $i<count($id_respustaverbos) ; $i ++){

            if($calificacion == null || $calificacion<$id_respustaverbos){
            
                    $id_Planeacion = $request->get('id_Planeacion'); 
                    // dd($id_planecion);
                    $objetivos1 = DB::table('respustaverbos')
                    ->select('respustaverbos.*')
                    ->where('respustaverbos.id_Planeacion',$id_planecion)
                    ->get();  
                
                    return view('Modulo3.tercero2-4')->with('objetivos1',$objetivos1)->with('id_planecion',$id_planecion); 
            
            }else{
                
                    resumenestrategias2::updateOrCreate(

                        [   
                            'id_Planeacion'=> $id_planecion,
                            'id_respustaverbos' =>$id_respustaverbos[$i],
                            'calificacion'=>$calificacion[$i],
                        ],
                        [  
                            'id_Planeacion'=> $id_planecion,
                            'id_respustaverbos' =>$id_respustaverbos[$i],
                            'calificacion'=>$calificacion[$i],
                        ]);
                }
        }
        
        toastr()->success('Datos registrados correctamente');

        return view('Modulo3.tercero3-1');
      

        // ->with('formulacionFinal',$formulacionFinal)->with('formulacionPosiciones',$formulacionPosiciones);          
    }
    
     
     /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //-----------------------------------------Vista Tercero3-2-----------------------------------------------------------------------------
     ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    public function objetivosEstrategias(Request $request){
        //En esta vista se va a listar todos los objetivos con sus estrategias y sus respectivas calificaciones
        $id = $request->id;
       
        $ca1=['largo'];
        $ca2=['mediano'];
        $ca3=['corto'];
        $ca4=['noaplica']; 
        
        $formulacion1 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca1)
        ->get();  

        $formulacion2 = formulacionestrategias::select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca2)
        ->get();  

        $formulacion3 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca3)
        ->get();  

        $formulacionPosiciones1 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca1)
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
        ->max('pocision');

        
        $formulacionFinal1=[];
        for ($i=0; $i < $formulacionPosiciones1 ; $i++) {     
            $formulacionProceso1=[];
            for ($x=0; $x < count($formulacion1) ; $x++) { 
                    if($i+1 == $formulacion1[$x]->pocision){
                    array_push($formulacionProceso1,$formulacion1[$x]);
                    }
            }
            array_push($formulacionFinal1,$formulacionProceso1);
            //de aca solo se llama a la formulacionFinal
        }
        
        $formulacionPosiciones2 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca2)
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
        ->max('pocision');

        $formulacionFinal2=[];
        for ($i=0; $i < $formulacionPosiciones2 ; $i++) {     
            $formulacionProceso2=[];
            for ($x=0; $x < count($formulacion2) ; $x++) { 
                    if($i+1 == $formulacion2[$x]->pocision){
                    array_push($formulacionProceso2,$formulacion2[$x]);
                    }
            }
            array_push($formulacionFinal2,$formulacionProceso2);
            //de aca solo se llama a la formulacionFinal
        } 

        $formulacionPosiciones3 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca3)
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
        ->max('pocision');
        $formulacionFinal3=[];
        
        for ($i=0; $i < $formulacionPosiciones3 ; $i++) {     
            $formulacionProceso3=[];
            for ($x=0; $x < count($formulacion3) ; $x++) { 
                    if($i+1 == $formulacion3[$x]->pocision){
                    array_push($formulacionProceso3,$formulacion3[$x]);
                    }
            }
            array_push($formulacionFinal3,$formulacionProceso3);
            //de aca solo se llama a la formulacionFinal
        }
        
        toastr()->success('Datos registrados correctamente');

        return view('Modulo3.tercero3-2')->with($id_Planeacion,'id_Planeacion')->with($formulacionFinal1,'formulacionFinal1')->with($formulacionFinal2,'formulacionFinal2')->with($formulacionFinal3,'formulacionFinal3');
    } 

    
    public function Final1(Request $request){
        $id = $request->id;
       
        $ca1=['largo'];
        $ca2=['mediano'];
        $ca3=['corto'];
        $ca4=['noaplica']; 
        
        $formulacion1 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca1)
        ->get();  

       
        // $formulacionPosiciones1 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
        // ->where('resumenestrategias2.calificacion',$ca1)
        // ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        // ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
        // ->max('pocision');

        $formulacionPosiciones1 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca1)
        ->max('pocision');

       // dd($formulacionPosiciones1);

        $formulacionFinal1=[];
        for ($i=0; $i < $formulacionPosiciones1 ; $i++) {     
            $formulacionProceso1=[];
            for ($x=0; $x < count($formulacion1) ; $x++) { 
                    if($i+1 == $formulacion1[$x]->pocision){
                    array_push($formulacionProceso1,$formulacion1[$x]);
                    }
            }
            array_push($formulacionFinal1,$formulacionProceso1);
            //de aca solo se llama a la formulacionFinal
        }

        return response()->json($formulacionFinal1);
      }
    
    public function Final2(Request $request){
        $id = $request->id;
       
        $ca1=['largo'];
        $ca2=['mediano'];
        $ca3=['corto'];
        $ca4=['noaplica']; 
        
        $formulacion2 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca2)
        ->get();  
       
        $formulacionPosiciones2 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca2)
        ->max('pocision');

        // $formulacionPosiciones2 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
        // // ->where('resumenestrategias2.calificacion',$ca3)
        // ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
        // ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        // ->join('resumenestrategias2','formulacionestrategias.id_respustaverbos','=','resumenestrategias2.id_respustaverbos')
       

       
        // ->get();  
        
       

        $formulacionFinal2=[];
        for ($i=0; $i < $formulacionPosiciones2 ; $i++) {     
            $formulacionProceso2=[];
            for ($x=0; $x < count($formulacion2) ; $x++) { 
                    if($i+1 == $formulacion2[$x]->pocision){
                    array_push($formulacionProceso2,$formulacion2[$x]);
                    }
            }
            array_push($formulacionFinal2,$formulacionProceso2);
            //de aca solo se llama a la formulacionFinal
        }
        //dd($formulacionFinal2);
        return response()->json($formulacionFinal2);
    }    


    
    public function Final3(Request $request){
        $id = $request->id;
      
        $ca1=['largo'];
        $ca2=['mediano'];
        $ca3=['corto'];
        $ca4=['noaplica']; 
        
        $formulacion3 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca3)
        ->get();  

       
        $formulacionPosiciones3 = DB::table('formulacionestrategias')
        ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*')
        ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
        ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        ->where('formulacionestrategias.id_Planeacion',$id)
        ->where('resumenestrategias2.calificacion',$ca3)
        ->max('pocision');

        // $formulacionPosiciones3 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
        // ->where('resumenestrategias2.calificacion',$ca3)
        // ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
        // ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
        // ->max('pocision');
     

        $formulacionFinal3=[];
        for ($i=0; $i < $formulacionPosiciones3 ; $i++) {     
            $formulacionProceso3=[];
            for ($x=0; $x < count($formulacion3) ; $x++) { 
                    if($i+1 == $formulacion3[$x]->pocision){
                    array_push($formulacionProceso3,$formulacion3[$x]);
                    }
            }
            array_push($formulacionFinal3,$formulacionProceso3);
            //de aca solo se llama a la formulacionFinal
        }
        
        return response()->json($formulacionFinal3);
    }    
    

    public function finalGuardar(Request $request){
         
        
        //largo plazo
        $id_Planeacion = $request->get('id_Planeacion'); 
        $id_formulacionEstrategias = $request->get('id_formulacionEstrategias'); 
       
        $accion = $request->get('accion');
        $presupuesto = $request->get('presupuesto');
        $tiempo = $request->get('tiempo');
        $responsable = $request->get('responsable');
        // dd($request);

        for($i = 0; $i<count($id_formulacionEstrategias) ; $i ++){
            
            if(($accion[$i]=="" && $accion[$i]==null) OR ($presupuesto[$i]=="" && $presupuesto[$i]==null) OR ($tiempo[$i]=="" && $tiempo[$i]==null) OR ($responsable[$i]=="" && $responsable[$i]==null)){
                               
                return view('Modulo3.tercero3-2')->with($id_Planeacion,'id_Planeacion');
                // ->with($formulacionFinal1,'formulacionFinal1')->with($formulacionFinal2,'formulacionFinal2')->with($formulacionFinal3,'formulacionFinal3');
            }else{

                        guardarEstrategias::updateOrCreate(
                        [   
                            'id_Planeacion'=> $id_Planeacion[$i],
                            'id_formulacionEstrategias' =>$id_formulacionEstrategias[$i],
                            'accion'=>$accion[$i],
                            'presupuesto'=> $presupuesto[$i],
                            'tiempo' =>$tiempo[$i],
                            'responsable'=>$responsable[$i],
                        ],
                        [  
                            'id_Planeacion'=> $id_Planeacion[$i],
                            'id_formulacionEstrategias' =>$id_formulacionEstrategias[$i],
                            'accion'=>$accion[$i],
                            'presupuesto'=> $presupuesto[$i],
                            'tiempo' =>$tiempo[$i],
                            'responsable'=>$responsable[$i],
                        ]);
             }
                                
        }



        $id = $request->get('id'); 
                
        toastr()->success('Datos registrados correctamente');

        return view('Modulo3.ObjetivosResumen')->with('id',$id);
        // ->with($id_Planeacion,'id_Planeacion')->with($formulacionFinal1,'formulacionFinal1')->with($formulacionFinal2,'formulacionFinal2')->with($formulacionFinal3,'formulacionFinal3');
        }
    
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //-----------------------------------------ObjetivosResumen-----------------------------------------------------------------------------
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public function estrategiasFinal1(Request $request){
            $id = $request->id;
           
            $ca1=['largo'];
            $ca2=['mediano'];
            $ca3=['corto'];
            $ca4=['noaplica']; 
            
            $formulacion1 = DB::table('formulacionestrategias')
            ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*','guardarestrategias.*')
            ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
            ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
            ->join('guardarestrategias','guardarestrategias.id_formulacionEstrategias','=','formulacionestrategias.id_formulacionEstrategias')
            ->where('formulacionestrategias.id_Planeacion',$id)
            ->where('resumenestrategias2.calificacion',$ca1)
            ->get();  
            
          
            $formulacionPosiciones1 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
            ->where('resumenestrategias2.calificacion',$ca1)
            ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
            ->join('guardarestrategias','guardarestrategias.id_formulacionEstrategias','=','formulacionestrategias.id_formulacionEstrategias')
            ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
            ->max('pocision');
    
            $formulacionFinal1=[];
            for ($i=0; $i < $formulacionPosiciones1 ; $i++) {     
                $formulacionProceso1=[];
                for ($x=0; $x < count($formulacion1) ; $x++) { 
                        if($i+1 == $formulacion1[$x]->pocision){
                        array_push($formulacionProceso1,$formulacion1[$x]);
                        }
                }
                array_push($formulacionFinal1,$formulacionProceso1);
                //de aca solo se llama a la formulacionFinal
            }
    
            return response()->json($formulacionFinal1);
          }
        
        public function estrategiasFinal2(Request $request){
            $id = $request->id;
           
            $ca1=['largo'];
            $ca2=['mediano'];
            $ca3=['corto'];
            $ca4=['noaplica']; 
            
            $formulacion2 = DB::table('formulacionestrategias')
            ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*','guardarestrategias.*')
            ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
            ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
            ->join('guardarestrategias','guardarestrategias.id_formulacionEstrategias','=','formulacionestrategias.id_formulacionEstrategias')
            ->where('formulacionestrategias.id_Planeacion',$id)
            ->where('resumenestrategias2.calificacion',$ca2)
            ->get();  
            
          
            $formulacionPosiciones2 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
            ->where('resumenestrategias2.calificacion',$ca2)
            ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
            ->join('guardarestrategias','guardarestrategias.id_formulacionEstrategias','=','formulacionestrategias.id_formulacionEstrategias')
            ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
            ->max('pocision');
    
            $formulacionFinal2=[];
            for ($i=0; $i < $formulacionPosiciones2 ; $i++) {     
                $formulacionProceso2=[];
                for ($x=0; $x < count($formulacion2) ; $x++) { 
                        if($i+1 == $formulacion2[$x]->pocision){
                        array_push($formulacionProceso2,$formulacion2[$x]);
                        }
                }
                array_push($formulacionFinal2,$formulacionProceso2);
                //de aca solo se llama a la formulacionFinal
            }
    
            return response()->json($formulacionFinal2);
        }    
    
        public function estrategiasFinal3(Request $request){
            $id = $request->id;
           
            $ca1=['largo'];
            $ca2=['mediano'];
            $ca3=['corto'];
            $ca4=['noaplica']; 
            
            $formulacion3 = DB::table('formulacionestrategias')
            ->select('formulacionestrategias.*','respustaverbos.*','resumenestrategias2.*','guardarestrategias.*')
            ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
            ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
            ->join('guardarestrategias','guardarestrategias.id_formulacionEstrategias','=','formulacionestrategias.id_formulacionEstrategias')
            ->where('formulacionestrategias.id_Planeacion',$id)
            ->where('resumenestrategias2.calificacion',$ca3)
            ->get();  
            
            $formulacionPosiciones3 =formulacionestrategias::where('planeacion.id_Planeacion',$id)
            ->where('resumenestrategias2.calificacion',$ca3)
            ->join('resumenestrategias2','resumenestrategias2.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
            ->join('guardarestrategias','guardarestrategias.id_formulacionEstrategias','=','formulacionestrategias.id_formulacionEstrategias')
            ->join('planeacion', 'planeacion.id_Planeacion', '=','resumenestrategias2.id_Planeacion')
            ->max('pocision');
    
            $formulacionFinal3=[];
            for ($i=0; $i < $formulacionPosiciones3 ; $i++) {     
                $formulacionProceso3=[];
                for ($x=0; $x < count($formulacion3) ; $x++) { 
                        if($i+1 == $formulacion3[$x]->pocision){
                        array_push($formulacionProceso3,$formulacion3[$x]);
                        }
                }
                array_push($formulacionFinal3,$formulacionProceso3);
                //de aca solo se llama a la formulacionFinal
            }
    
            return response()->json($formulacionFinal3);
        }    




}    

