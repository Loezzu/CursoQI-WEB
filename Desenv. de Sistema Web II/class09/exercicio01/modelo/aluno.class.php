<?php


    class Aluno
    {

        private $nome;  //input que receba texto
        private $ra;    //inout que receba numeros
        private $n1;    //inout que receba numeros
        private $n2;    //inout que receba numeros
        private $disciplina; //select que receba textos/numeros
        private $parecer; //textarea - mensagem


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

        public function getRa()
        {
                return $this->ra;
        }

        public function setRa($ra)
        {
                $this->ra = $ra;
                return $this;
        }

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

        public function getDisciplina()
        {
                return $this->disciplina;
        }

        public function setDisciplina($disciplina)
        {
                $this->disciplina = $disciplina;
                return $this;
        }

        public function getParecer()
        {
                return $this->parecer;
        }

        public function setParecer($parecer)
        {
                $this->parecer = $parecer;
                return $this;
        }


        //calculos:
    
        public function calcularMedia()
        {
            return($this->n1 + $this->n2) /2;
        }
    

        public function verificarConceito()
        {
            if ($this->calcularMedia() >= 6) {
                return "Aluno Aprovado";
            }
            elseif ($this->calcularMedia() >= 4 && $this->calcularMedia() <=5.9) {
                return "Aluno em exame";
            }
            else {
                return "Aluno Reprovado";
            }

        } 



    }


?>