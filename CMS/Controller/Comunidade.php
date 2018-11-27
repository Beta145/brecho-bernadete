<?php

    require_once("Model/Comunidade.php");
    require_once("Model/ComunidadeDAO.php");
    require_once("model/Cliente.php");
    require_once("model/ClienteDAO.php");


    session_start();

    class ComunidadeControl{



        public function obterTodos(){

            $comunidadeDAO = new ComunidadeDAO();

            $listaComentario = array();

            $listaComentario = $comunidadeDAO->obterTodos();
                        //var_dump($listaComentario);
            foreach ($listaComentario as $comunidade) {
                echo('<div class="posts">');
                echo('<div class="info_post">');
                echo('<div class="titulo_post">'.$comunidade->getNome().",".$comunidade->getIdade().",".$comunidade->getEstado().'</div>');
                echo('<div class="info">'.$comunidade->getTexto().'</div>');
                echo('<div id="resposta">');

                $listaResposta =  $comunidadeDAO->obterResposta($comunidade->getIdComentario());

                foreach($listaResposta as $resposta){

                    echo('<div class="respostas">'.$resposta->getTextoResposta().'</div>');

                }


                echo('</div>');//(RESPOSTA)
                echo('</div>');
                echo('<div class="ctr_post">');
                echo('<div class="img_post">'.$comunidade->getCaminhoImagem().'</div>');
                echo('<div class="opc_post">');
//                echo('<input type="button" value="Ver Respostas" id="btn_resposta" name="btn_post">');
                echo('<img height="50px" width="50px" src="Imagens/excluir.png" alt="Excluir Postagem" style="margin:0px;" onclick="remover('.$comunidade->getIdComentario().')">');
                echo('<input type="button" value="Ver Respostas" id="btn_resposta" name="btn_post" onclick="obterResposta()">');
                echo('</div>');
                echo('</div>');
                echo('</div>');

            }
        }

        public function obterTodosSite(){

          $comunidadeDAO = new ComunidadeDAO();

          $listaPost = array();

          $listaPost = $comunidadeDAO->obterTodos();

          foreach ($listaPost as $comunidade) {


            echo('<div class="titulo_post">'.$comunidade->getNome().",".$comunidade->getIdade().",".$comunidade->getEstado().'</div>');
            echo('<div class="texto">'.$comunidade->getTexto().'</div>');
            echo('<div class="imagem_comunidade">'.$comunidade->getCaminhoImagem().'</div>');
            echo('<div class="caixa_itens">');
            //echo('<div id="data">'"fadasdas"'</div>');
            echo('<div class="caixa_resp">');
            echo('<div class="resp">');
            echo('<input class="input_resp" type="submit" name="btn_resposta" value="Ver Respostas">');
            echo('</div>');//caixa resp
            echo('</div>');//caixa resposta
            echo('<div class="caixa_resp">');
            echo('<div class="resp">');
            echo('<input class="input_resp" type="submit"  name="btn_responda" value="Responda">');
            echo('</div>');
            echo('</div>');
            echo('</div>');//caixa itens


          }


        }

        public function obterResposta(){

            foreach ($listaResposta as $comunidade){

                echo('<div id="resposta">');
                echo('<div class="respostas">'.$comunidade->getTextoResposta().'</div>');
                echo('</div>');//(RESPOSTA)

            }


            $comunidadeDAO = new ComunidadeDAO();

            $listaResposta = array();

            $listaResposta = $comunidadeDAO->obterResposta($_POST["idComentario"]);

            foreach($listaResposta as $resposta){

                echo($resposta);

            }


        }

            public function obterUm(){

                echo("!!!!!!!!!!!");

                $comunidadeDAO = new ComunidadeDAO();

                echo(json_encode($comunidadeDAO->obter($_POST["idComentario"])));

            }

            public function remover(){

                $comunidadeDAO = new ComunidadeDAO();

                $listaResposta = $comunidadeDAO->obterResposta($_POST["idComentario"]);

                foreach ($listaResposta as $resposta){

                    $comunidadeDAO->removerResposta($resposta->getIdResposta());
                    echo($resposta->getIdResposta());

                }

                $comunidadeDAO->remover($_POST["idComentario"]);



            }
        }



?>
