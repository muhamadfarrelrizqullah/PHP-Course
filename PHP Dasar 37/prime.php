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

function isPrime2(int $n): bool{
  if($n < 2)
    return false;
  for($i = 2; $i <= sqrt($n); $i++){
    if($n % $i == 0) {
      return false;
    }
  }
  return true;
}

function isPrime3(int $n): bool{
  if($n < 2)
    return false;
  if($n == 2)
    return true;
  if($n % 2 == 0)
    return false;
  for($i = 3; $i <= sqrt($n); $i+= 2){
    if($n % $i == 0) {
      return false;
    }
  }
  return true;
}

function getPrimes($max){
  for($n = 1; $n <= $max; $n++){
    if(isPrime3($n))
      echo $n . ' ';
  }
  echo PHP_EOL;
}

$start = microtime(true);
getPrimes(100000);
$end = microtime(true);
$duration = round($end - $start, 3);
echo "Waktu yang diperlukan $duration detik\n";

