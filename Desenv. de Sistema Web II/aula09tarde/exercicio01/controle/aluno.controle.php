<?php

    include "../modelo/aluno.class.php.";

     $aluno = new Aluno();

     $aluno->setNome($_POST['txtnome']);
     $aluno->setRa($_POST['txtra']);
     $aluno->setN1($_POST['txtn1']);
     $aluno->setN2($_POST['txtn2']);
     $aluno->setDisciplina($_POST['disciplina']);
     $aluno->setParecer($_POST['parecer']);


    echo    "<h3>Nome: {$aluno->getNome()}"."</h3>".
            "<h3>RA: {$aluno->getRa()}"."</h3>".
            "<h3>Nota 1: {$aluno->getN1()}"."</h3>".
            "<h3>Nota 2: {$aluno->getN2()}"."</h3>".
            "<h3>Média: {$aluno->calcularMedia()}"."</h3>".
            "<h3>Disciplina: {$aluno->getDisciplina()}"."</h3>".
            "<h3>Conceito: {$aluno->verificarConceito()}"."</h3>".
            "<h3>Parecer: {$aluno->getParecer()}"."</h3>";

 
?>

