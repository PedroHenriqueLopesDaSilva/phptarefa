<?php

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    list($f1, $f2) = explode(" ", fgets(STDIN));

    while ($f2 != 0) {
        $temp = $f2;
        $f2 = $f1 % $f2;
        $f1 = $temp;
    }

    echo $f1 . PHP_EOL;
}

?>
