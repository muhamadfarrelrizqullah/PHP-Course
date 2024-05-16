<?php

/* LENGTH / COUNT */
//$string = 'Hello World, Skysen';
//echo strlen($string) . PHP_EOL; #19
//echo $string[0] . PHP_EOL; #H
//echo $string[strlen($string)] . PHP_EOL; #error
//echo $string[strlen($string) - 1] . PHP_EOL; #n
//echo str_word_count($string) . PHP_EOL; #3
//print_r(str_word_count($string, 1)); #['Hello', 'World', 'Skysen']
//var_dump(str_word_count($string, 1)); #['Hello', 'World', 'Skysen']
//echo substr_count($string, 'o') . PHP_EOL; #2
//echo substr_count($string, 'Hello') . PHP_EOL; #1
//echo substr_count($string, 'Hellow') . PHP_EOL; #0

/* MENGHILANGKAN WHITE SPACE */
// $string = '   Hello World   ';
// var_dump(trim($string)); #'Hello World'
// var_dump(ltrim($string)); #'Hello World   '
// var_dump(rtrim($string)); #'   Hello World'

/* HURUF BESAR ATAU KECIL */
//echo strtolower('HELLO WORLD') . PHP_EOL; #'hello world'
//echo strtoupper('hello world') . PHP_EOL; #'HELLO WORLD'
//echo lcfirst('HELLO WORLD') . PHP_EOL; #'hELLO WORLD'
//echo ucfirst('hello world') . PHP_EOL; #'Hello world'
//echo ucwords('hello world') . PHP_EOL; #'Hello World'
//echo ucwords(strtolower('HELLO world')) . PHP_EOL; #'Hello World'

/* FUNGSI BARU PHP 8 */
//var_dump(str_contains('Hello World', 'Hello')); #true
//var_dump(str_contains('Hello World', 'World')); #true
//var_dump(str_contains('Hello World', 'hello')); #false
//var_dump(str_starts_with('Hello World', 'Hello')); #true
//var_dump(str_starts_with('Hello World', 'World')); #false
//var_dump(str_ends_with('Hello World', 'Hello')); #false
//var_dump(str_ends_with('Hello World', 'World')); #true

/* SUBSTR */
// $string = 'abcdefgihj';
// echo substr($string, 0) . PHP_EOL; #abcdefgihj
// echo substr($string, 0, 4) . PHP_EOL; #abcd
// echo substr($string, 2, 4) . PHP_EOL; #cdef
// echo substr($string, 2) . PHP_EOL; #cdefgihj
// echo substr($string, -4) . PHP_EOL; #gihj
// echo substr($string, -4, 2) . PHP_EOL; #gi
// echo substr($string, -4, -1) . PHP_EOL; #gih

/* MENCARI POSISI */
// $string = 'Hello World';
// var_dump(strpos($string, 'World')); #6
// var_dump(strpos($string, 'world')); #false
// var_dump(stripos($string, 'World')); #6
// var_dump(stripos($string, 'world')); #6
// var_dump(strpos($string, 'o')); #4
// var_dump(strrpos($string, 'World')); #6
// var_dump(strrpos($string, 'world')); #false
// var_dump(strripos($string, 'World')); #6
// var_dump(strripos($string, 'world')); #6
// var_dump(strrpos($string, 'o')); #7

/* MANIPULASI STRING */
//echo strrev('Hello') . PHP_EOL; #'olleH'
//echo str_repeat('Hello', 3) . PHP_EOL; #'HelloHelloHello'
// $string = 'Hello Hello World';
// $count = 0;
// echo str_replace('hello', 'Welcome', $string, $count) . PHP_EOL; #'Hello Hello World'
// echo "Count=$count\n"; #0
// echo "String=$string\n"; #'Hello Hello World'
// $string = 'Hello hello World';
// $count = 0;
// echo str_ireplace('hello', 'Welcome', $string, $count) . PHP_EOL; #'Welcome Welcome World'
// echo "Count=$count\n"; #2
// echo "String=$string\n"; #'Hello hello World'

/* ANGKA */
// echo number_format(1000000, 2, ',', '.') . PHP_EOL; #'1.000.000,00'
// echo str_pad('Budi', 10) . str_pad(100000, 8, '0', STR_PAD_LEFT) . PHP_EOL;  #'Budi      00100000'
// echo str_pad('Charles', 10) . str_pad(50000, 8, '0', STR_PAD_LEFT) . PHP_EOL;#'Charles   00050000'

/* STRING DAN ARRAY */
// $string = 'Selamat, Skysen! Anda mendapatkan hadiah.';
// var_dump(explode(' ', $string)); # ['Selamat,', 'Skysen!', 'Anda', 'mendapatkan', 'hadiah.']
// var_dump(str_word_count($string, 1)); # ['Selamat', 'Skysen', 'Anda', 'mendapatkan', 'hadiah']
// $array = explode(' ', $string);
// echo implode(' ', $array) . PHP_EOL; #'Selamat, Skysen! Anda mendapatkan hadiah.'
// echo join(' ', $array) . PHP_EOL; #'Selamat, Skysen! Anda mendapatkan hadiah.'

/* SLASHES */
// $string = "Adam's Apple";
// $string2 = '"Hello"';
// echo addslashes($string) . PHP_EOL; #"Adam\'s Apple"
// echo addslashes($string2) . PHP_EOL; #'\"Hello\"'
// $string3 = addslashes($string);
// echo stripslashes($string3) . PHP_EOL; #"Adam's Apple"

/* PHP Web */
// $string = <<< END_OF_STRING
// Apel
// Jeruk
// Pisang
// END_OF_STRING;
// echo nl2br($string, false) . PHP_EOL; #'Apel<br> Jeruk<br> Pisang'
// echo htmlspecialchars('<script></script>') . PHP_EOL; #'&lt;script&gt;&lt;/script&gt;'
// $string = htmlspecialchars('<script></script>');
// echo htmlspecialchars_decode($string) . PHP_EOL; #'<script></script>'
// $string = <<< END_OF_STRING
//   <ol>
//     <li>Apel</li>
//     <li>Jeruk</li>
//     <li>Pisang</li>
//   </ol>
// END_OF_STRING;
// echo strip_tags($string) . PHP_EOL; #'Apel Jeruk Pisang'
