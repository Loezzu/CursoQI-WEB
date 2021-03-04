<?php

    include "aluno.class.php";

    $aluno = new Aluno();

    $aluno->setN1(9);
    $aluno->setN2(8);

    echo "<h1>Resultados: </h1>";

    echo "<h4>Nota 1: ".$aluno->getN1()."</h4>";
    echo "<h4>Nota 2: ".$aluno->getN2()."</h4>";

    echo "<h4>Status: ".$aluno->verificarConceito()."</h4>";



?>