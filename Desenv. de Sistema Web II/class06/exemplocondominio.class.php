<?php


    $valorDaParcela = 125;

    $valorDeMulta = 0.37; //divisão por 100

    $valorDeJuros = $valorDaParcela*$valorDeMulta; //quanto é 37% de 125,00

    $valorTotalComJuros = $valorDaParcela + $valorDeJuros;


    echo '<h1>Resultados:</h1>';

    echo '<p>Valor da parcela inicial R$ '.$valorDaParcela.'</p>';
    echo '<p>Valor de juros R$ '.$valorDeJuros.'</p>';
    echo '<p>Valor total com juros R$ '.$valorTotalComJuros.'</p>';


?>
