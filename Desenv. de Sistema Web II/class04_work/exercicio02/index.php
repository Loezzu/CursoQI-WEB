<?php

    include "calculo.class.php";

    $calculo = new Calculo();

    $calculo->setValor01(20);
    $calculo->setValor02(5);


    echo '<h1>Resultados...   </h1>';

    echo '<h2 style="color:blue;">Adição: '.$calculo->calcularAdicao().'</2>';
    echo '<h2 style="color:red;">Subtração: '.$calculo->calcularSubtracao().'</2>';
    echo '<h2 style="color:#00e600;">Multiplicação: '.$calculo->calcularMultiplicacao().'</2>';
    echo '<h2 style="color:#ff3399;">Divisão: '.$calculo->calcularDivisao().'</2>';

    ?>