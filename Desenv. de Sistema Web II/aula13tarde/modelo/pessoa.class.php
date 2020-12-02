<?php

    class Pessoa
    {

        private $nome;
        private $idade;


        public function __construct() {
          
        }

        public function __destruct()
        {

        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }                                       

        public function __set($atributo, $valor)        
        {
            $this->$atributo = $valor;
        }

        
        public function calcularEmMeses()
        {
            return $this->idade * 12;
        }

        //toString - imprimindo os dados do objeto em forma de texto
        public function __toString()
        {
            return nl2br( "Nome: $this->nome
                        idade: $this->idade  
                        idade em meses: {$this->calcularEmMeses()}");
        }//fecha o toString()

    }   