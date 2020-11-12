<?php 


include "pessoa.class.php";

//objeto da classe
$pessoa = new Pessoa();

//enviando os dados para o sistema via set
$pessoa->setNome("Luiz");
$pessoa->setIdade(17);

echo '<h3>Resultado final:</h3>';
echo '<p>Nome: '.$pessoa->getNome().'</p>';
echo '<p>Idade: '.$pessoa->getIdade().'</p>';

