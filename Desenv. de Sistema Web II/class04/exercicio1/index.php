<?php

include "pessoa.class.php";

    //objeto da classe

    $pessoa = new Pessoa();

    //enviando os dados para o sistema via set
    $pessoa->setNome("Luiz");
    $pessoa->setIdade(17);


    echo '<h3>Resultado...</h3>';

    echo '<h3>IDADE: '.$pessoa->getIdade().'</3>';
    echo '<h3>MESES: '.$pessoa->calcularIdadeEmMeses().'</3>';
    echo '<h3>DIAS: '.$pessoa->calcularIdadeEmDias().'</3>';
    echo '<h3>SEMANAS: '.$pessoa->calcularIdadeEmSemanas().'</3>';

?>