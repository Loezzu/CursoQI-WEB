<?php


    include "../modelo/pessoa.class.php";

    $pessoa = new Pessoa();

    $pessoa->setNome($_POST['txtnome']);
    $pessoa->setIdade($_POST['txtidade']);
    $pessoa->setRg($_POST['txtrg']);
    $pessoa->setPeso($_POST['txtpeso']);
    $pessoa->setAltura($_POST['txtaltura']);
 

    echo "<h1>Nome: {$pessoa->getNome()}".
         "<br>Idade: {$pessoa->getIdade()}".
         "<br>RG: {$pessoa->getRg()}".
         "<br>Peso: {$pessoa->getPeso()}".
         "<br>Altura: {$pessoa->getAltura()}".
         "<br>IMC: {$pessoa->calcularIMC()}"."</h1>";





?>