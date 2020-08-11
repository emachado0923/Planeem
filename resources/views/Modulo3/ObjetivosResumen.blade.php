@extends('layouts.nav3')

@section('content')
<header>
{{-- @include('modal/modal3') --}}
</header>

@csrf

<div class="ObjetivosResumen">
			<div class="accordion" id="accordionExample">
		
				<!-- Objetivos a largo Plazo-->
				<div class="card">
					<div class="card-header headerObjetivos" id="headingOne">
						<h1 class="mb-0" style="text-align: center;">
							Objetivos a largo plazo
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="float: right;">
								<span class="icon-plus "></span>
							</button>
						</h1>
					</div>
					
				
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body" style="background: white;border: #0AB5A0 1px solid;">
							<div class="btn-group" id="btn_planeem">
								<div id="div1">

								</div>	
							</div>
						</div>
					</div>
				</div>					
				
				<!-- Objetivos a mediano Plazo-->
				<div class="card">
					<div class="card-header headerObjetivos" id="headingTwo">
						<h1 class="mb-0" style="text-align: center;">
							Objetivos a mediano plazo
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="float: right;">
								<span class="icon-plus"></span>
							</button>
						</h1>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body" style="background: white;border: #0AB5A0 1px solid;">
							<div class="btn-group" id="btn_planeem">
								<div id="div2">

								</div>	
							</div>
						</div>
					</div>
				</div>

				<!-- Objetivos a mediano Plazo-->
				<div class="card">
					<div class="card-header headerObjetivos" id="headingThree">
						<h1 class="mb-0" style="text-align: center;">
							Objetivos a corto plazo
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="float: right;">
								<span class="icon-plus "></span>
							</button>
						</h1>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body" style="background: white;border: #0AB5A0 1px solid;">
							<div class="btn-group" id="btn_planeem">
								<div id="div3">

								</div>	
							</div>
						</div>
					</div>
				</div>
				
				
	</div>
	<br><br>


</div>
	

	
<a data-toggle="modal"  data-target="#finMeMori" class="Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right" data-whatever="@fat">Guardar</a>';

<div class="modal fade right" id="finMeMori" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
<div class="modal-content" id="modalAvance">
	<div class="modal-header" style="background: #0AB5A0  !important;">
	<p class="heading">Alerta!</p>

	<span class="icon-cancel-circle" style="color:white; font-size: 32px; cursor: pointer; margin-top: 4px;
	margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
	</div>
	<div class="modal-body">
	<div class="row">
		<div class="col-5">
		<img src="../img/icono2.png" style="width: 65%;">
		</div>

		<div class="col-7" style="margin: 0 auto;">
			<h1>¡Muy bien! Ha finalizado con el módulo 3.</h1>
			<p>
			Lo invitamos a continuar con el desarrollo del siguiente módulo 4.
			</p>
			
			<a href="{{ route('vista1-1') }}"  class="buttonModal btn btn-planeem waves-effect waves-light">Si</a>
			<a href="{{ route('home') }}"  class="buttonModal btn btn-planeem waves-effect waves-light">No</a>
		
		
		</div>
	</div>
	</div>
</div>
</div>
</div>

@jquery
@toastr_js
@toastr_render


<style type="text/css">
	.campo_estrategia2 {
    border: 2px solid #0AB5A0;
    border-radius: 10px;
    outline: none;
    width: 105%;
    height: 220px;
    padding: 2px 8px;
}
</style>

<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">Resultado de Objetivos</h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
			</div>
			<div class="modal-body">
				<p> 
					En este item se muestran los objetivos clasificados por corto, mediano y largo plazo, con la cantidad de estrategias y al seleccionar la estrategias le muestra las acciones, presupuestos, tiempo de ejecución y responsable
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
<!-- Esta es de las estrategias a largo plazo------------------------>



<script>
	$(document).ready(function () {
			var id = localStorage.getItem('id');
				
				$.ajax({
					url: "/estrategiasFinal1/" + id,
					type: 'get',
					success: function (data) {
						//console.log(id);
						console.log(data);
	
						if(data.length > 0){
							console.log('Desde Aca');
			
							let html = '';
							
							for(i of data){
							//Primer ciclo I
								if(i.length > 0 ){
							
									//Esta es la llave del modal 1
									html = html + '	<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin-left: 23px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#id_guardar'+ i[0].id_guardar+'" data-whatever="@fat">*</a>';
								
									//Este es el modal 1		
									html = html + '	<div class="modal fade" id="id_guardar'+i[0].id_guardar+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
									html = html + '		<div class="modal-dialog" role="document">';
									html = html + '			<div class="modal-content modal-modificado3">';
									html = html + '				<div class="modal-body" style="padding: 0 !important;">';
									html = html + '					<div class="opciones5">';
									html = html + '					<h5 class="text-center">OBJETIVOS A LARGO PLAZO</h5>';

									html = html + '						<h5 class="text-center"></h5>';
									html = html + '						<div class="input-group mb-3">';
									html = html + '							<div class="input-group-prepend">';
									html = html + '								<span class="input-group-text" id="basic-addon1">*</span>';
									html = html + '							</div>';
									html = html + '								<input type="text" class="form-control" id="inputObjetivo" maxlength="199" value="'+i[0].Objetivos+'" aria-label="Objetivo" aria-describedby="basic-addon1">';
									html = html + '							</div> ';
									html = html + '							<thead>';
									html = html + '								<tr>';
									html = html + '									<h3 style="text-align: center;">Estrategias</h3>';
									html = html + '									<div class="btn-group" id="btn_planeem">';
									
									//Segundo ciclo 
									for(j of i){
										
										//Esta es la llave del modal 2
										html = html + '									<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin-left: 23px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#identificador'+j.id_formulacionEstrategias+'" data-whatever="@fat">*</a>';
										//Este es el modal 2

										html = html + '									<div class="modal fade" style="width: 100vw; left:-32vw; top: -8vh;" id="identificador'+j.id_formulacionEstrategias+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
										html = html + '										<div class="modal-dialog" role="document">';
										html = html + '											<div class="modal-content modal-modificado3">';
										html = html + '												<div class="modal-body" style="padding:0 !important;">';
										html = html + '													<div class="opciones5">';
										html = html + '														<table class="egt" id="tabla">';
										html = html + '															<thead>';
										html = html + '																<tr>';
										html = html + '							 										<label for="formGroupExampleInput2" style="text-align: center;font-size: 20px;">Estrategia</label>';
										html = html + '							 										<input name="id_Planeacion1[]" id="id_Planeacion1[]" value="'+j.id_Planeacion+'" hidden>';
										html = html + '							 										<input name="id_formulacionEstrategias1[]" id="id_formulacionEstrategias1[]" value="'+j.id_formulacionEstrategias+'" hidden>';
										html = html + '																	<textarea class="campo_estrategia2">'+j.id_estrategia+'</textarea>';										
										html = html + '																</tr>';
										html = html + '																<tr>';
										html = html + '																	<th class="thCampo" colspan="1" style="text-align: center;border: none;font-size: 20px;" rowspan="1">Acción</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Presupuesto</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Tiempo de duración</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Responsable</th>';
										html = html + '																</tr>';
										html = html + '															</thead>';
										html = html + '															<tbody>';
										html = html + '																<tr class="formulario">';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="accion" id="accion" class="campo_estrategiaX" value="'+j.accion+'" maxlength="100">'+j.accion+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="presupuesto" id="presupuesto" class="campo_estrategiaX" value="'+j.presupuesto+'" maxlength="100">'+j.presupuesto+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="tiempo" id="tiempo" class="campo_estrategiaX" value="'+j.tiempo+'" maxlength="100">'+j.tiempo+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="responsable" id="responsable" value="'+j.responsable+'" class="campo_estrategiaX" maxlength="100">'+j.responsable+'</textarea>';
										html = html + '																	</td>';
										html = html + '																</tr>';
										html = html + '														</tbody>';
										html = html + '													</table>';
										html = html + '												</div>';
										// html = html + '												<a data-dismiss="modal" aria-label="Close" style="color:white;" class="guardarEstrategia btn btn-planeem waves-effect waves-light">Cerrar</a>';
										// html = html + '													<button id="cerrarModal" aclass="btn">Close</button>';
										html = html + '											</div>';
										html = html + '										</div>';
										html = html + '									</div>';
										html = html + '								</div>';

									
										//Final del modal2
										
										} //for j
										//Esta es el final del modal 1
										html = html + '							</div>';	
										html = html + '						</div>';
										html = html + '					</tr>';
										html = html + '				</thead>';
										html = html + '				</table>';
										html = html + '					</div>';
										html = html + '					<a data-dismiss="modal" aria-label="Close" style="color:white;" class="guardarEstrategia btn btn-planeem waves-effect waves-light">Cerrar</a>';
										html = html + '				</div>';
										html = html + '			</div>';
										html = html + '		</div>';
										html = html + '	</div>';
										html = html + '</div>';
								}//if
							

								

							}//for i 
								
							$("#cerrarModal").click(function(){
								// $('#cerrarModal').modal('hide');
								console.log("llego")
							});


							$('#div1').append(html); 
							
						
							//Pinta el contenido en el html
							console.log('Aca Termina');		
							}else{
								alert('error');
							}
						},
					"error": function () {
						console.log("error");
					}
				});//////fin ajax
			});////Fin Funtion document
</script>

<script>
	$(document).ready(function () {
			var id = localStorage.getItem('id');
				
				$.ajax({
					url: "/estrategiasFinal2/" + id,
					type: 'get',
					success: function (data) {
						//console.log(id);
						console.log(data);
	
						if(data.length > 0){
							console.log('Desde Aca');
			
							let html = '';
							
							for(i of data){
							//Primer ciclo I
								if(i.length > 0 ){
							
									//Esta es la llave del modal 1
									html = html + '	<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin-left: 23px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#id_guardar'+ i[0].id_guardar+'" data-whatever="@fat">*</a>';
								
									//Este es el modal 1		
									html = html + '	<div class="modal fade" id="id_guardar'+i[0].id_guardar+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
									html = html + '		<div class="modal-dialog" role="document">';
									html = html + '			<div class="modal-content modal-modificado3">';
									html = html + '				<div class="modal-body" style="padding: 0 !important;">';
									html = html + '					<div class="opciones5">';
									html = html + '					<h5 class="text-center">OBJETIVOS A MEDIANO PLAZO</h5>';

									html = html + '						<h5 class="text-center"></h5>';
									html = html + '						<div class="input-group mb-3">';
									html = html + '							<div class="input-group-prepend">';
									html = html + '								<span class="input-group-text" id="basic-addon1">*</span>';
									html = html + '							</div>';
									html = html + '								<input type="text" class="form-control" id="inputObjetivo" maxlength="199" value="'+i[0].Objetivos+'" aria-label="Objetivo" aria-describedby="basic-addon1">';
									html = html + '							</div> ';
									html = html + '							<thead>';
									html = html + '								<tr>';
									html = html + '									<h3 style="text-align: center;">Estrategias</h3>';
									html = html + '									<div class="btn-group" id="btn_planeem">';
									
									//Segundo ciclo 
									for(j of i){
										
										//Esta es la llave del modal 2
										html = html + '									<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin-left: 23px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#identificador'+j.id_formulacionEstrategias+'" data-whatever="@fat">*</a>';
										//Este es el modal 2

										html = html + '									<div class="modal fade" style="width: 100vw; left:-32vw; top: -8vh;" id="identificador'+j.id_formulacionEstrategias+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
										html = html + '										<div class="modal-dialog" role="document">';
										html = html + '											<div class="modal-content modal-modificado3">';
										html = html + '												<div class="modal-body" style="padding:0 !important;">';
										html = html + '													<div class="opciones5">';
										html = html + '														<table class="egt" id="tabla">';
										html = html + '															<thead>';
										html = html + '																<tr>';
										html = html + '							 										<label for="formGroupExampleInput2" style="text-align: center;font-size: 20px;">Estrategia</label>';
										html = html + '							 										<input name="id_Planeacion1[]" id="id_Planeacion1[]" value="'+j.id_Planeacion+'" hidden>';
										html = html + '							 										<input name="id_formulacionEstrategias1[]" id="id_formulacionEstrategias1[]" value="'+j.id_formulacionEstrategias+'" hidden>';
										html = html + '																	<textarea class="campo_estrategia2">'+j.id_estrategia+'</textarea>';										
										html = html + '																</tr>';
										html = html + '																<tr>';
										html = html + '																	<th class="thCampo" colspan="1" style="text-align: center;border: none;font-size: 20px;" rowspan="1">Acción</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Presupuesto</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Tiempo de duración</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Responsable</th>';
										html = html + '																</tr>';
										html = html + '															</thead>';
										html = html + '															<tbody>';
										html = html + '																<tr class="formulario">';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="accion" id="accion" class="campo_estrategiaX" value="'+j.accion+'" maxlength="100">'+j.accion+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="presupuesto" id="presupuesto" class="campo_estrategiaX" value="'+j.presupuesto+'" maxlength="100">'+j.presupuesto+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="tiempo" id="tiempo" class="campo_estrategiaX" value="'+j.tiempo+'" maxlength="100">'+j.tiempo+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="responsable" id="responsable" value="'+j.responsable+'" class="campo_estrategiaX" maxlength="100">'+j.responsable+'</textarea>';
										html = html + '																	</td>';
										html = html + '																</tr>';
										html = html + '														</tbody>';
										html = html + '													</table>';
										html = html + '												</div>';
										// html = html + '												<a data-dismiss="modal" aria-label="Close" style="color:white;" class="guardarEstrategia btn btn-planeem waves-effect waves-light">Cerrar</a>';
										// html = html + '													<button id="cerrarModal" aclass="btn">Close</button>';
										html = html + '											</div>';
										html = html + '										</div>';
										html = html + '									</div>';
										html = html + '								</div>';

									
										//Final del modal2
										
										} //for j
										//Esta es el final del modal 1
										html = html + '							</div>';	
										html = html + '						</div>';
										html = html + '					</tr>';
										html = html + '				</thead>';
										html = html + '				</table>';
										html = html + '					</div>';
										html = html + '					<a data-dismiss="modal" aria-label="Close" style="color:white;" class="guardarEstrategia btn btn-planeem waves-effect waves-light">Cerrar</a>';
										html = html + '				</div>';
										html = html + '			</div>';
										html = html + '		</div>';
										html = html + '	</div>';
										html = html + '</div>';
								}//if
							

								

							}//for i 
								
							$("#cerrarModal").click(function(){
								// $('#cerrarModal').modal('hide');
								console.log("llego")
							});


							$('#div2').append(html); 
							
						
							//Pinta el contenido en el html
							console.log('Aca Termina');		
							}else{
								alert('error');
							}
						},
					"error": function () {
						console.log("error");
					}
				});//////fin ajax
			});////Fin Funtion document
</script>

<script>
	$(document).ready(function () {
			var id = localStorage.getItem('id');
				
				$.ajax({
					url: "/estrategiasFinal3/" + id,
					type: 'get',
					success: function (data) {
						//console.log(id);
						console.log(data);
	
						if(data.length > 0){
							console.log('Desde Aca');
			
							let html = '';
							
							for(i of data){
							//Primer ciclo I
								if(i.length > 0 ){
							
									//Esta es la llave del modal 1
									html = html + '	<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin-left: 23px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#id_guardar'+ i[0].id_guardar+'" data-whatever="@fat">*</a>';
								
									//Este es el modal 1		
									html = html + '	<div class="modal fade" id="id_guardar'+i[0].id_guardar+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
									html = html + '		<div class="modal-dialog" role="document">';
									html = html + '			<div class="modal-content modal-modificado3">';
									html = html + '				<div class="modal-body" style="padding: 0 !important;">';
									html = html + '					<div class="opciones5">';
									html = html + '					<h5 class="text-center">OBJETIVOS A CORTO PLAZO</h5>';

									html = html + '						<h5 class="text-center"></h5>';
									html = html + '						<div class="input-group mb-3">';
									html = html + '							<div class="input-group-prepend">';
									html = html + '								<span class="input-group-text" id="basic-addon1">*</span>';
									html = html + '							</div>';
									html = html + '								<input type="text" class="form-control" id="inputObjetivo" maxlength="199" value="'+i[0].Objetivos+'" aria-label="Objetivo" aria-describedby="basic-addon1">';
									html = html + '							</div> ';
									html = html + '							<thead>';
									html = html + '								<tr>';
									html = html + '									<h3 style="text-align: center;">Estrategias</h3>';
									html = html + '									<div class="btn-group" id="btn_planeem">';
									
									//Segundo ciclo 
									for(j of i){
										
										//Esta es la llave del modal 2
										html = html + '									<a data-toggle="modal" style="outline: none;background-color: #238276;border-radius: 50px;color: white !important;margin-left: 23px;padding: 10px 18px;cursor: pointer;float: left;" class="a" data-target="#identificador'+j.id_formulacionEstrategias+'" data-whatever="@fat">*</a>';
										//Este es el modal 2

										html = html + '									<div class="modal fade" style="width: 100vw; left:-32vw; top: -8vh;" id="identificador'+j.id_formulacionEstrategias+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
										html = html + '										<div class="modal-dialog" role="document">';
										html = html + '											<div class="modal-content modal-modificado3">';
										html = html + '												<div class="modal-body" style="padding:0 !important;">';
										html = html + '													<div class="opciones5">';
										html = html + '														<table class="egt" id="tabla">';
										html = html + '															<thead>';
										html = html + '																<tr>';
										html = html + '							 										<label for="formGroupExampleInput2" style="text-align: center;font-size: 20px;">Estrategia</label>';
										html = html + '							 										<input name="id_Planeacion1[]" id="id_Planeacion1[]" value="'+j.id_Planeacion+'" hidden>';
										html = html + '							 										<input name="id_formulacionEstrategias1[]" id="id_formulacionEstrategias1[]" value="'+j.id_formulacionEstrategias+'" hidden>';
										html = html + '																	<textarea class="campo_estrategia2">'+j.id_estrategia+'</textarea>';										
										html = html + '																</tr>';
										html = html + '																<tr>';
										html = html + '																	<th class="thCampo" colspan="1" style="text-align: center;border: none;font-size: 20px;" rowspan="1">Acción</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Presupuesto</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Tiempo de duración</th>';
										html = html + '																	<th class="thCampo" style="text-align: center;border: none;font-size: 20px;">Responsable</th>';
										html = html + '																</tr>';
										html = html + '															</thead>';
										html = html + '															<tbody>';
										html = html + '																<tr class="formulario">';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="accion" id="accion" class="campo_estrategiaX" value="'+j.accion+'" maxlength="100">'+j.accion+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="presupuesto" id="presupuesto" class="campo_estrategiaX" value="'+j.presupuesto+'" maxlength="100">'+j.presupuesto+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="tiempo" id="tiempo" class="campo_estrategiaX" value="'+j.tiempo+'" maxlength="100">'+j.tiempo+'</textarea>';
										html = html + '																	</td>';
										html = html + '																	<td class="radio">';
										html = html + '																		<textarea name="responsable" id="responsable" value="'+j.responsable+'" class="campo_estrategiaX" maxlength="100">'+j.responsable+'</textarea>';
										html = html + '																	</td>';
										html = html + '																</tr>';
										html = html + '														</tbody>';
										html = html + '													</table>';
										html = html + '												</div>';
										// html = html + '												<a data-dismiss="modal" aria-label="Close" style="color:white;" class="guardarEstrategia btn btn-planeem waves-effect waves-light">Cerrar</a>';
										// html = html + '													<button id="cerrarModal" aclass="btn">Close</button>';
										html = html + '											</div>';
										html = html + '										</div>';
										html = html + '									</div>';
										html = html + '								</div>';

									
										//Final del modal2
										
										} //for j
										//Esta es el final del modal 1
										html = html + '							</div>';	
										html = html + '						</div>';
										html = html + '					</tr>';
										html = html + '				</thead>';
										html = html + '				</table>';
										html = html + '					</div>';
										html = html + '					<a data-dismiss="modal" aria-label="Close" style="color:white;" class="guardarEstrategia btn btn-planeem waves-effect waves-light">Cerrar</a>';
										html = html + '				</div>';
										html = html + '			</div>';
										html = html + '		</div>';
										html = html + '	</div>';
										html = html + '</div>';
								}//if
							

								

							}//for i 
								
							$("#cerrarModal").click(function(){
								// $('#cerrarModal').modal('hide');
								console.log("llego")
							});


							$('#div3').append(html); 
							
						
							//Pinta el contenido en el html
							console.log('Aca Termina');		
							}else{
								alert('error');
							}
						},
					"error": function () {
						console.log("error");
					}
				});//////fin ajax
			});////Fin Funtion document
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
		$('.items3 li:nth-child(4)').addClass("acti3");
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

@endsection