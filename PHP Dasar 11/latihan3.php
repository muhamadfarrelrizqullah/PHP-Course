<?php

define('SIZE', 6);

for($i = 0; $i < SIZE; $i++){
  $value = $i + 1;
  printf('%02d ', $value);

  for($j = 0; $j < $i; $j++){
    $value += SIZE - $j - 1;
    printf('%02d ', $value);
  }
  echo PHP_EOL;
}

?>