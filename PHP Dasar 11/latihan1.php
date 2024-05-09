<?php

define('SIZE', 5);

$value = 1;
for($i = 0; $i < SIZE; $i++){
  for($j = 0; $j <= $i; $j++){
    printf('%02d ', $value++);
  }
  echo PHP_EOL;
}

?>