<?php

while (true) {
    list($h1, $m1, $h2, $m2) = explode(" ", fgets(STDIN));

    if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
        break;
    }

    $totalMinutes1 = $h1 * 60 + $m1;
    $totalMinutes2 = $h2 * 60 + $m2;

    if ($totalMinutes2 <= $totalMinutes1) {
        $totalMinutes2 += 24 * 60;
    }

    $minutesToSleep = $totalMinutes2 - $totalMinutes1;

    echo $minutesToSleep . PHP_EOL;
}

?>
