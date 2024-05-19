<?php

function isPrime(int $n): bool{
  if($n < 2)
    return false;
  for($i = 2; $i < $n; $i++){
    if($n % $i == 0) {
      return false;
    }
  }
  return true;
}

for($i = 1; $i <= 20; $i++){
  if(isPrime($i))
    echo $i . ', ';
}
echo PHP_EOL;