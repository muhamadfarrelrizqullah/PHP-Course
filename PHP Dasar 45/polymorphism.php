<?php

require_once('class/Student.php');
require_once('class/Teacher.php');

function showTeacher(Teacher $teacher): void{
  if($teacher instanceof CodingTeacher){
    $teacher->writeCode();
  } else {
    $teacher->showInformation();
  }
}

showTeacher(new Teacher('Skysen', '2C'));

// $object = new Teacher('Skysen', '2C');
// var_dump($object instanceof('Math' . 'Teacher'));
