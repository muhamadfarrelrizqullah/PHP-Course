<?php

$names = [];
array_push($names, 'Andi');
$names[] = 'Budi';
array_push($names, 'Charli', 'Doni');
//var_dump(array_pop($names));
var_dump(array_shift($names));
array_unshift($names, 'VIP');
var_dump($names);
