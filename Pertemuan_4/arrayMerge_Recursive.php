<?php 
$students = [
    'name'      => 'Jhon',
    'subject'   => [
        'maths'     => 80,
        'science'   => 90,
    ],
];

$mark = [
    'subject'   => [
        'maths'     => 85,
        'english'   => 95,
    ],
];

$merged = array_merge_recursive($students, $mark);
echo    "<pre>";
print_r($merged);
echo    "</pre>";

?>