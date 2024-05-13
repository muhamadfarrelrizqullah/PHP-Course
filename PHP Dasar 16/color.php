<?php

$red   = mt_rand(0, 255);
$green = mt_rand(0, 255);
$blue  = mt_rand(0, 255);

$color = sprintf('#%02X%02X%02X', $red, $green, $blue);
echo $color . PHP_EOL;

?>