<?php

$string = null;
//cara biasa mengecek nilai null dengan statement
if (isset($string)){
    $string = 'hi';
} else {
    $string = 'Hello World';
}

//null coalescing standar
$string = $string ?? 'Hello World';

//null coalescing dengan operator penugasan
$string ??= 'Hello World';

echo "Hasil : {$string}";