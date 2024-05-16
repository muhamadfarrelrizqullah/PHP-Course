<?php

function helloWorldLoop(int $n){
  for($i = $n; $i > 0; $i--)
    echo "Hello World $i\n";
}

function helloWorldRecursive(int $n){
  if($n <= 0)
    return;
  echo "Hello World $n\n";
  helloWorldRecursive($n - 1);
}

function factorialRecursive(int $n){
  if($n == 1)
    return 1;
  return $n * factorialRecursive($n - 1);
}

function factorialLoop(int $n) {
  $result = 1;
  for($i = $n; $i > 0; $i--)
    $result *= $i;
  return $result;
}

echo factorialLoop(5) . PHP_EOL;