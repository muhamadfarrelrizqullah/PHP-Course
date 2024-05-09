<?php

$a = 'FIZZ';
$b = 'BUZZ';

for( $i = 1; $i <= 30; $i++){
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $a . $b . PHP_EOL;
    } else if ($i % 3 == 0) {
        echo $a . PHP_EOL;
    } else if ($i % 5 == 0) {
        echo $b . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}

?>