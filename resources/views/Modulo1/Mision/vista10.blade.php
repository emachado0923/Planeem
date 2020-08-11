@extends('layouts.nav')

@section('content')
<header>
    <link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
    <script src=" {{asset('js/toastr.js')}}"></script>
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
</header>
<section  id = "text">
	<div class="contenedor3 was-validated">
		<textarea maxlength="1000" id="Mision"  name="Quiénes" class="campo form-control is-invalid"  required ></textarea>
	</div>
	<br>

</section>

<div  class="container" id="alert">
</div>
<div id="regiration_form">
	<div id="paso1">
		<div class="form-group">
			<div>
				<p class="quienes"><b style="color: #0AB5A0">¿Quiénes somos? = identidad, legitimidad</b><br>
					Es decir, cuál es nuestra identidad.Por ejemplo:<br>

					<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana”</b><br>
					<b style="color: #0AB5A0">Ejemplo: “somos una organización joven”</b></p>
				</div>
				<p class="formula2">Fórmula para la Misión:<b style="color: #0AB5A0"><br> ¿Quiénes somos?</b> = identidad, legitimidad +<br> <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos +<br> <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes  + <br><b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
			</div>
			<button type="submit"   onclick="paso2()"   style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
		</div>
		<div id="paso2">
			<div class="form-group">
				<div>
					<p class="buscamos"><b style="color: #0AB5A0">¿Qué buscamos? = Propósitos</b><br>
						Cuál es nuestra tarea.<br>

						<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana dedicada a realizar pruebas de software”</b><br>
						<b style="color: #0AB5A0">Ejemplo: “somos una organización joven que brinda asesoría comercial”</b></p>
					</div>
					<p class="formula2">Fórmula para la Misión:<b style="color: #0AB5A0"><br> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
				</div>
				<button onclick="paso3()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
				<button onclick="paso1()" style="color:white;"  class="anterior btn btn-planeem waves-effect waves-light">Anterior</button>
			</div>
			<div id="paso3">
				<div class="form-group">
					<div>
						<p class="trabajamos"><b style="color: #0AB5A0">¿Para quienes trabajamos? = Clientes</b><br>
							Se refiere a quiénes son nuestros clientes<br>
							<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana dedicada a realizar pruebas de software para organizaciones comerciales”</b><br>
							<b style="color: #0AB5A0">Ejemplo: “somos una organización joven que brinda asesoría comercial a personas que van a iniciar un negocio”</b></p>
						</div>
						<p class="formula2">Fórmula para la Misión:<b style="color: #0AB5A0"><br> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
					</div>
					<button onclick="paso4()" style="color:white;" class=" siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
					<button onclick="paso2()" style="color:white;" class=" anterior btn btn-planeem waves-effect waves-light">Anterior</button>
				</div>
					<div id="paso4">
					<div class="form-group">
						<div>
							<p class="hacemos"><b style="color: #0AB5A0">¿Por qué lo hacemos? = Productos, Servicios, Valores, principios, motivaciones</b><br>
								Se refiere a nuestros valores, principios y motivaciones.Por ejemplo: <br>
								<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana dedicada a realizar pruebas de software para organizaciones comerciales, buscamos la excelencia en nuestros productos”</b><br>
								<b style="color: #0AB5A0">Ejemplo: “somos una organización joven que brinda asesoría comercial a personas que van iniciar un negocio, en el marco de la transparencia, la honestidad y la búsqueda del desarrollo”</b></p>
							</div>
							<p class="formula2">Fórmula para la Misión:<b style="color: #0AB5A0"><br> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
						</div>
                        <a href="{{ route('Mision/list') }}" id="href" type="hidden"></a>
						<a  onclick="guardar()" id="botonGuardar" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
						<button onclick="paso3()" style="color:white;" class=" anterior btn btn-planeem waves-effect waves-light">Anterior</button>
					</div>
				</div>
				<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
				<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 170px; font-weight: bold;">Desarrollo De La Misión Organizacional</h5>
								<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
								margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

							</div>
							<div class="modal-body">

								<p><br><br>Este ítem se desarrollará a través de responder las diferentes
                                    preguntas en los recuadros habilitados: ¿Quiénes Somos? ¿Que Buscamos?
                                    ¿Para Quienes Trabajamos? ¿Porque lo Hacemos?{vista10.blade}</p>
							</div>
						</div>
					</div>
				</div>
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

				<script src="{{asset('js/Vmodulo1/mision.js')}}"></script>

				<script>

					$(document).ready(function () {
						$('.items li:nth-child(2)').addClass("acti");
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
					let progreso = localStorage.getItem('progressbar');
					let progreso2 = localStorage.getItem('progressbar2')
					document.getElementById('progress1').style.width = progreso;
					document.getElementById('progress2').style.width = progreso2;
					document.getElementById('icono').style.left= '28%';

				</script>

				<script>
					var contador = 0;


    document.getElementById('paso2').style.display = 'none';
    document.getElementById('alert').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';
    document.getElementById('paso4').style.display = 'none';


if(document.getElementById('Mision').value==''){

    document.getElementById('botonGuardar').style.display='block'
}
else{
    document.getElementById('botonGuardar').style.display='none'
}


function paso1(){

    document.getElementById('paso1').style.display = 'block';
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';
    document.getElementById('paso4').style.display = 'none';
}


function paso2(){
    let mision = document.getElementById('Mision').value;

       if(mision == ""){
           toastr.error('error', 'el campo es obligatorio')
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'block';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'none';
        document.getElementById('alert').style.display = 'none';


       }


}


function paso3(){
    let mision = document.getElementById('Mision').value;
       if(mision == ""){
           toastr.error('error', 'el campo es obligatorio')
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'block';
        document.getElementById('paso4').style.display = 'none';
        document.getElementById('alert').style.display = 'none';
       }


}



function paso4(){
    let mision = document.getElementById('Mision').value;
       if(mision == ""){
           toastr.error('error', 'el campo es obligatorio')
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'block';


       }


}


function guardar(){
    let mision = document.getElementById('Mision').value;

    if(mision == ""){
        toastr.error('error', 'el campo es obligatorio')
    }else{
        try{

            localStorage.setItem('Mision1',mision);
            document.getElementById("href").click();



        let progres1 = localStorage.getItem('progressbar');
        let progres2 = localStorage.getItem('progressbar2');

        let progr= '40%';
        let progr2= '60%';



        if(progres1 <= progr && progres2 <= progr2 ){
            console.log('error')

          }else{
            localStorage.setItem('itm',3);
              localStorage.setItem('progressbar',progr);
              localStorage.setItem('progressbar2',progr2);
          }

        }catch(e){
             console.log(e);
        }
    }
}
				</script>







				@endsection