<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	{{--  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">  --}}
	<link rel="stylesheet" href="{{asset('./css/toastr/toastr.min.css')}}">
	<script src="{{asset('js/toastr/toastr.min.js')}}"></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Scripts de la grafica -->
	{{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['ID', 'X', 'Y', 'Burbuja'],
          ['',   2.8,  3.4, 3.1],
        ]);

       /* var options = {
          colorAxis: {colors: ['yellow', 'red']},
          sizeAxis:  {minValue: 1.0,  maxSize: 4},
        };*/

        var chart = new google.visualization.BubbleChart(document.getElementById('containerGrafica'));
        chart.draw(data,);
      }
    </script> --}}
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	{{-- links del header planeem --}}
	<link rel="icon" type="image/png" href="{{asset('img/icono.png')}}">
	<!--bootstrap css-->
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!--custom css-->
	<!--select-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/estilos_modulo1.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/loader.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/estilos_resposiveII.css')}}">
	<!-- mdbootstrap -->
	<link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!--[if lte IE 9]>
        <link href='{{asset('css/animations-ie-fix.css')}}' rel='stylesheet'>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
</head>
@jquery
@toastr_js
@toastr_render
<body>
	<div id="page-loader"><span class="preloader-interior"></span></div>
	<div id="app">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
				{{-- <a href="{{ route('index') }}/#top" class="logoPlaneem d-flex justify-content-center align-items-center mr-2"> --}}
					<div class="boxSep mr-2">
						<div class="imgLiquidFill imgLiquid">
							<img src="{{asset('img/icono.png')}}" style="vertical-align: baseline; width: 50px; height:50px"
							alt="logo PlaneƎm">
						</div>
					</div>
					<h1 class="h1-responsive tituloQueEs fuenteTitulo d-flex align-items-center verde m-0">Plane<span
						class="naranja planeem">E</span>m</h1>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">

					<div class="navbar-collapse">
						<ul class="navbar-nav ml-auto mr-md-3">
							@if (Route::has('login'))
							@auth
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->username }}<span class="icon-switch"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Cerrar sesión') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endauth
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</header>
</div>
<br><br><br><br>


<div class="menu_header">
	<input type="checkbox" id="btn-menu">
	<label for="btn-menu"><span class="icon-list2" style="color: white;"></span></label>
	<nav class="SegundoConten3">
		<form method="post" style="display:none"		role="from" action="{{route('index/plam')}}">
			@csrf
			<input type="text" id="nombre_proyecto" name="nombre_proyecto">
			<button id="btn31" type="submit"></button>
		</form>
		<a onclick="index()" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>

		<h4 class="Diagnostico">Diagnóstico Estratégico</h4>
		<h5 style=" color: #238276;" >Análisis Interno</h5><hr style=" background: #238276; width: 53%; margin-top: -12px; ">
		<ul class="items">
			<li><a id="linkid"><h6 style="font-size: 17px;">Perfil Capacidad Interna</h6><span class="rounded-circle">01</span></a></li>


			<li><a id="linkid2"><h6 style="font-size: 17px;"> Perfil Competitivo</h6><span class="rounded-circle">02</span></a></li>

			<li><a id="linkid3" ><h6 style="font-size: 17px;">Evaluación Factores Internos</h6><span class="rounded-circle">03</span></a></li>
			<h5 style=" color: #238276;" >Análisis Externo</h5><hr style=" background: #238276; width: 53%; margin-top: -12px; ">
			<li><a id="linkid4" ><h6 style="font-size: 17px;">Análisis Pestal</h6><span class="rounded-circle">04</span> </a></li>

			<li><a><h6 style="font-size: 17px;"> Análisis Porter</h6><span class="rounded-circle">05</span></a></li>

			<li><a><h6 style="font-size: 17px;">Matriz de Crecimiento</h6><span class="rounded-circle">06</span></a></li>

			<li><a><h6 style="font-size: 17px;">Evaluación Factores Externos</h6><span class="rounded-circle">07</span></a></li>
			<h5 style=" color: #238276;" >Resultados del Diagnóstico</h5><hr style=" background: #238276; width: 93%; margin-top: -12px; ">
			<li><a><h6 style="font-size: 17px;">Resultado Análisis EFI y EFE</h6><span class="rounded-circle">08</span></a></li>

			<li><a><h6 style="font-size: 17px;">Resultado Análisis DOFA</h6><span class="rounded-circle">09</span></a></li>

			<li><a><h6 style="font-size: 17px;">Resultado Análisis Matriz de Crecimiento</h6><span class="rounded-circle">10</span></a></li>
			<!-- El primer cambio en el nav2-->
			<li><a><h6 style="font-size: 17px;">Diseño Mis Estrategias</h6><span class="rounded-circle">11</span></a></li>
		</ul>
		<a data-toggle="modal" data-target="#exportar" href="#" id="boton2" value="Exportar" onclick="Mostra_Oculta()" class="exportar btn btn-planeem waves-effect waves-light">Exportar</a>
	</nav>
</div>
@jquery
@toastr_js
@toastr_render
<!--modal pregunta-->
<div class="modal fade" id="exportar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-header">
				<h2 class="modal-title" id="exampleModalLabel" style="margin: 0 auto; font-weight: bold;">Seleccione su formato de exportación</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
					<span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px; cursor: pointer;"></span>
				</button>
			</div>
			<div class="modal-body" style="margin: 0 auto;">
				<a type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong1word">
					<img class="word" src="img/word.png">
				</a>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.modal-modificado1 {
		border: #0AB5A0 2px solid !important;
		border-radius: 12px !important;
		width: 115%!important;
		height: 225px !important;
		margin-top: 50% !important;
		margin-left: 0 !important;
	}
</style>

<!--modal  pdf -->

	<form method="post"  role="from" action="{{route('createpdf')}}" >
		@csrf
	<div class="modal fade" id="exampleModalLong1pdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content5 ">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>

				<div class="modal-body">
					<div class="modulo1">
						<textarea name="nombre_proyecto2" id="nombre_proyecto2" style="display:none"  ></textarea>
							<h2>Módulo 1</h2>
					</div>
					<div>
						<div class="barrita" ><h4 style="font-size: 16px;">Propuesta de valor</h4></div>
						<input class="barritache"  type="checkbox" style="cursor: pointer;" name="Propuesta_valor" value="Propuesta_valor">
					</div>
					<div>
						<div class="barrita2"><h4 style="font-size: 15px;">Misión Organizacional</h4></div>
						<input class="barritache2" type="checkbox" name="Mision_Organizacional" value="Mision_Organizacional" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita3"><h4 style="font-size: 15px;">Visión Organizacional</h4></div>
						<input class="barritache3" type="checkbox" style="cursor: pointer;" name="Vision_Organizacional" value="Vision_Organizacional">
					</div>
					<div>
						<div class="barrita4"><h4 style="font-size: 15px;">Mega Empresarial</h4></div>
						<input class="barritache4" type="checkbox" style="cursor: pointer;" name="Mega_Empresarial" value="Mega_Empresarial" >
					</div>
					<div>
						<div class="barrita5"><h4 style="font-size: 15px;">Valores Corporativos</h4></div>
						<input class="barritache5" type="checkbox" style="cursor: pointer;" name="v" value="v">
					</div>
				<div class="modulo2">
						<h2>Módulo 2</h2>
					</div>
					<div class="modulo2_scroll">
						<div>
							<div>
								<div class="barrita6"><h4 style="font-size: 15px;">Análisis PCI</h4></div>
								<input class="barritache6" type="checkbox"  style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita7"><h4 style="font-size: 15px;">Análisis PC</h4></div>
								<input class="barritache7" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita8"><h4 style="font-size: 15px;">Evalución MEFI</h4></div>
								<input class="barritache8" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita9"><h4 style="font-size: 15px;">Análisis Pestal</h4></div>
								<input class="barritache9" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita10"><h4 style="font-size: 15px;">Análisis Porter</h4></div>
								<input class="barritache10" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita21"><h4 style="font-size: 15px;">Análisis Ansorff</h4></div>
								<input class="barritache21" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita22"><h4 style="font-size: 15px;">Evalución MEFE</h4></div>
								<input class="barritache22" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita23"><h4 style="font-size: 15px;">Análisis EFI y EFE</h4></div>
								<input class="barritache23" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita24"><h4 style="font-size: 15px;">Análisis DOFA</h4></div>
								<input class="barritache24" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita25"><h4 style="font-size: 15px;">Análisis Ansorff</h4></div>
								<input class="barritache25" type="checkbox" style="cursor: pointer;">
							</div>
							<!-- El segundo cambio en el nav2-->
							<div>
								<div class="barrita26"><h4 style="font-size: 15px;">Diseño Mis Estrategias</h4></div>
								<input class="barritache26" type="checkbox" style="cursor: pointer;">
							</div>
						</div>
					</div>
					<div class="modulo3">
						<h2>Módulo 3</h2>
					</div>
					<div>
						<div class="barrita11"></div>
						<input class="barritache11" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita12"></div>
						<input class="barritache12" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita13"></div>
						<input class="barritache13" type="checkbox" style="cursor: pointer;">
					</div>
					<div class="modulo4">
						<h2>Módulo 4</h2>
					</div>
					<div>
						<div class="barrita16"></div>
						<input class="barritache16" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita17"></div>
						<input class="barritache17" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita18"></div>
						<input class="barritache18" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita19"></div>
						<input class="barritache19" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita20"></div>
						<input class="barritache20" type="checkbox" style="cursor: pointer;">
					</div>

					<button class="exportar24 btn btn-planeem waves-effect waves-light">Exportar</button>
				</div>
			</div>
		</div>
	</div>
</form>





	<!--exportar word--->
	<form method="post"  role="from" action="{{route('createWord')}}" >
		@csrf
	<div class="modal fade" id="exampleModalLong1word" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content5 ">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>

				<div class="modal-body">
					<div class="modulo1">
						<textarea name="nombre_proyecto" id="nombre_proyecto3" style="display:none" ></textarea>
							<h2>Módulo 1</h2>
					</div>
					<div>
						<div class="barrita" ><h4 style="font-size: 16px;">Propuesta de valor</h4></div>
						<input class="barritache"  type="checkbox" style="cursor: pointer;" name="Propuesta" value="Propuesta_valor">
					</div>
					<div>
						<div class="barrita2"><h4 style="font-size: 15px;">Misión Organizacional</h4></div>
						<input class="barritache2" type="checkbox" name="Mision" value="Mision_Organizacional" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita3"><h4 style="font-size: 15px;">Visión Organizacional</h4></div>
						<input class="barritache3" type="checkbox" style="cursor: pointer;" name="Vision" value="Vision_Organizacional">
					</div>
					<div>
						<div class="barrita4"><h4 style="font-size: 15px;">Mega Empresarial</h4></div>
						<input class="barritache4" type="checkbox" style="cursor: pointer;" name="Mega" value="Mega_Empresarial" >
					</div>
					<div>
						<div class="barrita5"><h4 style="font-size: 15px;">Valores Corporativos</h4></div>
						<input class="barritache5" type="checkbox" style="cursor: pointer;" name="valores" value="v">
					</div>
					<div class="modulo2">
						<h2>Módulo 2</h2>
					</div>
					<div class="modulo2_scroll">
						<div>
							<div>
								<div class="barrita6"><h4 style="font-size: 15px;">Análisis PCI</h4></div>
								<input class="barritache6" type="checkbox"  style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita7"><h4 style="font-size: 15px;">Análisis PC</h4></div>
								<input class="barritache7" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita8"><h4 style="font-size: 15px;">Evalución MEFI</h4></div>
								<input class="barritache8" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita9"><h4 style="font-size: 15px;">Análisis Pestal</h4></div>
								<input class="barritache9" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita10"><h4 style="font-size: 15px;">Análisis Porter</h4></div>
								<input class="barritache10" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita21"><h4 style="font-size: 15px;">Análisis Ansorff</h4></div>
								<input class="barritache21" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita22"><h4 style="font-size: 15px;">Evalución MEFE</h4></div>
								<input class="barritache22" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita23"><h4 style="font-size: 15px;">Análisis EFI y EFE</h4></div>
								<input class="barritache23" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita24"><h4 style="font-size: 15px;">Análisis DOFA</h4></div>
								<input class="barritache24" type="checkbox" style="cursor: pointer;">
							</div>
							<div>
								<div class="barrita25"><h4 style="font-size: 15px;">Análisis Ansorff</h4></div>
								<input class="barritache25" type="checkbox" style="cursor: pointer;">
							</div>
							<!-- El tercer cambio en el nav2-->
							<div>
								<div class="barrita26"><h4 style="font-size: 15px;">Diseño Mis Estrategias</h4></div>
								<input class="barritache26" type="checkbox" style="cursor: pointer;">
							</div>
						</div>
					</div>
					<div class="modulo3">
						<h2>Módulo 3</h2>
					</div>
					<div>
						<div class="barrita11"></div>
						<input class="barritache11" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita12"></div>
						<input class="barritache12" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita13"></div>
						<input class="barritache13" type="checkbox" style="cursor: pointer;">
					</div>
					<div class="modulo4">
						<h2>Módulo 4</h2>
					</div>
					<div>
						<div class="barrita16"></div>
						<input class="barritache16" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita17"></div>
						<input class="barritache17" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita18"></div>
						<input class="barritache18" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita19"></div>
						<input class="barritache19" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita20"></div>
						<input class="barritache20" type="checkbox" style="cursor: pointer;">
					</div>

					<button class="exportar24 btn btn-planeem waves-effect waves-light">Exportar</button>
				</div>
			</div>
		</div>
	</div>
</form>


<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>

<header>

	
	{{-- @include('modal/modal') --}}
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>

</header>
<section class="contenedorper5">
	<div id="regiration_form">
	<form id="form" action="{{ route('Evaluacion')}}" method="POST" role="form">
	<input type="text" value="{{$id}}" name="id_Planeacion" style="display:none">
		@csrf
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#fe3" class="icon-info" id="infoAnsorft3"></span>Factores externos Clave</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#o1" class="icon-info" id="infoAnsorft4"></span>Oportunidades</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Ponderación<span data-toggle="modal" data-target="#ponderacion" class="icon-info" id="infoAnsorft"></span></th>
						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#calificacion1" class="icon-info" id="infoAnsorft1"></span></th>
						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Puntuación Ponderada<span data-toggle="modal" data-target="#peso" class="icon-info" id="infoAnsorftExternos"></span></th>

					</tr>

				</thead>
				<tbody>
				@foreach ($Oportunidades as $Oportunidades )
				<tr  id="material0{{$Oportunidades->id}}"  class="formulario material0">
				<input type="text" value="Oportunidades" name="tipo[]"  style="display:none">
				<input type="text" value="{{$Oportunidades->id}}" name="id_respuesta[]"  style="display:none">
							<td class="thCampo1">{{$Oportunidades->nombre}}</td>
								<td style="border: none;"></td>
								<td class="tablaAnsorft"><input type="text"  name="Peso_Relativo[]" id="pesoPonderado" onkeypress="return solonumeros(event)" required class = ' pesoPonderado cantidad_req0' onkeyup='obtTotalMat0({{$Oportunidades->id}})'></td>
								<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo"  onkeypress="return solonumeros(event)" required class = 'pesoRelativo valor_unitreq0' onkeyup='obtTotalMat0({{$Oportunidades->id}})'></td>
								<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" id="calificacion" onkeypress="return solonumeros(event)" class = 'calificacion valor_totreq0' onchange='calcTotal0()'></td>
							</tr>
				@endforeach
				<tr class="totalFortaleza">
					<th >Total</th>
					<td style="border: none;"></td>
					<td class="tdclassFortaleza"><textarea readonly name="totalCalificacion" onkeypress="return solonumeros(event)" id="pesorpesoPonderado0" class="tablacamFortalezas"></textarea></td>
					<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion" onkeypress="return solonumeros(event)" id="totalcalificacion0" class="tablacamFortalezas"></textarea></td>
					<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad1" onkeypress="return solonumeros(event)" id="granTotal0" class="tablacamFortalezas totales"></textarea></td>
				</tr>
				</tbody>
			</table>
			<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#fe3" class="icon-info" id="infoAnsorft3"></span>Factores externos Clave</th>
						<th colspan="1"style="border: none;"></th>
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#a1" class="icon-info" id="infoAnsorft4"></span>Amenazas</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Ponderación<span data-toggle="modal" data-target="#ponderacion" class="icon-info" id="infoAnsorft"></span></th>
						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#calificacion1" class="icon-info" id="infoAnsorft1"></span></th>
						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Puntuación Ponderada<span data-toggle="modal" data-target="#peso" class="icon-info" id="infoAnsorftExternos"></span></th>

					</tr>

				</thead>
				<tbody>

					@foreach ($Amenazas as $Amenazas )
					<tr  id="material1{{$Amenazas->id}}"  class="formulario material1">
						<input type="text" value="Amenazas" name="tipo[]"  style="display:none">
						<input type="text" value="{{$Amenazas->id}}" name="id_respuesta[]" style="display:none" >
									<td class="thCampo1">{{$Amenazas->nombre}}</td>
										<td style="border: none;"></td>
										<td class="tablaAnsorft"><input type="text" onkeypress="return solonumeros(event)" name="Peso_Relativo[]" id="pesoPonderado" required class = ' pesoPonderado cantidad_req1' onkeyup='obtTotalMat1({{$Amenazas->id}})'></td>
										<td class="tablaAnsorft"><input type="text" onkeypress="return solonumeros(event)" name="Calificación[]" id="pesoRelativo"  required class = 'pesoRelativo valor_unitreq1' onkeyup='obtTotalMat1({{$Amenazas->id}})'></td>
										<td class="tablaAnsorft"><input type="text" onkeypress="return solonumeros(event)" name="Peso_Ponderado[]" id="calificacion" class = 'calificacion valor_totreq1' onchange='calcTotal1()'></td>
									</tr>
						@endforeach
						<tr class="totalFortaleza">
							<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea readonly name="totalCalificacion" onkeypress="return solonumeros(event)"  id="pesorpesoPonderado1" class="tablacamFortalezas"></textarea></td>
							<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion" onkeypress="return solonumeros(event)" id="totalcalificacion1" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad1" onkeypress="return solonumeros(event)" id="granTotal1" class="tablacamFortalezas totales"></textarea></td>
						</tr>
		
				
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="submit" id="submitButton" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
		</fieldset>
		
	</form>

<!-- modales De la vista----------->
		<!-----Modales Iniciales------------->
		{{-- <div class="modal fade" id="fe1" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px"; >El Peso Relativo:</p>
							<p>Cada factor crítico de éxito debe tener un peso relativo que oscila entre 0,0
							   (poca importancia) a 1.0 (alta importancia).
								El número indica la importancia que tiene el factor en la industria.</p>
						</div>
					</div>
				</div>
			</div>
		</div>   

		<div class="modal fade" id="fe2" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px"; >El Peso Relativo:</p>
							<p>Cada factor crítico de éxito debe tener un peso relativo que oscila entre 0,0
							   (poca importancia) a 1.0 (alta importancia).
								El número indica la importancia que tiene el factor en la industria.</p>
						</div>
					</div>
				</div>
			</div>
		</div>    --}}

		<div class="modal fade" id="fe3" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px"; >Los Factores Claves :</p>
							<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

								Son las áreas claves, que deben llevarse al nivel más alto posible de excelencia si la empresa quiere tener éxito en una industria en particular. <br>
								Estos factores varían entre diferentes industrias o incluso entre diferentes grupos estratégicos e incluyen tanto factores internos como externos. </p>
						</div>
					</div>
				</div>
			</div>
		</div>   
		
		

		<!------------------>

<div class="modal fade" id="peso" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-modificado1">
            <div class="modal-body">
                <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
                    <p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px"; >Puntuación Ponderada:</p>
					<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

					Es la multiplicación de la ponderación por la calificación asignada (esta es automática)
						
					
					</p>
                </div>
            </div>
        </div>
    </div>
</div>   
		  
<div class="modal fade" id="calificacion1" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-modificado1">
            <div class="modal-body">
                <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
					<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px"; >Calificación:</p>
					<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 15px;text-align: justify;">

					Asignar una calificación a cada variable, esta calificación es de 1 a 4. Siendo:<br>
						<br>1.=Mayor debilidad
						<br>2.=Menor debilidad
						<br>3.=Menor fuerza
						<br>4.=Mayor fuerza
						
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ponderacion" tabindex="-8" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 9000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-modificado1">
            <div class="modal-body">
                <div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
                    <p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px"; >Ponderación:</p>
                    <p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

						Asigne un peso entre 0.0 (no importante) hasta 1.0 (muy importante), el peso otorgado a cada factor expresa la importancia relativa del mismo, y el total de todos los pesos en su conjunto debe tener la suma de 1.0.
					 </p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="a1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
	<div class="modal-dialog" role="document">
	  <div class="modal-content modal-modificado1">
		<div class="modal-body">
		  <div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
			<p class="Nota">Amenazas:<br> 
				Son aquellas situaciones provenientes del entorno que pueden afectar la actuación de la compañía de alguna manera.</p>
		  </div>
		</div>
	  </div>
	</div>
  </div>

<div class="modal fade" id="f1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
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

  <div class="modal fade" id="d1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
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
  
 

<div class="modal fade" id="o1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
	<div class="modal-dialog" role="document">
	  <div class="modal-content modal-modificado1">
		<div class="modal-body">
		  <div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
			<p class="Nota">Oportunidades:<br> 
				Son aquellos factores que resultan positivos o favorables del entorno en el que interactúa la empresa y que permiten obtener ventajas competitivas.
			</p>			
		  </div>
		</div>
	  </div>
	</div>
  </div>




<!-- Fin modales De la vista----------->


	</div>
</section>

{{-- aca va el contenido de los modales pequeños --}}
{{-- <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span> --}}
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
					<p style="padding: 10px;line-height: 23px;margin-left: -10px;width: 100%;font-size: 18px;text-align: justify;">

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
			</p>
			</div>
		</div>
	</div>
</div>
</section>
@yield('script')

<script src=" {{asset('js/toastr.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="{{asset('js/Validaciones/valid.js')}}"></script>
<script>

	$(document).ready(function () {
	 $('.items li:nth-child(9)').addClass("acti");
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
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script> --}}

{{-- <script>
	function guardar(){


		if (document.getElementById('Para_paso1').value == 0) {

			document.getElementById("id").innerHTML = "error";

		}else{
			var miDato = document.getElementById('Para_paso1').value;
			localStorage.setItem('Para',miDato);
			localStorage.setItem('Progreso','10%');
		}
	};
</script> --}}



<script src="{{asset('js/solo_numeros.js')}}"></script>




<script>
    //fieldset 1
    function obtTotalMat0(index){
        if($("#material0"+index+" .cantidad_req0").val() > 1 || $("#material0"+index+" .cantidad_req0").val() < 0 ){
            toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
        }else if($("#material0"+index+" .valor_unitreq0").val() > 4 || $("#material0"+index+" .valor_unitreq0").val() > 4){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
        }else{
         
            var Relativo  = $("#material0"+index+" .cantidad_req0").val();
           
            var Calificación = $("#material0"+index+" .valor_unitreq0").val();
      
            var tot = ($("#material0"+index+" .cantidad_req0").val()) * $("#material0"+index+" .valor_unitreq0").val();
			tot = tot.toFixed(1);

           $("#material0"+index+" .valor_totreq0").val(tot);

        }
        calcTotal0();
    }
    
    function calcTotal0() {
            var tot = 0;
            var Relativo = 0;
            var Calificación = 0;

            $(".material0 .valor_totreq0").each(function () {
                tot+=Number($(this).val());
            });

            $(".material0 .cantidad_req0").each(function () {
                Relativo+=Number($(this).val());
            });

            $(".material0 .valor_unitreq0").each(function () {
                Calificación+=Number($(this).val());
            });
			
			tot = tot.toFixed(1);
			Relativo = Relativo.toFixed(1);
			Calificación = Calificación.toFixed(1);

            $("#granTotal0").val(tot);
            $("#pesorpesoPonderado0").val(Relativo);
			$("#totalcalificacion0").val(Calificación);
			

			if( $("#pesorpesoPonderado0").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }
	

			}


			
			
			
	if( $("#pesorpesoPonderado0").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }

	</script>
	
	<script>
		//fieldset 2
		function obtTotalMat1(index){
			if($("#material1"+index+" .cantidad_req1").val() > 1 || $("#material1"+index+" .cantidad_req1").val() < 0 ){
				toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')

			}else if($("#material1"+index+" .valor_unitreq1").val() > 4 || $("#material1"+index+" .valor_unitreq1").val() > 4){
				toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')

			}else{
			 
				var Relativo  = $("#material1"+index+" .cantidad_req1").val();
			   
				var Calificación = $("#material1"+index+" .valor_unitreq1").val();
		  
				var tot = ($("#material1"+index+" .cantidad_req1").val()) * $("#material1"+index+" .valor_unitreq1").val();

				tot = tot.toFixed(1);

			   $("#material1"+index+" .valor_totreq1").val(tot);
	
			}
			calcTotal1();
		}
		
		function calcTotal1() {
				var tot = 0;
				var Relativo = 0;
				var Calificación = 0;
	
				$(".material1 .valor_totreq1").each(function () {
					tot+=Number($(this).val());
				});
	
				$(".material1 .cantidad_req1").each(function () {
					Relativo+=Number($(this).val());
				});
	
				$(".material1 .valor_unitreq1").each(function () {
					Calificación+=Number($(this).val());
				});

				
			tot = tot.toFixed(1);
			Relativo = Relativo.toFixed(1);
			Calificación = Calificación.toFixed(1);
	
				$("#granTotal1").val(tot);
				$("#pesorpesoPonderado1").val(Relativo);
				$("#totalcalificacion1").val(Calificación);
	
				}

				
			if( $("#pesorpesoPonderado1").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }
	
		</script>




<!-- 		
	<script>
///////Oportunidades

		function obtTotalMat0(index){
						if($("#material0"+index+" .cantidad_req0").val() == " "){
							toastr.error('El peso Ponderado es obligatorio', '!Hola')
						}

						if($("#material0"+index+" .valor_unitreq0").val() == " "){
							toastr.error('El peso pesoRe lativo', '!Hola')
						}

						if($("#material0"+index+" .cantidad_req0").val() > 1|| $("#material0"+index+" .cantidad_req0").val() < 0 ){
							toastr.error('error el numero no pudede ser mayor a 1', '!')
						}else if($("#material0"+index+" .valor_unitreq0").val() > 4 || $("#material0"+index+" .valor_unitreq0").val() < 0){
							toastr.error('error el numero no pudede ser mayor a 4', '!')
						}else{
						
							var Relativo  = $("#material0"+index+" .cantidad_req0").val();
						
							var Calificacion = $("#material0"+index+" .valor_unitreq0").val();
					
							var tot = ($("#material0"+index+" .cantidad_req0").val())* $("#material0"+index+" .valor_unitreq0").val();
						$("#material0"+index+" .valor_totreq0").val(tot);

						}
						calcTotal0();
					}


			function calcTotal0() {
				var tot0 = 0;
				var Relativo0 = 0;
				var Calificacion0 = 0;

				$(".material0 .valor_totreq0").each(function () {
					tot0+=Number($(this).val());
				});

				$(".material0 .cantidad_req0").each(function () {
					Relativo0+=Number($(this).val());
				});

				$(".material0 .valor_unitreq0").each(function () {
					Calificacion0+=Number($(this).val());
				});

				$("#granTotal0").html(tot0);
				$("#pesorpesoPonderado0").html(Relativo0);
				$("#totalcalificacion0").html(Calificacion0);
				}




///////Amenazas
				function obtTotalMat1(index){
					if($("#material1"+index+" .cantidad_req1").val() == " "){
						toastr.error('El peso Ponderado es obligatorio', '!Hola')
					}

					if($("#material1"+index+" .valor_unitreq1").val() == " "){
						toastr.error('El peso pesoRe lativo', '!Hola')
					}

					if($("#material1"+index+" .cantidad_req1").val() > 1 || $("#material1"+index+" .cantidad_req1").val() < 0 ){
						
					toastr.error('error el numero no pudede ser mayor a 1', '!')
					}else if($("#material1"+index+" .valor_unitreq1").val() > 4 || $("#material1"+index+" .valor_unitreq1").val() > 4){
						
					toastr.error('error el numero no pudede ser mayor a 4', '!')
					}else{

						var Relativo1 = $("#material1"+index+" .cantidad_req1").val();

						var Calificacion1 = $("#material1"+index+" .valor_unitreq1").val();

						var tot1 = ($("#material1"+index+" .cantidad_req1").val()) $("#material1"+index+" .valor_unitreq1").val();
					$("#material1"+index+" .valor_totreq1").val(tot1);

					}
					calcTotal1();
					}


					function calcTotal1() {
					var tot1 = 0;
					var Relativo1= 0;
					var Calificacion1 = 0;

					$(".material1 .valor_totreq1").each(function () {
					tot1+=Number($(this).val());
					});

					$(".material1 .cantidad_req1").each(function () {
					Relativo1+=Number($(this).val());
					});

					$(".material1 .valor_unitreq1").each(function () {
					Calificacion1+=Number($(this).val());
					});

					$("#granTotal1").html(tot1);
					$("#pesorpesoPonderado1").html(Relativo1);
					$("#totalcalificacion1").html(Calificacion1);
			}
	</script> -->



<style >
	body{

		background-image: url({{asset('img/fondoLogo.jpg')}}) !important;
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}
</style>





<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- scripts de la grafica efi -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{{-- script de los items(pasos) --}}
<script src="{{asset('js/items_plus/items.js')}}"></script>
{{-- script para agregar nuevos valores --}}
<script src="{{asset('js/valores/agregar.js')}}"></script>
{{-- script para la ventana de exportar --}}
<script src="{{asset('js/valores/exportar.js')}}"></script>
{{-- script para cerrar ventanas --}}
<script src="{{asset('js/valores/cerrar.js')}}"></script>
{{-- script para editar valores --}}
<script src="{{asset('js/valores/editar.js')}}"></script>
{{-- script de información --}}
<script src="{{ asset('/js/plugins/toastr/toastr.js') }}" ></script>
{{-- ffghff --}}
<script src="{{asset('js/valores/info.js')}}"></script>
{{-- script para cerrar ventanas --}}
<script src="{{asset('js/valores/cancelar.js')}}"></script>
{{-- script de información --}}
<script src="{{asset('js/valores/infon.js')}}"></script>
{{--  <script src="{{asset('js/valores/select.js')}}"></script>  --}}
{{-- script del acordeon --}}
<script src="{{asset('js/valores/main.js')}}"></script>
{{-- remover clase --}}
<script src="{{asset('js/valores/remover.js')}}"></script>
<script src="{{asset('js/valores/steps.js')}}"></script>

<script src="{{asset('js/valores/ocultar_Mostrar.js')}}"></script>



<script>
	$(window).load(function(){
		$('#page-loader').fadeOut(11);
	});
</script>

<script>
	var nombre_proyecto = localStorage.getItem('nombre_proyecto');
	var id_Planeacion = localStorage.getItem('id');
	$('#nombre_proyecto').val(nombre_proyecto);
	$('#nombre_proyecto2').html(id_Planeacion);
	$('#nombre_proyecto3').html(id_Planeacion);

		function index(){
			document.getElementById('btn').click()
		}

</script>

<script>
	$(document).ready(function(){
		var current = 1,current_step,next_step,steps;
		steps = $("fieldset").length;
		$(".next").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			next_step.show();
			current_step.hide();
			setProgressBar(++current);
		});
		$(".previous").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().prev();
			next_step.show();
			current_step.hide();
			setProgressBar(--current);
		});
		setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
  	var percent = parseFloat(100 / steps) * curStep;
  	percent = percent.toFixed();
  	$(".progress-bar")
  	.css("width",percent+"%");
  }
});

</script>

<script>
	var nombre_proyecto = localStorage.getItem('nombre_proyecto');
	var id_Planeacion = localStorage.getItem('id');
	$('#nombre_proyecto').val(nombre_proyecto);
	$('#nombre_proyecto2').html(id_Planeacion);
	$('#nombre_proyecto3').html(id_Planeacion);



		function index(){
			document.getElementById('btn31').click()
		}

	</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@include('flash-message')
@stack('script')


</body>





</html>
