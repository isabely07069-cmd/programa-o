<?php
class Aluno{
    public $nome;
    public $nota;

    public function __construct ($a,$b){

    $this-> nome = $a;
    $this-> nota = $b;
    }
}

$aluno1 = new Aluno ("aluno1","9");
$aluno2 = new Aluno ("aluno2", "10");
