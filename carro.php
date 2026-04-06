<?php
  class Carro{
    public $nome;
    public $ano;
    public $marca;

    public function __construct ($a, $b, $c){
        $this->nome = $a;
        $this->ano = $b;
        $this ->marca = $c;
    }
        public function exibir() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        echo "Marca: " . $this->marca . "<br><br>";
    }
    }
  
  $camaro = new Carro ("camaro", "1966" , "Chevrolet"); 
  $impala = new Carro ("impala", "1967" , "Chevrolet"); 
  $fiesta = new Carro ("fiesta","1995","Ford");
 
 
$camaro->exibir();
$impala->exibir();
$fiesta->exibir();
