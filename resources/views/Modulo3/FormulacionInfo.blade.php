@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')

	<div style=" text-align: center;">
		<h2 class="parrafoII" style="position: absolute; left: 41%; top: 35%;">Formulación de Estrategias</h2>
	</div>
	<div>
		<p class="parrafito">	Una estrategia se compone de una serie de acciones planificadas que ayudan a tomar decisiones y alcanzar los mejores resultados posibles. Las estrategias definen como se van a obtener los objetivos empresariales de una organización siguiendo una ruta de actuación. Por ello se les conoce como el puente que hay entre los objetivos y las tácticas para llegar a la meta. 
			Recuerda: El Objetivo: Es el Qué. + La Estrategia: A través de qué.
			</p>
	</div>


	<form   method="post"  role="from" action="{{route('FormulacionAsociar')}}" >
		@csrf
		<h1 id="id_planecion"></h1>
	<input name="id_planecion" id="id_planecion"  value="{{$id_planecion}}"  >
		<button   style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>

	</form>

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
					<ol style="line-height: 17px; margin-top: 33px;">
					
						<br><br>
						A continuación, se presentan dos recuadros. El primero con los objetivos construidos en el paso anterior, y el segundo, con las estrategias resultantes en el  proceso del diagnóstico realizado en el módulo 2. Usted debe seleccionar por objetivo aquellas estrategias que considere necesarias para alcanzar el mismo. No existe límite en la selección de las estrategias, pueden ser tantas como usted considere pertinentes.  
						<br><br>
						<b style="color: black; font-weight: bold;">Nota:</b> Para realizar la selección, simplemente debe colocar el número del objetivo en las estrategias, de esta manera el sistema lo tomará.</b>	
					</ol>
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
		$('.items3 li:nth-child(2)').addClass("acti3");
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

@endsection

@push('script')

<script>
	var id = localStorage.getItem('id');
	$('id_planecion').val(id);
	

	function capacidadInterna(){
		document.getElementById("btn1").click();
	}
</script>


@endpush

