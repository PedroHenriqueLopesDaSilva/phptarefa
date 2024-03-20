<?php

$n = intval(fgets(STDIN));
$pares = [];
$impares = [];

for ($i = 0; $i < $n; $i++) {
    $valor = intval(fgets(STDIN));
    
    if ($valor % 2 == 0) {
        $pares[] = $valor;
    } else {
        $impares[] = $valor;
    }
}

sort($pares);
rsort($impares);

foreach ($pares as $par) {
    echo $par . PHP_EOL;
}

foreach ($impares as $impar) {
    echo $impar . PHP_EOL;
}

?>
