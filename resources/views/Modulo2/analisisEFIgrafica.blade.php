
@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modalGrafica')
    <input type="text" style="dysplay:none" id="empresa"  >
<input type="text" style="dysplay:none" id="totalPuntuacion">
<input type="text" id="totalPuntuacion1" style="dysplay:none">
</header>
<section id="containerGrafica2">
	<div id="TituloGrafica"><h2>Análisis EFE y EFI</h2></div>
<div class="btn-group-vertical">

  <button class="botonesGrafica" style="background: #0AB5A0; outline: none;" data-toggle="modal" data-target="#exampleModalCenter"></button>
  <button class="botonesGrafica" style="background: #FC7323; outline: none;" data-toggle="modal" data-target="#exampleModalCenter1"></button>
  <button class="botonesGrafica" style="background: #238276; outline: none;" data-toggle="modal" data-target="#exampleModalCenter2"></button>
</div>
	<div id="containerGrafica"></div>
</section>
<style type="text/css">
	.btn-group-vertical {
    position: absolute;
    margin: 180px 109px;
    z-index: 23;
	}
</style>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
                    var id = localStorage.getItem('id');
                    $.ajax({
                        url:"/graficas/"+id,
                        type:'get',
                        success:function(data){
                            if(data != null){
                                for(i of data){
                                  
                                        var data = google.visualization.arrayToDataTable([
                                        ['ID', 'X', 'Y', 'Burbuja'],  
                                        ['su puta madre', 2.4,  3.4, 3.1],
                                        ]);
                                }       
                            }
                        }		
                });
        var chart = new google.visualization.BubbleChart(document.getElementById('chart_div'));
        chart.draw(data,);
      }
    </script>
  </head>
	<button  href="{{ route('analisisDOFA') }} "  type="submit" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>
<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

			</div>
			<div class="modal-body">
				<p>
					Como realizar la calificación de la Matriz PCI (Perfil de Capacidad interna)

					Para realizar la calificación de la matriz se debe seleccionar la capacidad, identificar si
					es una fortaleza o debilidad para la empresa, luego si:
					<br><br>
					1. Es una fortaleza se debe calificar D si es débil (débil), M si es (media) y A si es (alta)
					<br>
					2. Es debilidad debo calificar si es D si es débil (débil), M si es (media) y A si es (alta)
					Luego, se califica que impacto tiene esa debilidad o fortaleza para la empresa: D(débil),
					M (media), A(alta)
				</p>
			</div>
		</div>
	</div>

</section>
@yield('script')


@endsection