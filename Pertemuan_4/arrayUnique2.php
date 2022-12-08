<?php 

$students = [
    'name'      => 'Agus',
    'class'     => 'Back-end',
    'name'      => 'Agus',
    'class'     => 'Back-end',
    'name'      => 'Agus'
];

$uniqueStudents = array_unique($students);

echo    '<pre>';
print_r($uniqueStudents);
echo    '</pre>';