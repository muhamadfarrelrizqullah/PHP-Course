<?php

function fibonacci(int $n): int{
  if($n <= 1)
    return 0;
  if($n === 2)
    return 1;
  return fibonacci($n - 1) + fibonacci($n - 2);
}

function fibonacciLoop(int $n): int{
  $n1 = 0;
  $n2 = 1;
  if($n <= 1)
    return $n1;
  if($n === 2)
    return $n2;
  for($i = 3; $i <= $n; $i++){
    $result = $n1 + $n2;
    $n1 = $n2;
    $n2 = $result;
  }
  return $result;
}

for($i = 1; $i <= 10; $i++){
  echo fibonacciLoop($i) . ', ';
}
echo PHP_EOL;