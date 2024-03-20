<?php

$ledsConfig = [
    0 => 6, // 0
    1 => 2, // 1
    2 => 5, // 2
    3 => 5, // 3
    4 => 4, // 4
    5 => 5, // 5
    6 => 6, // 6
    7 => 3, // 7
    8 => 7, // 8
    9 => 6, // 9
];

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $value = trim(fgets(STDIN));
    $totalLeds = 0;

    for ($j = 0; $j < strlen($value); $j++) {
        $totalLeds += $ledsConfig[$value[$j]];
    }

    echo $totalLeds . " leds" . PHP_EOL;
}

?>
