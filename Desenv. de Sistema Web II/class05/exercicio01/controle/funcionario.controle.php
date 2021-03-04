<?php

    include ("../modelo/funcionario.class.php");

    $funcionario = new Funcionario();
    
    $funcionario->setValorHora(12.50);
    $funcionario->setTotalHoras(125);


    echo '<h2>Valor ganho por hora: R$ '.$funcionario->getValorHora().'</h2>';
    echo '<h2>Total de horas Trabalhadas: '.$funcionario->getTotalHoras().'</h2>';
    echo '<h2>Salário bruto: R$ '.$funcionario->calcularSalario().'</h2>';



?>