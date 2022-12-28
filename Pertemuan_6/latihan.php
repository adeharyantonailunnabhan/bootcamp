<?php
$nilai = 80;
$kehadiran = 90;

if ($nilai >= 75)
    if($kehadiran == 100){
        
        echo "Status = Lulus";
    }else {
        echo "Indeks = A<br>";
        echo "Status = Lulus Bersyarat";
}else {
    echo "Indeks = C <br>";
    echo "Status = Gagal";
}
