<?php

// ARRAY_FILTER
// variable function
// function isOdd(int $n): bool{
//   return $n % 2 === 1;
// }

// $numbers = range(11, 20);
// $result = array_values(array_filter($numbers, 'isOdd'));
// var_dump($numbers);
// var_dump($result);

// $numbers = range(11, 20);
// Anonymous function
// $result = array_filter($numbers, function(int $n) {
//   return $n % 2 === 1;
// });
// Arrow function
// $result = array_filter($numbers, fn(int $n) => $n % 2 === 1);
// var_dump($numbers);
// var_dump($result);

// ARRAY_MAP
// $numbers = range(1, 5);
// //$result = array_map(fn(int $n) => $n ** 3, $numbers);
// $result = array_map(fn(int $n) => '<li>' . $n . '</li>', $numbers);

// var_dump($numbers);
// var_dump($result);

// ARRAY_REDUCE
$numbers = range(1, 5);
//$result = array_reduce($numbers, fn(int $total, int $n) => $total += $n, 0);
//$result = array_sum($numbers);
$result = array_reduce($numbers, fn(string $s, string $n) => $s .= $n . ', ', '');

var_dump($numbers);
var_dump($result);