<?php

class Pessoa
{

   private $nome;
   private $idade;


   //métodos de acesso

   public function getNome()
   {
       return $this->nome;
   }
   public function setNome($nome)
   {
       $this->nome = $nome;
       return $this;
   }
   public function getIdade()
   {
       return $this->idade;
   }
   public function setIdade($idade)
   {
       $this->idade = $idade;
       return $this;
   }


   public function calcularIdadeEmMeses() 
   {
       return $this->idade * 12;
   }

   public function calcularIdadeEmSemanas() 
   {
       return $this->idade * 52;
   }

   public function calcularIdadeEmDias() 
   {
       return $this->idade * 365;
   }

} //fim da classe

?>