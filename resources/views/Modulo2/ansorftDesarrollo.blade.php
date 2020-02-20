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
<section class="contenedorper5">
	<div id="regiration_form">
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Producto</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Etiquetas</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

					<tr class="formulario">
						<td class="thCampo1" id="tdFormulario">La empresa analiza e identifica el o (los ) producto y/o servicio
						(s) que le (s) genera más rentabilidad y volúmen de ventas</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

					</tr>
							<tr class="totalFortaleza">
									<th >Total</th>
									<td style="border: none;"></td>
									<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="granTotal" class="tablacamFortalezas" ></textarea></td>
									<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="pesorpesoPonderado" class="tablacamFortalezas  "></textarea></td>
									<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="totalcalificacion" class="tablacamFortalezas totales"></textarea></td>
							</tr>
				</tbody>
			</table>
			<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Producto</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Usos,Beneficios,Aplicaciones</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

					<tr class="formulario">
						<td class="thCampo1" id="tdFormulario">La empresa analiza e identifica el o (los ) producto y/o servicio
						(s) que le (s) genera más rentabilidad y volúmen de ventas</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

					</tr>
										<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="granTotal" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="pesorpesoPonderado" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="totalcalificacion" class="tablacamFortalezas totales"></textarea></td>
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
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Producto</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Intercambio de Tecnología</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

					<tr class="formulario">
						<td class="thCampo1" id="tdFormulario">La empresa analiza e identifica el o (los ) producto y/o servicio
						(s) que le (s) genera más rentabilidad y volúmen de ventas</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

					</tr>
										<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="granTotal" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="pesorpesoPonderado" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="totalcalificacion" class="tablacamFortalezas totales"></textarea></td>
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
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Producto</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Sustituto</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

					<tr class="formulario">
						<td class="thCampo1" id="tdFormulario">La empresa analiza e identifica el o (los ) producto y/o servicio
						(s) que le (s) genera más rentabilidad y volúmen de ventas</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

					</tr>
										<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="granTotal" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="pesorpesoPonderado" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="totalcalificacion" class="tablacamFortalezas totales"></textarea></td>
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
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Producto</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Nueva Linea de Productos</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

					<tr class="formulario">
						<td class="thCampo1" id="tdFormulario">La empresa analiza e identifica el o (los ) producto y/o servicio
						(s) que le (s) genera más rentabilidad y volúmen de ventas</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

					</tr>
										<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="granTotal" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="pesorpesoPonderado" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="totalcalificacion" class="tablacamFortalezas totales"></textarea></td>
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
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Producto</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Alianzas, Convenios</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

					<tr class="formulario">
						<td class="thCampo1" id="tdFormulario">La empresa analiza e identifica el o (los ) producto y/o servicio
						(s) que le (s) genera más rentabilidad y volúmen de ventas</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

					</tr>
										<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="granTotal" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="pesorpesoPonderado" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="totalcalificacion" class="tablacamFortalezas totales"></textarea></td>
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
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Desarrollo de Producto</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Promoción</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>

					<tr class="formulario">
						<td class="thCampo1" id="tdFormulario">La empresa analiza e identifica el o (los ) producto y/o servicio
						(s) que le (s) genera más rentabilidad y volúmen de ventas</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

						<td class="tablaAnsorft"><input type="text" name=""></td>

					</tr>
										<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="granTotal" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="pesorpesoPonderado" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="totalcalificacion" class="tablacamFortalezas totales"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
		</fieldset>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 

{{-- <script>    
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script> --}}

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
