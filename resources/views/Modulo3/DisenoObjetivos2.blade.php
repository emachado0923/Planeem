@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')
	@include('modal/modal3')
</header>


	<div style=" text-align: center;">
	
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">Diseño de Objetivos</h1>
	<br><br>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">
			Los objetivos son indicaciones concretas que  la empresa pretende alcanzar  en un determinado periodo de tiempo. Estos deben ser específicos. Cuantificables y alcanzables. En un determinado plazo. Además, deben estar encaminados al cumplimiento de la Misión, Visión y  Mega empresarial.
			<br><br><b style="text-align: center; font-weight: bold;">	Recuerda: El Objetivo: </b> Es el Qué.<br>
		</p>
	</div>

	<form method="post"  role="from" action="{{route('Verbos')}}" >
            @csrf
                <textarea name="nombre_proyecto" style="color:white" id="nombre_proyecto" cols="30" rows="10"></textarea>
                <button type="submit"  style="color:white;" name="nuevo" class="Ahora_pensa2 btn btn-planeem waves-effect waves-light">Siguiente</button>
			</form>
			<span class="icon-info" data-toggle="modal" data-target="#disenoobjetivo2" style="cursor:pointer;"></span>

			<div class="modal fade" id="disenoobjetivo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
							<span class="icon-cancel-circle" style="color:#FC7323; font-size: 28px; cursor: pointer; margin-top: 2px;
							margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
	
						</div>
						<div class="modal-body">
							<p style="padding: 10px;line-height: 23px;margin-left: 10px;width: 100%;font-size: 12px;text-align: justify;">
								Existen 3 tipos de objetivos fundamentales que usted podrá construir:
								<br>1. Objetivos estratégicos: Aquí se plantean objetivos que persiguen el crecimiento del negocio y su sostenibilidad en el tiempo, 
								<br>2. Objetivos tácticos: Corresponden al nivel de los departamentos que conforman la estructura organizacional. (Área Administrativa, Producción, Comercial y Mercadeo, Financiera, Contable, Talento Humano, Logística y Soporte Técnico), 
								<br>3. Objetivos operativos: Son trazados directamente por los jefes de cada departamento y son de carácter específico. (Se trata de objetivos cuyo cumplimiento se da por parte del trabajador u operario).  
								<br>	
								<br>Se recomienda para la construcción de los objetivos considerar todas las áreas o procesos de la organización. (Proceso Administrativo, de Producción, Comercial y de Mercadeo, Financiero, Contable, Recursos Humanos, y Logístico).
								
							
							</p>
						</div>
					</div>
				</div>

	

</section>

@yield('script')

<script>
	$(document).ready(function () {
		$('.items3 li:nth-child(1)').addClass("acti3");
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
	var nombre = localStorage.getItem('id');
	document.getElementById('nombre_proyecto').innerHTML =  nombre;

	
</script>




@endsection
