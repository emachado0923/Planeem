@extends('layouts.nav2')
@section('content')
<header>
	@yield('js')
	@section('f')

	<a href="{{ route('vista2') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modalDofa')
</header>
<!-- botones -->
<section class="EPE">
	<div class="analisisEfi">
		<button class="EFI animated rotateIn"><h1>DOFA</h1></button>

		<a class="verde" id="fo" data-toggle="modal" data-target="#exampleModalFo"><img value="mostrarfo" onclick="mostrarfo()" src="img/FO.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco"><h5>Estrategia FO</h5></div></a>
		<a class="verde" id="da" data-toggle="modal" data-target="#exampleModalDa"><img value="mostrarda" onclick="mostrarda()" src="img/DA.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco1"><h5>Estrategia DA</h5></div></a>
		<a class="verde" id="do" data-toggle="modal" data-target="#exampleModalDo"><img value="mostrardo" onclick="mostrardo()" src="img/DO.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco"><h5>Estrategia DO</h5></div></a>
		<a class="verde" id="fa" data-toggle="modal" data-target="#exampleModalFa"><img value="mostrarfa" onclick="mostrarfa()"src="img/FA.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco"><h5>Estrategia FA</h5></div></a>
	</div>
	<!-- contenedores -->
	<div class="row">
		<div class="col-md-6 conte1">
			<div class="botonopo1" value="Fortalezas_ventana" data-toggle="modal" data-target="#exampleModal55">
				<h3 style="color: black;margin-left: 38%;"> 
					<img src="img/icono1.png" style="width: 38px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
				</h3>
				<div class="scrollfortaleza3">
					<h2 style="color: black;font-size: 47px;font-weight: bold;">Fortalezas + Amenazas</h2>
				</div>
			</div>
		</div>
		<div class="col-md-6 conte2">
			<div class="botonopo1" value="Oportunidades_ventana" data-toggle="modal" data-target="#exampleModal5">
				<h3 style="color: black;margin-left: 38%;"> 
					<img src="img/icono1.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
				</h3>
				<div class="scrollfortaleza3">
					<h2 style="color: black;font-size: 44px;font-weight: bold;">Fortalezas + Oportunidades</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 conte3">
			<div class="botonopo" value="Debilidades_ventana" data-toggle="modal" data-target="#exampleModal7">
				<h3 style="color: black;margin-left: 33%;"> 
					<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
				</h3>
				<div class="scrollfortaleza3">
					<h2 style="color: black;font-size: 42px;font-weight: bold;">Debilidades + Oportunidades</h2>
				</div>
			</div>
		</div>
		<div class="col-md-6 conte4">
			<div class="botonopo" value="Amenazas_ventana" data-toggle="modal" data-target="#exampleModal6">
				<h3 style="color: black;margin-left: 32%;"> 
					<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
					<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
				</h3>
				<div class="scrollfortaleza">
					<h2 style="color: black;font-size: 42px;font-weight: bold; text-align: center;">Debilidades + Amenazas</h2>

				</div>
			</div>
		</div>
		<a  style="color:white;" name="nuevo" class="botonDofa btn btn-planeem waves-effect waves-light">Siguiente</a>
	</div>
</section>
<div class="infon">
</div>
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
