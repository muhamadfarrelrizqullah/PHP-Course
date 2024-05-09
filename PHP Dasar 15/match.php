<?php

$grade = 'A';

switch($grade){
  case 'A' : 
    echo "Excellent\n";
    break;
  case 'B' : 
    echo "Good\n";
    break;
  case 'C' : 
    echo "Satisfactory\n";
    break;
  case 'D' : 
    echo "Minimum Passing\n";
    break;
  case 'E' :
    echo "Failure\n";
    break;
  default:
    echo "Error\n";
    break;
}

echo match($grade){
  'A' => "Excellent\n",
  'B' => "Good\n",
  'C' => "Satisfactory\n",
  'D' => "Minimum Passing\n",
  'E' => "Failure\n",
  default => "Error\n",
};