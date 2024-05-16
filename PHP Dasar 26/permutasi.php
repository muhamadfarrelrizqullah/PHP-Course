<?php

function permutation(string $elements, string $position = '', string $newElement = ''){
  $position .= $newElement;
  if(strlen($position) === strlen($elements)){
    echo $position . PHP_EOL;
    return;
  }
  for($i = 0; $i < strlen($elements); $i++){
    $newElement = $elements[$i];
    if(!str_contains($position, $newElement))
      permutation($elements, $position, $newElement);
  }
}
permutation('abc');