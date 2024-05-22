<?php

readonly class Student{
  const SCHOOL_NAME = 'SMU Negeri 01';
  var string $name;
  var ?string $classroom;

  function __construct(string $name = '', string $classroom = ''){
    // echo "Objek Student dibuat\n";
    $this->name = $name;
    $this->classroom = $classroom;
  }

  function __destruct(){
    // echo "Object {$this->name} dihapus\n";
  }
  
  function showInformation(): void{
    echo self::SCHOOL_NAME . PHP_EOL;
    echo "{$this->name} belajar di {$this->classroom}\n";
  }
};
