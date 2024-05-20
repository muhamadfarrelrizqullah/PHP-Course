<?php

require_once('class/Student.php');
require_once('class/Teacher.php');

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

//include('view.php');