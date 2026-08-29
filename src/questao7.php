<?php

$nome = (string) readline("Digite o nome do produto: ");
$preco = (float) readline("Digite o preço do produto: ");
$quantidade = (int) readline("Digite a quantidade de produtos: ");

$total = $preco * $quantidade;

echo "Nome do produto: " . $nome. "\n";
echo "Valor total da compra: R$" . $total . "\n";