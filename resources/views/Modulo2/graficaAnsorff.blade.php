
@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modalGrafica2')
    {{--<input type="text" style="dysplay:none" id="empresa"  >
<input type="text" style="dysplay:none" id="totalPuntuacion">
<input type="text" id="totalPuntuacion1" style="dysplay:none">--}}
</header>
<section id="conatinerGrafica2">
	<div id="TituloGrafica"><h2>Matriz de Crecimiento</h2></div>
<div class="btn-group-vertical">

    <div style="position: fixed; display: inline-block; top: 280px; left: 290px;"><h4>Penetración de Mercado</h4></div>
    <div style="position: fixed; display: inline-block; top: 370px; left: 290px;"><h4>Desarrollo de Producto</h4></div>
    <div style="position: fixed; display: inline-block; top: 463px; left: 290px;"><h4>Desarrollo de Mercado</h4></div>
    <div style="position: fixed; display: inline-block; top: 553px; left: 290px;"><h4>Diversificación </h4></div>

  <button class="botonesGrafica" style="background: #0AB5A0; outline: none;" data-toggle="modal" data-target="#c1"></button>
  <button class="botonesGrafica" style="background: #FC7323; outline: none;" data-toggle="modal" data-target="#c2"></button>
  <button class="botonesGrafica" style="background: #238276; outline: none;" data-toggle="modal" data-target="#c3"></button>
  <button class="botonesGrafica" style="background: #003029; outline: none;" data-toggle="modal" data-target="#c4"></button>
</div>
</section>
<style type="text/css">
    .btn-group-vertical {
        position: absolute;
        margin: 10px 200px;
        z-index: 10;
    }
</style>

<body>

<div style="display: flex; width: 100%; justify-content: center ">
    <div style="display: block; width:700px; height: 400px;">
        <canvas id="ansorff" width="700" height="400"></canvas>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


<script>

    var Penetración = localStorage.getItem('Penetración');
    var Mercado = localStorage.getItem('Mercado');
    var Producto= localStorage.getItem('Producto');
    var Diversificación =  localStorage.getItem('Diversificación');

const ctx = document.querySelector('#ansorff').getContext('2d')
let a = Penetración;
let b = Mercado;
let c =Producto;
let d = Diversificación;
new Chart(ctx,
{"type":"bar",
"data":
{
    "labels":["Penetración de Mercado","Desarrollo de Mercado","Desarrollo de Producto","Diversificación "],
    "datasets":
        [
            {
                "label":"Resultado",
                "data":[a,b,c,d],
                "fill":true,
                "backgroundColor":
                    [
                        "#0ab5a0",
                        "#FC7323",
                        "#00544a",
                        "#003029"

                    ],
                "borderWidth":1
            }
        ]
},
"options":
{
    legend: {
        display: false
    },
    "scales":
        {"yAxes":
                [
                    {
                        "ticks":
                            {
                                "beginAtZero":true,
                                min: 0,
                                max: 100
                            }
                    }
                ]
        }
}
});
</script>


</body>


  {{-- href="http://127.0.0.1:8000/analisisDofaInfo" --}}
 <!-- <a  href="{{ route('analisisDofaInfo') }} "  style="color:white; justify-content: center; " name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Siguiente</a>-->

  <a  href="{{ route('estrategiaInfo') }} "  style="color:white; justify-content: center; " name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Siguiente</a>

{{-- <span class="icon-info" data-toggle="modal" data-target="#r4" style="cursor:pointer;"></span>
<div class="modal fade" id="r4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
</div> --}}
@yield('script')



@jquery
@toastr_js
@toastr_render

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(14)').addClass("acti");
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

@endsection
