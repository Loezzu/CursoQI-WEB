<?php

    include "funcionario.class.php";

    $funcionario = new Funcionario();
    
    $funcionario->setValorHora(15.55);
    $funcionario->setTotalHoras(175);


    echo '<h1>Resultados:</h1>';
    echo '<hr>';
    echo '<h2>Valor ganho por hora: R$ '.$funcionario->getValorHora().'</h2>';
    echo '<h2>Total de horas Trabalhadas: '.$funcionario->getTotalHoras().'</h2>';
    echo '<h2>Salário bruto: R$ '.$funcionario->calcularSalario().'</h2>';
    echo '<h2>Vale Transporte: R$ '.$funcionario->calcularValeTransporte().'</h2>';
?>