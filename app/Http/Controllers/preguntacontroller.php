<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\comentarios;
class preguntacontroller extends Controller
{
    public function storage(Request $request){
            $Nombre = $request->get('Nombre');
            $Correo = $request->get('Correo');
            $Mensaje = $request->get('Mensaje');

            if( $Nombre == null || $Correo == null|| $Mensaje==null){


                return back()->withInput();
                toastr()->error('Todos los campos son obligatorios ');
            }else{

            


            comentarios::create(
                [
                    'Nombre'=>$Nombre,
                    'Correo'=>$Correo,
                    'Mensaje'=>$Mensaje,
                ]


            );
            return view('index');
           toastr()->success('Datos registrados correctamente');
        }
    }
}
