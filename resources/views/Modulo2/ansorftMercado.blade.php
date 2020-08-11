  
@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>

</header>
@jquery
@toastr_js
@toastr_render
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


<form id="form" action="{{ route('MatrizStore')}}" method="POST" role="form" >
	<input type="hidden"  id="id"    name="id_planeacion"  class="form-control">

@csrf
<section class="contenedorper5">
	<div id="regiration_form">
		<fieldset class="opciones">
			<table class="table">
				{{-- <h2 class="tituloCuadrante"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"></i>Cuadrante 1: Penetración y/o profundización de mercado</h2> --}}
				<thead>
					<tr class="first-row">
						<th scope="col" style="border: none;"></th>
						<th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#cuadrante1" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 1: Penetración y/o profundización de mercado</h6></th>
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
					@foreach ($tipo_Matriz1 as $poli)
					<tr class="formulario">
						<th scope="row" style="border: none;"></th>
						<td style="width: 49%;"><input type="text" value="{{ $poli->Matriz }}" class="form-control"></td>

						<input type="hidden"      name="tipo[]"  value="{{ $poli->tipo }}" class="form-control">

						<input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$poli->id}}" class="form-control">
	
						<td>
							<input type="hidden" id="gender" name="preguntas[]" value="{{ $poli->id}}">

							<label class="radio">
								<input type="radio" name="{{$poli->id}}" class="respuesta" id="Nunca-{{$poli->id}}" required  value="1">
								<span class="check" style="left: 23%;" for="Nunca-{{$poli->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$poli->id}}" class="respuesta"   id="Raramente-{{$poli->id}}" required value="2" >
								<span class="check" style="left: 23%;" for="Raramente-{{$poli->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$poli->id}}" class="respuesta"  id="Ocasionalmente-{{$poli->id}}" required value="3" >
								<span class="check" style="left: 23%;" for="Ocasionalmente-{{$poli->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$poli->id}}" class="respuesta"   id="Frecuentemente-{{$poli->id}}"  required value="4">
								<span class="check" style="left: 23%;" for="Frecuentemente-{{$poli->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$poli->id}}" class="respuesta"  id="mFrecuentemente{{$poli->id}}"  required value="5">
								<span class="check" style="left: 23%;" for="{{$poli->id}}"></span>
							</label>
						</td>
					</tr>
					@endforeach
					
					
					{{-- <tr>
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
					</tr> --}}
				</tbody>
			</table>


			<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>

		</fieldset>
		<fieldset class="opciones">
			<table class="table">
				<thead>
					<tr class="first-row">
						<th scope="col" style="border: none;"></th>
						<th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#cuadrante2" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 2: Estrategias de desarrollo de nuevos mercados</h6></th>
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
				
					@foreach ($tipo_Matriz2 as $direc)
					<tr class="formulario">
						<th scope="row" style="border: none;"></th>
						<td style="width: 49%;"><input type="text" value="{{ $direc->Matriz }}" class="form-control"></td>

						<input type="hidden"      name="tipo[]"  value="{{ $direc->tipo }}" class="form-control">

						<input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$direc->id}}" class="form-control">
	
						<td>
							<input type="hidden" id="gender" name="preguntas[]" value="{{$direc->id}}">

							<label class="radio">
								<input type="radio" name="{{$direc->id}}" class="respuesta" id="Nunca-{{$direc->id}}" required  value="1">
								<span class="check" style="left: 23%;" for="Nunca-{{$direc->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$direc->id}}" class="respuesta"   id="Raramente-{{$direc->id}}" required value="2" >
								<span class="check" style="left: 23%;" for="Raramente-{{$direc->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$direc->id}}" class="respuesta"  id="Ocasionalmente-{{$direc->id}}" required value="3" >
								<span class="check" style="left: 23%;" for="Ocasionalmente-{{$direc->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$direc->id}}" class="respuesta"   id="Frecuentemente-{{$direc->id}}" required  value="4">
								<span class="check" style="left: 23%;" for="Frecuentemente-{{$direc->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$direc->id}}" class="respuesta"  id="mFrecuentemente{{$direc->id}}"  required value="5">
								<span class="check" style="left: 23%;" for="{{$direc->id}}"></span>
							</label>
						</td>
					</tr>
					@endforeach																	
					{{-- <tr>
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
					</tr> --}}
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
						<th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#cuadrante3" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 3: Estrategia de desarrollo de nuevos productos</h6></th>
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
					<tr class="formulario">
						<th scope="row" style="border: none;"></th>
						<td style="width: 49%;"><input type="text" value="{{ $tipo_Matriz3->Matriz }}" class="form-control"></td>
						{{-- <input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz3->id_tipo_Matriz_crecimiento}}"> --}}
						<input type="hidden"      name="tipo[]"  value="{{$tipo_Matriz3->tipo }}" class="form-control">
						<input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$tipo_Matriz3->id}}" class="form-control">

								
						<td>
							<input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz3->id}}">

							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz3->id}}" value="1"  id="Nunca-{{$tipo_Matriz3->id}}"  required>
								<span class="check" style="left: 23%;" for="Nunca-{{$tipo_Matriz3->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz3->id}}"   value="2" id="Raramente-{{$tipo_Matriz3->id}}"  required>
								<span class="check" style="left: 23%;" for="Raramente-{{$tipo_Matriz3->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz3->id}}"  value="3"  id="Ocasionalmente-{{$tipo_Matriz3->id}}" required >
								<span class="check" style="left: 23%;" for="Ocasionalmente-{{$tipo_Matriz3->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz3->id}}"  value="4"   id="Frecuentemente-{{$tipo_Matriz3->id}}"  required>
								<span class="check" style="left: 23%;" for="Frecuentemente-{{$tipo_Matriz3->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz3->id}}"  value="5"  id="mFrecuentemente{{$tipo_Matriz3->id}}" required >
								<span class="check" style="left: 23%;" for="{{$tipo_Matriz3->id}}"></span>
							</label>
						</td>
					</tr>
					@endforeach
					
					{{-- <tr>
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
					</tr> --}}
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
						<th scope="col" class="text-center rotate"><h6 class="tituloCuadrante"><i data-toggle="modal" data-target="#cuadrante4" class="icon-info" style="margin-left: 0%;position: inherit;font-size: 1em;"></i>Cuadrante 4: Estrategia de diversificación</h6></th>
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
					<tr class="formulario">
						<th scope="row" style="border: none;"></th>
						<td style="width: 49%;"><input type="text" value="{{ $tipo_Matriz4->Matriz }}" class="form-control"></td>
						{{-- <input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz4->id}}"> --}}
						<input type="hidden"      name="tipo[]"  value="{{$tipo_Matriz4->tipo }}" class="form-control">
						<input type="hidden"    name="id_tipo_Matriz_crecimiento[]"  value="{{$tipo_Matriz4->id}}" class="form-control">
						<input type="hidden" id="gender" name="preguntas[]" value="{{$tipo_Matriz4->id}}">
								
						<td>

							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz4->id}}" value="1"  id="Nunca-{{$tipo_Matriz4->id}}"  required>
								<span class="check" style="left: 23%;" for="Nunca-{{$tipo_Matriz4->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz4->id}}"   value="2" id="Raramente-{{$tipo_Matriz4->id}}"  required>
								<span class="check" style="left: 23%;" for="Raramente-{{$tipo_Matriz4->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz4->id}}"  value="3"  id="Ocasionalmente-{{$tipo_Matriz4->id}}"  required>
								<span class="check" style="left: 23%;" for="Ocasionalmente-{{$tipo_Matriz4->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz4->id}}"  value="4"   id="Frecuentemente-{{$tipo_Matriz4->id}}" required>
								<span class="check" style="left: 23%;" for="Frecuentemente-{{$tipo_Matriz4->id}}"></span>
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="{{$tipo_Matriz4->id}}"  value="5"  id="mFrecuentemente{{$tipo_Matriz4->id}}"  required>
								<span class="check" style="left: 23%;" for="{{$tipo_Matriz4->id}}"></span>
							</label>
						</td>
					</tr>
					@endforeach
					
					{{-- <tr>
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
					</tr> --}}
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
		</fieldset>
	</form>

	<div class="modal fade" id="cuadrante1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 25px; margin-top: -19px;">
						<b style="color: black; font-weight: bold;">Penetración y/o profundización del Mercado:</b>
						<br><br>
						<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">
								
								Esta estrategia representa el punto de partida para cualquier negocio 
								y es el escenario donde las empresas cuentan con un mayor dominio y tienen un 
								menor riesgo a la hora de implementar sus planes de acción por lo que puede considerarse 
								como la alternativa de crecimiento menos riesgosa. El objetivo de este cuadrante es tratar
								de vender más a los mismos. Esta primera opción brinda la posibilidad de obtener una mayor 
								cuota de mercado trabajando con los productos actuales en los mercados que actualmente se opera. <br>
								Para ello se podrán realizar acciones que aumenten el consumo de los clientes (acciones de venta cruzada), 
								atraer clientes potenciales (publicidad, promoción) y atraer clientes de nuestra competencia
								(esfuerzos dirigidos a la prueba de nuestro producto, nuevos usos, mejora de imagen). <br>
								Esta opción estratégica es la que ofrece mayor seguridad y un menor margen de error, 
								ya que se opera con productos actuales, en mercados que actuales y conocidos.
							</p>
					
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="cuadrante2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 25px; margin-top: -19px;">
						<b style="color: black; font-weight: bold;">Estrategia de desarrollo de nuevos mercados.</b>
						<br><br>
						<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

								
								
								El Objetivo de este cuadrante es vender los mismos productos para nuevos clientes.<br> 
								Esta opción estratégica de la Matriz plantea que la empresa puede desarrollar nuevos mercados con sus productos actuales. <br>
								Para lograr llevar a cabo esta estrategia es necesario identificar nuevos mercados geográficos, nuevos segmentos de mercado y/o nuevos canales de distribución. <br>
							    Esto se puede lograr a través de la expansión regional, nacional, internacional, la venta por canal online o nuevos acuerdos con distribuidores, entre otros.
								
							</p>
					
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="cuadrante3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 25px; margin-top: -19px;">
						<b style="color: black; font-weight: bold;">Estrategia de desarrollo de nuevos productos.:</b>
						<br><br>
						<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

								
								
							El objetivo de este cuadrante busca vender algo nuevo a los mismos clientes, 
							En esta opción estratégica, la empresa desarrolla nuevos productos para los mercados en los que opera actualmente. <br>
							Los mercados están en continuo movimiento y por tanto en constante cambio, 
							es totalmente lógico que en determinadas ocasiones sea necesario el lanzamiento de nuevos productos,
							la modificación o actualización de productos para satisfacer nuevas necesidades generadas por dichos cambios.
							</p>
					
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="cuadrante4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 25px; margin-top: -19px;">
						<b style="color: black; font-weight: bold;">Estrategia de diversificación:</b>
						<br><br>
						<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

								
								
							El objetivo de este cuadrante es crear nuevos productos para nuevos clientes, 
							es necesario estudiar si existen oportunidades para desarrollar nuevos productos para nuevos mercados.<br>
							Esta estrategia es la última opción que debe escoger una empresa, ya que ofrece menor seguridad, puesto que cualquier empresa, 
							cuanto más se aleje de su conocimiento sobre los productos que comercializa y los mercados donde opera, tendrá un mayor riesgo. <br>
							En esta estrategia la empresa introduce nuevas actividades a las que ya realiza. <br>
							A diferencia de la expansión de mercado, aquí los nuevos productos/mercados obligan a la empresa a actuar en nuevos marcos de referencia. <br>
							Cambian los clientes, el producto, los procesos productivos, la tecnología, la competencia y los canales de distribución.
							</p>
					
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="r" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
	
				</div>
				<div class="modal-body">
					<ol style="line-height: 17px; margin-top: -19px;">
						<b style="color: black; font-weight: bold;">Desarrollo de la Matriz de Crecimiento:</b>
						<br>
						<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

						<br>En la Matriz de crecimiento se evalúa la cartera de productos en dos ejes: 
							Productos vs Mercados en relación con las variables nuevos o existentes para obtener 
							así 4 oportunidades de desarrollo así:
							<br><br>
							<ol>
								<li>1: Estrategia de penetración de mercados</li><br>
								<li>2: Estrategia de desarrollo de nuevos mercados</li><br>
								<li>3: Estrategia de desarrollo de nuevos productos</li><br>
								<li>4: Estrategia de diversificación.</li><br>
							</ol>
							
						</li>
						A continuación, encontrara una lista de variables para cada uno de los cuadrantes donde podrá marcar la casilla según le aplique a su empresa, la calificación va de 1 a 5 según la frecuencia de utilización de la estrategia donde 1 es Nunca, 2 es Raramente, 3 es Ocasionalmente, 4 es Frecuentemente y 5 es Muy frecuentemente.
						</p>
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="infon">
		<a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
			<h5>Agregar</h5></div></span>
		</a>
		<a id="boton2" class="button2" data-toggle="modal" data-target="#exampleModal001"><span class="icon-info "></span>
		</a>
	</div>
</div> --}}
</section>

{{-- aca va el contenido de los modales pequeños --}}
<span class="icon-info" data-toggle="modal" data-target="#r" style="cursor:pointer;"></span>

</section>
@yield('script')
<script></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 




@endsection

@push('script')
<script src=" {{asset('js/toastr.js')}}"></script>

{{-- <script type="text/javascript">
	function valida(f) {
	  var ok = true;
	  var msg = "Todos los capos son obligatorios ";


	  if(f.elements[0].value == "" || f.elements[0].value == null || f.elements[0].value == false)
	  {
		ok = false;
	  }
	
	
	  if(ok == false)
	  toastr.error(msg)

	  return ok;
	}
	</script> --}}


<script>
	$( document ).ready(function() {
		var id = localStorage.getItem('id');
		$.ajax({
			url:"/Matrizindex/"+id,
			type:'get',
			success:function(data){
				console.log(data);

				if(data != null){
					for(i of data){
						if(i.respuesta == 1){
							
							$('#Nunca-'+i.id).click('checked',true);
						}else if(i.respuesta == 2){
							$('#Raramente-'+i.id).prop('checked',true);
						}else if(i.respuesta == 3){
							$('#Ocasionalmente-'+i.id).prop('checked',true);
						}else if(i.respuesta == 4){
							$('#Frecuentemente-'+i.id).prop('checked',true);
						}else if (i.respuesta == 5){
							$('#mFrecuentemente-'+i.id).prop('checked',true);
						}
					}
				}
			},
			error:function(){
				console.log("error");
			}
		});
	});

</script>

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
			var id = localStorage.getItem('id');
			$('#id').val(id);
</script>

<script>
	var Progreso = localStorage.getItem('Progreso')
	document.getElementById("id").style.width=Progreso;
	document.getElementById("id").innerHTML = Progreso;
</script>


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
	

@endpush