<?php

$student = [
    'nim' => 19110229,
    'name'=> 'Ade haryanto',
    'class'=> 'Back-End',
];

echo "NIM : {$student['nim']} <br>";
echo "Nama : {$student['name']} <br>";
echo "Kelas : {$student['class']} <br>";


//array indexed
$total = count($student);
echo "Total Nama : {$total} <br>";

print_r($student);


//dengan looping
foreach($student as $name){
    echo "{$name} <br>";
}

//array asosiatif
echo "NIM : {$student['nim']} <br>";
echo "Nama : {$student['name']} <br>";
echo "Kelas : {$student['class']} <br>";