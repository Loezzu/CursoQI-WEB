<?php


    class Produto
    {

        private $nome;
        private $valor;
        private $quantidade;


        public function __construct() {
            
        }


        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }

        public function getValor()
        {
                return $this->valor;
        }

        public function setValor($valor)
        {
                $this->valor = $valor;
                return $this;
        }

        public function getQuantidade()
        {
                return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;
                return $this;
        }


        public function calcularValorFinal()
        {
            return $this-> valor * $this->quantidade;

        }


        //valor do desconto
        public function calcularValorDeDesconto()
        {
            return ($this->calcularValorFinal() * 0.10);
        }

        //valor do juros
        public function calcularValorDeJuros()
        {
            return ($this->calcularValorFinal() * 0.025);
        }

        //valor total da compra com desconto
        public function calcularValorTotalComDesconto()
        {
            return ($this->calcularValorFinal() - $this->calcularValorDeDesconto());
        }

        //valor total da compra com juros
        public function calcularValorTotalComJuros()
        {
            return ($this->calcularValorFinal() + $this->calcularValorDeJuros());
        }

    }

    ?>