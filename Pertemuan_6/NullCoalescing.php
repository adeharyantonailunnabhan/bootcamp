<?php 

$string = null;

if (isset($string)){
    $string = 'hi';
}else{
    $string = 'Hello World';
}

//null coalescing standard
$string = $string ?? 'Hello World';

//dengan operator penugasan
$string ??= 'Hello World';

echo "Hasil : {$string}";