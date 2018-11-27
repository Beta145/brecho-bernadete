let rota = "../router.php"

let modo = ""

function obterTodos(){

    $.post(rota, {

        classe:"comunidade",
        acao:"obterTodos"

    }).done(function(dados){

        $(".posts").html(dados);
        //alert(dados);
    });

}

function obterResposta(){

        //TODO Javascript display block
        $(".respostas").css({"display":"block"});
        //document.getElementsById("respostas").style.display = "none";

}

function remover(idComentario){

    $.post(rota, {

        classe:"comunidade",
        acao:"remover",
        idComentario: idComentario

    }).done(function(dados){
        alert(dados);
        obterTodos();

    });

}

$(document).ready(function(){

    obterTodos();


});
