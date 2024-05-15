<?php
function update(int &$n) {
  $n = 2;
}

$number = 1;
update($number);
echo "$number\n";
