
@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')

	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
</header>

	<div class="contenedor4">
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">Análisis de las 5 Fuerzas de Porter </h1>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">
            En este modelo se establece un marco para analizar el nivel de competencia que tienen
            las empresas dentro de una industria, para poder desarrollar una estrategia de negocio.
            Este análisis deriva en la respectiva articulación de las 5 fuerzas que determinan la
            intensidad de competencia y rivalidad en una industria, y, por lo tanto, en cuan atractiva
            es esta industria en relación con oportunidades de inversión y rentabilidad.</p>
	</div>

	<a href="{{ route('analisisporter') }} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>

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
					<ol style="line-height: 17px; margin-top: 05px;">
						<b style="color: black; font-weight: bold;">Desarrollo del Análisis de las 5 Fuerzas de Porter</b>
						<br><p style="padding: 10px;line-height: 23px;margin-left:-10px;width: 100%;font-size: 18px;text-align: justify;">
                <br>        A continuación, encontrará diferentes perspectivas relacionadas con cada una de las 5 fuerzas de la matriz:<br>
						<br>
                        1: Poder de negociación de los proveedores o vendedores.<br>
                        2: Poder de negociación de los clientes o compradores.<br>
                        3: Productos Sustitutos.<br>
                        4: Amenazas de entrada de nuevos competidores.<br>
                        5: Rivalidad entre competidores.<br>

                        Lo invitamos a dar una calificación a cada uno de los factores para evaluar su nivel de
                        competencia a través de los siguientes pasos:<br>
                        1) Identifique si los factores mencionados representan para su empresa una oportunidad o amenaza.<br>
                        2) Después se debe asignar una calificación a cada factor considerando su importancia.
                        de la siguiente manera: A (si es alto), M (si es medio), B (si es bajo). En caso de no aplicar se puede marcar la opción N/A.<br><br>
                        ¡Empecemos!
</p>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(7)').addClass("acti");
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
@endsection
