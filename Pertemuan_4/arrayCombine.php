<?php 

//array pertama menjadi key
$keys = ['name', 'color'];
//array kedua menjadi value
$values = ['apple', 'red'];

$fruit = array_combine($keys, $values);

echo    "<pre>";
print_r($fruit);
echo    "</pre>";

?>