<?php

require_once('class/Student.php');
require_once('class/Teacher.php');

// $budi = new Student('Budi', '2A');
// $budi->showInformation();

// $andi = new Student('Andi', '1C');
// $andi->name = 'Andi';
// $andi->classroom = '1C';
// $andi->showInformation();

$skysen = new MathTeacher();
$skysen->name = 'Skysen';
$skysen->classroom = '1C';
$skysen->showInformation();
// var_dump($skysen);

