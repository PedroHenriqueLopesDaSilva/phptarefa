<?php

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $encodedText = trim(fgets(STDIN));
    $shift = intval(fgets(STDIN));

    $decodedText = '';

    foreach (str_split($encodedText) as $char) {
        $decodedChar = chr(((ord($char) - $shift - 65 + 26) % 26) + 65);
        $decodedText .= $decodedChar;
    }

    echo $decodedText . PHP_EOL;
}

?>
