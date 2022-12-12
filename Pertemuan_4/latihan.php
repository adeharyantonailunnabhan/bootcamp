<?php

$penumpang = [
    'Jhon',
    'Jennie'
];

$halteA = [
    'Ahmad',
    'Budi',
    'Caca'
];
$halteC = [
    'Felicia',
    'Gina'
];

echo "Jumlah penumpang bus : ";
echo count($penumpang);
echo "<br>Penumpang bus : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

echo "Halte A : <br>";
echo "Jumlah penumpang bus yang turun  : ";
echo count($penumpang);
echo "<br>Penumpang bus yang turun : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

echo "Jumlah penumpang bus yang naik : ";
echo count($halteA);
echo "<br>Penumpang Halte A yang naik : ";
echo "<pre>";
print_r($halteA);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : ";
echo count($halteA);
echo "<br>Penumpang bus sekarang : ";
echo "<pre>";
print_r($halteA);
echo "</pre>";

$penumpang_splice = array_splice($halteA,  0, 2);
echo "Halte B : <br>";
echo "Jumlah penumpang bus yang turun  : ";
echo count($penumpang_splice);
echo "<br>Penumpang bus yang turun : ";
echo "<pre>";
print_r($penumpang_splice);
echo "</pre>";

echo "Jumlah penumpang bus yang naik : ";
echo count($halteA);
array_push($halteA, 'Dedi');
$penumpang_slice = array_slice($halteA, 1);
echo "<br>Penumpang Halte B yang naik : ";
echo "<pre>";
print_r($penumpang_slice);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : ";
echo count($halteA);
echo "<br>Penumpang bus sekarang : ";
echo "<pre>";
print_r($halteA);
echo "</pre>";

echo "Halte C : <br>";
echo "Jumlah penumpang bus yang turun : ";
echo count($halteA);
echo "<br>Penumpang bus yang turun : ";
echo "<pre>";
print_r($halteA);
echo "</pre>";

echo "Jumlah penumpang bus yang naik : ";
echo count($halteC);
echo "<br>Penumpang Halte C yang naik : ";
echo "<pre>";
print_r($halteC);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : ";
echo count($halteC);
echo "<br>Penumpang bus sekarang : ";
echo "<pre>";
print_r($halteC);
echo "</pre>";