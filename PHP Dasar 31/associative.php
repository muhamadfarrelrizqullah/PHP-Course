<?php

$student = [
  'name' => 'Andi', 
  'class' => '1C', 
  'age' => 18, 
  'height' => 165,
];

// var_dump($student['name']);

// $keys = array_keys($student);
// var_dump($keys);
// echo $keys[0] . PHP_EOL;

// $values = array_values($student);
// var_dump($values);

// var_dump(array_key_exists('id', $student));
// var_dump(isset($student['id']));

extract($student);
echo $name . PHP_EOL;
echo $class . PHP_EOL;
echo $age . PHP_EOL;
echo $height . PHP_EOL;
