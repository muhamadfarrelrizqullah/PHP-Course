<?php


function hello(){
  $name = 'Budi';
}

function test(){
  echo $name . PHP_EOL;
}

function counter(){
  static $count = 0;
  $count++;
  echo $count . PHP_EOL;
}

counter();
counter();
counter();