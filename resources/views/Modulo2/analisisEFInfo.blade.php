@extends('layouts.nav2')

@section('content')
<header>

	<div class="parrafitoEfe" >
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">Matriz EFE y EFI</h1>
		<br><br>
		
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">A continuación, se le habilitará una gráfica con información de los resultados obtenidos después del desarrollo de las matrices de evaluación de factores internos y externos, este análisis le permitirá visualizar la posición estratégica de su negocio.
		Resultado EFI Y EFE	</p>
	</div>
	<form id="form" style="display:none" action="{{ route('analisisEFIgrafica')}}" method="POST" role="form">
		@csrf
		<input type="text" name="id_Planeacion" value="{{$id_Planeacion}}">
		<button type="submit" id="btn1"></button>
	</form> 
		<a href="{{route('analisisEFIgrafica')}}" onclick="analisisEFI()" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
	
		<input style="display: none" id="suma1" type="text" value="{{ $suma1 }}">
		<input style="display: none" id="suma2" type="text" value="{{ $suma2 }}">

	
	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					Resultado de diagnóstico 
					Es la suma de todas las calificaciones que se desarrollaron con éxito en todas las matrices anteriores.
					En este espacio encontrara el análisis EFI y EFE, análisis Dofa y análisis de la matriz de crecimiento que le permitirán seleccionar y construir estrategias para su empresa teniendo en cuenta sus debilidades, fortalezas, oportunidades y amenazas.
					Lo invitamos para que explore estos resultados.

				</div>
			</div>
		</div>
	</div>
	
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(12)').addClass("acti");
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
	$suma1 = $('#suma1').val();
	localStorage.setItem('grafica11',$suma1)

	$suma2 = $('#suma2').val();
	localStorage.setItem('grafica22',$suma2)
</script>	
<script>



 $( document ).ready(function() {
	 var id = localStorage.getItem('id');
		var suma = 0;

	 $.ajax({
		 url:"/grafica/"+id,
		 type:'get',
		 success:function(data){
					 //	$('.val1').val(data);
					 //console.log(data);

					 if(data != null){
						 for(i of data){
							 var respuesta = parseInt(i.respuesta);
								 suma += respuesta/4;
								 
						 }
						 console.log(suma);
						localStorage.setItem('grafica',suma)
					 }
				 }
		   


			 });

	 })   
</script>
@endsection
