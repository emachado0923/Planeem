@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')



    @yield('progres')


</header>


<form method="post"  role="from">
	     @csrf

<div>
	<div class="contentParrafo">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<div id="campo_texto"  class="campo_texto">
		<h3 style="text-align: center;">Mis estrategias</h3>

    <div class="input-group flex-nowrap">
      <div class="input-group-prepend">
        <span class="input-group-text" id="addon-wrapping">1</span>
      </div>
      <input type="text" class="form-control" placeholder="Estrategias" aria-label="Username" aria-describedby="addon-wrapping">
    </div>

    <div class="input-group flex-nowrap">
      <div class="input-group-prepend">
        <span class="input-group-text" id="addon-wrapping">2</span>
      </div>
      <input type="text" class="form-control" placeholder="Estrategias" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
	</div>
	
	<div class="lista">
		<h4 style="line-height: 41px;">Estrategias<span value="mas_factores" onclick="mas_factores()" class="icon-circle-down" style=" margin-left: 8%;"></span></h4>
	</div>

	<section id="factores">
		<div id="factor">
			<form class="opciones2">
				<div class="formulario2">
					<div class="respuestas2">
						<div class="wrap" style=" ">
							<div class="radio">
                <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal55">FA</a>
                <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal5">FO</a>
                <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal6">DO<a>
                <a class="agregarVerbo" data-toggle="modal"  data-target="#exampleModal7">DA</a>
								<br>
								<br>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	</form>
	<div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado2">
				<div class="modal-body">
					<div class="añadircapacidad">
						<textarea maxlength="504"  id="Añadrir" style="color:black;" class="campo4"></textarea>
					</div>
					<div><a style="color:white;" onclick="agregarv()"  data-dismiss="modal" aria-label="Close" class="aceptarcapacidad btn btn-planeem waves-effect waves-light">Añadir</a>
					</div>
					<div id="cancelar">
						<a value="cierra_AñadirCapa" class="cancelarcapacidad btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close" style=" outline: none !important;">Cancelar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
		.modal-modificado2{
			width: 180% !important;
			height: 240px !important;
			border: #0AB5A0 2px solid !important;
			border-radius: 12px !important;
		}
	</style>
	<div class="col-md-auto mx-auto mt-auto">
		<div class="infon">
			<a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar5" ><span class="icon-folder-plus"><div id="hover_agregar1">
				<h5>Agregar</h5></div></span>
			</a>
			<a id="boton2_eliminar2" onclick="Refrescaverbo2()" class="boton2_eliminar2"><span class="icon-bin"></span><div id="hover_eliminar">
				<h5>Eliminar</h5></div>
			</a>
		</div>
		<br>
		<br>
		<button type="submit" style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
		<a href="{{ route('tercero1-2') }}" style="color:white;" class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>
  </div>
  
  <div class="modal fade" id="exampleModal55" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono1.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono4.png" style="width: 28px;margin-top: -3px;">Fortalezas + Amenazas=FA
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
         <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
      <div class="scrollfortaleza2">
        <main>
      <h1 style="text-align: center;">Fortalezas</h1>
      @foreach ($fortaleza1 as $fortaleza1)
          <p>{{$fortaleza1->nombre}}</p>
      @endforeach
        </main>
        <main>
      <h1 style="text-align: center;">Amenazas</h1>
      @foreach ($amenaza1 as $amenaza1)
        <p>{{$amenaza1->nombre}}</p>
       @endforeach
        </main>

      </div>
    </div>
  </div>
  </div>
  </div>
  <style type="text/css">
    main {
  
      column-count: 1;
      column-gap: 3em;
      background-color: #fff;
      padding: 4rem;
      max-width: 530px;
      display: inline-table;
  }
  </style>
  <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono1.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono2.png" style="width: 28px;margin-top: -16px;">Fortalezas + Oportunidades=FO
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
         <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
      <div class="scrollfortaleza2">
        <main>
      <h1 style="text-align: center;">Fortalezas</h1>
      @foreach ($fortaleza as $fortaleza)
             <p>{{$fortaleza->nombre}}</p>
      @endforeach
        </main>
        <main>
      <h1 style="text-align: center;">Oportunidades</h1>
      @foreach ($oportunidad2 as $oportunidad2)
        <p>{{$oportunidad2->nombre}}</p>  
      @endforeach
        </main>
  
              <a type="button" style="color:white;" data-toggle="modal" data-target="#staticBackdrop2" class="DiseñarEstra btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            Diseñar Estrategias
        </a>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono3.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono4.png" style="width: 28px;margin-top: -3px;">Debilidades + Amenazas=DA
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
         <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
      <div class="scrollfortaleza2">
        <main>
      <h1 style="text-align: center;">Debilidades</h1>
        @foreach ($debilidad as $debilidad)
          <p>{{$debilidad->nombre}}</p>
        @endforeach
      </main>
  
      
        <main>
      <h1 style="text-align: center;">Amenazas</h1>
      @foreach ($amenaza as $amenaza)
      <p>{{$amenaza->nombre}}</p>
      @endforeach
        </main>
  
              <a type="button" style="color:white;" data-toggle="modal" data-target="#staticBackdrop3" class="DiseñarEstra btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            Diseñar Estrategias
        </a>
      </div>
    </div>
  </div>
  </div>
  </div>
  
  <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="Fortalezasventana">
        <div class="modal-header">
         <h3 style="color: black;margin-left: 30%;"> 
          <img src="img/icono3.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono5.png" style="width: 28px;margin-top: -16px;">
          <img src="img/icono2.png" style="width: 28px;margin-top: -16px;">Debilidades + Oportunidades=DO
        </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
         <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
       </button>
     </div>
     <div class="modal-body">
      <div class="scrollfortaleza2">
        <main>
          <h1 style="text-align: center;">Debilidades</h1>
        @foreach ($debilidad1 as $debilidad1)
          <p>{{$debilidad1->nombre}}</p>
        @endforeach
        </main>
        <main>
      <h1 style="text-align: center;">Oportunidades</h1>
      @foreach ($oportunidad as $oportunidad)
          <p>{{$oportunidad->nombre}}</p> 
      @endforeach
        </main>
  
              <a type="button" style="color:white;" data-toggle="modal" data-target="#staticBackdrop4" class="DiseñarEstra btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close">
            Diseñar Estrategias
        </a>
      </div>
    </div>
  </div>
  </div>
  </div>

	<span class="icon-info" data-toggle="modal"  data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">PROPUESTA DE VALOR</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
				</div>
				<div class="modal-body">
					<p>Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente
						imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir, pero en
						mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado lo
						que determinan sus expectativas personales a la hora de comprar
						a través de ella determinarás lo que diferencia tu producto o servicio de la competencia, además que te
					ayudará a encontrar la forma en que atenderás a tus clientes o segmento de mercado. (Saavedra, 2017)</p>
				</div>
			</div>
		</div>
	</div>
	<label type="text" id="nombre"></label><br>
</div>

</div>
</form>



@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(13)').addClass("acti");
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
	   id_planecion = localStorage.getItem('id');
	
	   $('#id_planecion').val(id_planecion);

	      console.log(id_planecion);
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
	});
</script>
{{-- <script>
https://www.facebook.com/Southparklatinohd/videos/1465972093583738/

</script> --}}













@endsection
