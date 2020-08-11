<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\misEstrategias;
use App\Model\estrategiasDiagnostico;
use App\Model\estrategiasDiagnosticoSeed;
use App\Model\EstrategiasDofa;
use App\Model\Proyectos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use App\Model\tipo_Matriz_crecimiento;
use App\Model\Matriz_crecimiento;
class MisEstrategiasController extends Controller
{
   

    public function estrategia0(Request $request){
      $id = $request->get('id_planecion');
      
      return view('Modulo2.estrategiainfo')->with(compact('id'));

    }  

    public function estrategias1(Request $request)
    {   $id = $request->get('id_planecion');
        $a = $request->get('a1');
        $b = $request->get('b1');
   

        $v1 = ['v1'];
        $v2 = ['v2'];
        $v3 = ['v3'];

        $calificacion1 = ['1'];
        $calificacion2 = ['2'];
        $calificacion3 = ['3'];


        if($a <= 3  && $b <= 2 || $a <= 1  && $b <= 3 || $a <= 2  && $b <= 3 ){
          
          $estrategia1= DB::table('estrategiasdiagnosticoSeed')
          ->select('id_estrategias','descripcion')
          ->whereIn('vista', $v1)
          ->whereIn('calificacion', $calificacion3)
          ->get();
          $estrategia2= "Estrategias de Crecer y Construir";  
          
          $estrategia3= "Estrategias de Crecer y Construir";

          $estrategia4= "Este cuadrante indica que la empresa posee una posición alta en el mercado lo que le exige garantizar su permanencia y crecimiento en el mismo. Para ello la empresa deberá tener una alta asignación de recursos físicos, financieros y humanos que facilite la capacidad de respuesta a sus clientes. ";

          return view('Modulo2.estrategiaDiagnostico')->with(compact('id','estrategia1','estrategia2','estrategia3','estrategia4'));
          
        }else if($a >= 2  && $b >= 3 || $a >= 3  && $b >= 3 || $a >= 3  && $b >= 2){
         
          $estrategia1= DB::table('estrategiasdiagnosticoSeed')
          ->select('id_estrategias','descripcion')
          ->whereIn('vista', $v1)
          ->whereIn('calificacion', $calificacion2)
          ->get();
          $estrategia2= "Estrategias de Cosechar y Desinvertir";

          $estrategia3= "Estrategias de Cosechar y Desinvertir";

          $estrategia4= "Este cuadrante indica una posición crítica en el mercado debido a que los productos o servicios se encuentran en declive, sin embargo, se pueden implementar diversas acciones encaminadas a realizar fusiones que permitan una sostenibilidad en el mercado o definitivamente poder desinvertir sin necesidad de perder dinero.";

          return view('Modulo2.estrategiaDiagnostico')->with(compact('id','estrategia1','estrategia2','estrategia3','estrategia4'));

          
        }else{

          $estrategia1= DB::table('estrategiasdiagnosticoSeed')
          ->select('id_estrategias','descripcion')
          ->whereIn('vista', $v1)
          ->whereIn('calificacion', $calificacion1)
          ->get();
          $estrategia2= "Estrategias de Retener y mantener";

          $estrategia3= "Estrategias de Retener y mantener";

          $estrategia4= "Este cuadrante indica que la empresa está situada en un segmento de mercado con un atractivo adecuado lo que le exige invertir suficientes fondos para mantener o superar la posición, se sugieren estrategias enfocadas en mantener y fidelizar a sus clientes ";

          return view('Modulo2.estrategiaDiagnostico')->with(compact('id','estrategia1','estrategia2','estrategia3','estrategia4'));

        }
      }

     
      


    public function estrategias2(Request $request){
        $id = $request->get('id_planecion');
      
        $typeA = ['aAlta', 'aMedia', 'aBaja'];
        $typeO = ['oAlta', 'oMedia', 'oBaja'];
       
        $amenaza= DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();
       
        $oportunidad=DB::table('respuesta_analisis')
        ->select('analisis.nombre','respuesta_analisis.id')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();

        $typeF = ['fAlta', 'fMedia', 'fBaja'];
        $typeD = ['dAlta', 'dMedia', 'dBaja'];

        $fortaleza= DB::table('respuesta_capacidad')
        ->select('capacidads.nombre','respuesta_capacidad.id')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id)
        ->get();

        $debilidad= DB::table('respuesta_capacidad')
        ->select('capacidads.nombre','respuesta_capacidad.id')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id)
        ->get();
        
      return view('Modulo2.estrategiasOfensivas')->with(compact('id','amenaza','oportunidad','fortaleza','debilidad'));      
      } 

      public function estrategias3(Request $request){
            
            $id_Planeacion = $request->get('id_planecion');
            $FO = ['FO'];
            $FA = ['FA'];
            $DO = ['DO'];
            $DA = ['DA'];
      
            $estrategiasFO= DB::table('estrategias_ofensivas')
            ->select('capacidads.nombre as nombre','analisis.nombre as R','id_Estrategias_Ofensivas','tipo','planeacion.id_Planeacion') 
            ->join('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->join('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->join('analisis', 'analisis.id', 'respuesta_analisis.id')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','planeacion.id_Planeacion','=','estrategias_ofensivas.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $FO)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->get();
            $estrategiasFA= DB::table('estrategias_ofensivas')
            ->select('capacidads.nombre as nombre','analisis.nombre as R','id_Estrategias_Ofensivas','tipo','planeacion.id_Planeacion') 
            ->join('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->join('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->join('analisis', 'analisis.id', 'respuesta_analisis.id')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','planeacion.id_Planeacion','=','estrategias_ofensivas.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $FA)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->get(); 
            
            $estrategiasDO= DB::table('estrategias_ofensivas')
            ->select('capacidads.nombre as nombre','analisis.nombre as R','id_Estrategias_Ofensivas','tipo','planeacion.id_Planeacion') 
            ->join('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->join('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->join('analisis', 'analisis.id', 'respuesta_analisis.id')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','planeacion.id_Planeacion','=','estrategias_ofensivas.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $DO)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->get(); 
            
            $estrategiasDA= DB::table('estrategias_ofensivas')
            ->select('capacidads.nombre as nombre','analisis.nombre as R','id_Estrategias_Ofensivas','tipo','planeacion.id_Planeacion') 
            ->join('respuesta_analisis', 'respuesta_analisis.id', '=','estrategias_ofensivas.id_respuesta_analisis')
            ->join('respuesta_capacidad', 'estrategias_ofensivas.id_respuesta_capacidad','=','respuesta_capacidad.id')
            ->join('analisis', 'analisis.id', 'respuesta_analisis.id')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion','planeacion.id_Planeacion','=','estrategias_ofensivas.id_Planeacion')
            ->whereIn('estrategias_ofensivas.tipo', $DA)
            ->where('estrategias_ofensivas.id_Planeacion', $id_Planeacion)
            ->get();     
        
        
        
            toastr()->success('Datos registrados correctamente');
            return view('Modulo2.estrategiasDofa')->with(compact('estrategiasFO','estrategiasFA','estrategiasDA','estrategiasDO','id_Planeacion'));


        }

      public function estrategias4(Request $request){
        
        
      
        $id_Estrategias_Ofensivas1 = $request->get('id_Estrategias_Ofensivas1'); 
        // $id_Estrategias_Ofensivas = $request->get('id_Estrategias_Ofensivas'); 
        $id_Planeacion = $request->get('id_Planeacion');
        $descripcion = $request->get('descripcion');


        //  


        for ($i=0; $i < count($id_Estrategias_Ofensivas1) ; $i++) { 

          
          EstrategiasDofa::updateOrCreate(

            [   
                'id_Planeacion'=> $id_Planeacion[$i],
                'id_Estrategias_Ofensivas'=>$request->get($id_Estrategias_Ofensivas1[$i]),
                'descripcion' =>$descripcion[$i],
              
            ],
            [  
               'id_Planeacion'=> $id_Planeacion[$i],
                'id_Estrategias_Ofensivas'=>$request->get($id_Estrategias_Ofensivas1[$i]),
                'descripcion' =>$descripcion[$i],
            ]);
        
  
       
        }
    



 
      
        
        $tipo_Matriz2 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',4)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();



        $tipo_Matriz3 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        $tipo_Matriz4 =  Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',4)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        $Planeacion = $request->get('id_Planeacion');


        
        $tipo_Matriz1_tipo5 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',5)
         ->where('tipo_matriz_crecimiento.tipo',"1")
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        
        if($tipo_Matriz1_tipo5 == null || $tipo_Matriz1_tipo5 == ""){
          $tipo_Matriz1_tipo5=null;
        }



    

        $tipo_Matriz1_tipo4 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',4)
        ->where('tipo_matriz_crecimiento.tipo',1)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();




        if($tipo_Matriz1_tipo4 == null || $tipo_Matriz1_tipo4 == ""){
          $tipo_Matriz1_tipo4=null;
        }



        $tipo_Matriz1_tipo3 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',3)
        ->where('tipo_matriz_crecimiento.tipo',1)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();


        if($tipo_Matriz1_tipo3 == null || $tipo_Matriz1_tipo3 == ""){
          $tipo_Matriz1_tipo3=null;
        }

        $tipo_Matriz1_tipo2 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',2)
        ->where('tipo_matriz_crecimiento.tipo',1)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();



        if($tipo_Matriz1_tipo2 == null || $tipo_Matriz1_tipo2 == ""){
          $tipo_Matriz1_tipo2=null;
        }

        $tipo_Matriz2_tipo5 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',5)
        ->where('tipo_matriz_crecimiento.tipo',2)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz2_tipo5 == null || $tipo_Matriz2_tipo5 == ""){
          $tipo_Matriz2_tipo5=null;
        }




        $tipo_Matriz2_tipo4 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',4)
        ->where('tipo_matriz_crecimiento.tipo',2)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz2_tipo4 == null || $tipo_Matriz2_tipo4 == ""){
          $tipo_Matriz2_tipo4=null;
        }

        


        $tipo_Matriz2_tipo3 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',3)
        ->where('tipo_matriz_crecimiento.tipo',2)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();


        if($tipo_Matriz2_tipo3 == null || $tipo_Matriz2_tipo3 == ""){
          $tipo_Matriz2_tipo3=null;
        }

        $tipo_Matriz2_tipo2 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',2)
        ->where('tipo_matriz_crecimiento.tipo',2)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz2_tipo2 == null || $tipo_Matriz2_tipo2 == ""){
          $tipo_Matriz2_tipo2=null;
        }



        $tipo_Matriz3_tipo5 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',5)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz3_tipo5 == null || $tipo_Matriz3_tipo5 == ""){
          $tipo_Matriz3_tipo5=null;
        }


        $tipo_Matriz3_tipo4 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',4)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz3_tipo4 == null || $tipo_Matriz3_tipo4 == ""){
          $tipo_Matriz3_tipo4=null;
        }

        $tipo_Matriz3_tipo3 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',3)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();


        if($tipo_Matriz3_tipo3 == null || $tipo_Matriz3_tipo3 == ""){
          $tipo_Matriz3_tipo3=null;
        }

        $tipo_Matriz3_tipo2 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',2)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz3_tipo2 == null || $tipo_Matriz3_tipo2 == ""){
          $tipo_Matriz3_tipo2=null;
        }



        
        $tipo_Matriz4_tipo5 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',5)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz4_tipo5 == null || $tipo_Matriz4_tipo5 == ""){
          $tipo_Matriz4_tipo5=null;
        }


        $tipo_Matriz4_tipo4 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',4)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz4_tipo4 == null || $tipo_Matriz4_tipo4 == ""){
          $tipo_Matriz4_tipo4=null;
        }

        $tipo_Matriz4_tipo3 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',3)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();


        if($tipo_Matriz4_tipo3 == null || $tipo_Matriz4_tipo3 == ""){
          $tipo_Matriz4_tipo3=null;
        }

        $tipo_Matriz4_tipo2 = Matriz_crecimiento::select('matriz_crecimiento.*','tipo_matriz_crecimiento.Matriz')
        ->join('tipo_matriz_crecimiento', 'matriz_crecimiento.id_tipo_Matriz_crecimiento', '=', 'tipo_matriz_crecimiento.id')
        ->where('matriz_crecimiento.respuesta',2)
        ->where('tipo_matriz_crecimiento.tipo',3)
        ->where('matriz_crecimiento.id_Planeacion',$id_Planeacion)
        ->get();

        if($tipo_Matriz4_tipo2 == null || $tipo_Matriz4_tipo2 == ""){
          $tipo_Matriz4_tipo2=null;
        }



        toastr()->success('Datos registrados correctamente');

         return view('Modulo2.estrategiasCrecimiento')->with(compact('Planeacion','tipo_Matriz1_tipo5','tipo_Matriz1_tipo4','tipo_Matriz1_tipo3','tipo_Matriz1_tipo2','tipo_Matriz2_tipo5','tipo_Matriz2_tipo4','tipo_Matriz2_tipo3','tipo_Matriz2_tipo2',
         'tipo_Matriz3_tipo5','tipo_Matriz3_tipo4','tipo_Matriz3_tipo3','tipo_Matriz3_tipo2',
         'tipo_Matriz4_tipo5','tipo_Matriz4_tipo4','tipo_Matriz4_tipo3','tipo_Matriz4_tipo2'));           
         
      }
  }
