<?php 

$fruits = [
    'name'     => 'apple',
];

$types = [
    'color'     => 'red',
];

$fruitAndvegetables = array_merge($fruits, $types);

echo    "<per>";
print_r($fruitAndvegetables);
echo    "</per>";

?>