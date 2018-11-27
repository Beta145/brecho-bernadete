<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/style_login.css">
        <script src="js/jquery-3.3.1.js" charset="utf-8"></script>
        <!-- <script src="../CMS/View/JavaScript/ajax_cliente_crud.js"></script> -->
        <script>

            function autenticar(){

                $.post("../CMS/router.php", {

                    email: $("#txt_email").val(),
                    senha: $("#txt_senha").val(),
                    classe: "cliente",
                    acao: "autenticar"

                }).done(function(dados){

                    alert(dados)

                    if(dados != ""){

                        //alert("autenticou")

                        document.location.href = "http://localhost/brecho_bernadete/brecho_bernadete/home.php";

                    } else {

                        alert("Erro na Autenticação.");

                    }

                });

            }

            $(document).ready(function(){

                $.post("../CMS/router.php", {

                    classe: "cliente",
                    acao: "matarSessao"

                });


            });

        </script>
        <title>CMS Bernadete | Autenticação</title>
    </head>
    <body>
        <div id="main" style="height:1150px;padding-top:50px;">
            <div id="login_content">
                <div id="logo">
                    <img src="Imagens/logo_brecho.png" alt="">
                </div>
                <div class="content_input" style="margin-top:50px;">
                    <div class="title_input">
                        E-mail
                    </div>
                    <input type="text" name="txt_email" id="txt_email" placeholder="Digite o seu e-mail." class="input_text" style="width:500px;">
                </div>
                <div class="content_input" style="margin-top:20px;">
                    <div class="title_input">
                        Senha
                    </div>
                    <input type="password" name="txt_senha" id="txt_senha" placeholder="Digite a sua senha." class="input_text" style="width:500px;">
                </div>
                <button name="btn_login" class="buttons" style="margin-left:470px;" onclick="autenticar()">Entrar</button>
            </div>
        </div>
    </body>
</html>
