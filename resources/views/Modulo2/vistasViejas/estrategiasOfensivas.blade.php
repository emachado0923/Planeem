@extends('layouts.nav2')
@section('content')
  <header>
    @yield('js')
    @include('modal/modal')
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
<section class="contenedorper5">
	<div id="regiration_form">
		<fieldset class="opciones">
			<div>
				<h2>Estrategias Ofensivas FO = F+O 
					<img src="img/icono1.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
				</h2>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Fortalezas</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Oportunidades</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">1</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								  </div>
							</td>
						</tr>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">2</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button type="button"
				class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<div>
				<h2>Estrategias Defensivas FA = F+A
					<img src="img/icono1.png" style="width: 38px;margin-top: -16px;">
          			<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
          			<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
				</h2>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Fortalezas</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Amenazas</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">1</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								  </div>
							</td>
						</tr>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">2</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<div>
				<h2>Estrategias Cimentacion DO = D+O
					<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
          			<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
				</h2>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Debilidades</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Oportunidades</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">1</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								  </div>
							</td>
						</tr>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">2</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<div>
				<h2>Estrategias supervivencia DA = D+A
					<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
          			<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
          			<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
				</h2>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Debilidades</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate"><i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
								style="margin-left: 0%;position: inherit;font-size: 1.0em;margin-right: 14px;"></i>Amenazas</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">1</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								  </div>
							</td>
						</tr>
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">2</span>
									</div>
									<input type="text" class="form-control" placeholder="Enunciado"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								<div class="select">
									<select>
									  <option value="">Escoger:</option>
									  <option value="opcion-1">Opción 1</option>
									  <option value="opcion-2">Opción 2</option>
									  <option value="opcion-x">Opción X</option>
									</select>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button data-toggle="modal" data-target="#modalRelatedContent" type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
		</fieldset>
	</form>
	</div>
</section>
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
          <h4>¡Ha finalizado las estrategias!</h4> 
			<p> Continuar con estrategias
				Dofa:</p>
			  
          <br>
		  <a href="{{ route('diagnosticoEstra') }}"  class="buttonModal btn btn-planeem waves-effect waves-light">Si</a>
		  <a id="no" class="buttonModal btn btn-planeem waves-effect waves-light">No</a>
		   <form method="post"  		role="from" action="{{route('index/plam')}}">
				@csrf
				<input type="text" id="nombre_proyecto" name="nombre_proyecto">
				<button id="btn" type="submit"></button>
		  </form>
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
