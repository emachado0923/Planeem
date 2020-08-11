@extends('layouts.nav2')
@section('content')
  <header>
    @yield('js')
    @include('modal/modal')
  </header>
  <style>
    .table {
    width: 90%;
    }
    .radio {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }
  
  .radio input {
    right: 94%;
      position: absolute;
      opacity: 0;
      cursor: pointer;
  }
  
  .radio .check {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 50%;
  }
  
  .radio:hover input ~ .check {
      border: 2px solid #FC7323;
  }
  
  .radio input:checked ~ .check {
      background-color: #FC7323;
      border:none;
  }
  
  .radio .check:after {
      content: "";
      position: absolute;
      display: none;
  }
  
  .radio input:checked ~ .check:after {
      display: block;
  }
  </style>
		<h2 style="text-align: center;">Mis estrategias de Crecimiento</h2>

<section class="contenedorper5">
	<div id="regiration_form">
		<form id="form" action="{{ route('estrategiasmatriz')}}" method="POST" role="form" >
			@csrf
		
			<input style="display: none" type="text" id="id_planeacion" name="id_planeacion" >
	
			
		<fieldset class="opciones">
			<span class="icon-info" data-toggle="modal"  data-target="#r1" style="cursor:pointer;"></span>
			<div>
				<br>
				<br>
			 	<h2 >Cuadrante 1. Penetración y/o Profundización de Mercado</h2>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Muy frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Selección</th>
						</tr>
					</thead>
					<tbody>

						@if($tipo_Matriz1_tipo5 == null)
						<td><h2 >no hay datos</h2></td>
						@else


						@foreach ($tipo_Matriz1_tipo5 as $tipo_Matriz1_tipo5)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz1_tipo5->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz1_tipo5->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>

			

						@endforeach
					@endif
					</tbody>
					{{-- Usados Muy frecuentemente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>

						@if($tipo_Matriz1_tipo4 == null)
						<td><h2 >no hay datos</h2></td>
						@else

						@foreach ($tipo_Matriz1_tipo4 as $tipo_Matriz1_tipo4)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz1_tipo4->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz1_tipo4->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz1_tipo4->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Ocasionalmente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Ocasionalmente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>

						
						@if($tipo_Matriz1_tipo3 == null)
						<td><h2 >no hay datos</h2></td>
						@else

						@foreach ($tipo_Matriz1_tipo3 as $tipo_Matriz1_tipo3)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz1_tipo3->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz1_tipo3->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz1_tipo3->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
					@endif
					</tbody>
					{{-- Usados Raramente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Raramente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz1_tipo2 == null)
						<td><h2 >no hay datos</h2></td>
						@else
						@foreach ($tipo_Matriz1_tipo2 as $tipo_Matriz1_tipo2)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz1_tipo2->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz1_tipo2->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz1_tipo2->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>



		<fieldset class="opciones">
			<span class="icon-info" data-toggle="modal"  data-target="#r2" style="cursor:pointer;"></span>
			<div>
				<h2>Cuadrante 2. Estrategias de desarrollo de nuevos mercados</h2>

				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Muy frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Selección</th>
						</tr>
					</thead>
					<tbody>

						@if($tipo_Matriz2_tipo5 == null)
						<td><h2 >no hay datos</h2></td>
						@else
						@foreach ($tipo_Matriz2_tipo5 as $tipo_Matriz2_tipo5)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz2_tipo5->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz2_tipo5->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz2_tipo5->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Muy frecuentemente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz2_tipo4 == null)
						<td><h2 >no hay datos</h2></td>
					
						@else
						@foreach ($tipo_Matriz2_tipo4 as $tipo_Matriz2_tipo4)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz2_tipo4->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz2_tipo4->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz2_tipo4->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Ocasionalmente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Ocasionalmente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz2_tipo3 == null)
							<td><h2 >no hay datos</h2></td>
						@else
						@foreach ($tipo_Matriz2_tipo3 as $tipo_Matriz2_tipo3)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz2_tipo3->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz2_tipo3->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz2_tipo3->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Raramente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Raramente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz2_tipo2 == null)
						<td><h2 >no hay datos</h2></td>

						@else
						@foreach ($tipo_Matriz2_tipo2 as $tipo_Matriz2_tipo2)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz2_tipo2->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz2_tipo2->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz2_tipo2->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>


		<fieldset class="opciones">
			<span class="icon-info" data-toggle="modal"  data-target="#r3" style="cursor:pointer;"></span>
			<div>
				<h2>Cuadrante 3. Estrategias de desarrollo de nuevos productos</h2>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Muy frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Selección</th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz3_tipo5 == null)
						<td><h2 >no hay datos</h2></td>

						@else
						@foreach ($tipo_Matriz3_tipo5 as $tipo_Matriz3_tipo5)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz3_tipo5->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz3_tipo5->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz3_tipo5->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Muy frecuentemente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz3_tipo4 == null)
						<td><h2 >no hay datos</h2></td>

						@else
						@foreach ($tipo_Matriz3_tipo4 as $tipo_Matriz3_tipo4)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz3_tipo4->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz3_tipo4->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz3_tipo4->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Ocasionalmente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Ocasionalmente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz3_tipo3 == null)
						<td><h2 >no hay datos</h2></td>

						@else
						@foreach ($tipo_Matriz3_tipo3 as $tipo_Matriz3_tipo3)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz3_tipo3->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz3_tipo3->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz3_tipo3->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Raramente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Raramente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz3_tipo2 == null)
						<td><h2 >no hay datos</h2></td>
						
						@else
						@foreach ($tipo_Matriz3_tipo2 as $tipo_Matriz3_tipo2)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz3_tipo2->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz3_tipo2->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz3_tipo2->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>


			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			
		</fieldset>
		

		<fieldset class="opciones">
			<span class="icon-info" data-toggle="modal"  data-target="#r4" style="cursor:pointer;"></span>
			<div>
				<h2 >Cuadrante 4 Estrategias de diversificación</h2>
				<table class="table">
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Muy frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Selección</th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz4_tipo5 == null)
						<td><h2 >No hay datos</h2></td>

						@else
						@foreach ($tipo_Matriz4_tipo5 as $tipo_Matriz4_tipo5)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz4_tipo5->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz4_tipo5->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz4_tipo5->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Muy frecuentemente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Frecuentemente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz4_tipo4 == null)
						<td><h2 >no hay datos</h2></td>

						@else
						@foreach ($tipo_Matriz4_tipo4 as $tipo_Matriz4_tipo4)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz4_tipo4->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz4_tipo4->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz4_tipo4->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Ocasionalmente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Ocasionalmente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz4_tipo3 == null)
						<td><h2 >no hay datos</h2></td>

						@else
						@foreach ($tipo_Matriz4_tipo3 as $tipo_Matriz4_tipo3)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz4_tipo3->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz4_tipo3->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz4_tipo3->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
					{{-- Usados Raramente --}}
					<thead>
						<tr class="first-row">
							<th scope="col" style="border: none;"></th>
							<th scope="col" class="text-center rotate">Usados Raramente</th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
							<th scope="col" style="border: none;"></th>
						</tr>
					</thead>
					<tbody>
						@if($tipo_Matriz4_tipo2 == null)
						<td><h2 >no hay datos</h2></td>
						
						@else
						@foreach ($tipo_Matriz4_tipo2 as $tipo_Matriz4_tipo2)
						<tr>
							<th scope="row" style="border: none;"></th>
							<td style="width: 49%;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										{{-- <input type="text" style="display: none"  name="id_matriz_crecimiento" value="{{$tipo_Matriz4_tipo2->id}}"> --}}
										<span class="input-group-text" id="basic-addon1">*</span>
									</div>
									<input type="text" class="form-control" placeholder="{{$tipo_Matriz4_tipo2->Matriz}}"
										aria-describedby="basic-addon1">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>

								<label class="radio">
									<input type="checkbox" name="id_matriz_crecimiento[]"  id="id_estrategias" value="{{$tipo_Matriz4_tipo2->id}}" > 
									<span class="check" style="left: 38%;"></span>
								</label>
							</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<a data-toggle="modal" data-target="#fin" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</a>		</fieldset>
			<button type="submit" style="display:none;" id="botonGuardar" class="Ahora2 previous btn btn-default"></button>

	</div>

</section>
@jquery
@toastr_js
@toastr_render

<!--Modal: modalRelatedContent-->
<div class="modal fade right" id="fin" tabindex="-1" role="dialog"
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
			<h1>¡Muy bien! Ha finalizado la selección de estrategias y con esto el módulo 2.</h1>
			<p>
			¿Desea Guardar La información?.
			</p>
			  
		  <br>
		  
	
		  <a id="si"  class="buttonModal btn btn-planeem waves-effect waves-light">Si</a>
		  <a id="no" data-dismiss="modal" class="buttonModal btn btn-planeem waves-effect waves-light">No</a>

		  
		  <form method="post" role="from" action="{{route('index/plam')}}">
				@csrf
				<input type="text" id="nombre_proyecto" name="nombre_proyecto">
				<button id="btn" type="submit"></button>
		  </form>

		  <script>
			
			$('#si').click(function(){
			  	document.getElementById("botonGuardar").click();
			});

			</script>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<style>
  #modalAvance{
    border-radius: 18px !important;
    width: 126%;
  }
</style>


{{--Cuadrante 1--}}
	<div class="modal fade" id="r1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"><br> Penetración de Mercado</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
				</div>
				<div class="modal-body">
					<p>
						
					Este cuadrante le indica que la empresa cuenta con un mayor dominio del mercado y tienen un menor riesgo 
					a la hora de implementar sus planes de acción por lo que puede considerarse como la alternativa de crecimiento 
					menos riesgosa. A su vez la ubicación en este cuadrante le indica que puede obtener una mayor cuota de mercado trabajando 
					con sus productos o servicios actuales en los mercados que opera actualmente.

					</p>
				</div>
			</div>
		</div>
	</div>

{{--Cuadrante 2--}}
	<div class="modal fade" id="r2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"><br> Desarrollo de Producto</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
				</div>
				<div class="modal-body">
					<p>
				
						Este cuadrante le indica que la empresa actualmente está enfocada en el desarrollo de nuevos productos 
						para atender los mercados en los que opera actualmente. Este cuadrante limita la operación de la empresa 
						ya que no le permite visualizar nuevos segmentos o nichos de mercado. Es preciso que el empresario busque 
						nuevos clientes en nuevos mercados o territorios a través de diferentes canales de distribución.
							
					
					</p>
				</div>
			</div>
		</div>
	</div>
{{--Cuadrante 3--}}
<div class="modal fade" id="r3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"><br> Desarrollo de Mercado</h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
			</div>
			<div class="modal-body">
				<p>
								
				Este cuadrante le indica que la empresa actualmente está enfocada en desarrollar nuevos mercados con sus productos actuales.<br>
				Este cuadrante potencializa la operación de la empresa al llegar a nuevos mercados, sin embargo, se limita en cuanto a la innovación 
				de nuevos productos o la mejora continua de los productos existentes. Es preciso que el empresario implemente procesos de I+D+i para 
				atender nuevas necesidades de los mercados actuales con nuevos productos.

				</p>
			</div>
		</div>
	</div>
</div>

{{--Cuadrante 4--}}

	<div class="modal fade" id="r4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"><br> Diversificación </h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
				</div>
				<div class="modal-body">
					<p>
					
					Este cuadrante le indica que la empresa actualmente se encuentra en constante movimiento ya que busca operar en nuevos 
					mercados con nuevos productos o servicios. Las estrategias de este cuadrante se llevan a cabo cuando se han implementado 
					y agotado la mayor parte de las acciones de los cuadrantes anteriores. Si se encuentra en este cuadrante, debe saber que se 
					generan unos riesgos altos para la empresa ya que cuanto más se aleje de su conocimiento sobre los productos que comercializa 
					y los mercados donde opera, tendrá mayor incertidumbre de la operación y la rentabilidad de su negocio. 

					</p>
				</div>
			</div>
		</div>
	</div>

@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
    $('.items li:nth-child(15)').addClass("acti");
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
  var id = localStorage.getItem('id')
  $('#id_planeacion').val(id);
  console.log(id);

  id_planecion = localStorage.getItem('id')
  $('#id_Planeacion').val(id_planecion);
  console.log(id_planecion);
</script>
  
@endsection
