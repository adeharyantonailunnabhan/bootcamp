<?php

$x = 1;
echo "While Loop<br>";
while ($x <= 5){
    echo "Belajar Back-End PHP <br>";
    $x++;
}

echo "Do While Loop<br>";
do { 
    echo "$x <br>";
    $x++;
} while ($x <= 5);

echo "For Loop";
for ($x = 0; $x <= 10; $x++){
    echo "$x <br>";
}

$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $value){
    echo "$value<br>";
}

$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

foreach ($age as $s => $val){
    echo "$x = $val<br>";
}