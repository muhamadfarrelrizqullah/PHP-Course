<?php

function total(int|float $a, int|float $b): int|float{
  return $a + $b;
}

$result = total(1.5, 2);
var_dump($result);

?>