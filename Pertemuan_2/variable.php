<?php

//penulisan variable dinamis
$name       = 'Ade Haryanto';
$nim        = 19110229;
$email      = 'adeharyanto@gmail.com';
$address    = 'Ibun';
$bootcampClass = 'Back-End';

//pemanggilan variable
echo    "Halo nama saya <b>{$name}</b> dengan nim {$nim} <br>
        alamat saya di {$address} <br>
        email saya {$email} <br>
        saya sedang mengikuti bootcamp kelas <b>{$bootcampClass}</b>";