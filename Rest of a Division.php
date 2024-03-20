<?php

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

for ($i = min($x, $y) + 1; $i < max($x, $y); $i++) {
    if ($i % 5 === 2 || $i % 5 === 3) {
        echo $i . PHP_EOL;
    }
}

?>
