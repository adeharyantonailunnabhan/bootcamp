<?php 

$students = [
    'Arya',
    'Bayu',
    'Ade'
];

$student = [
    'name   '   => 'Deni',
    'age    '   => 25,
    'address'   =>'Jl.Kawung No.2',
    'hobbies'   => ['Reading', 'Travelling', 'Gamming']
];

array_push($students, $student);

echo    "<pre>";
print_r ($students);
echo    "</pre>";
?>