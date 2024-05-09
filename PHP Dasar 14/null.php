<?php

$name = 'Andi';
if(isset($name))
  echo $name . PHP_EOL;
else
  echo 'Belum ada variable name' . PHP_EOL;

echo $name ?? 'Belum ada variable name';
echo PHP_EOL;
?>