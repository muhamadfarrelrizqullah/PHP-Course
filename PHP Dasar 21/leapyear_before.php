<?php
function leapYear(int $year): bool{
  //write your code here
  return true;
}

function testLeapYear(int $year)
{
  $result = leapYear($year);
  if($result)
    echo "Tahun $year adalah Tahun Kabisat\n";
  else
    echo "Tahun $year bukan Tahun Kabisat\n";
}

testLeapYear(1);
testLeapYear(4);
testLeapYear(1900);
testLeapYear(2000);
testLeapYear(2023);

?>