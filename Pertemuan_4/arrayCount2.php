<?php 

$students = [
    'Agus'  =>[
        'nilai' => 80,
        'absen' => 98,
        'tugas' => 100
    ],
    'Budi'  =>[
        'nilai' => 70,
        'absen' => 80,
        'tugas' => 90
    ],
    'Caca'  =>[
        'nilai' => 60,
        'absen' => 78,
        'tugas' => 80
    ],
    'Dedi'  =>[
        'nilai' => 58,
        'absen' => 60,
        'tugas' => 70
    ],
];

$studentCount = count($students);
echo    "Jumlah Mahasiswa : {$studentCount}. <br>";

?>