<?php

    include "produto.class.php";


    $produto = new Produto();

    $produto->setNome("Salgadinho Ruffles");
    $produto->setValor(3,50);
    $produto->setQuantidade(10);


    echo '<h1>Resultados...:</h1>';

    echo '<h2>Nome do produto: '.$produto->getNome().'</2>';
    echo '<h2>Valor final do Produto: R$ '.$produto->calcularValorFinal().'</2>';

?>
