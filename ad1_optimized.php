<?php

/**
 * Don't read extra characters between the digits.
 * 
 * Still O(N) but is more optimized. Will read all characters in the case of a single digit.
*/
function get_line_val_two_pointer($line) {
    $sum = 0;
    $n = strlen($line);
    for ($i = 0; $i < $n; $i++) {
        $ch = $line[$i];
        if ($ch < '0' || $ch > '9')
            continue;
        $sum = intval($ch);
        break;
    }
    for ($i = $n - 1; $i >= 0; $i--) {
        $ch = $line[$i];
        if ($ch < '0' || $ch > '9')
            continue;
        $sum = $sum * 10 + intval($ch);
        break;
    }
    return $sum;
}

function main() {
    $input = file_get_contents('.\input.txt'); // Less syscalls than repeated fgetc().
    $lines = explode(PHP_EOL, $input);

    $total = 0;
    foreach ($lines as $line)
        $total += get_line_val_two_pointer($line);
    printf("%s%s", $total, PHP_EOL);
}

main();

?>
