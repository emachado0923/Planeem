@extends('layouts.nav2')
@section('content')
  <header>
    @yield('js')
   
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
  </header>
  <style>
	.select {
    position: relative;
    border: 1px solid #ccc;
    width: 100%;
    height: 48px;
    overflow: hidden;
    background-color: #fff;
    outline: none;
}
  
.select:before {
    content: '';
    position: absolute;
    right: 5px;
    top: 20px;
    width: 0;
	height: 0;
    border-style: solid;
    border-width: 7px 5px 0 5px;
    border-color: #000000 transparent transparent transparent;
    z-index: 5;
    pointer-events: none;
}
  
.select select {
	padding: 5px 8px;
	outline: none;
	width: 100%;
	height: 48px;
    border: none;
	box-shadow: none;
    background-color: transparent;
    background-image: none;
    appearance: none;
}
</style>
<form method="post"  role="from" action="{{route('ofensivas')}}">
	@csrf
<section class="contenedorper5">
	<div id="regiration_form">
		<span class="icon-info" data-toggle="modal"  data-target="#vtodo" style="cursor:pointer;"></span>

	
		<fieldset class="opciones">
			
			<div>
				<h2>Estrategias Ofensivas FO = F+O 
					<img src="img/icono1.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
					
				</h2>
				<span class="icon-info" data-toggle="modal"  data-target="#v1" style="
					cursor:pointer;   
					left: -650px;
					position: relative;
					top: -78px;
					bottom:100px;
					width: 70px;"></span>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#f" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Fortalezas</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#o" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Oportunidades</th>
						</tr>
					</thead>
					

					<tbody>
						@foreach ($fortaleza as $fortaleza)


						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="hidden" name="tipo[]" value="FO">
									<input type="hidden" name="id_Planeacion[]" value="{{ $id_Planeacion }}">
									<input type="hidden" name="id_respuesta_capacidad[]" value="{{ $fortaleza->id }}">
									
									<input type="text" class="form-control" placeholder="{{ $fortaleza->nombre }}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select name="id_respuesta_analisis[]">
										<option value="">Escoger:</option>
										@foreach ($oportunidad as $a)
										<option value="{{ $a->id }}">{{ $a->nombre }}</option>
										@endforeach
									
									</select>
								  </div>
							</td>
						</tr>
							
						@endforeach
		
			
					</tbody>
				</table>
			</div>
			<button type="button"
				class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		{{-- <span class="icon-info" data-toggle="modal"   data-target="#v1" style="cursor:pointer;"></span> --}}
		<fieldset class="opciones">
			
			<br>
			<div>
				<h2>Estrategias Defensivas FA = F+A
					<img src="img/icono1.png" style="width: 38px;margin-top: -16px;">
          			<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
          			<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
				</h2>
				<span class="icon-info" data-toggle="modal"  data-target="#v2" style="
				cursor:pointer;   
				left: -650px;
				position: relative;
				top: -78px;
				bottom:100px;
				width: 70px;"></span>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#f" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Fortalezas</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#a" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Amenazas</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($fortaleza2 as $fortaleza2)


						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="hidden" name="tipo[]" value="FA">
									<input type="hidden" name="id_Planeacion[]" value="{{ $id_Planeacion }}">
									<input type="hidden" name="id_respuesta_capacidad[]" value="{{ $fortaleza2->id }}">
									<input type="text" class="form-control" value="{{ $fortaleza2->nombre }}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select name="id_respuesta_analisis[]">
										<option value="">Escoger:</option>
										@foreach ($amenaza as $c)
										<option value="{{ $c->id }}">{{ $c->nombre }}</option>
										@endforeach
									</select>
								  </div>
							</td>
						</tr>
							
						@endforeach
	
					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			
			<br>
			<div>
				<h2>Estrategias Adaptativas  DO = D+O
					<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
          			<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
				</h2>
				<span class="icon-info" data-toggle="modal"  data-target="#v3" style="
				cursor:pointer;   
				left: -600px;
				position: relative;
				top: -78px;
				bottom:100px;
				width: 70px;"></span>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#d" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Debilidades</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#o" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Oportunidades</th>
						</tr>
					</thead>
					<tbody>



						@foreach ($debilidad as $debilidad)


						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="hidden" name="id_Planeacion[]" value="{{ $id_Planeacion }}">
									<input type="hidden" name="tipo[]" value="DO">
									<input type="hidden" name="id_respuesta_capacidad[]" value="{{ $debilidad->id }}">
									<input type="text" class="form-control" value="{{ $debilidad->nombre }}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select name="id_respuesta_analisis[]">
										<option value="">Escoger:</option>
										@foreach ($oportunidad2 as $t)
										<option value="{{ $t->id }}">{{ $t->nombre }}</option>
										@endforeach
									
									</select>
								  </div>
							</td>
						</tr>

							
						@endforeach

					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			
			<br>
			<div>
				<h2>Estrategias supervivencia DA = D+A
					<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
          			<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
					  
				</h2>
				<span class="icon-info" data-toggle="modal"  data-target="#v4" style="
				cursor:pointer;   
				left: -600px;
				position: relative;
				top: -78px;
				bottom:100px;
				width: 70px;"></span>
			
				<table class="table">
					
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#d" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Debilidades</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#a" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Amenazas</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($debilidad2 as $debilidad2)


						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="hidden" name="tipo[]" value="DA">
									<input type="hidden" name="id_respuesta_capacidad[]" value="{{$debilidad2->id }}">
									<input type="hidden" name="id_Planeacion[]" value="{{ $id_Planeacion }}">

									<input type="text" class="form-control" value="{{ $debilidad2->nombre }}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select name="id_respuesta_analisis[]">
										<option value="">Escoger:</option>
										@foreach ($amenaza2 as $u)
										<option value="{{ $u->id }}">{{ $u->nombre }}</option>
										@endforeach
									
									</select>
								  </div>
							</td>
						</tr>
							
						@endforeach


					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button data-toggle="modal" data-target="#modalRelatedContent" type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
		</fieldset>
	</form>
	</div>
</section>


	<div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-body">
			<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				<p class="Nota">Amenazas:<br> Son factores del entorno que resultan en circunstancias adversas que ponen en riesgo el alcanzar los objetivos establecidos, pueden ser cambios o tendencias que se presentan repentinamente o de manera paulatina, las cuales crean una condición de incertidumbre e inestabilidad en donde la empresa tiene muy poca o nula influencia, las amenazas también, pueden aparecer en cualquier sector como en la tecnología, competencia agresiva, productos nuevos más baratos, restricciones gubernamentales, impuestos, inflación, etc.</p>
			</div>
			</div>
		</div>
		</div>
	</div>
  


<div class="modal fade" id="f" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
	<div class="modal-dialog" role="document">
	  <div class="modal-content modal-modificado1">
		<div class="modal-body">
		  <div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
			<p class="Nota">Fortaleza: <br>Es algo en lo que la organización es competente, se traduce en aquellos elementos o factores que estando bajo su control, mantiene un alto nivel de desempeño, generando ventajas o beneficios presentes y claro, con posibilidades atractivas en el futuro. Las fortalezas pueden asumir diversas formas como: recursos humanos maduros, capaces y experimentados, habilidades y destrezas importantes para hacer algo, activos físicos valiosos, finanzas sanas, sistemas de trabajo eficientes, costos bajos, productos y servicios competitivos, imagen institucional reconocida, convenios y asociaciones estratégicas con otras empresas, etc.</p>
		  </div>
		</div>
	  </div>
	</div>
  </div>


  <div class="modal fade" id="d" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
	<div class="modal-dialog" role="document">
	  <div class="modal-content modal-modificado1">
		<div class="modal-body">
		  <div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
			<p class="Nota">Debilidad:<br> Significa una deficiencia o carencia, algo en lo que la organización tiene bajos niveles de desempeño y por tanto es vulnerable, denota una desventaja ante la competencia, con posibilidades pesimistas o poco atractivas para el futuro. Constituye un obstáculo para la consecución de los objetivos, aun cuando está bajo el control de la organización. Al igual que las fortalezas éstas pueden manifestarse a través de sus recursos, habilidades, tecnología, organización, productos, imagen, etc.</p>
		  </div>
		</div>
	  </div>
	</div>
  </div>

	<div class="modal fade" id="o" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-body">
			<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				<p class="Nota">Oportunidades:<br> Son aquellas circunstancias del entorno que son potencialmente favorables para la organización y pueden ser cambios o tendencias que se detectan. Las oportunidades pueden presentarse en cualquier ámbito, como el político, económico, social, tecnológico, etc., dependiendo de la naturaleza de la organización, pero en general, se relacionan principalmente con el aspecto mercado de una empresa.
				</p>
			</div>
			</div>
		</div>
		</div>
	</div>

	<div class="modal fade" id="v1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-body">
			<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				Las Estrategias Ofensivas (FO) 	son las que potencian las fortalezas de un negocio aprovechando las oportunidades para obtener una ventaja competitiva a través de actuaciones agresivas contra rivales competidores antes de que estos puedan establecer una estrategia defensiva. En estas estrategias es necesario aprovechar al máximo las fortalezas.

				<br><br>Tenga en cuenta que no es necesario realizar el cruce de todas las variables, solo aquellas que usted considere pertinentes							</div>
			</div>
		</div>
		</div>
	</div>

	<div class="modal fade" id="v3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-body">
			<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				Las Estrategia Adaptativas (DO) permiten mejorar las debilidades internas al aprovechar las oportunidades externas con el fin de fortalecer las áreas deficientes de la empresa y así poder aprovechar las oportunidades. En estas estrategias se deben realizar acciones que permitan fortalecer los procesos internos de la organización y de esta manera generar acciones que permitan el desarrollo o penetración en el mercado.

				<br><br>Tenga en cuenta que no es necesario realizar el cruce de todas las variables, solo aquellas que usted considere pertinentes							</div>
			</div>
		</div>
		</div>
	</div>

	<div class="modal fade" id="v4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-body">
			<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				Las Estrategia de Supervivencia (DA son la suma de los puntos débiles tanto internos como externos de la empresa, es un buen punto de partida para comprender la posición de un negocio en relación con la competencia. En estas estrategias se deben realizar acciones enfocadas a la disminución de las debilidades internas de la empresa para mitigar las amenazas del entorno a través de tácticas defensivas. 

				<br><br>Tenga en cuenta que no es necesario realizar el cruce de todas las variables, solo aquellas que usted considere pertinentes				
			</div>
			</div>
		</div>
		</div>
	</div>

	<div class="modal fade" id="v2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-body">
			<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				Las Estrategias Defensivas (FA permiten aprovechar las fortalezas para evitar o afrontar las amenazas del entorno con el fin de proteger los activos de la empresa, la infraestructura, los recursos humanos y financieros. En estas estrategias es necesario realizar alianzas para minimizar los riesgos y reducir costos.

				<br><br>Tenga en cuenta que no es necesario realizar el cruce de todas las variables, solo aquellas que usted considere pertinentes
							</div>
			</div>
		</div>
		</div>
	</div>

	<div class="modal fade" id="vtodo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
		<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-body">
			<div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
				La matriz DOFA permite desarrollar 4 tipos de estrategias teniendo en cuenta el resultado del diagnóstico de su empresa.1: Estrategias Ofensivas, 2: Estrategias Defensivas, 3: Estrategias Adaptativas y 4: Estrategias de Supervivencia.
				<br><br>Tenga en cuenta que no es necesario realizar el cruce de todas las variables, solo aquellas que usted considere pertinentes	
			</div>
			</div>
		</div>
		</div>
	</div>

  

<!--Modal: modalRelatedContent-->
<div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
  <div class="modal-content" id="modalAvance">
    <div class="modal-header" style="background: #0AB5A0  !important;">
      <p class="heading">Alerta!</p>

      <span class="icon-cancel-circle" style="color:white; font-size: 32px; cursor: pointer; margin-top: 4px;
      margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-5">
          <img src="../img/icono2.png" style="width: 65%;">
        </div>

        <div class="col-7" style="margin: 0 auto;">
			<h4>Muy bien ha terminado la asociación de las estrategias DOFA,</h4>
			<p> 
				 Lo invitamos a seleccionar las estrategias que considere pertinentes para cumplir con los objetivos de su empresa. 
			</p>
			<br>
			{{-- <button type="submit"  class="buttonModal btn btn-planeem waves-effect waves-light" hidden>Si</button>
				<a id="no" class="buttonModal btn btn-planeem waves-effect waves-light"hidden>No</a> --}}
		</div>
      </div>
    </div>
  </div>
</div>
</div>
<style>
  #modalAvance{
    border-radius: 18px !important;
    width: 126%;
  }
</style>

	
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">PROPUESTA DE VALOR</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
				</div>
				<div class="modal-body">
					<p>Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente
						imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir, pero en
						mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado lo
						que determinan sus expectativas personales a la hora de comprar
						a través de ella determinarás lo que diferencia tu producto o servicio de la competencia, además que te
					ayudará a encontrar la forma en que atenderás a tus clientes o segmento de mercado. (Saavedra, 2017)</p>
				</div>
			</div>
		</div>
	</div>
	@jquery
	@toastr_js
	@toastr_render

@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
    $('.items li:nth-child(15)').addClass("acti");
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


<script>
  var id = localStorage.getItem('id')
  $('#id_planecion').val(id);
  console.log(id);

  id_planecion = localStorage.getItem('id')
  $('#id_Planeacion').val(id_planecion);
  console.log(id_planecion);
</script>
  
@endsection
