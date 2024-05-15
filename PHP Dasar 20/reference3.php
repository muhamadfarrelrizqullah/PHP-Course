<?php

function &hello(){
  static $name = 'Budi';
  echo "$name\n";
  return $name;
}

$myName = &hello();
$myName = 'Andi';
hello();
