$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
    }
}); 


$('#gudar1').click(function(){

    var  respuesta1 = $('.respuesta1').val();
    var id_tipo_Matriz_crecimiento = $('.id_tipo_Matriz_crecimiento').val();
    var id_planecion = $('.id_planecion').val();
    var tipo = $('.tipo').val();


    for (let i = 0; i < respuesta1.length; i++) {
        console.log(respuesta1[i]);
        
    }
   

    $.ajax({
       url:'/MatrizStore',
       data:{'id_tipo_Matriz_crecimiento':id_tipo_Matriz_crecimiento,'respuesta':respuesta1,'id_Planeacion':id_planecion,'tipo':tipo},
       type:'post',
       
       success: function (response) {
                   alert(response);
       },
    });
});