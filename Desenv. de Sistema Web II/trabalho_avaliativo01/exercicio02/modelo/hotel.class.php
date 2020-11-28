<?php

    class Hotel
    {

        private $diariaSemana;
        private $diariaFDS;
        private $quantidadeCrianças;
        private $totalDeDias;

        public function __construct() {
            
            $this->diariaSemana= 180;
            $this->diariaFDS= 210;
        

        }

        public function getDiariaSemana()
        {
                return $this->diariaSemana;
        }

        public function setDiariaSemana($diariaSemana)
        {
                $this->diariaSemana = $diariaSemana;
                return $this;
        }

        public function getDiariaFDS()
        {
                return $this->diariaFDS;
        }

        public function setDiariaFDS($diariaFDS)
        {
                $this->diariaFDS = $diariaFDS;
                return $this;
        }

        public function getQuantidadeCrianças()
        {
                return $this->quantidadeCrianças;
        }

        public function setQuantidadeCrianças($quantidadeCrianças)
        {
                $this->quantidadeCrianças = $quantidadeCrianças;
                return $this;
        }

        public function getTotalDeDias()
        {
                return $this->totalDeDias;
        }

        public function setTotalDeDias($totalDeDias)
        {
                $this->totalDeDias = $totalDeDias;
                return $this;
        }
        
      



        public function calcularDiaria($numero, $numeroDeCrianca)
        {   
            $criançaAdicional = 0;
            $desconto = 0;
        
            switch ($numero) {
                case 1:
                    $total = $this->totalDeDias * $this->diariaSemana;
                    break;
                case 2:
                        $total = $this->totalDeDias * $this->diariaFDS;
                    break;         
            }

            if ($this->quantidadeCrianças >=1) {
                    $criançaAdicional = $this->totalDeDias * $numeroDeCrianca * 50;
            }
            if ($this->totalDeDias > 3 && $numeroDeCrianca == 0) {
                    $desconto = 0.08 * $total;
            }


            return $total + $criançaAdicional - $desconto;



        }

      
    }