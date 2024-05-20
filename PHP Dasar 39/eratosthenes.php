<?php

function getPrimes($n){
  $isPrimes = array_fill(0, $n + 1, true);
  $isPrimes[0] = false;
  $isPrimes[1] = false;

  for($i = 2; $i <= $n; $i++){
    if($isPrimes[$i]){
      echo $i . ' ';
      for($j = $i * $i; $j <= $n; $j += $i)
        $isPrimes[$j] = false;
    }
  }
  echo PHP_EOL;
}

$start = microtime(true);
getPrimes(100_000);
$end = microtime(true);
$duration = round($end - $start, 3);
echo "Waktu $duration detik\n";

