<?php

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$sum = 0;

for ($i = min($x, $y) + 1; $i < max($x, $y); $i++) {
    if ($i % 2 !== 0) {
        $sum += $i;
    }
}

echo $sum . PHP_EOL;

?>
