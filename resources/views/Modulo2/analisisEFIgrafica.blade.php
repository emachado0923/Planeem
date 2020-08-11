
@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
    @endsection
    @include('modal/modalGrafica')

    {{--<input type="text" style="dysplay:none" id="empresa"  >
<input type="text" style="dysplay:none" id="totalPuntuacion">
<input type="text" id="totalPuntuacion1" style="dysplay:none">--}}
</header>


<section id="conatinerGrafica2">

	<div id="TituloGrafica"><h2>Análisis EFE y EFI</h2></div>

<div class="btn-group-vertical">
    <div style="position: fixed; display: inline-block; top: 340px; left: 290px;"><h4>Crecer y construir</h4></div>
    <div style="position: fixed; display: inline-block; top: 430px; left: 290px;"><h4>Retener y mantener</h4></div>
    <div style="position: fixed; display: inline-block; top: 525px; left: 290px;"><h4>Cosechar o desinvertir</h4></div>

    <button class="botonesGrafica" style="background: #0ab5a0; outline: none;" data-toggle="modal" data-target="#exampleModalCenter"></button>
    <button class="botonesGrafica" style="background: #FC7323; outline: none;" data-toggle="modal" data-target="#exampleModalCenter1"></button>
    <button class="botonesGrafica" style="background: #00544a; outline: none;" data-toggle="modal" data-target="#exampleModalCenter2"></button>
</div>

</section>



<style type="text/css">
    .btn-group-vertical {
        position: absolute;
        margin: 70px 200px;
        z-index: 10;
    }
</style>


<body>
    <div style="display: flex; width: 100%; justify-content: center ">
        <div style="display: block; width:700px; height: 400px;">
            <canvas id="efiefe" width="700" height="400"></canvas>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


    

           <script>


                                    // var numero2 =  totalPuntuacion.slice(2-5);

               const ctx = document.querySelector('#efiefe').getContext('2d');


             
    
                var grafica11 =localStorage.getItem('grafica11');
                var grafica22 =localStorage.getItem('grafica22');

    
                var a = grafica22;
                var b = grafica11;
             
             
                if(grafica11 > 4){
                    var b = 4;

                }else{
                    var b = grafica11;
                }
                if(grafica22 > 4){
                    var a =4
                }else{
                    var a = grafica22;
                }
               
   
                
               let valueColor = function () {
                        if(a <= 3  && b <= 2 || a <= 1  && b <= 3 || a <= 2  && b <= 3 ){
                            return '#0ab5a0'
                        }else if(a >= 2  && b >= 3 || a >= 3  && b >= 3 || a >= 3  && b >= 2){
                            return '#00544a'
                        }
                        return '#FC7323'
               
               };

               //Validacion nivel god


               let textoGrafica = function () {
                    if(a <= 3  && b <= 2 || a <= 1  && b <= 3 || a <= 2  && b <= 3 ){
                        return 'Crecer y construir'
                    }else if(a >= 2  && b >= 3 || a >= 3  && b >= 3 || a >= 3  && b >= 2){
                        return 'Cosechar o desinvertir'
                    }
                    return 'Retener y mantener'
                };

               //end Validacion nivel god



               let textoPunto = textoGrafica();
               let colorValor = valueColor();

               new Chart (ctx,
                   { "type": "bubble",
                       data:
                           {
                               //queryLimits: {x:1, y:3, xcolor: 'red', ycolor: 'red'},
                               "datasets": [
                                   {
                                       label: textoPunto,
                                       data: [
                                           { "x": a, "y": b, "r": 30 },
                                           //{ "x": 4, "y": 4, "r": 0.01 }
                                           // { "x": 1.1, "y":2.3, "r": 40 }
                                       ],
                                       backgroundColor: colorValor

                                   },/*{
                                       label: "Punto En La Grafica 2",
                                       data: [
                                           { "x": 3.3, "y": 1.4, "r": 30 },
                                           //{ "x": 4, "y": 4, "r": 0.01 }
                                           // { "x": 1.1, "y":2.3, "r": 40 }
                                       ],
                                       backgroundColor: 'yellow'

                                   },*/
                               ],//Fin datasets
                           },
                       elements: {
                           point: {
                               borderColor: 'black'
                           },
                       },
                       options: {
                           legend: {
                               display: false
                           },

                           title: {
                               display: true,
                               text: 'ANALISIS EFI Y EFE',
                               fontSize:25
                           },
                           scales: {
                               yAxes: [{
                                   ticks: {
                                       beginAtZero: true,
                                       min: 1,
                                       max: 5
                                   },
                                   scaleLabel:{
                                       fontSize:25
                                   },
                                   gridLines:{
                                       zeroLineColor: 'blue',
                                       zeroLineWidth: 5,
                                       lineWidth: 1,
                                       borderDash: [2,2],
                                       drawBorder: false,

                                       display: true,
                                   },
                                   scaleLabel: {
                                       display: true,
                                       labelString: 'Matriz Efi yEfe'
                                   }
                               }],
                               xAxes: [{
                                   ticks: {
                                       beginAtZero: true,
                                       min: 1,
                                       max: 5
                                   },
                                   gridLines:{
                                       display: true,
                                   }
                               }],
                           }//Fin scales
                       },
                       plugins: {
                           dataLabels: {
                               align: 'end',
                               anchor: 'end',
                               backgroundColor: null,
                               borderColor: null,
                               borderRadius: 4,
                               borderWidth: 1,
                               color: function (context) {
                                   var value = context.dataset.data[context.dataIndex];
                                   return value < 20 ? '#ff2020'
                                       : value < 50 ? '#223388'
                                           : '#22cc22'
                               },
                               font: {
                                   size: 11,
                                   weight: 600
                               },
                               offset: 4,
                               padding: 0,
                               formatter: function (value) {
                                   return value < 20 ? "Poor"
                                       : value < 50 ? "Good"
                                           : "Great"
                               }
                           }
                       },

                   });

           </script>

    </body>

<div style="display: none">
    <form   action="{{ route('analisisEFI') }}" method="POST" id="form" role="form">
        @csrf
        <input id="id_planecion" name="id_planecion">
        <input id="a" name="a">
        <input id="b" name="b">
        
        <button type="submit" id="button"> </button>
    </form>
</div>

<script>
  a1= document.getElementById("a").value = a;
  b1= document.getElementById("b").value = b;

  localStorage.setItem('a1',a1)
  $('#a').val(a);
  console.log(a1)

   localStorage.setItem('b1',b1)
  $('#b').val(b);
  console.log(b1);
</script>


  {{-- href="http://127.0.0.1:8000/analisisDofaInfo" --}}

  


<button onclick="guardar()"  style="color:white; justify-content: center;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Siguiente</button>
<span class="icon-info" data-toggle="modal" data-target="#dos" style="cursor:pointer;"></span>
<div class="modal fade" id="dos" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

			</div>
            <div class="modal-body">
                Tanto en el eje X (EFE), como en el eje Y (EFI):<br>
                <br>
                Los valores de 1,0 a 1,99 representan una posición interna débil.<br>
                Una puntuación de 2,0 a 2,99 se considera la media.<br>
                Unos resultados entre de 3,0 a 4,0 representan una posición fuerte.
            </div>
			</div>
		</div>
	</div>
@yield('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script>
  if(a <= 3  && b <= 2 || a <= 1  && b <= 3 || a <= 2  && b <= 3 ){
        $('#exampleModalCenter').modal('show')
    }else if(a >= 2  && b >= 3 || a >= 3  && b >= 3 || a >= 3  && b >= 2){
        $('#exampleModalCenter2').modal('show')
     }else if(a == 4 || b == 4){
        $('#exampleModalCenter1').modal('show')

     }

</script>

<script>







  $(document).ready(function () {
   $('.items li:nth-child(12)').addClass("acti");
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
	$('#id_planecion').val(id);
	console.log(id)

	function btn12(){
		document.getElementById('btn12').click();
	}

    function guardar() {

            document.getElementById('button').click();

    }
</script>




<script>



    $( document ).ready(function() {
        var id = localStorage.getItem('id');

         var Penetración =0;

        $.ajax({
            url:"/Penetración/"+id,
            type:'get',
            success:function(data){
                        //	$('.val1').val(data);
                        //console.log(data);

                        if(data != null){
                            for(i of data){
                                var respuesta = parseInt(i.respuesta);


                                    Penetración+=respuesta;


                            }


                            localStorage.setItem('Penetración',Penetración);






                        }
                    }



                });

        })
   </script>




<script>



    $( document ).ready(function() {
        var id = localStorage.getItem('id');

         var Mercado =0;

        $.ajax({
            url:"/Mercado/"+id,
            type:'get',
            success:function(data){
                        //	$('.val1').val(data);
                        //console.log(data);

                        if(data != null){
                            for(i of data){
                                var respuesta = parseInt(i.respuesta);


                                    Mercado+=respuesta;


                            }


                            localStorage.setItem('Mercado',Mercado);






                        }
                    }



                });

        })
   </script>





<script>



    $( document ).ready(function() {
        var id = localStorage.getItem('id');

         var Producto =0;

        $.ajax({
            url:"/Producto/"+id,
            type:'get',
            success:function(data){
                        //	$('.val1').val(data);
                        //console.log(data);

                        if(data != null){
                            for(i of data){
                                var respuesta = parseInt(i.respuesta);


                                    Producto+=respuesta;


                            }


                            localStorage.setItem('Producto',Producto);






                        }
                    }



                });

        })
   </script>


<script>



    $( document ).ready(function() {
        var id = localStorage.getItem('id');

         var Diversificación =0;

        $.ajax({
            url:"/Diversificación/"+id,
            type:'get',
            success:function(data){
                        //	$('.val1').val(data);
                        //console.log(data);

                        if(data != null){
                            for(i of data){
                                var respuesta = parseInt(i.respuesta);

                                    Diversificación+=respuesta;

                            }

                            localStorage.setItem('Diversificación',Diversificación);

                        }
                    }



                });

        })
   </script>




@endsection
