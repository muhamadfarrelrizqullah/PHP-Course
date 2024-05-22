<?php

class Student{
  var string $name;
  var ?string $classroom = 'Kosong';

  function __construct(string $name = '', string $classroom = ''){
    echo "Objek Student dibuat\n";
    $this->name = $name;
    $this->classroom = $classroom;
  }

  function __destruct(){
    echo "Object {$this->name} dihapus\n";
  }
  
  function showInformation(): void{
    echo "{$this->name} belajar di {$this->classroom}\n";
  }
};
