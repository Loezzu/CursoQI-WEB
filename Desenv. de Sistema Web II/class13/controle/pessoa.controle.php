<?php

    include "../modelo/pessoa.class.php";


    $pessoa = new Pessoa;


    $pessoa->nome = $_POST['txtnome'];
    $pessoa->idade = $_POST['txtidade'];

    //imprimindo os dados via toString()
    //echo $pessoa;


    header("location:../visao/pessoa.resposta.php?txtnome=$pessoa->nome&txtidade=$pessoa->idade&resultado={$pessoa->calcularEmMeses()}");


    