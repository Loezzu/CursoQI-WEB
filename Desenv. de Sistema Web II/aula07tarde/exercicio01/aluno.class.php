<?php

    /*
    1) Crie uma classe que receba as notas de um aluno: n1 e n2. 
    Calcule e mostre na tela a media final e o conceito de aprovação.

    media >>>> maior ou igual a 6: Aprovado

    media >>>> maior ou igual a 4 e menor ou igual a 5.9 Exame.

    media >>>> menor que 4: Reprovado.

    */

    class Aluno
    {

        private $n1;
        private $n2;


        public function getN1()
        {
                return $this->n1;
        }

        public function setN1($n1)
        {
                $this->n1 = $n1;
                return $this;
        }

        public function getN2()
        {
                return $this->n2;
        }

        public function setN2($n2)
        {
                $this->n2 = $n2;
                return $this;
        }
    
        public function calcularMedia()
        {
            return($this->n1 + $this->n2) /2;
        }
    

        public function verificarConceito()
        {
            if ($this->calcularMedia() >= 6) {
                return "Aluno Aprovado: ".$this->calcularMedia();
            }
            elseif ($this->calcularMedia() >= 4 && $this->calcularMedia() <=5.9) {
                return "Aluno em exame: ".$this->calcularMedia();
            }
            else {
                return "Aluno Reprovado: ".$this->calcularMedia();
            }

        }

    
    }


?>