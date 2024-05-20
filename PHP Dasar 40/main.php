<?php

require('class/Student.php');
require('class/Teacher.php');

// $class = 'Student';
// $budi = new $class();

// $budi = new('Student');

$budi = new Student();
$budi->name = 'Budi';
$budi->classroom = '2A';
$budi->showInformation();

$andi = new Student();
$andi->name = 'Andi';
$andi->classroom = '1C';
$andi->showInformation();

$skysen = new Teacher();
$skysen->name = 'Skysen';
$skysen->classroom = '1C';
$skysen->showInformation();