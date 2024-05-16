<?php

// $name = 'Budi';
// function hello(): string{
//   global $name;
//   return "Hello $name\n";
// }
// echo hello('Budi');

// $name = 'Budi';
// $myFunction = function () use(&$name): string{
//   $name = 'Skysen';
//   return "Hello $name\n";
// };
// echo $myFunction('Budi');
// echo "$name\n";
// var_dump($myFunction);

// $name = 'Budi';
// $myFunction = fn() => "Hello $name\n";
// $name = 'Skysen';
// echo $myFunction('Budi');
// echo "$name\n";
// var_dump($myFunction);

function hello(string $name, callable $case){
  $result = "hello $name\n";
  echo $case($result);
//  echo call_user_func($case, $result);
}
hello('Budi', 'strtoupper');
hello('Budi', function($name){
  return ucwords(strtolower($name));
});
hello('Budi', fn($name) => ucwords(strtolower($name)));