let rota = "../CMS/router.php"

let moto = ""

function obterTodosSite(){

  $.post(rota, {

      classe:"comunidade",
      acao:"obterTodosSite"

  }).done(function(dados){

      $(".caixa_organizadora").html(dados);
      // alert(dados);
  });

}

function obterResposta(){

  $.post(rota,{

    classe:"comunidade",
    acao:"obterResposta"

  }).done(function(dados){

    $(".respostas").html(dados);
    alert(dados);

  });

}

$(document).ready(function(){

   //alert("fasdfasdas");
    obterResposta();
    obterTodosSite();


});
