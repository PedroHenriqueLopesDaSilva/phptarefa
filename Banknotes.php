<?php

$valor = intval(fgets(STDIN));

$notas = [100, 50, 20, 10, 5, 2, 1];
$quantidadeNotas = [];

echo $valor . PHP_EOL;

foreach ($notas as $nota) {
    $quantidade = intdiv($valor, $nota);
    $quantidadeNotas[$nota] = $quantidade;
    $valor -= $quantidade * $nota;
}

foreach ($quantidadeNotas as $nota => $quantidade) {
    echo $quantidade . " nota(s) de R$ " . $nota . ",00" . PHP_EOL;
}
?>
