<?php

require_once('class/Student.php');
require_once('class/Teacher.php');

$budi = new Student('Budi', '2A');
$budi->showInformation();
$budi = '';

$andi = new Student();
$andi->name = 'Andi';
$andi->classroom = '1C';
$andi->showInformation();

$skysen = new Teacher();
$skysen->name = 'Skysen';
$skysen->classroom = '1C';
$skysen->showInformation();
