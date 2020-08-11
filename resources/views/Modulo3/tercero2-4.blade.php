@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')
	<style>

.tabla6 input[type="radio"] {
    display: none;
}

.tabla6 .radio label {
    width: 27px;
    margin-left: 54px !important;
    padding: 0px 0px 4px;
    color: black !important;
    display: inline-block;
    justify-content: center;
    position: relative;
    font-size: 1.3em;
    border-radius: 3px;
    cursor: pointer;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.tabla6 .radio label:hover {
    border-radius: 50%;
    background: rgba(0, 116, 217, 0.2);
}

.tabla6 input[type="radio"]:checked+label:before {
    /* display: none; */
}

.tabla6 .radio label:before {
    content: "";
    width: 27px;
    height: 27px;
    display: flex;
    background: none;
    border: 3px solid #0AB5A0;
    border-radius: 50%;
    position: absolute;
    left: -5px;
    top: 4px;
}

.tabla6 input[type="radio"]:checked+label {
    padding: 0px 0px;
    text-align: center;
    margin-left: 48px !important;
    border-radius: 50%;
    background: #FC7323;
    border-radius: 18px;
    color: white !important;
}
    </style> 


</header>
<form method="post"  role="from" action="{{route('guardarResumenDos')}}" > 
@csrf
<div id="tablaEstrategia">
	<div id="regiration_form">
		<fieldset>
			<div>
				<h3 style="text-align: center;">POSICIONAMIENTO</h3>
				<br>	
				<input type="text" name="idPlaneacion" id="idPlaneacion"  hidden value="{{$id_planecion}}">
			
				<table  class="egt" id="tabla">
				<thead>
						<tr>
							<th class="thCampo" class="objetivoTexto" colspan="2" style="text-align: center;" rowspan="2" id="">Objetivos</th>
							<th class="thCampo" colspan="4" style="text-align: center;">Tiempo</th>
						</tr>
						<tr>
							<th class="thCampo" style="text-align: center;">Largo plazo</th>
							<th class="thCampo" style="text-align: center;">Mediano plazo</th>
							<th class="thCampo" style="text-align: center;">Corto plazo</th>
							<th class="thCampo" style="text-align: center;">No aplica</th>
						</tr>
					</thead>
					<tbody>
									
						<p hidden>{{$contador=0}}</p>
							@foreach ($objetivos1 as $objetivos1)
							<tr class="tabla6">

							<input type="text" name="id_planecion" id="id_Planeacion[{{$contador}}]" value="{{$id_planecion}}" hidden >
							<input type="text" name="id_respustaverbos[{{$contador}}]" id="id_respustaverbos[{{$contador}}]" value="{{$objetivos1->id_respustaverbos}}" hidden> 
							{{-- <input type="text" name="Objetivos[{{$contador}}]" id="Objetivos[{{$contador}}]" value="{{$objetivos1->Objetivos}}" hidden>  --}}
						
							<td colspan="2"parrafo="" style="text-align: center;" class="thCampo1">{{$objetivos1->Objetivos}}</td>
							

							<td class="radio">
								<input type="radio" name="calificacion[{{$contador}}]" id="a-{{$contador}}" value="largo">
								<label for="a-{{$contador}}">A</label>
							</td>
							
							<td class="radio">
								<input type="radio" name="calificacion[{{$contador}}]" id="b-{{$contador}}" value="mediano">
								<label for="b-{{$contador}}">B</label>
							</td>
							
							<td class="radio">
								<input type="radio" name="calificacion[{{$contador}}]" id="c-{{$contador}}"  value="corto">
								<label for="c-{{$contador}}">C</label>
							</td>
							
							<td class="radio">
								<input type="radio" name="calificacion[{{$contador}}]" id="d-{{$contador}}"  value="noaplica">
								<label for="d-{{$contador}}">D</label>
							</td>
						</tr>	
						

						<p hidden>	{{$contador++}}</p>
						
						@endforeach
					</tbody>
					</div>
				</table>
			</div>
		
		</fieldset>
		
		<button type="submit" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
	</form>

	</div>
</div>

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
				<p style="padding: 10px;line-height: 23px;margin-left: 10px;width: 100%;font-size: 18px;text-align: justify;">
					En este espacio se habilitará una vista con cada objetivo y sus respectivas estrategias donde deberá indicar el tiempo de ejecución para estas: corto, mediano, largo plazo o no aplica. 
					<br><br><b style="color: black; font-weight: bold;">Nota:</b> Tenga en cuenta el periodo de la planeación para que pueda determinar los tiempos

				</p>			
			</div>
		</div>
	</div>
</div>

<label type="text" id="nombre"></label><br>                          
<!-- Modal -->


@yield('script')

<style >
	body{

		background-image: url("../img/fondoLogo.jpg");
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}

</style>

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
	$(document).ready(function(){
		var planeacion = localStorage.getItem('id');
		$(".idPlaneacion").val(planeacion);
		console.log(planeacion);
	});
</script>
@endsection