<?php

while (true) {
    $m = intval(fgets(STDIN));
    $n = intval(fgets(STDIN));

    if ($m <= 0 || $n <= 0) {
        break;
    }

    $soma = 0;
    $sequencia = '';

    for ($i = min($m, $n); $i <= max($m, $n); $i++) {
        $soma += $i;
        $sequencia .= $i . ' ';
    }

    echo trim($sequencia) . " Sum=" . $soma . PHP_EOL;
}

?>
