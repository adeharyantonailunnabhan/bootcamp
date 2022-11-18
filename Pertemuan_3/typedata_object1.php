<?php

class Mahasiswa
{
    var $name;

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function getName()
    {
        echo $this->name;
    }
}

$mahasiswa = new Mahasiswa();
$mahasiswa ->name = 'Ade Haryanto';
$mahasiswa->getName();