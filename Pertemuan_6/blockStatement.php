<?php 

echo "<b>Compound Statement/Block Statement</b>";
echo "<pre>";
$a = 3;
if ($a > 2) {
    $b = 2;
    $c = 3;
    $d = $a + $b;
}else{
    $b = 5;
    $c = 2;
    $d = $b - $c;
}

echo "Hasil dari {$b} dan {$c} adalah {$d}";
echo "</pre";