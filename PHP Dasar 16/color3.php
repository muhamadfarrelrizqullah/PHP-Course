<?php

function generateRandomColor()
{
  return mt_rand(0, 255);
}

function getRandomColor()
{
  $red   = generateRandomColor();
  $green = generateRandomColor();
  $blue  = generateRandomColor();
  
  return sprintf('#%02X%02X%02X', $red, $green, $blue);  
}

echo getRandomColor() . PHP_EOL;

?>