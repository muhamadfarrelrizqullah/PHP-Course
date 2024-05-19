<?php

function sum(int ...$numbers): int{
  $result = 0;
  foreach($numbers as $number)
    $result += $number;
  return $result;
}

$array = [1, 2, 3, 4, 5];
var_dump(sum(...$array));