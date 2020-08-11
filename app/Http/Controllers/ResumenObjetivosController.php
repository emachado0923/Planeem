<?php
//Este Controlador es el que le va a tener
//las reglas del negocio del guardar del modulo 4
namespace App\Http\Controllers;
use App\Model\ResumenObjetivos;
use Illuminate\Http\Request;

class ResumenObjetivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buscar = trim($request->get('BuscarTexto'));

            $objetivos = DB::table('resumen_objetivos as o')
                ->join('respustaverbos as r', 'o.objetivos_v', '=', 'r.id_respustaverbos')
        
                ->select('o.*','r.id_respustaverbos', 'r.Objetivos')


                ->orderBy('o.objetivos_v', 'desc')
                ->paginate(7);

            return view('resumenObjetivos',compact('objetivos','buscar'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objetivos = DB::table('respustaverbos')->select('Objetivos' , 'id_respustaverbos')->get();

        return view('resumenObjetivos', compact('objetivos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $objetivosResumen = new ResumenObjetivos();

        $objetivosResumen->objetivos_v = $request->get('objetivos_v');
        $objetivosResumen->nombre_indicador = $request->get('nombre_indicador');
        $objetivosResumen->lo_que_se_va_a_medir = $request->get('lo_que_se_va_a_medir');
        $objetivosResumen->sobre_lo_que_se_va_a_medir = $request->get('lo_que_se_va_a_medir');

        $resumenObjetivos->save();
        return back()->with('Agregar','La estrategia se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


