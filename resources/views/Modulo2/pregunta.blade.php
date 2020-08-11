

@extends('layouts.nav2')

@section('content')
@jquery
@toastr_js
@toastr_render

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




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
			<h1>¡Muy bien! Ha finalizado la selección de estrategias y con esto el módulo 2.</h1>
			<p>
			Recuerde que las estrategias aquí seleccionadas serán incluidas en el siguiente módulo para ser asociadas por usted a los objetivos empresariales y por ende a la consecución de los mismos. 
			Lo invitamos a continuar con el desarrollo del siguiente módulo Formulación estratégica.
			</p>
			  
		  <br>
		  
		




		  <a href="{{ route('DisenoObjetivos') }}"  class="buttonModal btn btn-planeem waves-effect waves-light">Si</a>
		  <a href="{{ route('index/plam') }}"  class="buttonModal btn btn-planeem waves-effect waves-light">No</a>
		  
		
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<script>

    $('#finMeMori').modal('show')
  
  
  </script>
@endsection
