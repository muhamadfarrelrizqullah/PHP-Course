<?php

// $numbers = range(11, 15);
// $numbers = range(15, 11);
// var_dump($numbers);

// $alphabets = range('a', 'd');
// $alphabets = range('apple', 'durian');
// var_dump($alphabets);

// $array = array_fill(0, 5, 'abc');
// $array = array_fill(11, 5, 'abc');
// var_dump($array);

// $origin = ['a', 'b', 'c'];
// var_dump(array_pad($origin, 5, 0));
// var_dump(array_pad($origin, -5, 0));
// var_dump($origin);

// $origin = [1, 2, 3, 4, 5];
// var_dump(array_reverse($origin));
// var_dump(shuffle($origin));
// var_dump($origin);

// $origin = [3, 5, 2, 1, 4];
// var_dump(sort($origin));
// var_dump(rsort($origin));
// var_dump($origin);

// $origin = ['a', 'a', 'b', 'c' ,'c'];
// var_dump(array_unique($origin));

$origin = ['a', 'b', 'c', 'd', 'e'];
// var_dump(array_slice($origin, 3));
// var_dump(array_slice($origin, -3));
// var_dump(array_slice($origin, 1, 2));
// var_dump(array_slice($origin, 1, -1));

// var_dump(array_splice($origin, 2, 2));
var_dump(array_splice($origin, 2, 2, ['f', 'g', 'h']));
var_dump($origin);
