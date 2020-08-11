@extends('layouts.nav2')
@section('content')
<header>
    @yield('js')
    @include('modal/modal')
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
  .hover2{
	width: 64%;
  }
  </style>
<section class="contenedorAsociar">
	<h1 style="text-align: center;">Mis estrategias DOFA</h1>
	<div class="dofa_conten1">
		<div class="resumenDOFA">
			<i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
				style="margin-left: 7%;position: inherit;font-size: 1.5em;"></i>
			<input type="text" class="dofaTexto" name="" placeholder="Ofensivas FO" readonly>
		</div>
		<div class="resumenDOFA">
			<i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
				style="margin-left: 7%;position: inherit;font-size: 1.5em;"></i>
			<input type="text" class="dofaTexto" name="" placeholder="Defensivas FA" readonly>
		</div>
		<div class="resumenDOFA">
			<i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
				style="margin-left: 7%;position: inherit;font-size: 1.5em;"></i>
			<input type="text" class="dofaTexto" name="" placeholder="Cimentación DO" readonly>
		</div>
		<div class="resumenDOFA">
			<i data-toggle="modal" data-target="#exampleModal4" class="icon-info"
				style="margin-left: 7%;position: inherit;font-size: 1.5em;"></i>
			<input type="text" class="dofaTexto" name="" placeholder="Supervivencia DA" readonly>
		</div>
	</div>
	</div>
	<div class="hover2">
		<h2 style="text-align: center;margin-top: 15%;">Tus estrategias</h2>

	</div>

</section>
<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
<button data-toggle="modal" data-target="#modalRelatedContent" type="submit"
    class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
<!--Modal: modalRelatedContent-->
<div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="false">
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
                        <a href="{{ route('diagnosticoEstra') }}"
                            class="buttonModal btn btn-planeem waves-effect waves-light">Si</a>
                        <a id="no" class="buttonModal btn btn-planeem waves-effect waves-light">No</a>
                        <form method="post" role="from" action="{{ route('index/plam') }}">
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
    #modalAvance {
        border-radius: 18px !important;
        width: 126%;
    }
</style>

<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">
                    PROPUESTA DE VALOR</h5>
                <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
            </div>
            <div class="modal-body">
                <p>Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente
                    imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir,
                    pero en
                    mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado
                    lo
                    que determinan sus expectativas personales a la hora de comprar
                    a través de ella determinarás lo que diferencia tu producto o servicio de la competencia, además que
                    te
                    ayudará a encontrar la forma en que atenderás a tus clientes o segmento de mercado. (Saavedra, 2017)
                </p>
            </div>
        </div>
    </div>
</div>


@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function () {
        $('.dofaTexto').mouseenter(function () {
            let parrafo = $(this).attr('parrafo');

            $('.hover2').html(`
			<table class="table">
		<thead>
			<tr class="first-row">
				<th scope="col" style="border: none;"></th>
				<th scope="col" class="text-center rotate">Estrategia</th>
				<th scope="col" style="border: none;"></th>
				<th scope="col" style="border: none;"></th>
				<th scope="col" class="text-center rotate">Selección</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row" style="border: none;"></th>
				<td style="width: 49%;"><div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">1</span>
	  </div>
	  <input type="text" class="form-control" placeholder="Enunciado"  aria-describedby="basic-addon1">
	</div></td>
				<td>
				</td>
				<td>
				</td>
				<td>
					<label class="radio">
						<input type="radio" name="radio0">
						<span class="check" style="left: 38%;"></span>
					</label>
				</td>
  </tr>
  <tr>
				<th scope="row" style="border: none;"></th>
				<td style="width: 49%;"><div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">2</span>
	  </div>
	  <input type="text" class="form-control" placeholder="Enunciado"  aria-describedby="basic-addon1">
	</div></td>
				<td>
				</td>
				<td>
				</td>
				<td>
					<label class="radio">
						<input type="radio" name="radio1">
						<span class="check" style="left: 38%;"></span>
					</label>
				</td>
			</tr>
		</tbody>
</table>
			`)
            $('.hover2').show()
            $('p').addClass("resumenObjetivos2");

        })
        $('.dofaTexto').mouseleave(function () {

            $('.hover2').show()
        })
    })
</script>
<script>
    $(document).ready(function () {
        $('.items li:nth-child(15)').addClass("acti");
        $('.items li').click(function () {
            $('.items li').removeClass("acti");
            $(this).addClass("acti");
        })

        $('.valores').mouseenter(function () {
            let mensaje = $(this).attr('mensaje');

            $('.hover').html(`<p>${mensaje}</p>`)
            $('.hover').show()
        })

        $('.valores').mouseleave(function () {

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