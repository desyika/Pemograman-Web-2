<?php

class orang{
    //property
    public $nama;
    public $tglLahir;
    public $alamat;

    //method
    public function ucapSalam(){
        echo "<h2> haloo, perkenalkan nama saya" . $this->nama ."<h2>";
    }
}