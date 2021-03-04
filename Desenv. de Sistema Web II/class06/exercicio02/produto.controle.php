<?php

include "produto.class.php";


$produto = new Produto();

$produto->setNome("Televisão");
$produto->setValor(1200);
$produto->setQuantidade(1);

    
     echo '<br>';
   // Dados do produto
   echo '<h2>Produto: '.$produto->getNome().'</h2>';
   echo '<h2>Valor R$ '.$produto->getValor().'</h2>';
   echo '<h2>Quantidade: '.$produto->getQuantidade().'</h2>';

     echo '<br>';
     echo '<hr>';
     echo '<br>';

    // valor da compra inicial
    echo '<h2>Valor Total R$ '.$produto->calcularValorFinal().'</h2>';

     echo '<br>';
     echo '<hr>';
     echo '<br>';
   
  
    // condições - forma de pagamento
    echo '<h3>Valor de Desconto 10%: R$ '.$produto->calcularValorDeDesconto().'</h3>';
    echo '<h3>Valor de Juros 2,5%: R$ '.$produto->calcularValorDeJuros().'</h3>';

     echo '<br>';
     echo '<hr>';
     echo '<br>';
  
    // Valores finais 
    echo '<h3>Valor Total com Desconto R$ '.$produto->calcularValorTotalComDesconto().'</h3>';
    echo '<h3>Valor Total com Juros R$ '.$produto->calcularValorTotalComJuros().'</h3>';

     echo '<br>';
     echo '<hr>';
     echo '<br>';
   

?>