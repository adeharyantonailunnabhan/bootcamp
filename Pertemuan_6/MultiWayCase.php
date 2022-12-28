<?php 

$trafficLight = "green";
$waterTemperature = 10;

if ($trafficLight == "red"){
    echo "Stop<br>";
} elseif ($trafficLight == "yellow"){
    echo 'Ready<br>';
} else {
    echo 'Go<br>';
}

if ($waterTemperature > 0 && $waterTemperature < 30 && $waterTemperature != NULL){
    echo "Dingin<br>";
} elseif ($waterTemperature > 30 && $waterTemperature < 50 && $waterTemperature != NULL){
    echo "Hangat<br>";
} elseif ($waterTemperature > 50 && $waterTemperature < 100 && $waterTemperature != NULL){
    echo "Panas<br>";
} else {
    echo "Tidak Diketahui<br>";
}

//OR
$trafficLight = "green";
if ($trafficLight == "red" || $trafficLight == "yellow" || $trafficLight == "green"){
    echo "Berhenti<br>";
} elseif ($trafficLight == "yellow" || $trafficLight == "green" || $trafficLight == "red"){
    echo "Hati-Hati<br>";
} elseif ($trafficLight == "green" || $trafficLight == "red" || $trafficLight == "yellow"){
    echo "Maju<br>";
}else{
    echo "Tidak Diketahui";
}