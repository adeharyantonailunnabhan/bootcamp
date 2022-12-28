<?php 

$marks = 40;
$x = 5;

switch ($marks){
    case ($marks >= 85):
        echo "Indeks = A<br>";
        break;
    case ($marks >= 75):
        echo "Indeks = B<br>";
        break;
    case ($marks >= 65):
        echo "Indeks = C<br>";
        break;
    case ($marks >= 55):
        echo "Indeks = D<br>";
        break;
    case ($marks >= 45):
        echo "Indeks = E<br>";
        break;
    default:
        echo "Indeks = F<br>";
        break;
}

switch ($x){
    case 1:
        echo "x bernilai 1<br>";
        break;
    case 2:
        echo "x bernilai 2<br>";
        break;
    case 3:
        switch ($x){
            case 3:
                echo "x bernilai 3<br>";
                break;
            case 4:
                echo "x bernilai 4<br>";
                break;
            default:
                echo "x tidak bernilai 3 atau 4<br>";
                break;
        }
    break;
default:
    echo "x tidak bernilai 1";
    break;
}