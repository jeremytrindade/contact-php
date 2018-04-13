$(function(){

    $('#contact-form').submit(function(e){

        e.preventDefault();//tirar o comportamento quando valido um formulario.
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();//vai buscar tudo e mete num postdata

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            datatype: 'json',
            success: function(result){
                
            }
        })
    })
})