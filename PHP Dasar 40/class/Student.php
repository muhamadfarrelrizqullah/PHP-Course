<?php

class Student{
  var string $name;
  var ?string $classroom = 'Kosong';
  function showInformation(): void{
    echo "{$this->name} belajar di {$this->classroom}\n";
  }
};
