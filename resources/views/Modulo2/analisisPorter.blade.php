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
<section class="contenedorper3">
	<form id="form" action="{{ route('guardaporter'),auth()->user()->selected_planne }}" method="POST" role="form">
		<input type="hidden" name="idPlaneacion"  value=""  id="" class="idPlaneacion" >
		@csrf
		<div id="regiration_form">
			<fieldset class="opciones6">
				<table class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#podernegociacion"><span class="icon-info "></span></a>Poder de Negociación de los Proveedores</th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info "></span></a>Amenazas</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info "></span></a>Oportunidades</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody >
						@foreach ($poderProvee as $poder)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$poder->id}}" data-name="{{$poder->nombre}}"style="text-align: center; width: 50%;" class="thCampo1" id="tdFormulario">{{$poder->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<td   class="radio">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $poder->id}}">

								<input type="radio" name="{{$poder->id}}" id="debilidad-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="aAlta" >
								<label for="debilidad-{{$poder->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$poder->id}}" id="debilidadb-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$poder->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$poder->id}}" id="debilidadc-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$poder->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$poder->id}}" id="oportunidad1-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$poder->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$poder->id}}" id="oportunidad2-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$poder->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$poder->id}}" id="oportunidad3-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$poder->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$poder->id}}" id="noaplica-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$poder->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
								{{-- error --}}
							{{-- <input type="hidden"  name="respuesta[]" value="{{$poder->id}}"> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones6">
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#poderclientes"><span class="icon-info "></span></a>Poder de Negociación de los Clientes</th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info "></span></a>Amenazas</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info "></span></a>Oportunidades</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
					</tr>
					</thead>
					<tbody>
						@foreach ($poderCliente as $cliente)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$cliente->id}}" data-name="{{$cliente->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$cliente->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<td   class="radio">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $cliente->id }}">

								<input type="radio" name="{{$cliente->id}}" id="debilidad-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$cliente->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$cliente->id}}" id="debilidadb-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$cliente->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$cliente->id}}" id="debilidadc-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$cliente->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$cliente->id}}" id="oportunidad1-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$cliente->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$cliente->id}}" id="oportunidad2-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$cliente->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$cliente->id}}" id="oportunidad3-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$cliente->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$cliente->id}}" id="noaplica-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$cliente->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones6">
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#productossustitutos"><span class="icon-info "></span></a>Productos Sustitutos</th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info "></span></a>Amenazas</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info "></span></a>Oportunidades</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
				</tr>
					</thead>
					<tbody>
						<tr class="formulario">

							@foreach ($productoSustituto as $producto)

							<tr class="formulario">
								<td colspan="2" data-column_name="nombre" data-id="{{$producto->id}}" data-name="{{$producto->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$producto->nombre}}</td>
								<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
								<td   class="radio">
									<input type="hidden" id="gender" name="preguntas[]" value="{{ $producto->id }}">

									<input type="radio" name="{{$producto->id}}" id="debilidad-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
									<label for="debilidad-{{$producto->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$producto->id}}" id="debilidadb-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
									<label for="debilidadb-{{$producto->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$producto->id}}" id="debilidadc-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
									<label for="debilidadc-{{$producto->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$producto->id}}" id="oportunidad1-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
									<label for="oportunidad1-{{$producto->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$producto->id}}" id="oportunidad2-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
									<label for="oportunidad2-{{$producto->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$producto->id}}" id="oportunidad3-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
									<label for="oportunidad3-{{$producto->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$producto->id}}" id="noaplica-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="NA">
									<label for="noaplica-{{$producto->id. "-" .auth()->user()->selected_planne}}">N</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
					<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
				</fieldset>
				<fieldset class="opciones6">
					<table  class="egt" id="tabla">
						<thead>
							<tr>
								<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#amenazacompetidores"><span class="icon-info "></span></a>Amenazas de Entrada de Nuevos Competidores</th>
							</tr>
							<tr>
								<th style="border: none !important;"></th>
								<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info "></span></a>Amenazas</th>
								<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info "></span></a>Oportunidades</th>
								<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
							</tr>
						</thead>
						<tbody>
							<tr class="formulario">
								@foreach ($amenazaCompe as $amenaza)

								<tr class="formulario">
									<td colspan="2" data-column_name="nombre" data-id="{{$amenaza->id}}" data-name="{{$amenaza->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$amenaza->nombre}}</td>
									<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
									<td   class="radio">
										<input type="hidden" id="gender" name="preguntas[]" value="{{ $amenaza->id }}">

										<input type="radio" name="{{$amenaza->id}}" id="debilidad-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
										<label for="debilidad-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$amenaza->id}}" id="debilidadb-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
										<label for="debilidadb-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$amenaza->id}}" id="debilidadc-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
										<label for="debilidadc-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio">
										<input type="radio" name="{{$amenaza->id}}" id="oportunidad1-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
										<label for="oportunidad1-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$amenaza->id}}" id="oportunidad2-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
										<label for="oportunidad2-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$amenaza->id}}" id="oportunidad3-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
										<label for="oportunidad3-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio">
										<input type="radio" name="{{$amenaza->id}}" id="noaplica-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="NA">
										<label for="noaplica-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">N</label>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
						<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
					</fieldset>
					
					<fieldset class="opciones6">
						<table  class="egt" id="tabla">
							<thead>
								<tr>
									<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#rivalidadcompetidores"><span class="icon-info "></span></a>Rivalidad Entre Competidores</th>
								</tr>
								<tr>
									<th style="border: none !important;"></th>
									<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#fortaleza" data-whatever="@fat"><span class="icon-info "></span></a>Amenazas</th>
									<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#debilidad" data-whatever="@fat"><span class="icon-info "></span></a>Oportunidades</th>
									<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#noaplica" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
								</tr>
							</thead>
							<tbody>
								<tr class="formulario">
									@foreach ($rivaCompe as $riva)

									<tr class="formulario">
										<td colspan="2" data-column_name="nombre" data-id="{{$riva->id}}" data-name="{{$riva->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$riva->nombre}}</td>
										<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
										<td   class="radio">
											<input type="hidden" id="gender" name="preguntas[]" value="{{ $riva->id }}">

											<input type="radio" name="{{$riva->id}}" id="debilidad-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
											<label for="debilidad-{{$riva->id. "-" .auth()->user()->selected_planne}}">A</label>

											<input type="radio" name="{{$riva->id}}" id="debilidadb-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
											<label for="debilidadb-{{$riva->id. "-" .auth()->user()->selected_planne}}">M</label>

											<input type="radio" name="{{$riva->id}}" id="debilidadc-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
											<label for="debilidadc-{{$riva->id. "-" .auth()->user()->selected_planne}}">B</label>
										</td>
										<td class="radio">
											<input type="radio" name="{{$riva->id}}" id="oportunidad1-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
											<label for="oportunidad1-{{$riva->id. "-" .auth()->user()->selected_planne}}">A</label>

											<input type="radio" name="{{$riva->id}}" id="oportunidad2-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
											<label for="oportunidad2-{{$riva->id. "-" .auth()->user()->selected_planne}}">M</label>

											<input type="radio" name="{{$riva->id}}" id="oportunidad3-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
											<label for="oportunidad3-{{$riva->id. "-" .auth()->user()->selected_planne}}">B</label>
										</td>
										<td class="radio">
											<input type="radio" name="{{$riva->id}}" id="noaplica-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="NA">
											<label for="noaplica-{{$riva->id. "-" .auth()->user()->selected_planne}}">N</label>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
							<button type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right" id="submitButton" >Guardar</button>
						</fieldset>
						{{--<div class="infon">
							<a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
								<h5>Agregar</h5></div></span>
							</a>
							<a id="boton2" class="button2" data-toggle="modal" data-target="#exampleModal001"><span class="icon-info "></span>
							</a>
						</div>--}}
					</div>
				</form>
				<!---------------------------------------------->
				<div class="modal fade" id="podernegociacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content modal-modificado4">
						<div class="modal-body">
						  <div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p style="line-height: 17px; margin-top: 2px;">
							  <b style="color: black; font-weight: bold; text-align: center;">Poder de negociación de los proveedores</b>
							  <br><br>
							  <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">
													  Esta fuerza pretende determinar el nivel de poder de negociación
													  del proveedor en el sector estratégico. Para el empresario se convierta
													  en una ayuda, ya que le permite identificar el tipo de relación de negocios
													  que puede llegar a tener con el proveedor.
							</p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="modal fade" id="poderclientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-modificado4">
							<div class="modal-body">
								<div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
									<p style="line-height: 17px; margin-top: 2px;">
										<b style="color: black; font-weight: bold; text-align: center;">Poder de negociación de los clientes</b>
										<br><br>
										<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

										Se refiere a la presión que pueden ejercer los consumidores sobre
										las empresas para conseguir que se ofrezcan productos de mayor calidad,
										mejor servicio al cliente, y precios más bajos a la hora de comprar insumos,
										materias primas, bienes o servicios. 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="productossustitutos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content modal-modificado4">
						<div class="modal-body">
						  <div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p style="line-height: 17px; margin-top: 2px;">
							  <b style="color: black; font-weight: bold; text-align: center;">Productos Sustitutos</b>
							  <br><br>
							  <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

													  Esta fuerza permite determinar el grado de amenaza u oportunidad de los
													  productos sustitutos para el sector estratégico. Se parte de la situación
													  de que un mercado o segmento no es atractivo si existen productos sustitutos reales o potenciales.
							</p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="modal fade" id="amenazacompetidores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content modal-modificado4">
						<div class="modal-body">
						  <div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p style="line-height: 17px; margin-top: 2px;">
							  <b style="color: black; font-weight: bold; text-align: center;">Amenazas de Entrada de Nuevos Competidores</b>
							  <br><br>
							  <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

													  Es cualquier mecanismo por el cual la rentabilidad esperada
													  de un nuevo competidor entrante en el sector es inferior a
													  la que están obteniendo los competidores ya presentes en él.
							</p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="modal fade" id="rivalidadcompetidores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content modal-modificado4">
						<div class="modal-body">
						  <div id="cierre_proveedores"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 97%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p style="line-height: 17px; margin-top: 2px;">
							  <b style="color: black; font-weight: bold; text-align: center;">Rivalidad Entre Competidores</b>
							  <br><br>
							  <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

													  La rivalidad entre competidores está en el centro de las fuerzas
													  y es el elemento más determinante del modelo de Porter. Es la fuerza
													  con que las empresas emprenden acciones para fortalecer su posicionamiento
													  en el mercado y proteger así su posición competitiva.<br><br>
													  La rivalidad entre los competidores define la rentabilidad de un sector:
													  cuanto menos competido se encuentre un sector, normalmente será más rentable
													  y viceversa.
	  
												  </p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
	  




				<div class="modal fade" id="debilidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
					<div class="modal-dialog" role="document">
					  <div class="modal-content modal-modificado1">
						<div class="modal-body">
						  <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
												  <p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px"; >Amenazas:</p>
																		  <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

													Son aquellas situaciones provenientes del entorno que pueden afectar la actuación de la compañía de alguna manera.
												  </p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
	  
				  <div class="modal fade" id="fortaleza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content modal-modificado1">
						<div class="modal-body">
						  <div id="cierre_caja6"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
												  <p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px" >Oportunidades:</p>
												  <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

													Son aquellos factores que resultan positivos o favorables del entorno en el que interactúa la empresa y que permiten obtener ventajas competitivas.
													<br>Alta
													<br>Media 
													<br>Baja
													<br>No aplica
												  </p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  
				  <div class="modal fade" id="noaplica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content modal-modificado1">
						<div class="modal-body">
						  <div id="cierra_caja5"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
												  <p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px" >No Aplica:</p>
												  <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">
													Este ítem es para indicar que no es ni una debilidad ni
													  fortaleza o simplemente un factor no se relaciona con las
													  actividades que realiza la empresa.</p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>

				  <div class="modal fade" id="rr" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<b style="color: black; font-weight: bold;">Desarrollo del Análisis de las 5 Fuerzas de Porter</b>
							</div>
							
							<div class="modal-body">
								<ol style="line-height: 17px; margin-bottom: 05px;">
									<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

									 A continuación, encontrará diferentes perspectivas relacionadas con cada una de las 5 fuerzas de la matriz:<br>
									<br>
									1: Poder de negociación de los proveedores o vendedores.<br>
									2: Poder de negociación de los clientes o compradores.<br>
									3: Productos Sustitutos.<br>
									4: Amenazas de entrada de nuevos competidores.<br>
									5: Rivalidad entre competidores.<br>
			
									Lo invitamos a dar una calificación a cada uno de los factores para evaluar su nivel de
									competencia a través de los siguientes pasos:<br>
									1) Identifique si los factores mencionados representan para su empresa una oportunidad o amenaza.<br>
									2) Después se debe asignar una calificación a cada factor considerando su importancia.
									de la siguiente manera: A (si es alto), M (si es medio), B (si es bajo). En caso de no aplicar se puede marcar la opción N/A.<br><br>
									¡Empecemos!
			
								</ol>
							</div>
						</div>
					</div>
					
					</div>
				</div>
			</section>

			<span class="icon-info" data-toggle="modal" data-target="#rr" style="cursor:pointer;"></span>

			
		</form>


	</section>
	@yield('script')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(7)').addClass("acti");
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
	@endsection
	@push('script')
	<script>
		$(document).ready(function(){
			var planeacion = localStorage.getItem('id');
			$(".idPlaneacion").val(planeacion);
			console.log(planeacion);
		});

	</script>

	<script>

		$( document ).ready(function() {
			var id = localStorage.getItem('id');
			$.ajax({
				url:"/analisisporter/show/"+id,
				type:'get',
				success:function(data){
					console.log(data);


					if(data != null){
						for(i of data){

							if(i.idRespuesta == 'aAlta'){
								$('#debilidad-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'aMedia'){
								$('#debilidadb-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'aBaja'){
								$('#debilidadc-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'oAlta'){
								$('#oportunidad1-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if (i.idRespuesta == 'oMedia'){
								$('#oportunidad2-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'oBaja'){
								$('#oportunidad2-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'NA'){
								$('#noaplica-'+i.anaPorter+"-"+id).prop('checked',true);
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
	@endpush


