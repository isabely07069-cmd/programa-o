<?php
class Animal{
    // atributos
    public $tamanho;
    public $cor;
    public $numerodepatas;
    public $pelagem;
    
    //metodos
    public function andar(){
        echo "andando";

    }
    
    public function falar (){
        echo "falando";

    }
    
    public function comer(){
        echo "comendo";

    }
   
    }

    //instanciar objetos
    $gatoPreto = new animal (); //instanciei objeto da classe Animal
    $gatoPreto->cor = "preto";
    $gatoPreto->numerodepatas = "4";
    $gatoPreto->pelagem = "baixa";
    $gatoPreto->tamanho = "60";

    echo "o gato preto tem a cor" . $gatoPreto->cor . "<br>";
    echo "o gato preto tem " . $gatoPreto->numerodepatas . "<br>";
    echo "o gato preto tem a pelagem" . $gatoPreto->pelagem . "<br>";
    echo "o gato preto tem tamanho" . $gatoPreto->tamanho . " cm <br>";


    $cachorrocaramelo = new animal ();
    $cachorrocaramelo->cor = "caramelo";
    $cachorrocaramelo->numerodepatas = "4";
    $cachorrocaramelo->pelagem = "baixa";
    $gatoPreto->tamanho = "90";

    echo "o cachorro caramelo  tem a cor" . $cachorrocaramelo->cor . "<br>";
    echo "o cachorro caramelo tem " . $cachorrocaramelo->numerodepatas . "<br>";
    echo "o cachorro caramelo tem a pelagem" . $cachorrocaramelo->pelagem . "<br>";
    echo "o cachorro caramelo tem tamanho" . $cachorrocaramelo ->tamanho . " cm <br>";