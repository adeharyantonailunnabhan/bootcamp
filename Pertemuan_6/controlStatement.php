<?php

echo "<b>Control Statement</b>";
echo "<pre>";
$a = 15;
if ($a > 10){
    for ( $i = 0; $i < $a; $i++){
        echo $i++;
    }
}else{
    echo $a = 20;
}
echo "</pre>";