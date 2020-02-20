@extends('layouts.nav2')

@section('content')
<header>
<script src=" {{asset('js/toastr.js')}}"></script>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modal')
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<meta name="csrf-token" content="{{ csrf_token() }}">﻿

</header>
<section class="contenedorper5">

	@if($cantidadMercado == 0)
	 <form action="{{route('storageAnsController'),$id_planeacion}}" id="form" method="POST">
		@else
		<form action="{{route('storageAnsController'),$id_planeacion}}"  method="POST">
		@endif
		<input type="hidden" id="id_planecion" name="idPlaneacion" value = "{{$id_planeacion}}">
			@csrf
			<div id="regiration_form">
				{{-- fieldset1  --}}
					<fieldset class="opciones">

						<table class="egt" id="tabla">
							<thead>
								<tr>
									<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
									<th colspan="1"style="border: none;"></th>
									@foreach($tipo_mercado as $tipo_mercado1)
										@if($tipo_mercado1->Nametipo_mercado  == 'Sustitutos')
										<input type="text" style="display:none" id="Sustitutos" name="id_tipo_mercado[]" value="{{$tipo_mercado1->id_tipo_mercado}}">
										<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado1->Nametipo_mercado}}</th>
										@endif
									@endforeach
								</tr>
								
								<tr>
									<th colspan="2" style="border: none;"></th>
			
									<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>
			
									<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>
			
									<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">PesoPonderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>
			
								</tr>
			
							</thead>
							<tbody>
									@if($cantidadMercado == 0)
									@foreach ($DesaMerca as $mercado)
									<tr class="formulario material" id="material{{$mercado->id}}">
											<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
											<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
											<td style="border: none;"></td>
											<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
											<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"    class = 'cantidad_req SustitutospesoRelativo' required onkeyup='obtTotalMat({{$mercado->id}})' ></td>
											<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq Sustitutoscalificacion' required onkeyup='obtTotalMat({{$mercado->id}})' ></td>
											<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq SustitutospesoPonderado' required onchange='calcTotal()'></td>
									</tr>
									@endforeach
									@else

									@foreach ($Sustitutos as $Sustitutos)
									<tr class="formulario material" id="material{{$Sustitutos->id}}">
											<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Sustitutos->id}}" data-name="$Sustitutos->nombre">{{$Sustitutos->nombre}}</th>
											<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Sustitutos->id}}">
											<td style="border: none;"></td>
											<!-- {{(is_array(old($Sustitutos->id)) && in_array("dAlta",old($Sustitutos->id)))? '':""}} -->
											<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"   value="{{$Sustitutos->pesoRelativo}}"  class = 'cantidad_req SustitutospesoRelativo' required onkeyup='obtTotalMat({{$Sustitutos->id}})' ></td>
											<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" value="{{$Sustitutos->calificacion}}"	 class = 'valor_unitreq Sustitutoscalificacion'required onkeyup='obtTotalMat({{$Sustitutos->id}})' ></td>
											<td class="tablaAnsorft"><input id="pesoPonderadoB"  name="pesoPonderado[]" value="{{$Sustitutos->pesoPonderado}}" class = 'valor_totreq SustitutospesoPonderado' required onchange='calcTotal()'></td>
									</tr>
									@endforeach

									@endif
									
						
					
							<tr class="totalFortaleza">
									<th >Total</th>
									<td style="border: none;"></td>
									<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado1" class="tablacamFortalezas  SustitutospesorpesoPonderado" ></textarea></td>
							<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion1" class="tablacamFortalezas  Sustitutostotalcalificacion"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]"  id="granTotal1" class="tablacamFortalezas totales  SustitutospuntuaPonderado"></textarea></td>
							</tr>
							</tbody>
						</table>
			<button type="button" id="btnSustitutos"  class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>


		{{-- fieldset --}}
		{{-- <fieldset class="opciones">

			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach($tipo_mercado as $tipo_mercado1)
							@if($tipo_mercado1->Nametipo_mercado  == 'Forma de Uso y Aplicación del Producto')
							<input type="text" style="display:none" name="id_tipo_mercado[]" value="{{$tipo_mercado1->id_tipo_mercado}}">
							<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado1->Nametipo_mercado}}</th>
							@endif
						@endforeach
					</tr>
					
					<tr>
						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">PesoPonderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@if($cantidadMercado == 0)
					@foreach ($DesaMerca as $mercado)
					<tr class="formulario material2" id="material2{{$mercado->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"    class = 'cantidad_req2 	SustitutospesoRelativo' onkeyup='Productotitutos({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq2 Sustitutoscalificacion' onkeyup='Productotitutos({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq2	 SustitutospesoPonderado' onchange='ProductotitutosTotal()'></td>
					</tr>
					@endforeach
					@else

					@foreach ($Producto as $Producto)
					<tr class="formulario material2" id="material2{{$Producto->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Producto->id}}" data-name="$Producto->nombre">{{$Producto->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Producto->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($Producto->id)) && in_array("dAlta",old($Producto->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"     class = 'cantidad_req2 ProductopesoRelativo' onkeyup='Productotitutos({{$Producto->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq2 Productocalificacion' onkeyup='Productotitutos({{$Producto->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq2 ProductopesoPonderado' onchange='ProductotitutosTotal()'></td>
					</tr>
					@endforeach

					@endif
				<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado2" class="tablacamFortalezas  SustitutospesorpesoPonderado" ></textarea></td>
				<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion2" class="tablacamFortalezas  Sustitutostotalcalificacion"></textarea></td>
				<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]"  id="granTotal2" class="tablacamFortalezas totales  SustitutospuntuaPonderado"></textarea></td>
				</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset> --}}

	
	<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>

			
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach($tipo_mercado as $tipo_mercado2)
										@if($tipo_mercado2->Nametipo_mercado  == 'Forma de Uso y Aplicación del Productotitutos')
										<input type="text" style="display:none"  name="id_tipo_mercado[]" value="{{$tipo_mercado2->id_tipo_mercado}}">
										<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado2->Nametipo_mercado}}</th>
										@endif
						@endforeach
					  </tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

		
					
					@if($cantidadMercado == 0)
					@foreach ($DesaMerca as $mercado)
					<tr class="formulario material3" id="material3{{$mercado->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoPonderado" name="pesoRelativo[]"    class = 'cantidad_req3 SustitutospesoRelativo' required onkeyup='Tecnología({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq3 Sustitutoscalificacion' required onkeyup='Tecnología({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq3 SustitutospesoPonderado' required onchange='TecnologíaTotal()'></td>
					</tr>
					@endforeach
					@else

					@foreach ($Productotitutos as $Productotitutos)
					<tr class="formulario material3" id="material3{{$Productotitutos->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Productotitutos->id}}" data-name="$Productotitutos->nombre">{{$Productotitutos->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Productotitutos->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($Productotitutos->id)) && in_array("dAlta",old($Productotitutos->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"   value="{{$Productotitutos->pesoRelativo}}"  class = 'cantidad_req3 ProductotitutospesoRelativo' required onkeyup='Tecnología({{$Productotitutos->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" value="{{$Productotitutos->calificacion}}"	 class = 'valor_unitreq3 Productotitutoscalificacion' required onkeyup='Tecnología({{$Productotitutos->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]" value="{{$Productotitutos->pesoPonderado}}" class = 'valor_totreq3 ProductotitutospesoPonderado' required onchange='TecnologíaTotal()'></td>
					</tr>
					@endforeach

					@endif
									
								
									
		
						<tr class="totalFortaleza">
							<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado3" class="tablacamFortalezas" ></textarea></td>
							<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion3" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]"  id="granTotal3" class="tablacamFortalezas totales"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach($tipo_mercado as $tipo_mercado3)
										@if($tipo_mercado3->Nametipo_mercado  == 'Intercambio de Tecnología')
										<input type="text" style="display:none"  name="id_tipo_mercado[]" value="{{$tipo_mercado3->id_tipo_mercado}}">
										<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado3->Nametipo_mercado}}</th>
										@endif
						@endforeach
						<input type="hidden" name="nombre" value="Intercambio de Tecnología">
					 </tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@if($cantidadMercado == 0)
					@foreach ($DesaMerca as $mercado)
					<tr class="formulario material9" id="material9{{$mercado->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"    class = 'cantidad_req9 SustitutospesoRelativo' required onkeyup='Producto({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq9 Sustitutoscalificacion' required onkeyup='Producto({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq9 SustitutospesoPonderado' required onchange='ProductoTotal()'></td>
					</tr>
					@endforeach
					@else

					@foreach ($Tecnología as $Tecnología)
					<tr class="formulario material9" id="material9{{$Tecnología->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Tecnología->id}}" data-name="$Tecnología->nombre">{{$Tecnología->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Tecnología->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($Tecnología->id)) && in_array("dAlta",old($Tecnología->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"   value="{{$Tecnología->pesoRelativo}}"  class = 'cantidad_req9 TecnologíapesoRelativo' required onkeyup='Producto({{$Tecnología->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" value="{{$Tecnología->calificacion}}"	 class = 'valor_unitreq9 Tecnologíacalificacion'  required onkeyup='Producto({{$Tecnología->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]" value="{{$Tecnología->pesoPonderado}}" class = 'valor_totreq9 TecnologíapesoPonderado' required onchange='ProductoTotal()'></td>
					</tr>
					@endforeach

					@endif
							
							<tr class="totalFortaleza">
							<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado9" class="tablacamFortalezas" ></textarea></td>
							<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion9" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]"  id="granTotal9" class="tablacamFortalezas totales"></textarea></td>
						</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" id class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach($tipo_mercado as $tipo_mercado4)
										@if($tipo_mercado4->Nametipo_mercado  == 'Geográficamente')
										<input type="text" style="display:none"  name="id_tipo_mercado[]" value="{{$tipo_mercado4->id_tipo_mercado}}">
										<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado4->Nametipo_mercado}}</th>
										@endif
						@endforeach
					 </tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					
					@if($cantidadMercado == 0)
					@foreach ($DesaMerca as $mercado)
					<tr class="formulario material4" id="material4{{$mercado->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"    class = 'cantidad_req4 SustitutospesoRelativo'  required onkeyup='Geográficamente({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq4 Sustitutoscalificacion' required onkeyup='Geográficamente({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq4 SustitutospesoPonderado' required onchange='GeográficamenteTotal()'></td>
					</tr>
					@endforeach
					@else

					@foreach ($Geográficamente as $Geográficamente)
					<tr class="formulario material4" id="material4{{$Geográficamente->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Geográficamente->id}}" data-name="$Geográficamente->nombre">{{$Geográficamente->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Geográficamente->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($Geográficamente->id)) && in_array("dAlta",old($Geográficamente->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"   value="{{$Geográficamente->pesoRelativo}}"  class = 'cantidad_req4 GeográficamentepesoRelativo' required onkeyup='Geográficamente({{$Geográficamente->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoRelativo" name="calificacion[]" value="{{$Geográficamente->calificacion}}"	 class = 'valor_unitreq4 Geográficamentecalificacion' required onkeyup='Geográficamente({{$Geográficamente->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]" value="{{$Geográficamente->pesoPonderado}}" class = 'valor_totreq4 GeográficamentepesoPonderado' required onchange='GeográficamenteTotal()'></td>
					</tr>
					@endforeach

					@endif
												<tr class="totalFortaleza">
							<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado4" class="tablacamFortalezas" ></textarea></td>
							<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion4" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]"  id="granTotal4" class="tablacamFortalezas totales"></textarea></td>
						</tr>
		
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach($tipo_mercado as $tipo_mercado5)
										@if($tipo_mercado5->Nametipo_mercado  == 'Segmentación')
										<input type="text" style="display:none"  name="id_tipo_mercado[]" value="{{$tipo_mercado5->id_tipo_mercado}}">
										<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado5->Nametipo_mercado}}</th>
										@endif
						@endforeach 
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@if($cantidadMercado == 0)
					@foreach ($DesaMerca as $mercado)
					<tr class="formulario material5" id="material5{{$mercado->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"    class = 'cantidad_req5 SustitutospesoRelativo' required onkeyup='Segmentación({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq5 Sustitutoscalificacion' required onkeyup='Segmentación({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq5 SustitutospesoPonderado' required onchange='SegmentaciónTotal()'></td>
					</tr>
					@endforeach
					@else

					@foreach ($Segmentación as $Segmentación)
					<tr class="formulario material5" id="material5{{$Segmentación->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Segmentación->id}}" data-name="$Segmentación->nombre">{{$Segmentación->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Segmentación->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($Segmentación->id)) && in_array("dAlta",old($Segmentación->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"   value="{{$Segmentación->pesoRelativo}}"  class = 'cantidad_req5 SegmentaciónpesoRelativo' required onkeyup='Segmentación({{$Segmentación->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" value="{{$Segmentación->calificacion}}"	 class = 'valor_unitreq5 Segmentacióncalificacion' required onkeyup='Segmentación({{$Segmentación->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]" value="{{$Segmentación->pesoPonderado}}" class = 'valor_totreq5 SegmentaciónpesoPonderado' required onchange='SegmentaciónTotal()'></td>
					</tr>
					@endforeach

					@endif
						<tr class="totalFortaleza">
						<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado5" class="tablacamFortalezas" ></textarea></td>
							<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion5" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]"  id="granTotal5" class="tablacamFortalezas totales"></textarea></td>
						</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach($tipo_mercado as $tipo_mercado6)
										@if($tipo_mercado6->Nametipo_mercado  == 'Alianzas Convenios')
										<input type="text" style="display:none"  name="id_tipo_mercado[]" value="{{$tipo_mercado6->id_tipo_mercado}}">
										<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado6->Nametipo_mercado}}</th>
										@endif
						@endforeach 
					  </tr>
					<tr>

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@if($cantidadMercado == 0)
					@foreach ($DesaMerca as $mercado)
					<tr class="formulario material6" id="material6{{$mercado->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"    class = 'cantidad_req6 SustitutospesoRelativo' required onkeyup='Alianzas({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq6 Sustitutoscalificacion' required onkeyup='Alianzas({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq6 SustitutospesoPonderado' required onchange='AlianzasTotal()'></td>
					</tr>
					@endforeach
					@else

					@foreach ($Convenios as $Convenios)
					<tr class="formulario material6" id="material6{{$Convenios->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Convenios->id}}" data-name="$Convenios->nombre">{{$Convenios->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Convenios->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($Convenios->id)) && in_array("dAlta",old($Convenios->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"   value="{{$Convenios->pesoRelativo}}"  class = 'cantidad_req6 ConveniospesoRelativo' required onkeyup='Alianzas({{$Convenios->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" value="{{$Convenios->calificacion}}"	 class = 'valor_unitreq6 Convenioscalificacion' required onkeyup='Alianzas({{$Convenios->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]" value="{{$Convenios->pesoPonderado}}" class = 'valor_totreq6 ConveniospesoPonderado' required onchange='AlianzasTotal()'></td>
					</tr>
					@endforeach

					@endif
												<tr class="totalFortaleza">
												<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado6" class="tablacamFortalezas" ></textarea></td>
							<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion6" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]" id="granTotal6" class="tablacamFortalezas totales"></textarea></td>
						</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach($tipo_mercado as $tipo_mercado7)
										@if($tipo_mercado7->Nametipo_mercado  == 'Promoción')
										<input type="text" style="display:none"  name="id_tipo_mercado[]" value="{{$tipo_mercado7->id_tipo_mercado}}">
										<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$tipo_mercado7->Nametipo_mercado}}</th>
										@endif
						@endforeach 

					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@if($cantidadMercado == 0)
					@foreach ($DesaMerca as $mercado)
					<tr class="formulario material7" id="material7{{$mercado->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$mercado->id}}" data-name="$mercado->nombre">{{$mercado->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$mercado->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($mercado->id)) && in_array("dAlta",old($mercado->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"    class = 'cantidad_req7 SustitutospesoRelativo' required onkeyup='Promoción({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" 	 class = 'valor_unitreq7 Sustitutoscalificacion' required onkeyup='Promoción({{$mercado->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]"  class = 'valor_totreq7 SustitutospesoPonderado' required onchange='PromociónTotal()'></td>
					</tr>
					@endforeach

					@else

					@foreach ($Promoción as $Promoción)
					<tr class="formulario material7" id="material7{{$Promoción->id}}">
							<th class="thCampo1" data-column_name="idRespuesta" data-id="{{$Promoción->id}}" data-name="$Promoción->nombre">{{$Promoción->nombre}}</th>
							<input type="hidden" name="preguntas[]" id="preguntas" value="{{$Promoción->id}}">
							<td style="border: none;"></td>
							<!-- {{(is_array(old($Promoción->id)) && in_array("dAlta",old($Promoción->id)))? '':""}} -->
							<td class="tablaAnsorft"><input id="pesoRelativo" name="pesoRelativo[]"   value="{{$Promoción->pesoRelativo}}"  class = 'cantidad_req7 PromociónpesoRelativo' required  onkeyup='Promoción({{$Promoción->id}})' ></td>
							<td class="tablaAnsorft"><input id="calificacion" name="calificacion[]" value="{{$Promoción->calificacion}}"	 class = 'valor_unitreq7 Promocióncalificacion' required onkeyup='Promoción({{$Promoción->id}})' ></td>
							<td class="tablaAnsorft"><input id="pesoPonderado"  name="pesoPonderado[]" value="{{$Promoción->pesoPonderado}}" class = 'valor_totreq7 PromociónpesoPonderado' required onchange='PromociónTotal()'></td>
					</tr>
					@endforeach

					@endif
												<tr class="totalFortaleza">
												<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea name="totalRelativo[]"   id="pesorpesoPonderado7" class="tablacamFortalezas" ></textarea></td>
							<td class="tdclassFortaleza"><textarea name="totalCalificación[]"  id="totalcalificacion7" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea name="puntuaPonderado[]"  id="granTotal7" class="tablacamFortalezas totales"></textarea></td>
						</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			@if($cantidadMercado == 0)
			<button type="submit" id="submitButton" onclick="validacion()" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>

			   @else
			   <button type="submit"  class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>

			   @endif
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
@endsection
@push('script')
<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
{{-- <script src=" {{asset('js/Validaciones/valid.js')}}"></script> --}}

<script>
	//fieldset1
    function obtTotalMat(index){
        if($("#material"+index+" .cantidad_req").val() > 1 || $("#material"+index+" .cantidad_req").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material"+index+" .valor_unitreq").val() > 4 || $("#material"+index+" .valor_unitreq").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material"+index+" .cantidad_req").val();
           
            var Calificacion = $("#material"+index+" .valor_unitreq").val();
      
            var tot = ($("#material"+index+" .cantidad_req").val())* $("#material"+index+" .valor_unitreq").val();
           $("#material"+index+" .valor_totreq").val(tot);
        }
        calcTotal();
    }
    function calcTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material .valor_totreq").each(function () {
                tot+=Number($(this).val());
            });
            $(".material .cantidad_req").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material .valor_unitreq").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal1").val(tot);
            $("#pesorpesoPonderado1").val(Relativo);
            $("#totalcalificacion1").val(Calificacion);
         }



		 
		 function Productotitutos(index){
        if($("#material2"+index+" .cantidad_req2").val() > 1 || $("#material2"+index+" .cantidad_req2").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material2"+index+" .valor_unitreq2").val() > 4 || $("#material2"+index+" .valor_unitreq2").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material2"+index+" .cantidad_req2").val();
           
            var Calificacion = $("#material2"+index+" .valor_unitreq2").val();
      
            var tot = ($("#material2"+index+" .cantidad_req2").val()) * $("#material2"+index+" .valor_unitreq2").val();
           $("#material2"+index+" .valor_totreq2").val(tot);
        }
       ProductotitutosTotal();
    }
    function ProductotitutosTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material2 .valor_totreq2").each(function () {
                tot+=Number($(this).val());
            });
            $(".material2 .cantidad_req2").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material2 .valor_unitreq2").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal2").val(tot);
            $("#pesorpesoPonderado2").val(Relativo);
            $("#totalcalificacion2").val(Calificacion);
		 }
	
		 
		 function Tecnología(index){
        if($("#material3"+index+" .cantidad_req3").val() > 1 || $("#material3"+index+" .cantidad_req3").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material3"+index+" .valor_unitreq3").val() > 4 || $("#material3"+index+" .valor_unitreq3").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material3"+index+" .cantidad_req3").val();
           
            var Calificacion = $("#material3"+index+" .valor_unitreq3").val();
      
            var tot = ($("#material3"+index+" .cantidad_req3").val()) * $("#material3"+index+" .valor_unitreq3").val();
           $("#material3"+index+" .valor_totreq3").val(tot);
        }
       TecnologíaTotal();
    }
    function TecnologíaTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material3 .valor_totreq3").each(function () {
                tot+=Number($(this).val());
            });
            $(".material3 .cantidad_req3").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material3 .valor_unitreq3").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal3").val(tot);
            $("#pesorpesoPonderado3").val(Relativo);
            $("#totalcalificacion3").val(Calificacion);
         }
		 function Geográficamente(index){
        if($("#material4"+index+" .cantidad_req4").val() > 1 || $("#material4"+index+" .cantidad_req4").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material4"+index+" .valor_unitreq4").val() > 4 || $("#material4"+index+" .valor_unitreq4").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material4"+index+" .cantidad_req4").val();
           
            var Calificacion = $("#material4"+index+" .valor_unitreq4").val();
      
            var tot = ($("#material4"+index+" .cantidad_req4").val()) * $("#material4"+index+" .valor_unitreq4").val();
           $("#material4"+index+" .valor_totreq4").val(tot);
        }
        GeográficamenteTotal();
    }
    function GeográficamenteTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material4 .valor_totreq4").each(function () {
                tot+=Number($(this).val());
            });
            $(".material4 .cantidad_req4").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material4 .valor_unitreq4").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal4").val(tot);
            $("#pesorpesoPonderado4").val(Relativo);
            $("#totalcalificacion4").val(Calificacion);
         }
		 function Segmentación(index){
        if($("#material5"+index+" .cantidad_req5").val() > 1 || $("#material5"+index+" .cantidad_req5").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material5"+index+" .valor_unitreq5").val() > 4 || $("#material5"+index+" .valor_unitreq5").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material5"+index+" .cantidad_req5").val();
           
            var Calificacion = $("#material5"+index+" .valor_unitreq5").val();
      
            var tot = ($("#material5"+index+" .cantidad_req5").val()) * $("#material5"+index+" .valor_unitreq5").val();
           $("#material5"+index+" .valor_totreq5").val(tot);
        }
        SegmentaciónTotal();
    }
    function SegmentaciónTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material5 .valor_totreq5").each(function () {
                tot+=Number($(this).val());
            });
            $(".material5 .cantidad_req5").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material5 .valor_unitreq5").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal5").val(tot);
            $("#pesorpesoPonderado5").val(Relativo);
            $("#totalcalificacion5").val(Calificacion);
         }
		 function Alianzas(index){
        if($("#material6"+index+" .cantidad_req6").val() > 1 || $("#material6"+index+" .cantidad_req6").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material6"+index+" .valor_unitreq6").val() > 4 || $("#material6"+index+" .valor_unitreq6").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material6"+index+" .cantidad_req6").val();
           
            var Calificacion = $("#material6"+index+" .valor_unitreq6").val();
      
            var tot = ($("#material6"+index+" .cantidad_req6").val()) * $("#material6"+index+" .valor_unitreq6").val();
           $("#material6"+index+" .valor_totreq6").val(tot);
        }
        AlianzasTotal();
    }
    
    function AlianzasTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material6 .valor_totreq6").each(function () {
                tot+=Number($(this).val());
            });
            $(".material6 .cantidad_req6").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material6 .valor_unitreq6").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal6").val(tot);
            $("#pesorpesoPonderado6").val(Relativo);
            $("#totalcalificacion6").val(Calificacion);
         }
		 function Promoción(index){
        if($("#material7"+index+" .cantidad_req7").val() > 1 || $("#material7"+index+" .cantidad_req7").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material7"+index+" .valor_unitreq7").val() > 4 || $("#material7"+index+" .valor_unitreq7").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material7"+index+" .cantidad_req7").val();
           
            var Calificacion = $("#material7"+index+" .valor_unitreq7").val();
      
            var tot = ($("#material7"+index+" .cantidad_req7").val()) * $("#material7"+index+" .valor_unitreq7").val();
           $("#material7"+index+" .valor_totreq7").val(tot);
        }
        PromociónTotal();
    }
    
    function PromociónTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material7 .valor_totreq7").each(function () {
                tot+=Number($(this).val());
            });
            $(".material7 .cantidad_req7").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material7 .valor_unitreq7").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal7").val(tot);
            $("#pesorpesoPonderado7").val(Relativo);
            $("#totalcalificacion7").val(Calificacion);
		 }
		 

		 function Producto(index){
        if($("#material9"+index+" .cantidad_req9").val() > 1 || $("#material9"+index+" .cantidad_req9").val() < 0 ){
            
			toastr.error('error el numero no pudede ser mayor a 1', '!');
        }else if($("#material9"+index+" .valor_unitreq9").val() > 4 || $("#material9"+index+" .valor_unitreq9").val() > 4){
            
			toastr.error('error el numero no pudede ser mayor a 4', '!');
        }else{
         
            var Relativo  = $("#material9"+index+" .cantidad_req9").val();
           
            var Calificacion = $("#material9"+index+" .valor_unitreq9").val();
      
            var tot = ($("#material9"+index+" .cantidad_req9").val()) * $("#material9"+index+" .valor_unitreq9").val();
           $("#material9"+index+" .valor_totreq9").val(tot);
        }
        ProductoTotal();
    }
    
    function ProductoTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;
            $(".material9 .valor_totreq9").each(function () {
                tot+=Number($(this).val());
            });
            $(".material9 .cantidad_req9").each(function () {
                Relativo+=Number($(this).val());
            });
            $(".material9 .valor_unitreq9").each(function () {
                Calificacion+=Number($(this).val());
            });
            $("#granTotal9").val(tot);
            $("#pesorpesoPonderado9").val(Relativo);
            $("#totalcalificacion9").val(Calificacion);
         }
	
	</script>
	
	{{-- //validacion form --}}
<script>
	function validacion () {
	const pesoPonderado = document.getElementById('pesoPonderado');
	const pesoRelativo = document.getElementById('pesoRelativo');
	const calificacion = document.getElementById('calificacion');

	if(pesoPonderado = " ") {
		toastr.error('El campo peso ponderado, nos puede ser nulo  ', '!Hola!')
	}

	if(pesoRelativo = " ") {
		toastr.error('El campo peso pesoRelativo, nos puede ser nulo  ', '!Hola!')
	}

	if(calificacion = " ") {
		toastr.error('El campo calificacion, nos puede ser nulo  ', '!Hola!')
	}
	}
</script>
@endpush


