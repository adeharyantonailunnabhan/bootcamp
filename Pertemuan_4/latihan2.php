<?php 

$penumpang = [
    'Jhon',
    'Jennie'
];

$penumpangCount = count($penumpang);
echo "Jumlah penumpang bus : {$penumpangCount} <br>";
echo "Penumpang bus : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

echo "Halte A : <br>";
echo "Jumlah penumpang bus yang turun  : {$penumpangCount}<br>";
echo "Penumpang bus yang turun : ";
$penumpang_slice = array_slice($penumpang,0);
echo "<pre>";
print_r($penumpang_slice);
echo "</pre>";

array_push($penumpang, 'Ahmad', 'Budi', 'Caca');
array_shift($penumpang);
array_shift($penumpang);
$halteA = count($penumpang);
echo "Jumlah penumpang bus yang naik : {$halteA}<br>";
echo "Penumpang Halte A yang naik : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : {$halteA}<br>";
echo "Penumpang bus sekarang : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

echo "Halte B : <br>";
array_pop($penumpang);
$halteB = count($penumpang);
echo "Jumlah penumpang bus yang turun  : {$halteB}<br>";
echo "Penumpang bus yang turun : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

array_push($penumpang, 'Dedi');
array_shift($penumpang);
array_shift($penumpang);
$halte = count($penumpang);
echo "Jumlah penumpang bus yang naik : {$halte}<br>";
echo "Penumpang Halte B yang naik : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

array_push($penumpang,'Caca');
echo "Jumlah penumpang bus sekarang : {$penumpangCount}<br>";
echo "Penumpang bus sekarang : ";
$merge = array_merge($penumpang,);
echo "<pre>";
print_r($merge);
echo "</pre>";

echo "Halte C : <br>";
$halteC = count($penumpang);
echo "Jumlah penumpang bus yang turun  : {$halteC}<br>";
echo "Penumpang bus yang turun : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

array_pop($penumpang);
array_pop($penumpang);
array_push($penumpang, 'Felicia', 'Gina');
$halteC = count($penumpang);
echo "Jumlah penumpang bus yang naik : {$halteC}<br>";
echo "Penumpang Halte C yang naik : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";

echo "Jumlah penumpang bus sekarang : {$halteC}<br>";
echo "Penumpang bus sekarang : ";
echo "<pre>";
print_r($penumpang);
echo "</pre>";