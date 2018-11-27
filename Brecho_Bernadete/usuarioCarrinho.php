﻿<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_usuario_carrinho.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<header>
    <!-- menu -->

    <?php

        include("header.php");

    ?>

</header>

<div id="main">

    <div id="usuario_compras">
        <div id="menu_usuario">
            <a href="usuarioCompra.php" style="text-decoration: none;">
                <div class="opc_usuario" >Compras</div>
            </a>
            <div class="opc_usuario"><a href="usuarioVenda.php" style="text-decoration: none;">Vendas</a></div>
            <div class="opc_usuario"><a href="#" style="text-decoration: none;">Dados</a></div>
            <div class="opc_usuario" style="background-color: #696969;"><a href="#" style="text-decoration: none;" >Carrinho de compras</a></div>
        </div>

        <div class="compras_usuario">

            <div class="img_compras">
                <img src="imagens/imagens/jaqueta%20masculino%202.jpg" style="width: 100%; height: 100%;">
            </div>
            <div class="desc_compras">

            <p id="nomeProduto" style="font-weight: bold; font-size:28px;">Jaqueta Masculino</p>

                <p style="font-size:22px;">Cor: Preta
                </p>
                <p style="font-size:22px;">Tamanho: G
                </p>
                <p style="font-size:22px;">Preço: R$ 1109,99
                </p>

            </div>

        </div>

        <hr class="hr_compras">

        <div id="vermais_compras">
        <input id="btn_finalizar" type="button" name="btn_vermaiscompras" value="Finalizar Compras">

    </div>


    </div>



</div>

<footer>

    <?php

        include("footer.php");

    ?>

</footer>

</body>

</html>
