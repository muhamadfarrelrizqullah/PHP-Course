<?php

//$names = array('Andi', 'Budi', 'Charlie', 'Dewi');
$names = ['Andi', 'Budi', 'Charlie', 'Dewi'];

// $names[] = 'Skysen';
// $names[] = 'Skysen 2';
// var_dump($names);

// for($i = 0; $i < count($names); $i++){
//   $name = $names[$i];
//   echo $name . PHP_EOL;
// }

// foreach($names as $name){
//   echo $name . PHP_EOL;
// }

foreach($names as $name):
  echo $name . PHP_EOL;
endforeach;