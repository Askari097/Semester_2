<?php
class BMI{
    public $berat;
    public $tinggi;

    function __construct($berat,$tinggi){
        $this -> berat = $berat;
        $this -> tinggi = $tinggi;
    }

    public function nilaibmi(){
        $tinggi_meter = $this->tinggi/100;
        $this->bmi = ($this->berat / ($tinggi_meter * $tinggi_meter));
        return $this->bmi;
    }

    public function statusbmi(){
        if ($this->bmi < 18.5){
            return 'Kekurangan Berat Badan';
        }elseif ($this->bmi < 24.9){
            return "Normal(Ideal)";
        }elseif ($this->bmi < 29.9){
            return "Kelebihan Berat Badan";
        }else{
            return "Kegemukan(Obesitas)";
        }
    }
}
?>