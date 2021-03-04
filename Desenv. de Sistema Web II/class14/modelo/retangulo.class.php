<?php

    class Retangulo
    {

        private $altura;
        private $base;


        public function __get($name)
        {
            return $this->$name;
        }

        public function __set($name, $value)
        {
            $this->$name = $value;
        }


        //calculo
        public function calcularArea()
        {
            return $this->altura * $this->base;
        }

        public function __toString()
        {   
            return nl2br("base: $this->base Altura: $this->altura Area: {$this->calcularArea()}");
        }

    }