<?php

    class Funcionario
    {

        private $nome;
        private $cargo;
        private $matricula;
        private $valorHora;
        private $totalHora;


        public function __construct() 
        {
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $value)
        {
            $this->$atributo = $value;
        }

        public function calcularSalario()
        {
            return $this->valorHora * $this->totalHora;
        }

        public function __toString()
        {
            return nl2br("Nome: $this->nome 
                        Cargo: $this->cargo 
                        Matricula: $this->matricula 
                        Valor de Horas R$ $this->valorHora 
                        Total de Horas: $this->totalHora 
                        Salário final: {$this->calcularSalario()}");
        }
    }

?>