<?php

$grade = 100;

echo match(true){
  $grade > 100 => "Error\n",
  $grade >= 90 => "A\n",
  $grade >= 80 => "B\n",
  $grade >= 70 => "C\n",
  $grade >= 60 => "D\n",
  $grade >= 0 => "E\n",
  default => "Error\n",
};