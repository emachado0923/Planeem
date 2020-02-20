@extends('layouts.nav')

@section('content')


<section id="inic">
  <section>
    <div class="contenedor4">
      <h1 style="text-align: center; font-weight: bold; padding: 12px;">PROPUESTA DE VALOR</h1>
      <p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">
        Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir, pero en mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado lo que determinan sus expectativas personales a la hora de comprar
        a través de su propuesta de valor, se puede determinar lo que diferencia su producto o servicio de la competencia.

      </p>
    </div>
    <a href="{{ route('Propuesta/paso2') }}" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light boton1">Iniciar Ahora</a>
  </section>
  <section>
    <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
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
  </div>




  <!-- Modal -->
</section>

</section>


<style >
  body{
    
    background-image: url("img/fondoLogo.jpg");
  }
  .collapsing{
    margin-top: -20px;
    z-index: -1;
    
  }
  
</style>


@endsection
