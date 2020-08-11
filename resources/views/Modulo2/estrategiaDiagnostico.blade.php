@extends('layouts.nav2')
@section('content')
  <header>
    @yield('js')

  </header>
  <style>
    .table {
    width: 90%;
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
  
  .radio input {
    right: 94%;
      position: absolute;
      opacity: 0;
      cursor: pointer;
  }
  
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
  
  .radio:hover input ~ .check {
      border: 2px solid #FC7323;
  }
  
  .radio input:checked ~ .check {
      background-color: #FC7323;
      border:none;
  }
  
  .radio .check:after {
      content: "";
      position: absolute;
      display: none;
  }
  
  .radio input:checked ~ .check:after {
      display: block;
  }
  </style>
<section class="contenedorper5">
	<span class="icon-info" data-toggle="modal"  data-target="#estrategiaDiagnostico" style="cursor:pointer;"></span>
	<br>
	<form method="post" role="from"  id="formulario" action="{{route('estrategia5') }}">
		@csrf
		<input type="text" id="id_planecion" name="id_planecion" hidden>

			<div id="regiration_form">
				<fieldset class="opciones">
			<div>
				
					<div>
					<h1>{{$estrategia2}}</h1>
					<br><br><br>
					<table class="table">
						<thead>
							<tr class="first-row">
								<th scope="col" style="border: none;"></th>
					<th scope="col" class="text-center rotate">Concepto</th>
					<th scope="col" style="border: none;"></th>
					<th scope="col" style="border: none;"></th>
								<th scope="col" class="text-center rotate">Selección</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($estrategia1 as $estrategia)	
							<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;"><div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">*</span>
							</div>
							<input type="text" class="form-control" placeholder="{{$estrategia->descripcion}}"  aria-describedby="basic-addon1">
							</div></td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<label class="radio">
									<input type="checkbox" name="id_estrategias[]"  id="id_estrategias" value="{{$estrategia->id_estrategias}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
				
				</tbody>
			</table>
			</div>
					<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
					<button data-toggle="modal" data-target="#modalRelatedContent"  class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Finalizar</button>
				{{-- </fieldset> --}}
			
			</div>
		</section>
		<div class="modal fade" id="estrategiaDiagnostico" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				  <div class="modal-content modal-modificadoEFI ">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle"></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
									<span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
								</button>
							</div>
		  
							<div class="modal-body">
								  <h2 style="margin: 12px;">{{$estrategia3}}</h2><br>
								  <p style="font-size: 21px;text-align: justify;">
									{{-- Estrategias del resultado del análisis EFI y EFE. En este espacio usted podrá encontrar y seleccionar aquellas estrategias asociadas al cuadrante en el cual se ubicó en el resultado del diagnóstico de esta matriz. --}}
									<br>
									{{$estrategia4}}
								  </p>
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
				<h4>Ha finalizado con la selección de las estrategias de la matriz EFI y EFE,</h4> 
					<p>lo invitamos a continuar con la asociación y selección de estrategias DOFA<i class="fas fa-dice-five    "></i>:</p>
					
				<br>
					<button type="submit" class="buttonModal btn btn-planeem waves-effect waves-light" hidden>Si</button>
					<button id="no" class="buttonModal btn btn-planeem waves-effect waves-light" hidden>No</button>

					
				
		</form>

		
		{{-- <div id="cargando"><!-- Respuesta AJAX --></div> --}}
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

	<span class="icon-info" data-toggle="modal"  data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
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


@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
@jquery
@toastr_js
@toastr_render
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
