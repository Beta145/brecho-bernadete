<?php
session_start();

if(isset($_GET['modo'])){
    $modo = $_GET['modo'];
    if($modo == 'destroi'){
        session_destroy();
        header('location:http://localhost/brecho_bernadete/brecho_bernadete/home.php');
    }
}

?>
<header id="header">
    <div id="menu">
        <div id="menu_logo"> <img src="imagens/menu.png" alt="Clique para aparecer o menu"> </div>
        <a href="home.php"> <div id="logo"> <img src="imagens/logo_brecho.png" id="logo_img" alt=""> </div></a>
        <nav id="nav">
            <div class="itens" id="first_item"><a href="produtos.php">Produtos</a></div>
            <div class="itens"><a href="promocoes.php">Promoções</a></div>
            <div class="itens"><a href="comunidade.php">Comunidade</a></div>
            <div class="itens"><a href="blog.php">Blog</a></div>
            <div class="itens"><a href="empresa.php">Empresa </a></div>
        </nav>
        <div id="login">

          <?php
            if(isset($_SESSION['id_cliente'])){
              echo($_SESSION["nome"]);

            }else {
          ?>
            <a href="login.php">
                <div class="autenticacao">
                    Entre

            </a>
            <a href="cadastro.php">
              ou cadastre-se
            </a>
            </div>
            <?php
            }
           ?>
           <div id="logout">
             <a href="home.php?modo=destroi" style="text-decoration:none; color: red;">
               sair
             </a>
           </div>
            <div id="perfil">
                <img src="imagens/user_icon.png" alt="Autenticar ou Cadastrar">
            </div>
        </div>
    </div>
</header>
