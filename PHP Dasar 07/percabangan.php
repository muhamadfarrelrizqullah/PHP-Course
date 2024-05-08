<?php

// $score = 3;
// echo 'Sebelum Percabangan' . PHP_EOL;
// if(($score >= 3) && ($score <= 8)) {
//     echo 'Benar' . PHP_EOL;
//     echo 'Benar Kedua' . PHP_EOL;
// }
// else {
//     echo 'Salah' . PHP_EOL;
// }

// if(($score >= 3) && ($score <= 8)):
//     echo 'Benar' . PHP_EOL;
//     echo 'Benar Kedua' . PHP_EOL;
// else:
//     echo 'Salah' . PHP_EOL;
// endif;

// echo 'Setelah Percabangan' . PHP_EOL;

$score = 10;
if(($score < 3) || ($score > 8))
    echo 'Benar' . PHP_EOL;

?>