<?php

class Produto
{
    public string $nome;
    public float $preco;
    public int $quantidade;

    public function adicionarEstoque(int $qtd): void
    {
        $this->quantidade += $qtd;
    }

    public function removerEstoque(int $qtd): bool
    {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }

        return false;
    }

    public function calcularValorTotal(): float
    {
        return $this->preco * $this->quantidade;
    }
}




$produto = new Produto();

$produto->nome = "Caderno";
$produto->preco = 25.50;
$produto->quantidade = 10;

$produto->adicionarEstoque(5);

if ($produto->removerEstoque(3)) {
    echo "Produto removido com sucesso!<br>";
} else {
    echo "Estoque insuficiente!<br>";
}

echo "Produto: " . $produto->nome . "<br>";
echo "Preço: R$ " . $produto->preco . "<br>";
echo "Quantidade: " . $produto->quantidade . "<br>";
echo "Valor total do estoque: R$ " . $produto->calcularValorTotal();

