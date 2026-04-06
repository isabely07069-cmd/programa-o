<?php
class Conta{
    public $saldo;
    public $incremento;

    public function __construct($a,$b){
        $this -> saldo =$a;
        $this -> incremento = $b;
    }
$conta1 new Conta ("1000", "débito");

