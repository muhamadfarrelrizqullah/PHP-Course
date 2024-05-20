<?php

require_once('library.php');

class Teacher{
  var string $name;
  var ?string $classroom = 'Kosong';
  function showInformation(): void{
    echo "{$this->name} mengajar di {$this->classroom}\n";
  }
};
