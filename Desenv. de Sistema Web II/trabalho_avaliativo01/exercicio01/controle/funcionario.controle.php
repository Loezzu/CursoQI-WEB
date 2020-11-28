<?php


    include "../modelo/funcionario.class.php";

    $funcionario = new Funcionario();

    $funcionario->setSalarioFixo($_POST['txtsalario']);
    $funcionario->setValorVendas($_POST['txtvendas']);


    echo    "<h3>Salário Fixo: R$ {$funcionario->getSalarioFixo()}"."</h3>".
            "<h3>Valor Vendas: R$ {$funcionario->getValorVendas()}"."</h3>".
            "<h3>Comissão: R$ {$funcionario->calcularComissao()}"."</h3>".
            "<h3>Salário Final: R$ {$funcionario->calcularSalarioFinal()}"."</h3>";