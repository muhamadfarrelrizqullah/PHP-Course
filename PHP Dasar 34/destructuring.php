<?php

/* DESTRUCTURING ARRAY */
// $numbers = [10, 20, 30];

// // $first = $numbers[0];
// // $second = $numbers[1];
// // $third = $numbers[2];
// [$first, $second, $third] = $numbers;

// var_dump($first);
// var_dump($second);
// var_dump($third);

/* DESTRUCTURING ASSOCIATIVE ARRAY */
// $student = [
//   'id'    => 1,
//   'name'  => 'Budi',
//   'class' => '2A',
// ];

// [
//   'id'    => $id,
//   'name'  => $name,
//   'class' => $class,
// ] = $student;

// var_dump($id);
// var_dump($name);
// var_dump($class);

/* DESTRUCTURING FOREACH */
// $students = [
//   [1, 'Budi', '2A'],
//   [2, 'Andi', '1A'],
//   [3, 'Charli', '2B'],
// ];

// foreach($students as [$id, $name, $class]){
//   echo "$name berada di kelas $class\n";
// }

/* SWAP */
$a = 1;
$b = 2;

// $temp = $a;
// $a = $b;
// $b = $temp;
[$b, $a] = [$a, $b];

echo "a=$a\nb=$b\n";