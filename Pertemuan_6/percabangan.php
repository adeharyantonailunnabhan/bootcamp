<?php

echo "<b>Percabangan / Selection Statement <br></b>";
//control statement if
$b = 3;
if ($b == 3){
echo "b sama dengan 3";
}else{
echo "b tidak sama dengan 3";
}

echo "<br><br>1. Percabangan Sederhana (Simple Way Case)";
echo "<br>a. Percabangan Tunggal (One Way Case)<br>";
echo "Contoh 1:";
$number = 10;
if ($number > 9){
    echo "<br>Nilai lebih dari 9";
}
echo "<br>Contoh 2 :";
//Alt Percabangan Tunggal
$isBoolean = true;
if ($isBoolean == true){
    echo "<br>Benar";
}
if ($isBoolean == false){
    echo "<br>Salah"; #output kosong
}
if ($isBoolean){
    echo "<br>Benar";
}
if(!$isBoolean){
    echo "<br>Salah"; #output kosong
}
echo "<br>Contoh 3 :";
//AND
$waterTemperature = 10;
if ($waterTemperature > 0 && $waterTemperature < 30){
    echo "<br>Hasil Suhu Air : Dingin";
}

//OR
$trafikLight = "red";

if ($trafikLight == "red" || $trafikLight == "yellow") {
    echo "<br>Lampu Lalu Lintas : Berhenti";
}

//NOT
$number = 10;
if (!($number > 0 && $number < 30)){
    echo "<br>Hasil Number : Kurang";
}

//XOR
if ($trafikLight == "red" xor $trafikLight == "red"){
    echo "<br>Rambu Lalu Lintas : Berhenti";
}