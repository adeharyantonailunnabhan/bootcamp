<?php 

$colors = [
    'red',
    'blue',
    'green',
    'red',
    'blue',
    'green',
    'red'
];

$uniqueColor = array_unique($colors);

echo    '<pre>';
print_r($uniqueColor);
echo    '</pre>';