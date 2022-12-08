<?php 

$students = [
    'Arya',
    'Bayu',
    'Chandra',
    'Deni'
];

array_unshift($students, 'Ade', 'Aji', 'Budi');
echo    "<pre>";
print_r ($students);
echo    "</pre>";
?>