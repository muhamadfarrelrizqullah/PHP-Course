<?php

class Teacher{
  var string $name;
  var ?string $classroom = 'Kosong';
  function showInformation(): void{
    echo "{$this->name} mengajar di {$this->classroom}\n";
  }
};

class MathTeacher extends Teacher {
  var string $subject = 'Math';
  function showInformation(): void{
    echo "Mata Pelajaran: {$this->subject}\n";
    parent::showInformation();
  }
}