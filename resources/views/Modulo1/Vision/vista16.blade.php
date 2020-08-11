@extends('layouts.nav')

@section('content')
<header>
    <link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
    <script src=" {{asset('js/toastr.js')}}"></script>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
</header>
<div class="contenedor3 was-validated">
	{{-- Campo de texto  --}}
	<textarea maxlength="1000" class="campo form-control is-invalid" required="required" id="Vision" name="Que_hara_mi_empresa" ></textarea>
</div>

<div  class="container" id="alert">

</div>
<div id="regiration_form">
	<div id="paso1">
		<div>
			<div>
				<p class="enunciadoHara"><b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b><br>

					<b style="color: #0AB5A0">Ejemplo: Mejorar la salud y el bienestar a través de productos de salud y de higiene</b></p>
				</div>
				<br>
				<br>
				<p class="formulaMision">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> +
					<b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b></p>
				</div>
				<button type="submit" onclick="paso2()" style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
			</div>
			<div id="paso2">
				<div>
					<div>
						<p class="hara"><b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b><br>
							¿Qué acciones implementaremos?<br>
							<b style="color: #0AB5A0">Ejemplo:”Reduciendo el impacto ambiental usando empaques reciclables”</b></p>
						</div>
						<br>
						<br>
						<p class="formulaMision">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> +
							<b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b></p>
						</div>
						<button onclick="paso3()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
						<button onclick="paso1()" style="color:white;"  class="anterior btn btn-planeem waves-effect waves-light">Anterior</button>
					</div>
					<div id="paso3">
						<div>
							<div>
								<p class="hara2"><b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b><br>
									¿Será más incluyente?<br>
									¿Tendrá un gran ambiente de trabajo?<br>

									<b style="color: #0AB5A0">Ejemplo:Mejorando las condiciones laborales de mis colaboradores ofreciendo un trabajo digno,
                                        con gran impacto en la salud y el bienestar,<br> a través de productos de salud
                                        y de higiene reduciendo los impactos negativos para el medio ambiente.</b>
								</p>
							</div>
							<p class="formula">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b>
							</p>
						</div>
                        <a href="{{ route('tist') }}" id="href" type="hidden"></a>
						<a  id="botonGuardar" onclick="guardar()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
						<button onclick="paso2()" style="color:white;" class="anterior btn btn-planeem waves-effect waves-light">Anterior</button>
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
								<p>Para desarrollar la Visión Organizacional debe responder las siguientes preguntas en los recuadros habilitados:<br>

                                    ¿Qué hará mi empresa en cinco años?<br>
                                    ¿Qué hará mi empresa por el entorno en cinco años?<br>
                                    ¿Qué hará mi empresa por la sociedad en cinco años?

                                </p>
							</div>
						</div>
					</div>
				</div>


				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

				<script>

					$(document).ready(function () {
						$('.items li:nth-child(3)').addClass("acti");
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
                    var contador = 0;


                    document.getElementById('paso2').style.display = 'none';
                    document.getElementById('alert').style.display = 'none';
                    document.getElementById('paso3').style.display = 'none';
                    document.getElementById('paso4').style.display = 'none';

                    if(document.getElementById('Vision').value==''){

                        document.getElementById('botonGuardar').style.display='block'
                    }
                    else{
                        document.getElementById('botonGuardar').style.display='none'
                    }





    function paso1 (){
        document.getElementById('paso1').style.display = 'block';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'none';

    }


function paso2(){
let vision = document.getElementById('Vision').value;
    if(  vision == '' ){
        toastr.error('error', 'el campo es obligatorio')

    }

    else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'block';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'none';

    }

}
                    function paso3(){
                            let vision = document.getElementById('Vision').value;
                            if(vision == ""){
                                toastr.error('error', 'el campo es obligatorio')
                            }else{
                                document.getElementById('paso1').style.display = 'none';
                                document.getElementById('paso2').style.display = 'none';
                                document.getElementById('paso3').style.display = 'block';
                                document.getElementById('paso4').style.display = 'none';

                            }


                        }

                    function paso4(){
                        let vision = document.getElementById('Vision').value;
                        if(vision == ""){
                            toastr.error('error', 'el campo es obligatorio')
                        }else{
                            document.getElementById('paso1').style.display = 'none';
                            document.getElementById('paso2').style.display = 'none';
                            document.getElementById('paso3').style.display = 'none';
                            document.getElementById('paso4').style.display = 'block';
                        }


                    }


function guardar(){
    let vision = document.getElementById('Vision').value;

    if(vision == ""){
        document.getElementById('alert').style.display = 'block';
    }else{
        try{
            localStorage.setItem('Vision',vision);
            document.getElementById("href").click();


            }

        catch(e){
            console.log(e);
        }
    }

}
				</script>



				@endsection