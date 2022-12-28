<?php 

echo "<b>Contoh</b><br>";
$trafficLight = "red";

if ($trafficLight){
    echo "Stop<br>";
}else{
    echo "Ready<br>";
}

echo "<br><b>Implementasi</b><br>";
$waterTemperature = 10;

if($waterTemperature > 0 && $waterTemperature < 30){
    echo "Dingin<br>";
} else{
    echo "Panas<br>";
}
if ($waterTemperature > 0 && $waterTemperature > 30){
    echo "Panas<br>";
} else{
    echo "Dingin<br>";
}

echo "<br><b>Alternatif</b><br>";
if ($waterTemperature > 0 && $waterTemperature < 30 && $waterTemperature != NULL){
    echo "Dingin<br>";
}

//OR
if ($trafficLight || $trafficLight == "yellow" || $trafficLight == "green"){
    echo "Berhenti<br>";
}
