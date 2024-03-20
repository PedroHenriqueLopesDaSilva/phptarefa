<?php

while (($l = intval(fgets(STDIN))) !== false) {
    $velocidades = explode(' ', fgets(STDIN));

    $maiorVelocidade = max($velocidades);

    if ($maiorVelocidade < 10) {
        echo "1" . PHP_EOL;
    } elseif ($maiorVelocidade < 20) {
        echo "2" . PHP_EOL;
    } else {
        echo "3" . PHP_EOL;
    }
}

?>
