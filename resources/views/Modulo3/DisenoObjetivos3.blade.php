@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')



    @yield('progres')


</header>


<form method="post"  role="from" action="{{route('Objetivos')}}">
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
		<h3 style="text-align: center;">Objetivos</h3>


	</div>
	
	<div class="lista">
		<h4 style="line-height: 41px;">Verbos<span value="mas_factores" onclick="mas_factores()" class="icon-circle-down" style=" margin-left: 20%;"></span></h4>
	</div>

	<section id="factores">
		<div id="factor">
			<form class="opciones2">
				<div class="formulario2">
					<div class="respuestas2">
						<div class="wrap" style=" ">
							<div class="radio">
											
												<select  id="pro_id"  style="cursor: pointer;width: 155%;text-align: center;border: #FC7323 1px solid;border-radius: 6px;"  class="form-control">
													<option selected>Choose...</option>
														@foreach ($Verbos as $Verbos)
														<option  value="{{$Verbos['nombre']}}">{{$Verbos->nombre}} </option>
														@endforeach
												</select>
												<input type="text" name="id_planecion" id="id_planecion"  value="{{$proyecto}}" style="display:none" >

								<br>
								<br>
								<a id="agregarVerbo"   onclick="agregarverbo()">Agregar</a>
								<br>
								<br>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<a value="cierra_factores"  style="outline: none !important;top: 94%;left: 46%;position: absolute;"><i class="icon-circle-up" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
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
			<a id="boton2_eliminar2" class="boton2_eliminar2"><span class="icon-bin"></span><div id="hover_eliminar">
				<h5>Eliminar</h5></div>
			</a>
			
		</div>
		<br>
		<br>
		<button type="submit" style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
		<a href="{{ route('tercero1-2') }}" style="color:white;" class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>
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
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script>

<script>
	   id_planecion = localStorage.getItem('id');
	
	   $('#id_planecion').val(id_planecion);

	      console.log(id_planecion);
</script>

<script type="text/javascript">
	// Refresca Producto: Refresco la Lista de Productos dentro de la Tabla
	// Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un producto al usuario
	// Sino habilito el boton Guardar para que pueda Guardar
	  function RefrescaProducto(){
		  var ip = [];
		  var i = 0;
		  $('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar
		  $('.iProduct').each(function(index, element) {
			  i++;
			  ip.push({ id_pro : $(this).val() });
		  });
		  // Si la lista de Productos no es vacia Habilito el Boton Guardar
		  if (i > 0) {
			  $('#guardar').removeAttr('disabled','disabled');
		  }
		  var ipt=JSON.stringify(ip); //Convierto la Lista de 			  newtr = newtr + '<input type="text" name="posiciones[]" value="'+contador1+'" >'
Productos a un JSON para procesarlo en tu controlador
		  $('#ListaPro').val(encodeURIComponent(ipt));
	  }

	var contador=0;
		 function agregarv() {

			let contador1 = contador += 1;

			  var nombre = $('#Añadrir').val(); //Capturo el Value del Producto

			  var text = $('#Añadrir').text();//Capturo el Nombre del Producto- Texto dentro del Select


			  var sptext = text.split();
			//   var newtr = '<tr class="item"  data-id="'+sel+'">';

			  var newtr = '<div class="input-group mb-3">';
			  newtr = newtr + '<div class="input-group-prepend">';
			  newtr = newtr + '<span class="input-group-text" id="basic-addon1">'+contador1+' </span>';
			  newtr = newtr + '</div>';
			  newtr = newtr + '<input type="text" style="display:none" name="posiciones[]" value="'+contador1+'" >'
			  newtr = newtr + '<input type="text" value ="'+nombre+'" name="Objetivos[]" class="form-control" id="inputObjetivo" maxlength="199" placeholder="Objetivo" aria-label="Objetivo" aria-describedby="basic-addon1">';
			  newtr = newtr + '</div>';


			  $('#campo_texto').append(newtr); //Agrego el Producto al tbody de la Tabla con el id=campo_texto

			  Refrescaverbo();//Refresco Productos

			  $('.remove-item').off().click(function(e) {
				  $(this).parent('td').parent('tr').remove(); //En accion elimino el Producto de la Tabla
				  if ($('#campo_texto tr.item').length == 0)
					  $('#campo_texto .no-item').slideDown(300);
				  Refrescaverbo();
			  });
			 $('.iProduct').off().change(function(e) {
				  Refrescaverbo();
			 });
	  }
  </script>





<script type="text/javascript">


	$(document).ready(function(){
		var Verbo  = $( ".text" ).val();
		var maxField = 10; //Input fields increment limitation
		var addButton = $('.pro_id'); //Add button selector
		var campo_texto = $('.campo_texto'); //Input field campo_texto
		var fieldHTML = '<div><input type="text" name="Objetivos[] value="'+Verbo+'"'+'/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="remove-icon.png"/></a></div>'; //New input field html
		var x = 1; //Initial field counter is 1
		$(addButton).click(function(){ //Once add button is clicked
			if(x < maxField){ //Check maximum number of input fields
				x++; //Increment field counter
				$(campo_texto).append(fieldHTML); // Add field html
			}
		});
		$(campo_texto).on('click', '.remove_button', function(e){ //Once remove button is clicked
			e.preventDefault();
			$(this).parent('div').remove(); //Remove field html
			x--; //Decrement field counter
		});
	});
	</script>







<script type="text/javascript">
	// Refresca Producto: Refresco la Lista de Productos dentro de la Tabla
	// Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un producto al usuario
	// Sino habilito el boton Guardar para que pueda Guardar
	  function RefrescaProducto(){
		  var ip = [];
		  var i = 0;
		  $('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar
		  $('.iProduct').each(function(index, element) {
			  i++;
			  ip.push({ id_pro : $(this).val() });
		  });
		  // Si la lista de Productos no es vacia Habilito el Boton Guardar
		  if (i > 0) {
			  $('#guardar').removeAttr('disabled','disabled');
		  }
		  var ipt=JSON.stringify(ip); //Convierto la Lista de Productos a un JSON para procesarlo en tu controlador
		  $('#ListaPro').val(encodeURIComponent(ipt));
	  }

	var contador=0;
		 function agregarverbo() {

			let contador1 = contador += 1;

			  var nombre = $('#pro_id').find(':selected').val(); //Capturo el Value del Producto

			  var text = $('#pro_id').find(':selected').text();//Capturo el Nombre del Producto- Texto dentro del Select


			  var sptext = text.split();
			//   var newtr = '<tr class="item"  data-id="'+sel+'">';

			  var newtr = '<div class="input-group mb-3">';
			  newtr = newtr + '<div class="input-group-prepend">';
			  newtr = newtr + '<span class="input-group-text" id="basic-addon1">'+contador1+' </span>';
			  newtr = newtr + '</div>';
			  newtr = newtr + '<input type="text" style="display:none" name="posiciones[]" value="'+contador1+'" >'

			  newtr = newtr + '<input type="text" value ="'+nombre+'" name="Objetivos[]" class="form-control" id="inputObjetivo" maxlength="199" placeholder="Objetivo" aria-label="Objetivo" aria-describedby="basic-addon1">';
			  newtr = newtr + '</div>';


			  $('#campo_texto').append(newtr); //Agrego el Producto al tbody de la Tabla con el id=campo_texto

			  RefrescaProducto();//Refresco Productos

			  $('.remove-item').off().click(function(e) {
				  $(this).parent('td').parent('tr').remove(); //En accion elimino el Producto de la Tabla
				  if ($('#campo_texto tr.item').length == 0)
					  $('#campo_texto .no-item').slideDown(300);
				  RefrescaProducto();
			  });
			 $('.iProduct').off().change(function(e) {
				  RefrescaProducto();
			 });
	  }
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













@endsection
