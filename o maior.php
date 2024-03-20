<?php
// Ler os três valores da entrada
$entrada = explode(" ", fgets(STDIN));
$a = intval($entrada[0]);
$b = intval($entrada[1]);
$c = intval($entrada[2]);

// Encontrar o maior entre a e b
$maiorAB = ($a + $b + abs($a - $b)) / 2;

// Encontrar o maior entre o maior de a e b e c
$maior = ($maiorAB + $c + abs($maiorAB - $c)) / 2;

// Imprimir o resultado
echo $maior . " eh o maior\n";
?>