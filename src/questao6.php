<?php

$nome = (string) readline("Digite o nome do aluno: ");

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Aluno: $nome\n";
echo "Media: " . $media . "\n";
?>