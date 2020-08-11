@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')


	@yield('progres')
</header>
<section class="contenedorAsociar">
	<h1 style="text-align: center;">Objetivos con Estrategias Seleccionadas</h1>
	<div class="objetivos_conten1">

		
		@foreach ($formulacionFinal as $formulacion)
					<div class="resumenObjetivos">
						
		<input type="text" class="objetivoTexto" value="{{$formulacion[0]->Objetivos}}" parrafo="{{json_encode($formulacion) }}">
						
					</div>
		@endforeach

		{{-- <div class="resumenObjetivos">
			<input type="text" class="objetivoTexto" name="" parrafo="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo">
		</div>
		<div class="resumenObjetivos">
			<input type="text" class="objetivoTexto" name="" parrafo="lo logre">
		</div> --}}
	</div>
</div>
<div class="hover2">
	<h2 style="text-align: center; margin-top: 30%; ">Tus Estrategias</h2>
	
</div>

</section>
<form action="{{ route('resumenDos') }}" method="POST">
	@csrf
	 <input type="text" name="id_planecion" id="id_planecion" hidden> 								
																																																																																																																																																																																																																																																																																																																																>
	<button type="submit" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>

</form>

@jquery
@toastr_js
@toastr_render

<label type="text" id="nombre"></label><br>                          
<!-- Modal -->
</div>
</form>

</div>


@yield('script')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 

<script>    
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script>





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


<script>
    var id = localStorage.getItem('id')
    $('#id_planecion').val(id);
    // console.log(id);

    id_planecion = localStorage.getItem('id')
    $('#id_Planeacion').val(id_planecion);
    // console.log(id_planecion);
</script>
@endsection