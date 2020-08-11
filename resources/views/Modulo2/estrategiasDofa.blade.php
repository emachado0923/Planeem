@extends('layouts.nav2')
@section('content')
<header>

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
  .hover2{
	width: 64%;
  }

  .table th {
    padding: -6.25rem;
    vertical-align: top;
    }

    .table td {
    padding: -6.25rem;
    vertical-align: top;
    }
  </style>

    <form method="post" role="from" action="{{route('estrategia4') }}">
        @csrf
         
        <section class="contenedorAsociar">
            <h1 style="text-align: center;">Estrategias DOFA</h1>

            <div class="lista">
                <h4 style="line-height: 20px;">Estrategias.<span value="mas_factores" onclick="mas_factores()" class="icon-circle-down" style=" margin-left: 8%;"></span></h4>
            </div>
            <section id="factores">
                <div id="factor">
                    <div class="formulario2">
                        <div class="respuestas2">
                            <div class="wrap" style=" " align="center">
                                <div class="agregarVerbo">
                                    <a data-toggle="modal" data-target="#X1">FO</a> 
                                    </div>
                                <br>

                                <div class="agregarVerbo">
                                    <a data-toggle="modal" data-target="#X2">FA</a>
                                </div>
                                <br>
                                
                                <div class="agregarVerbo">
                                    <a data-toggle="modal" data-target="#X3">DO</a>
                                    </div>
                                <br>

                                <div class="agregarVerbo">
                                    <a data-toggle="modal" data-target="#X4">DA</a>
                                </div>
                                <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <div class="hover2">
                    <h2 style="text-align: center;margin-top: 15%;">Tus estrategias</h2>
            </div>
            </section>
            {{-- <button type="button" class="Ahora2 previous btn btn-default">Anterior</button> --}}
            <button data-toggle="modal" data-target="#modalRelatedContent" type="submit"
                class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>

            <!--Modal: modalRelatedContent-->
            <div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
                    <div class="modal-content" id="modalAvance">
                        <div class="modal-header" style="background: #0AB5A0  !important;">
                            <p class="heading">Alerta!</p>
                            <span class="icon-cancel-circle" style="color:white; font-size: 32px; cursor: pointer; margin-top: 4px;
                                        margin-left: 10%;" data-dismiss="modal" aria-label="Close">
                            </span>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-5">
                                    <img src="../img/icono2.png" style="width: 65%;">
                                </div>
                                <div class="col-7" style="margin: 0 auto;">
                                    <h1>¡Muy bien! Ha finalizado el resumen de la selección de estrategias y con esto el módulo 2.</h1>
                                   <p>
                                       A continuación, el sistema le mostrara las estrategias seleccionadas por usted en el 
                                       análisis de la matriz de crecimiento según su frecuencia de uso. Lo invitamos para que analice 
                                       aquellas estrategias menos usadas y las considere en la construcción de su mix de estrategias, 
                                       Recuerde que este mix le permitirá cumplir con los objetivos empresariales y por ende 
                                       con el crecimiento de la empresa. 
                                    </p>
                                    <br>
                                    <button type="submit"  class="buttonModal btn btn-planeem waves-effect waves-light" hidden>Si</button>
                                        <a id="no" class="buttonModal btn btn-planeem waves-effect waves-light"hidden>No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             
            <!--Modales FO-->
            <div class="modal fade" id="X1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="Fortalezasventana">
                        <fieldset class="opciones"> 
                            <main>
                                <h1 style="text-align: center;">Fortalezas + Oportunidades</h1>
                            </main>
                            <table class="table">
                                <thead>
                                    <tr class="first-row">
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Estrategia</th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Selección</th>
                                    </tr>
                                </thead>
                                <!--Aca vienen las estrategias-->

                                @foreach ($estrategiasFO as $estrategias)
                                <input type="text" id="id_Planeacion" name="id_Planeacion[]" value={{$estrategias->id_Planeacion}} hidden>

                                <tbody>
                                    <tr>
                                        <th scope="row" style="border: none;"></th>
                                        <td style="width: 80%;"><div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">*</span>
                                            </div>
                                            <input type="number" name="id_Estrategias_Ofensivas1[]"  id="id_Estrategias_Ofensivas1[]" value="{{$estrategias->id_Estrategias_Ofensivas}}" hidden> 
                                            <input type="text" class="form-control" name=" descripcion[]" id="descripcion"  value="{{$estrategias->R}},{{$estrategias->nombre}}" aria-describedby="basic-addon1"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <label class="radio">
                                                 <input  type="checkbox" name="{{ $estrategias->id_Estrategias_Ofensivas }}"  id="" value="{{$estrategias->id_Estrategias_Ofensivas}}"> 
                                                 <span class="check" style="left: 38%;"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <button type="button" align="center" class="btn btn-default" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span>
                            <span class="hidden-xs">Cerrar</span>
                        </button>  
                          
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Modales FA-->
            <div class="modal fade" id="X2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="Fortalezasventana">
                        <fieldset class="opciones"> 
                            <main>
                                <h1 style="text-align: center;">Fortalezas + Amenazas</h1>
                            </main>
                            <table class="table">
                                <thead>
                                    <tr class="first-row">
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Estrategia</th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Selección</th>
                                    </tr>
                                </thead>

                                @foreach ($estrategiasFA as $estrategias)
                                <input type="text" id="id_Planeacion" name="id_Planeacion[]" value={{$estrategias->id_Planeacion}} hidden>

                                <tbody>
                                    <tr>
                                        <th scope="row" style="border: none;"></th>
                                        <td style="width: 80%;"><div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">*</span>
                                            </div>
                                            <input type="number" name="id_Estrategias_Ofensivas1[]"  id="id_Estrategias_Ofensivas1[]" value="{{$estrategias->id_Estrategias_Ofensivas}}" hidden> 
                                            <input type="text" class="form-control" name=" descripcion[]" id="descripcion"  value="{{$estrategias->R}},{{$estrategias->nombre}}" aria-describedby="basic-addon1"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <label class="radio">
                                                 <input  type="checkbox" name="{{ $estrategias->id_Estrategias_Ofensivas }}"  id="" value="{{$estrategias->id_Estrategias_Ofensivas}}"> 
                                                 <span class="check" style="left: 38%;"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach 
                            </table>
                            <button type="button" align="center" class="btn btn-default" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span>
                                <span class="hidden-xs">Cerrar</span>
                            </button>  
                        
                        </fieldset>
                    </div>
                </div>
            </div>
           


            <!--Modales DO-->
            <div class="modal fade" id="X3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="Fortalezasventana">
                        <fieldset class="opciones"> 
                            <main>
                                <h1 style="text-align: center;">Debilidades + Oportunidades</h1>
                            </main>
                            <table class="table">
                                <thead>
                                    <tr class="first-row">
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Estrategia</th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Selección</th>
                                    </tr>
                                </thead>


                               <tbody>   <div id="estrategiasModalDo"></div> </tbody>  
                                @foreach ($estrategiasDO as $estrategias)
                                <input type="text" id="id_Planeacion" name="id_Planeacion[]" value={{$estrategias->id_Planeacion}} hidden>

                                <tbody>
                                    <tr>
                                        <th scope="row" style="border: none;"></th>
                                        <td style="width: 80%;"><div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">*</span>
                                            </div>
                                            <input type="number" name="id_Estrategias_Ofensivas1[]"  id="id_Estrategias_Ofensivas1[]" value="{{$estrategias->id_Estrategias_Ofensivas}}" hidden> 
                                            <input type="text" class="form-control" name=" descripcion[]" id="descripcion"  value="{{$estrategias->R}},{{$estrategias->nombre}}" aria-describedby="basic-addon1"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <label class="radio">
                                                 <input  type="checkbox" name="{{ $estrategias->id_Estrategias_Ofensivas }}"  id="" value="{{$estrategias->id_Estrategias_Ofensivas}}"> 
                                                 <span class="check" style="left: 38%;"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach 
                            </table>
                            <button type="button" align="center" class="btn btn-default" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span>
                                <span class="hidden-xs">Cerrar</span>
                            </button>  
                          
                        </fieldset>
                    </div>
                </div>
            </div>

            <!--Modales DA-->
            <div class="modal fade" id="X4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" id="Fortalezasventana">
                        <fieldset class="opciones"> 
                            <main>
                                <h1 style="text-align: center;">Debilidades + Amenazas</h1>
                            </main>
                            <table class="table">
                                <thead>
                                    <tr class="first-row">
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Estrategia</th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" style="border: none;"></th>
                                        <th scope="col" class="text-center rotate">Selección</th>
                                    </tr>
                                </thead>
                                <tbody>   <div id="estrategiasModalDa"></div> </tbody>  
                             
                                @foreach ($estrategiasDA as $estrategias)
                                <input type="text" id="id_Planeacion" name="id_Planeacion[]" value={{$estrategias->id_Planeacion}} hidden>

                                <tbody>
                                    <tr>
                                        <th scope="row" style="border: none;"></th>
                                        <td style="width: 80%;"><div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">*</span>
                                            </div>
                                            <input type="number" name="id_Estrategias_Ofensivas1[]"  id="id_Estrategias_Ofensivas1[]" value="{{$estrategias->id_Estrategias_Ofensivas}}" hidden> 
                                            <input type="text" class="form-control" name=" descripcion[]" id="descripcion"  value="{{$estrategias->R}},{{$estrategias->nombre}}" aria-describedby="basic-addon1"> 
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <label class="radio">
                                                 <input  type="checkbox" name="{{ $estrategias->id_Estrategias_Ofensivas }}"  id="" value="{{$estrategias->id_Estrategias_Ofensivas}}"> 
                                                 <span class="check" style="left: 38%;"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach 
                            </table>
                            <button type="button" align="center" class="btn btn-default" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span>
                                <span class="hidden-xs">Cerrar</span>
                            </button>  
                            
                        </fieldset>
                    </div>
                </div>
            </div>
            <!--- Final de los modales-------->
    </form>

    @jquery
    @toastr_js
    @toastr_render

  <style type="text/css">
    main {
          column-count: 1;
          column-gap: 3em;
          background-color: #fff;
          padding: 4rem;
          max-width: 530px;
          display: inline-table;
        }
    #modalAvance {
        border-radius: 18px !important;
        width: 126%;
       }
</style>
{{-- 
<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">
                    PROPUESTA DE VALOR</h5>
                <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
            </div>
            <div class="modal-body">
                <p>Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente
                    imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir,
                    pero en
                    mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado
                    lo
                    que determinan sus expectativas personales a la hora de comprar
                    a través de ella determinarás lo que diferencia tu producto o servicio de la competencia, además que
                    te
                    ayudará a encontrar la forma en que atenderás a tus clientes o segmento de mercado. (Saavedra, 2017)
                </p>
            </div>
        </div>
    </div>
</div> --}}


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>






<!--<script>

    $(document).ready(function () {
        $('.dofaTexto').mouseenter(function () {
            let parrafo = $(this).attr('parrafo');

            $('.hover2').html(`
			<table class="table">
		<thead>
			<tr class="first-row">
				<th scope="col" style="border: none;"></th>
				<th scope="col" class="text-center rotate">Estrategia</th>
				<th scope="col" style="border: none;"></th>
				<th scope="col" style="border: none;"></th>
				<th scope="col" class="text-center rotate">Selección</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row" style="border: none;"></th>
				<td style="width: 49%;"><div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">1</span>
	  </div>
	  <input type="text" class="form-control" placeholder="Enunciado"  aria-describedby="basic-addon1">
	</div></td>
				<td>
				</td>
				<td>
				</td>
				<td>
					<label class="radio">
						<input type="radio" name="radio0">
						<span class="check" style="left: 38%;"></span>
					</label>
				</td>
  </tr>
  <tr>
				<th scope="row" style="border: none;"></th>
				<td style="width: 49%;"><div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1">2</span>
	  </div>
	  <input type="text" class="form-control" placeholder="Enunciado"  aria-describedby="basic-addon1">
	</div></td>
				<td>
				</td>
				<td>
				</td>
				<td>
					<label class="radio">
						<input type="radio" name="radio1">
						<span class="check" style="left: 38%;"></span>
					</label>
				</td>
			</tr>
		</tbody>
</table>
			`)
            $('.hover2').show()
            $('p').addClass("resumenObjetivos2");

        })
        $('.dofaTexto').mouseleave(function () {

            $('.hover2').show()
        })
    })
   
</script>
--> 
<script>
    $(document).ready(function () {
        $('.items li:nth-child(15)').addClass("acti");
        $('.items li').click(function () {
            $('.items li').removeClass("acti");
            $(this).addClass("acti");
        })

        $('.valores').mouseenter(function () {
            let mensaje = $(this).attr('mensaje');

            $('.hover').html(`<p>${mensaje}</p>`)
            $('.hover').show()
        })

        $('.valores').mouseleave(function () {

            $('.hover').hide()
        })
    })
</script>


<script>
    var id = localStorage.getItem('id')
    $('#id_planecion').val(id);
    // console.log(id);

    id_planecion = localStorage.getItem('id')
    $('#id_Planeacion').val(id_planecion);
    // console.log(id_planecion);
</script>

@endsection