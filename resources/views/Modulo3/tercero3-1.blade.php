@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')
<form action="{{ route('objetivosEstrategias') }}" method="post">
	@csrf

	
	<div style=" text-align: center;">
		{{-- <h2 class="parrafoII" style="position: absolute; left: 41%; top: 35%;">Resultados de estrategias</h2>--}}
		<h1 class="parrafoII" style="position: absolute; left: 41%; top: 35%;">Acciones Estratégicas </h1>	
		
	</div>
	
	<br><div>
		
		<p class="parrafito">Las acciones estratégicas son determinantes en el cumplimiento de los objetivos planteados debido a que  estas permiten desarrollar la estrategia. De esta manera se empieza a implantar en la organización todas las acciones necesarias contempladas en la planeación que llevarán a la organización al cumplimiento de sus objetivos empresariales. 

			<br><br>
			<b style="color: black; font-weight: bold;">Recuerda:</b> Objetivo: Es el Qué. + Estrategia: A través de qué. +Táctica: Es el Cómo.
			
			<input type="text" class="id" name="id" id="id" hidden>
			
		</p>
	</div>
{{-- 
	href="{{ route('tercero3-2') }} " --}}
	<button  style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>

	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
</form>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 17px; margin-top: 47px;">
						<b style="color: black; font-weight: bold;"></b>
						<br><br>
						Es este espacio de acciones estratégicas se pretende identificar las tácticas que permitirán desarrollar la estrategia y a su vez cumplir con los objetivos propuestos. Para ello el sistema le mostrará los objetivos con las estrategias seleccionadas, usted deberá seleccionar una estrategia a la vez.					</ol>
				</div>
			</div>
		</div>
	</div>
	
</section>

@jquery
@toastr_js
@toastr_render

@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 



<script>
	$(document).ready(function () {
		$('.items3 li:nth-child(3)').addClass("acti3");
		$('.items3 li').click(function () {
			$('.items3 li').removeClass("acti3");
			$(this).addClass("acti3");
			
			
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
	$(document).ready(function(){
		var planeacion = localStorage.getItem('id');
		$(".id").val(planeacion);
		console.log(planeacion);
	});


</script>
@endsection
