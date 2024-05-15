<?php

$a = 1;
$b = &$a;
echo "Sebelum Ubah Nilai\n";
echo "a = $a\n";
echo "b = $b\n";

unset($a);
unset($b);
echo "Sesudah Ubah Nilai\n";
echo "a = $a\n";
echo "b = $b\n";
