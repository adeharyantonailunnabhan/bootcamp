<?php 

$fruits = [
    'name'     => 'apple',
];

$vegetables = [
    'name'     => 'carrot',
];

$fruitAndvegetables = array_merge($fruits, $vegetables);

echo    "<per>";
print_r($fruitAndvegetables);
echo    "</per>";

?>