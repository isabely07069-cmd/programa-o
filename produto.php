<?php
class Produto{
    public $nome;
    public $preço;
public function __construct ($a,$b){
    $this->nome = $a;
    $this->preço = $b;
}
    }

    $blush = new Produto ("blush", "50 reais");
    $batom = new Produto("batom", "40 reais");