<?php
function isLeapYear(int $year): bool{
  //write your code here
  if($year % 4 == 0)
    if($year % 100 == 0)
      if($year % 400 == 0)
        return true;
      else  
        return false;
    else 
      return true;
  else
    return false;
}

function isLeapYear2(int $year): bool{
  if($year % 400 == 0)
    return true;
  else if($year % 100 == 0)
    return false;
  else if($year % 4 == 0)
    return true;
  else  
    return false;
}

function isLeapYear3(int $year): bool{
  return match(true){
    $year % 400 == 0 => true,
    $year % 100 == 0 => false,
    $year % 4 == 0 => true,
    default => false,
  };
}

function executeLeapYear(int $year, string $functionName){
  $result = $functionName($year);
  if($result)
    echo "$functionName(): Tahun $year adalah Tahun Kabisat\n";
  else
    echo "$functionName(): Tahun $year bukan Tahun Kabisat\n";  
}

function testLeapYear(int $year)
{
  executeLeapYear($year, 'isLeapYear');
  executeLeapYear($year, 'isLeapYear2');
  executeLeapYear($year, 'isLeapYear3');
}

testLeapYear(1);
testLeapYear(4);
testLeapYear(1900);
testLeapYear(2000);
testLeapYear(2023);

?>