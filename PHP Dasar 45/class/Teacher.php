<?php

class Teacher{
  var string $name;
  var ?string $classroom = 'Kosong';

  function __construct(string $name, string $classroom){
    $this->name = $name;
    $this->classroom = $classroom;
  }

  function showInformation(): void{
    echo "{$this->name} mengajar di {$this->classroom}\n";
  }
};

class MathTeacher extends Teacher {
  var string $subject = 'Math';
  function showInformation(): void{
    echo "Mata Pelajaran: {$this->subject}\n";
    // parent::showInformation();
  }
}

class CodingTeacher extends Teacher {
  var string $subject = 'Coding';
  function writeCode(): void{
    echo "{$this->name} is writing code\n";
  }
}