<?php

class Funcionario
{

    private $valorHora;
    private $totalHoras;

    //função consttrutor mágico
    public function __construct() {
        
    }

    public function getValorHora()
    {
            return $this->valorHora;
    }

    public function setValorHora($valorHora)
    {
            $this->valorHora = $valorHora;
            return $this;
    }

    public function getTotalHoras()
    {
            return $this->totalHoras;
    }

    public function setTotalHoras($totalHoras)
    {
            $this->totalHoras = $totalHoras;
            return $this;
    }


    public function calcularSalario()
    {
        return $this->valorHora * $this->totalHoras; //21 dias
    }


    //VT 6%
    public function calcularValeTransporte()
    {
        return $this->calcularSalario() * 0.06;        
    }


    public function calcularINSS($valor)
    {
        $salario = $this->calcularSalario();
        if ($valor == 1) {
            
            if ($salario <= 1045.00 ) {
                $inss = 0.075;
            }elseif ($salario <= 2089.60 ) {
                $inss = 0.09;
            }elseif ($salario <= 3134.40) {
                $inss = 0.12;
            }elseif ($salario <= 6101.06) {
                $inss = 0.14;
            }else {
                $inss = 0;
            }
        }else {
            if ($salario <= 1045.00 ) {
                $inss = "7,5%";
            }elseif ($salario <= 2089.60 ) {
                $inss = "9%";
            }elseif ($salario <= 3134.40) {
                $inss = "12%";
            }elseif ($salario <= 6101.06) {
                $inss = "14%";
            }else {
                $inss = "não foi possivel efetuar o calculo";
            }
            
        }
        return $inss;
    }


    public function calcularSalarioLiquido()
    {
        return $this->calcularSalario() - $this->calcularValeTransporte() - $this->calcularINSS(1);
    }


}//fim da classe

?>