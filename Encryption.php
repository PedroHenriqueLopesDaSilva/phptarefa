<?php

$lines = intval(fgets(STDIN));

for ($i = 0; $i < $lines; $i++) {
    $message = trim(fgets(STDIN));

    $encryptedMessage = '';

    // First pass
    for ($j = 0; $j < strlen($message); $j++) {
        $char = $message[$j];
        if (ctype_alpha($char)) {
            $encryptedMessage .= chr(ord($char) + 3);
        } else {
            $encryptedMessage .= $char;
        }
    }

    // Second pass
    $encryptedMessage = strrev($encryptedMessage);

    // Third pass
    $halfLength = intval(strlen($encryptedMessage) / 2);
    for ($k = $halfLength; $k < strlen($encryptedMessage); $k++) {
        $char = $encryptedMessage[$k];
        if (ctype_alpha($char)) {
            $encryptedMessage[$k] = chr(ord($char) - 1);
        }
    }

    echo $encryptedMessage . PHP_EOL;
}

?>
