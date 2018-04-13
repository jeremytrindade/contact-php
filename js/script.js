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

                if(result.isSuccess){
                    $("#contact-form").append("<p class='thank-you' style='display: '>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>");// serve para meter a mensagem de validação.
                    $("#contact-form")[0].reset();//aqui mete o formulario todo a zero.

                }
                else{
                    $("#firstname + .comments")/*servve para acceder ao determinado espaço, ou seja o primeiro elemento depois do elemento com id firstname com class comments.*/.html(result.firstnameError);//isto serve para lhe adicionar conteudo que esta na variavel firstnameError.
                    $("#name + .comments").html(result.nameError);
                    $("#email + .comments").html(result.emailError);
                    $("#phone + .comments").html(result.phoneError);
                    $("#message + .comments").html(result.messageError);
                    
                }
            }
        })
    })
})