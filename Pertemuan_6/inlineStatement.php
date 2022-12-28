<?php 

echo "<b>Expresion Statement/Inline Statement</b>";
echo "<pre>";
$a = 1 + 1 * 10 - 2 / 1;
var_dump($a);

//addition
$b = $a + 1;
var_dump($b);

//subtraction
$c = $a - $b;
var_dump($c);

//multication & division
$d = $a / $b * $c;
var_dump($d);

//comparison
$e = $b > $c;
var_dump($e);
echo "</pre>";