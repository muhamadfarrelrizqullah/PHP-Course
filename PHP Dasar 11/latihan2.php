<?php

define('SIZE', 5);

for($i = 0; $i < SIZE; $i++){
  for($j = 0; $j < SIZE - $i; $j++){
    printf('%d ', $i + $j + 1);
  }
  echo PHP_EOL;
}

?>