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

$halteB = ['Dedi'];

$halteC = ['Felicia', 'Gina'];

$penumpangCount = count($penumpang);
echo "Jumlah penumpang bus : {$penumpangCount} <br>";
echo "Penumpang bus : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

echo "Halte A : <br>";
echo "Jumlah penumpang bus yang turun  : {$penumpangCount}<br>";
echo "Penumpang bus yang turun : ";
$penumpang_slice = array_slice($penumpang, 0);
echo "<pre>";
print_r($penumpang_slice);
echo "</pre>";

$halteACount = count ($halteA);
echo "Jumlah penumpang bus yang naik : {$halteACount}<br>";
echo "Penumpang Halte A yang naik : ";
echo "<pre>";
print_r($halteA);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : {$halteACount}<br>";
echo "Penumpang bus sekarang : ";
echo "<pre>";
print_r($halteA);
echo "</pre>";

echo "Halte B : <br>";
echo "Jumlah penumpang bus yang turun  : {$penumpangCount}<br>";
echo "Penumpang bus yang turun : ";
$penumpang_slice = array_slice($halteA, 0, 2);
echo "<pre>";
print_r($penumpang_slice);
echo "</pre>";

$halteBCount = count($halteB);
echo "Jumlah penumpang bus yang naik : {$halteBCount}<br>";
echo "Penumpang Halte B yang naik : ";
echo "<pre>";
print_r($halteB);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : {$penumpangCount}<br>";
echo "Penumpang bus sekarang : ";
$merge = array_merge($halteA, $halteB);
$penumpang_slice = array_slice($merge, 2, 3);
echo "<pre>";
print_r($penumpang_slice);
echo "</pre>";

echo "Halte C : <br>";
echo "Jumlah penumpang bus yang turun  : {$penumpangCount}<br>";
echo "Penumpang bus yang turun : ";
$penumpang_slice = array_slice($merge, 2, 3);
echo "<pre>";
print_r($penumpang_slice);
echo "</pre>";

$halteCCount = count($halteC);
echo "Jumlah penumpang bus yang naik : {$halteCCount}<br>";
echo "Penumpang Halte C yang naik : ";
echo "<pre>";
print_r($halteC);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : {$halteCCount}<br>";
echo "Penumpang bus sekarang : ";
echo "<pre>";
print_r($halteC);
echo "</pre>";