<?php


    class Calculo
    {

        private $valor01;
        private $valor02;


        public function getValor01()
        {
                return $this->valor01;
        }

        public function setValor01($valor01)
        {
                $this->valor01 = $valor01;
                return $this;
        }

        public function getValor02()
        {
                return $this->valor02;
        }

        public function setValor02($valor02)
        {
                $this->valor02 = $valor02;
                return $this;
        }


        public function calcularAdicao()
        {
                return $this->valor01 + $this->valor02;

        }

        public function calcularSubtracao()
        {
                return $this->valor01 - $this->valor02;

        }


        public function calcularMultiplicacao()
        {
                return $this->valor01 * $this->valor02;

        }

        public function calcularDivisao()
        {
                return $this->valor01 / $this->valor02;

        }

    }

    ?>