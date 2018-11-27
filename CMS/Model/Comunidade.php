<?php

    require_once("ConexaoBanco.php");

    class Comunidade{
        private $idComentario;
        private $data;
        private $texto;
        private $caminhoImagem;
        private $idCliente;
        private $nome;
        private $idResposta;
        private $estado;
        private $idade;
        private $textoResposta;
        
        public function getIdComentario(){
            
            return $this->idComentario;
            
        }
        
        public function setIdComentario($idComentario){
            
            $this->idComentario = $idComentario;
            
        }
        
         public function getData(){
            
            return $this->data;
            
        }
        
        public function setData($data){
            
            $this->data = $data;
            
        }
        
         public function getTexto(){
            
            return $this->texto;
            
        }
        
        public function setTexto($texto){
            
            $this->texto = $texto;
            
        }
        
         public function getCaminhoImagem(){
            
            return $this->caminhoImagem;
            
        }
        
        public function setCaminhoImagem($caminhoImagem){
            
            $this->caminhoImagem = $caminhoImagem;
            
        }
        
         public function getIdCliente(){
            
            return $this->idCliente;
            
        }
        
        public function setIdCliente($idCliente){
            
            $this->idCliente = $idCliente;
            
        }
        
        public function getIdResposta(){
            
            return $this->idResposta;
            
        }
        
        public function setIdResposta($idResposta){
            
            $this->idResposta = $idResposta;
            
        }
        
        public function getEstado(){
            
            return $this->estado;
            
        }
        
        public function setEstado($estado){
            
            $this->estado = $estado;
            
        }
        
        public function getIdade(){
            
            return $this->idade;
            
        }
        
        public function setIdade($idade){
            
            $this->idade = $idade;
            
        }
        
        public function getTextoResposta(){
            
            return $this->textoResposta;
            
        }
        
        public function setTextoResposta($textoResposta){
            
            $this->textoResposta = $textoResposta;
            
        }
        
        public function getNome(){
            
            return $this->nome;
            
        }
        
        public function setNome($nome){
            
            $this->nome = $nome;
            
        }
        
        
    }

?>