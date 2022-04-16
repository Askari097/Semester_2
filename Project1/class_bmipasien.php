<?php
require_once 'class_pasien.php';
require_once 'class_BMI.php';

class bmipasien{
    public $bmi;
    public $pasien;
    public $tanggal;

    function __construct($bmi,$pasien){
        $this -> bmi = $bmi;
        $this -> pasien = $pasien;
        
    }
}
?>