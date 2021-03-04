<?php

    include ("../modelo/conversao.class.php");

    $conversao = new Conversao();


    $conversao->setValorEmReal(100);

    echo '<h1>Resultados:</h1>';

    echo '<h2>Valor em real: R$ '.$conversao->getValorEmReal().'</h2>';
    echo '<h2>Dólar: $ '.$conversao->calcularDolar().'</h2>';
    echo  '<h2>Euro: € '.$conversao->calcularEuro().'</h2>';







?>