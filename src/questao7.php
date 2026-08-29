<?php

$preco = (float) readline("Digite o preço do produto: ");
$quantidade = (int) readline("Digite a quantidade de produtos: ");

$total = $preco + $quantidade;

echo "Valor total da compra: R$" . $total . "\n";