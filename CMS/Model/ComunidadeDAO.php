<?php

    require_once("ConexaoBanco.php");
    require_once("Comunidade.php");
    require_once("model/Cliente.php");
    require_once("model/ClienteDAO.php");

    class ComunidadeDAO{

      public function inserir(Comunidade $comunidaede){

        $conexao = ConexaoBanco::obterConexao();

        $SQL = "INSERT INTO tbl_comentario(data, texto, caminho_imagem, id_cliente) VALUES (CURRENT_DATE(), ?, ?, ?)";

        $stm = $conexao->prepare($SQL);

        $stm->bindValue(1, $comunidade->getData());
        $stm->bindValue(2, $comunidade->getTexto());
        $stm->bindValue(3, $comunidade->getCaminhoImagem());
        $stm->bindValue(4, $comunidade->getIdCliente());

        $envio = $stm->execute();

        $conexao = null;

        if($envio){

            return True;

        } else {

            return False;

        }

      }

        public function obterTodos(){

            $conexao = ConexaoBanco::obterConexao();

            $listaPost = array();

            $SQL = "SELECT * FROM view_comunidade_lista;";

            $stm = $conexao->prepare($SQL);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $comunidade = new Comunidade();

                $comunidade->setIdComentario($resultSet["id_comentario"]);
                $comunidade->setData($resultSet["data"]);
                $comunidade->setTexto($resultSet["texto"]);
                $comunidade->setCaminhoImagem($resultSet["caminho_imagem"]);
                $comunidade->setIdCliente($resultSet["id_cliente"]);
                $comunidade->setNome($resultSet["nome"]);

                $comunidade->setEstado($resultSet["estado"]);
                $comunidade->setIdade($resultSet["data_nascimento"]);


                $listaPost[] = $comunidade;

            }

            $conexao = null;

            return $listaPost;
        }

        public function obterUm($idComentario){

            $conexao = Conexao::obterConexao();

            $SQL = "SELECT * FROM tbl_comentario WHERE id_comentario = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $idComentario);

            $stm->execute;

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            $resultSet = $stm->fetch();

            return $resultSet;

        }

//        public function obterResposta($idComentario){
//
//            $listaResposta = array();
//
//            $conexao = ConexaoBanco::obterConexao();
//
//            $SQL = "SELECT * FROM tbl_resposta WHERE id_comentario = ?";
//
//            $stm = $conexao->prepare($SQL);
//
//            $stm->bindParam(1, $idComentario);
//
//            $stm->execute();
//
//            $stm->setFetchMode(PDO::FETCH_ASSOC);
//
////            $listaResposta=[];
////            $index = 0;
////            while($resultSet = $stm->fetch()){
////
////                $listaResposta[$index] = $resultSet["texto"];
////                $index+=1;
////            }
//
//
//            $conexao = null;
//
//            return $listaResposta;
//
//
//        }

        public function remover($idComentario){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "DELETE FROM tbl_comentario WHERE id_comentario = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $idComentario);

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function removerResposta($idResposta){

            $conexao = ConexaoBanco::obterConexao();

            $SQL = "DELETE FROM tbl_resposta WHERE id_resposta = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $idResposta);

            $envio = $stm->execute();

            $conexao = null;

            if($envio){

                return true;

            } else {

                return false;

            }

        }

        public function obterResposta($idComentario){

            $conexao = ConexaoBanco::obterConexao();

            $listaResposta = array();

            $SQL = "SELECT * FROM tbl_resposta WHERE id_comentario = ?";

            $stm = $conexao->prepare($SQL);

            $stm->bindParam(1, $idComentario);

            $stm->execute();

            $stm->setFetchMode(PDO::FETCH_ASSOC);

            while($resultSet = $stm->fetch()){

                $comunidade = new Comunidade();

                $comunidade->setIdResposta($resultSet["id_resposta"]);
                $comunidade->setTextoResposta($resultSet["texto"]);

                $listaResposta[] = $comunidade;

            }

            $conexao = null;

            return $listaResposta;
        }

    }


?>
