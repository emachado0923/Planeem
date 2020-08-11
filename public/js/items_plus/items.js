$(document).ready(function() {
    $('.objetivoTexto').mouseenter(function() {
        let parrafo = $(this).attr('parrafo');
        let datos = JSON.parse(parrafo);
        let html = "";
        for (const item of datos) {
            html += `<p>${item.id_estrategia}</p>`
        }

        //Json  Is Here :V

        $('.hover2').html(html)
        $('.hover2').show()
        $('p').addClass("resumenObjetivos2");

    })
    $('.objetivoTexto').mouseleave(function() {

        $('.hover2').show()
    })
})