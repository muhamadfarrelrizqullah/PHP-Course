<?php

$grade = 'F';

if($grade == 'A'){
  echo 'Sangat Baik' . PHP_EOL;
} else if($grade == 'B'){
  echo 'Baik' . PHP_EOL;
} else if($grade == 'C'){
  echo 'Cukup' . PHP_EOL;
} else if($grade == 'D'){
  echo 'Kurang' . PHP_EOL;
} else if($grade == 'E'){
  echo 'Gagal' . PHP_EOL;
} else {
  echo 'Error' . PHP_EOL;
};

switch($grade) {
  case 'A' :
    echo 'Sangat Baik' . PHP_EOL;
    break;
  case 'B' :
    echo 'Baik' . PHP_EOL;
    break;
  case 'C' :
    echo 'Cukup' . PHP_EOL;
    break;
  case 'D' :
    echo 'Kurang' . PHP_EOL;
    break;
  case 'E' :
    echo 'Gagal' . PHP_EOL;
    break;
  default :
    echo 'Error' . PHP_EOL;
    break;
};

switch($grade) :
  case 'A' :
    echo 'Sangat Baik' . PHP_EOL;
    break;
  case 'B' :
    echo 'Baik' . PHP_EOL;
    break;
  case 'C' :
    echo 'Cukup' . PHP_EOL;
    break;
  case 'D' :
    echo 'Kurang' . PHP_EOL;
    break;
  case 'E' :
    echo 'Gagal' . PHP_EOL;
    break;
  default :
    echo 'Error' . PHP_EOL;
    break;
endswitch;

?>