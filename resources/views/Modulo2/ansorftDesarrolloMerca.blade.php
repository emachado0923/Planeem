
@extends('layouts.nav2')

@section('content')
    <header>
        @yield('js')
        @section('f')
            <a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
        @endsection
        @include('modal/modal')
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </header>
    <style>
        .enunciado{
            width: 65%;
        }
        .radio {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* hide the browser's default radio button */
        .radio input {
            right: 94%;
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* create custom radio */
        .radio .check {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
        }

        /* on mouse-over, add border color */
        .radio:hover input ~ .check {
            border: 2px solid #FC7323;
        }

        /* add background color when the radio is checked */
        .radio input:checked ~ .check {
            background-color: #FC7323;
            border:none;
        }

        /* create the radio and hide when not checked */
        .radio .check:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* show the radio when checked */
        .radio input:checked ~ .check:after {
            display: block;
        }

    </style>


    <form id="form" action="{{ route('MatrizStore')}}" method="POST" role="form">
        @csrf
        <section class="contenedorper5">
            <div id="regiration_form">
                <fieldset class="opciones">
                    <table class="table">
                        {{-- <h2 class="tituloCuadrante"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"></i>Cuadrante 1: Penetración y/o profundización de mercado</h2> --}}
                        <thead>
                        <tr class="first-row">
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 1: Penetración y/o profundización de mercado</h6></th>
                            <th scope="col" class="text-center rotate">Nunca</th>
                            <th scope="col" class="text-center rotate">Raramente</th>
                            <th scope="col" class="text-center rotate">Ocasionalmente</th>
                            <th scope="col" class="text-center rotate">Frecuentemente</th>
                            <th scope="col" class="text-center rotate">Muy Frecuentemente</th>
                        </tr>
                        <tr>
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="enunciado">Enunciado</th>
                            <th scope="col" class="text-center" style="border: none;">1</th>
                            <th scope="col" class="text-center" style="border: none;">2</th>
                            <th scope="col" class="text-center" style="border: none;">3</th>
                            <th scope="col" class="text-center" style="border: none;">4</th>
                            <th scope="col" class="text-center" style="border: none;">5</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tipo_Matriz1 as $tipo_Matriz1)
                            <tr id = 'tipo_Matriz1{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}' class="tipo_Matriz1">
                                <th scope="row" style="border: none;"></th>
                                <td style="width: 49%;"><input type="text" value="{{ $tipo_Matriz1->Matriz }}" class="form-control"></td>

                                <input type="hidden" class="id_planecion" name="id_planecion" value="{{$plane}}">
                                <input type="hidden"    name="tipo[]"  value="{{ $tipo_Matriz1->tipo }}" class="form-control">
                                <input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}" class="form-control">




                                <td>
                                    <input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}">

                                    <label class="radio">
                                        <input type="radio"    id="Nunca-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}" value="1"    >
                                        <span class="check" style="left: 23%;" for="Nunca-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio"   id="Raramente-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}" class="respuesta1"  value="2"  >
                                        <span class="check" style="left: 23%;" for="Raramente-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio"   id="Ocasionalmente-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}" class="respuesta2"   value="3" >
                                        <span class="check" style="left: 23%;" for="Ocasionalmente-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio"   id="Frecuentemente-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}" class="respuesta3" value="4" >
                                        <span class="check" style="left: 23%;" for="Frecuentemente-{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio"    class="respuesta4" value="5" >
                                        <span class="check" style="left: 23%;" for="{{$tipo_Matriz1->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach


                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <td class="rotateValor" style="padding-top: 0.rem;padding-bottom: 1rem;">Valor total</td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" id="tolNunca1" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" id="tolRaramete1" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" id="tolOcasionalmente1"  class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" id="tolFrecuentemente1"  class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" id="MuyFrecuentemente1" class="form-control" style="text-align: center;height: 13%;"></td>
                        </tr>
                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <td><input type="text" value="34" class="form-control" style="width: 204%;text-align: center;"></td>
                        </tr>
                        </tbody>
                    </table>


                    <button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>

                </fieldset>
                <fieldset class="opciones">
                    <table class="table">
                        <thead>
                        <tr class="first-row">
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 2: Estrategias de desarrollo de nuevos mercados</h6></th>
                            <th scope="col" class="text-center rotate">Nunca</th>
                            <th scope="col" class="text-center rotate">Raramente</th>
                            <th scope="col" class="text-center rotate">Ocasionalmente</th>
                            <th scope="col" class="text-center rotate">Frecuentemente</th>
                            <th scope="col" class="text-center rotate">Muy Frecuentemente</th>
                        </tr>
                        <tr>
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="enunciado">Enunciado</th>
                            <th scope="col" class="text-center" style="border: none;">1</th>
                            <th scope="col" class="text-center" style="border: none;">2</th>
                            <th scope="col" class="text-center" style="border: none;">3</th>
                            <th scope="col" class="text-center" style="border: none;">4</th>
                            <th scope="col" class="text-center" style="border: none;">5</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($tipo_Matriz2 as $tipo_Matriz2)
                            <tr>
                                <th scope="row" style="border: none;"></th>
                                <td style="width: 49%;"><input type="text" value="{{ $tipo_Matriz2->Matriz }}" class="form-control"></td>

                                <input type="hidden"      name="tipo[]"  value="{{ $tipo_Matriz2->tipo }}" class="form-control">

                                <input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" class="form-control">




                                <td>
                                    <input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}">

                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" class="respuesta" id="Nunca-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"  value="1">
                                        <span class="check" style="left: 23%;" for="Nunca-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" class="respuesta"   id="Raramente-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" value="2" >
                                        <span class="check" style="left: 23%;" for="Raramente-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" class="respuesta"  id="Ocasionalmente-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" value="3" >
                                        <span class="check" style="left: 23%;" for="Ocasionalmente-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" class="respuesta"   id="Frecuentemente-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"  value="4">
                                        <span class="check" style="left: 23%;" for="Frecuentemente-{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}" class="respuesta"  id="mFrecuentemente{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"  value="5">
                                        <span class="check" style="left: 23%;" for="{{$tipo_Matriz2->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <td class="rotateValor" style="padding-top: 0.rem;padding-bottom: 1rem;">Valor total</td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="1" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="2" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="3" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="4" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="5" class="form-control" style="text-align: center;height: 13%;"></td>
                        </tr>
                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <td><input type="text" value="34" class="form-control" style="width: 204%;text-align: center;"></td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
                    <button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
                </fieldset>
                <fieldset class="opciones">
                    <table class="table">
                        <thead>
                        <tr class="first-row">
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 3: Estrategia de desarrollo de nuevos productos</h6></th>
                            <th scope="col" class="text-center rotate">Nunca</th>
                            <th scope="col" class="text-center rotate">Raramente</th>
                            <th scope="col" class="text-center rotate">Ocasionalmente</th>
                            <th scope="col" class="text-center rotate">Frecuentemente</th>
                            <th scope="col" class="text-center rotate">Muy Frecuentemente</th>
                        </tr>
                        <tr>
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="enunciado">Enunciado</th>
                            <th scope="col" class="text-center" style="border: none;">1</th>
                            <th scope="col" class="text-center" style="border: none;">2</th>
                            <th scope="col" class="text-center" style="border: none;">3</th>
                            <th scope="col" class="text-center" style="border: none;">4</th>
                            <th scope="col" class="text-center" style="border: none;">5</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tipo_Matriz3 as $tipo_Matriz3)
                            <tr>
                                <th scope="row" style="border: none;"></th>
                                <td style="width: 49%;"><input type="text" value="{{$tipo_Matriz3->Matriz }}" class="form-control"></td>

                                <input type="hidden"      name="tipo[]"  value="{{$tipo_Matriz3->tipo }}" class="form-control">
                                <input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}" class="form-control">


                                <td>
                                    <input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}">

                                    <input class="radio" type="radio" name="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"  value="aAlta"  id="Nunca-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}" >
                                    <span class="check" style="left: 23%;" for="Nunca-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"></span>
                                </td>
                                <td>

                                    <input  class="radio" type="radio" name="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"   value="2"  id="Raramente-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}" >
                                    <span class="check" style="left: 23%;" for="Raramente-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"></span>
                                </td>
                                <td>
                                    <input  class="radio" type="radio" name="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"    value="3" id="Ocasionalmente-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}" >
                                    <span class="check" style="left: 23%;" for="Ocasionalmente-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"></span>

                                </td>
                                <td>

                                    <input class="radio" type="radio" name="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"   value="4"  id="Frecuentemente-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}" >
                                    <span class="check" style="left: 23%;" for="Frecuentemente-{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"></span>

                                </td>
                                <td>

                                    <input class="radio" type="radio" name="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"  value="5"  id="mFrecuentemente{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}" >
                                    <span class="check" style="left: 23%;" for="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"></span>

                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <td class="rotateValor" style="padding-top: 0.rem;padding-bottom: 1rem;">Valor total</td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="1" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="2" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="3" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="4" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="5" class="form-control" style="text-align: center;height: 13%;"></td>
                        </tr>
                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <td><input type="text" value="34" class="form-control" style="width: 204%;text-align: center;"></td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
                    <button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
                </fieldset>
                <fieldset class="opciones">
                    <table class="table">
                        <thead>
                        <tr class="first-row">
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 4: Estrategia de diversificación</h6></th>
                            <th scope="col" class="text-center rotate">Nunca</th>
                            <th scope="col" class="text-center rotate">Raramente</th>
                            <th scope="col" class="text-center rotate">Ocasionalmente</th>
                            <th scope="col" class="text-center rotate">Frecuentemente</th>
                            <th scope="col" class="text-center rotate">Muy Frecuentemente</th>
                        </tr>
                        <tr>
                            <th scope="col" style="border: none;"></th>
                            <th scope="col" class="enunciado">Enunciado</th>
                            <th scope="col" class="text-center" style="border: none;">1</th>
                            <th scope="col" class="text-center" style="border: none;">2</th>
                            <th scope="col" class="text-center" style="border: none;">3</th>
                            <th scope="col" class="text-center" style="border: none;">4</th>
                            <th scope="col" class="text-center" style="border: none;">5</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tipo_Matriz4 as $tipo_Matriz4)
                            <tr>
                                <th scope="row" style="border: none;"></th>
                                <td style="width: 49%;"><input type="text" value="{{ $tipo_Matriz4->Matriz }}" class="form-control"></td>
                                <input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}">
                                <input type="hidden"      name="tipo[]"  value="{{$tipo_Matriz4->tipo }}" class="form-control">
                                <input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}" class="form-control">


                                <td>
                                    <input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}">

                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}" value="1"  id="Nunca-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}" >
                                        <span class="check" style="left: 23%;" for="Nunca-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"   value="2" id="Raramente-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}" >
                                        <span class="check" style="left: 23%;" for="Raramente-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"  value="3"  id="Ocasionalmente-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}" >
                                        <span class="check" style="left: 23%;" for="Ocasionalmente-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"  value="4"   id="Frecuentemente-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}" >
                                        <span class="check" style="left: 23%;" for="Frecuentemente-{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"  value="5"  id="mFrecuentemente{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}" >
                                        <span class="check" style="left: 23%;" for="{{$tipo_Matriz4->id_tipo_Matriz_crecimiento}}"></span>
                                    </label>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <td class="rotateValor" style="padding-top: 0.rem;padding-bottom: 1rem;">Valor total</td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="1" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="2" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="3" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="4" class="form-control" style="text-align: center;height: 13%;"></td>
                            <td style="padding-top: 0.7rem;padding-bottom: 1rem;"><input type="text" value="5" class="form-control" style="text-align: center;height: 13%;"></td>
                        </tr>
                        <tr>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <th scope="row" style="border: none;"></th>
                            <td><input type="text" value="34" class="form-control" style="width: 204%;text-align: center;"></td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
                    <button type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
                </fieldset>
    </form>
    <div class="infon">
        <a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
				<h5>Agregar</h5></div></span>
        </a>
        <a id="boton2" class="button2" data-toggle="modal" data-target="#exampleModal001"><span class="icon-info "></span>
        </a>
    </div>
    </div>
    </section>

    {{-- aca va el contenido de los modales pequeños --}}
    <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
                    <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

                </div>
                <div class="modal-body">
                    <ol style="line-height: 17px; margin-top: -19px;">
                        <b style="color: black; font-weight: bold;">El procedimiento consiste en los siguientes pasos:</b>
                        <br>
                        <li>1. Se obtiene información de las empresas competidoras que serán incluidas en la MPC.</li><br>
                        <li>2. Se enlistan los aspectos o factores a considerar, que bien pueden ser elementos fuertes o débiles, según sea el caso,
                            de cada empresa u organización analizada</li>.<br>
                        <li>3. Se asigna un peso a cada uno de estos factores.</li><br>
                        <li>4. A cada una de las organizaciones enlistadas en la tabla se le asigna una calificación, siendo los valores de las<br>
                            calificaciones los siguientes:
                            <ol width="100%" style="text-align: center">
                                <li>1= Debilidad principal</li><br>
                                <li>2= Debilidad Menor</li><br>
                                <li>3= Fortaleza menor</li><br>
                                <li>4= Fortaleza mayor</li><br>
                            </ol>
                        </li><br>

                        <b>

                        </b>
                        <li>5. Se multiplica el peso de la segunda columna por cada una de las calificaciones de las organizaciones o empresas
                            competidoras, obteniéndose el peso ponderado correspondiente.</li><br>
                        <li>6. Se suman los totales de la columna del peso (debe ser de 1.00) y de las columnas de los pesos ponderados
                            (Ponce, 2007, pág. 120).</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </section>
    @yield('script')
    <script></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <script>
        function guardar(){
            if (document.getElementById('Para_paso1').value == 0) {
                document.getElementById("id").innerHTML = "error";
            }else{
                var miDato = document.getElementById('Para_paso1').value;
                localStorage.setItem('Para',miDato);
                localStorage.setItem('Progreso','10%');
            }
        };
    </script>



    <script>
        var Progreso = localStorage.getItem('Progreso')
        document.getElementById("id").style.width=Progreso;
        document.getElementById("id").innerHTML = Progreso;
    </script>

@endsection
@jquery
@toastr_js
@toastr_render
@push('script')

    <script src="{{asset('js/calculos_dinamicos.js')}}"></script>
    <script src=" {{asset('js/toastr.js')}}"></script>
    <script src="{{asset('js/solo_numeros.js')}}"></script>
    <script>

        $(document).ready(function () {
            $('.items li:nth-child(8)').addClass("acti");
            $('.items li').click(function () {
                $('.items li').removeClass("acti");
                $(this).addClass("acti");


            })

            $('.valores').mouseenter(function(){
                let mensaje = $(this).attr('mensaje');

                $('.hover').html(`<p>${mensaje}</p>`)
                $('.hover').show()

            })
            $('.valores').mouseleave(function(){

                $('.hover').hide()
            })
        })
    </script>

    {{-- <script>
        //tipo_Matriz1
    function tipo_Matriz1(index) {


    var Nunca = $("#tipo_Matriz1" + index + " .Nunca1").val();
    var Raramete = $("#tipo_Matriz1" + index + " .Raramete1").val();
    var Ocasionalmente = $("#tipo_Matriz1" + index + " .Ocasionalmente1").val();
    var Frecuentemente = $("#tipo_Matriz1" + index + " .Frecuentemente1").val();
    var MuyFrecuentemente = $("#tipo_Matriz1" + index + " .MuyFrecuentemente1").val();



    var tot = ($("#tipo_Matriz1" + index + " .Nunca1").val()) + $("#tipo_Matriz1" + index + " .Raramete1").val() + $("#tipo_Matriz1" + index + " .Ocasionalmente1").val()+$("#tipo_Matriz1" + index + " .Frecuentemente1").val() + $("#tipo_Matriz1" + index + " .Ocasionalmente1").val()+$("#tipo_Matriz1" + index + " .MuyFrecuentemente1").val();
    $("#tipo_Matriz1" + index + " .valor_totreq3").val(tot);

    tipo_Matriz1Total();
    }

    function tipo_Matriz1Total() {
    var tot = 0;
    var Nunca = 0;
    var Raramete = 0;
    var Ocasionalmente = 0;
    var Frecuentemente = 0;
    var MuyFrecuentemente = 0;



    $(".tipo_Matriz1 .Nunca1").each(function () {
        Nunca += Number($(this).val());
        console.log(Nunca)
    });


    $(".tipo_Matriz1 .Raramete1").each(function () {
        Raramete += Number($(this).val());
    });



    $(".tipo_Matriz1 .Ocasionalmente1").each(function () {
        Ocasionalmente += Number($(this).val());
    });


    $(".tipo_Matriz1 .Frecuentemente1").each(function () {
        Frecuentemente += Number($(this).val());
    });

    $(".tipo_Matriz1 .MuyFrecuentemente1").each(function () {
        MuyFrecuentemente += Number($(this).val());
    });



    $("#tolNunca1").val(Nunca);
    $("#tolRaramete1").val(Raramete);
    $("#tolOcasionalmente1").val(Ocasionalmente);
    $("#tolFrecuentemente1").val(Frecuentemente);
    $("#MuyFrecuentemente1").val(MuyFrecuentemente);






    // var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

    // var pesorpesoPonderado = parseFloat($("#granTotal3").val());

    // var suma = PuntuaciónPonderada + pesorpesoPonderado;


    // console.log(suma);


    // if (suma >= 4) {
    //     toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
    // } else {
    //     localStorage.getItem('PuntuaciónPonderada', suma)
    // }


    }

    </script> --}}
@endpush
