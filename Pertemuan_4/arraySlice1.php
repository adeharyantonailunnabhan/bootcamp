<?php 

//scile dari index 1 sampai 2
$fruits = ['apple', 'banana', 'orange', 'watermelon'];
$fruits_slice = array_slice($fruits, 0, 2);
echo    "<pre>";
print_r($fruits_slice);
echo    "</pre>";
?>