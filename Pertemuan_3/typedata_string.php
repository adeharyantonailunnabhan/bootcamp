<?php

$firstName  = 'Ade';
$lastName   = 'Haryanto';
$street     = 'Jl. Ibun';
$city       = 'Bandung';
$fullname   = $firstName . ' ' . $lastName . '<br>';
$address    = "{$street}, {$city}" . '<br>';

echo $fullname . '<br>';
echo $address . '<br>';

var_dump($fullname );