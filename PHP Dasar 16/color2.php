<?php

function generateRandomColor()
{
  return mt_rand(0, 255);
}

$red   = generateRandomColor();
$green = generateRandomColor();
$blue  = generateRandomColor();

$color = sprintf('#%02X%02X%02X', $red, $green, $blue);
echo $color . PHP_EOL;

?>