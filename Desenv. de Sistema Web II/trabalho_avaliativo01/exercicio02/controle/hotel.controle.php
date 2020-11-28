<?php

    include "../modelo/hotel.class.php";

    $hotel = new Hotel;

    $hotel->setTotalDeDias($_POST['txtdias']);
    $hotel->setQuantidadeCrianças($_POST['txtcriancas']);
    

    echo    "<h3>Quantidade de dias: {$hotel->getTotalDeDias()}"."</h3>".
            "<h3>Quantidade de crianças:  {$hotel->getQuantidadeCrianças()}"."</h3>".
            "<h3>Valor Final: R$ {$hotel->calcularDiaria($_POST['tiposemana'], $_POST['txtcriancas'])}"."</h3>";
