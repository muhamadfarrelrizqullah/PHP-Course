<?php

$name1 = 'Andi';
$classroom1 = '1C';

$name2 = 'Budi';
$classroom2 = '2A';

function showInformation1($name, $classroom){
  echo "$name belajar di $classroom\n";
}

$name3 = 'Skysen';
$classroom3 = '1C';

function showInformation2($name, $classroom){
  echo "$name mengajar di $classroom\n";
}

showInformation1($name3, $classroom3);
// showInformation1($name2, $classroom2);
// showInformation2($name3, $classroom3);