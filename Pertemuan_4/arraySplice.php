<?php 

//array splice
$colors = [
    'red',
    'green',
    'blue',
    'yellow',
    'purple',
    'orange'
];

$other_colors = [
    'black',
    'white',
    'brown'
];

$colorSplice = array_splice($colors, 2, 3, $other_colors);

echo    "<pre>";
print_r($colors);
echo    "</pre>";
?>