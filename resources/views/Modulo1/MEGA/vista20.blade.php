@extends('layouts.nav')

@section('content')

<header>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>

</header>
<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
<script src=" {{asset('js/toastr.js')}}"></script>
<div class="form-group">
	<div class="contenedor3 was-validated">
		<textarea maxlength="1000"  id="Mega" class="campo form-control is-invalid" name="Objetivo" required></textarea>
	</div>

	<br>

	<div  class="container" id="alert">

	</div>
	</div>
	<div id="regiration_form">
		<div id="paso1">
			<div>
				<div>
					<p class="desafiante"><b style="color: #0AB5A0">Objetivo desafiante</b><br>
						Debe de ser ambicioso, claro y contundente, pero debe de tener un punto de llegada claro y que pueda
						ser medible
						<br>
						<b style="color: #0AB5A0">Ejemplo: “Tener un millón de clientes”</b><br></p>

					</div>
					<p class="formula3"> Fórmula(A):<b style="color: #0AB5A0"> Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b> + <b style="color: #0AB5A0">Horizonte de tiempo</b>
					</p>

				</div>
				<a onclick="paso2()"   style="color:white;"   class=" siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
			</div>
			<div id="paso2">
				<div>

					<div>
						<p class="desafiante"><b style="color: #0AB5A0">Definición de nicho</b><br>

							Se refiere a una porción de un segmento de mercado en la que los individuos poseen características y necesidades

							homogéneas y estas últimas no están del todo cubiertas por la oferta general del mercado y requiere ser
							satisfecha<br>
							<b style="color: #0AB5A0">Ejemplo: “Tener un millón de clientes on-line”</b></p>

						</div>
						<p class="formulaDesafiante"> Fórmula(A):<b style="color: #0AB5A0"> Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b> + <b style="color: #0AB5A0">Horizonte de tiempo</b>
						</p>
					</div>
					<button onclick="paso3()"  style="color:white;" class=" siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
					<button onclick="paso1()" style="color:white;"  class=" anterior btn btn-planeem waves-effect waves-light">Anterior</button>
				</div>
				<div id="paso3">
					<div>

						<div>
							<p class="desafiante"><b style="color: #0AB5A0">Horizonte de tiempo</b><br>

								Lapso de tiempo en el cual se espera llegar a cumplir con el objetivo desafiante, para el caso de la Mega,
								se estipula que debe oscilar entre 7 y 10 años<br>
								<b style="color: #0AB5A0">Ejemplo: El SENA, se proyecta para el 2027</b><br></p>

							</div>
							<p class="formulaDesafiante"> Fórmula(A):<b style="color: #0AB5A0"> Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b> + <b style="color: #0AB5A0">Horizonte de tiempo</b>
							</p>
						</div>
						<a  href="{{ route('MEGA/list') }}" id="route" style="display:none "> </a>
						<button onclick="guardar()"  style="color:white;" class=" siguiente btn btn-planeem waves-effect waves-light">guardar</button>
						<button onclick="paso2()" style="color:white;" class=" anterior btn btn-planeem waves-effect waves-light">Anterior</button>
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
								<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 15px";>Desarrollo de la Mega Empresarial:</p>
									<p>Para desarrollar la Mega Empresarial debe responder las siguientes preguntas en los recuadros habilitados:<br>
                                    ¿Cuál es su objetivo desafiante?<br>
                                    ¿Cuál es la definición de su nicho de mercado?<br>
                                    ¿Cuál es el horizonte del tiempo de su empresa?<br><br>
                                    Recuerda:  la Mega Empresarial Se trata de la meta ganadora y audaz, que se fundamenta
                                    en una ventaja competitiva única y centrada en la innovación, que cuenta con una estrategia
									clara y permite a las empresas un crecimiento rentable y sostenido en el tiempo.
									{vista20}
									</p>
							</div>
						</div>
					</div>
				</div>
				<textarea maxlength="1205"  style="display: none;" id="id_p" class="campo" name="nombre_proyecto" required></textarea>
			</div>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


			<script>
				var contador = 0;

				
					document.getElementById('paso2').style.display = 'none';
					document.getElementById('alert').style.display = 'none';
					document.getElementById('paso3').style.display = 'none';
					
				



				function paso1(){
					
					document.getElementById('paso1').style.display = 'block';
					document.getElementById('paso2').style.display = 'none';
					document.getElementById('paso3').style.display = 'none';
				}


				function paso2(){ 
					let Mega = document.getElementById('Mega').value;

					if(Mega == ""){
						toastr.error('Los campos son necesarios ', '!Hola!')
					
					}else{
						document.getElementById('paso1').style.display = 'none';
						document.getElementById('paso2').style.display = 'block';
						document.getElementById('paso3').style.display = 'none';
						document.getElementById('alert').style.display = 'none';

						
					}


				}


				function paso3(){ 
					let Mega = document.getElementById('Mega').value;
					if(Mega == ""){
						toastr.error('Los campos son necesarios ', '!Hola!')
					}else{
						document.getElementById('paso1').style.display = 'none';
						document.getElementById('paso2').style.display = 'none';
						document.getElementById('paso3').style.display = 'block';
						document.getElementById('alert').style.display = 'none';
					}


				}



				function paso4(){ 
					let Mega = document.getElementById('Mega').value;
					if(Mega == ""){
						toastr.error('Los campos son necesarios ', '!Hola!')		
						}else{

						document.getElementById('paso1').style.display = 'none';
						document.getElementById('paso2').style.display = 'none';
						document.getElementById('paso3').style.display = 'none';
						document.getElementById('alert').style.display = 'none';
					
					}


				}

				function guardar(){
					let Mega = document.getElementById('Mega').value;

						try{
							if( Mega == ''){
								toastr.error('Los campos son necesarios ', '!Hola!')
							}else{
								localStorage.setItem('Mega1',Mega);
								document.getElementById('route').click();
							}
					
						}catch(e){
							console.log(e);
						}
					}
			</script>
			<script>

				$(document).ready(function () {
					$('.items li:nth-child(4)').addClass("acti");
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

			<script src="{{asset('js/Vmodulo1/Mega.js')}}"></script>



			<script>

				document.getElementById('id_p').innerHTML = localStorage.getItem('nombre_proyecto');
			</script>






<!-- 			<script>
				let progreso = localStorage.getItem('progressbar');
				let progreso2 = localStorage.getItem('progressbar2')
				document.getElementById('progress1').style.width = progreso;
				document.getElementById('progress2').style.width = progreso2;
				document.getElementById('icono').style.left= '28%';

			</script> -->

			@endsection
